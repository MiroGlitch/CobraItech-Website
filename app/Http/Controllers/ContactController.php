<?php

namespace App\Http\Controllers;

use File;
use App\Mail\ContactMail;
use App\Mail\SupportMail;
use App\Mail\CareerMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContact(Request $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message
        ];
        //dd($data);
        Mail::to('emailtestercorp@gmail.com')->send(new ContactMail($data));
        return back();
    }

    public function sendSupport(Request $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'number' => $req->number,
            'category' => $req->category,
            'issue' => $req->issue
        ];
        //dd($data);
        Mail::to('emailtestercorp@gmail.com')->send(new SupportMail($data));
        return back();
    }

    public function sendCareer(Request $req)
    {
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'job' => $req->job,
            'cover' => $req->cover,
            'cv' => $req->cv
        ];

        $path = public_path('uploads');
        $attachment = $req->file('cv');

        $name = $data['name'] . '-Resume-' . time() . '.' . $attachment->getClientOriginalExtension();

        // create folder
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $name);

        $data['cv'] = $path . '\\' . $name;
        //dd($data);
        Mail::to('emailtestercorp@gmail.com')->send(new CareerMail($data));
        return back();
    }
}

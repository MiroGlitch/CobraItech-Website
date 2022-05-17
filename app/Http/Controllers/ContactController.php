<?php

namespace App\Http\Controllers;

use File;
use App\Mail\ContactMail;
use App\Mail\AdminContactMail;
use App\Mail\SupportMail;
use App\Mail\AdminSupportMail;
use App\Mail\CareerMail;
use App\Mail\AdminCareerMail;

use App\Models\Contact;
use App\Models\Support;
use App\Models\Career;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

        $contacts = new Contact();
        $contacts->name = $req->name;
        $contacts->email = $req->email;
        $contacts->subject = $req->subject;
        $contacts->message = $req->message;

        Mail::to($data['email'])->send(new ContactMail($data));
        Mail::to('emailtestercorp@gmail.com')->send(new AdminContactMail($data));

        $contacts->save();
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

        $supports = new Support();
        $supports->name = $req->name;
        $supports->email = $req->email;
        $supports->number = $req->number;
        $supports->category = $req->category;
        $supports->issue = $req->issue;
        $supports->status = 0;

        Mail::to($data['email'])->send(new SupportMail($data));
        Mail::to('emailtestercorp@gmail.com')->send(new AdminSupportMail($data));

        $supports->save();
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

        $name = Str::slug($data['name']) . '-resume-' . time() . '.' . $attachment->getClientOriginalExtension();

        // create folder
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $attachment->move($path, $name);

        $data['cv'] = $path . '\\' . $name;
        //dd($data);

        $careers = new Career();
        $careers->name = $req->name;
        $careers->email = $req->email;
        $careers->job = $req->job;
        $careers->cover = $req->cover;
        $careers->cv = $name;

        Mail::to($data['email'])->send(new CareerMail($data));
        Mail::to('emailtestercorp@gmail.com')->send(new AdminCareerMail($data));

        $careers->save();
        return back();
    }
}

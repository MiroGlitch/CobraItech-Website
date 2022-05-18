<?php

namespace App\Http\Controllers;

use File;

use App\Models\Support;
use App\Models\Contact;
use App\Models\Career;


use App\Mail\AcceptMail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function careerSummaryPage()
    {
        $careers = DB::table('careers')
            ->latest()
            ->get();

        $notAssistedContacts = DB::table('contacts')->where('status', 0)->count();
        $notAssistedCareers = DB::table('careers')->where('status', 0)->count();
        $notAssistedSupports = DB::table('supports')->where('status', 0)->count();

        return view('modules.careersummary', [
            'careers' => $careers,
            'notAssistedContacts' => $notAssistedContacts,
            'notAssistedCareers' => $notAssistedCareers,
            'notAssistedSupports' => $notAssistedSupports
        ]);
    }

    public function supportSummaryPage()
    {
        $supports = DB::table('supports')
            ->latest()
            ->get();

        $notAssistedContacts = DB::table('contacts')->where('status', 0)->count();
        $notAssistedCareers = DB::table('careers')->where('status', 0)->count();
        $notAssistedSupports = DB::table('supports')->where('status', 0)->count();
            
        return view('modules.supportsummary', [
            'supports' => $supports,
            'notAssistedContacts' => $notAssistedContacts,
            'notAssistedCareers' => $notAssistedCareers,
            'notAssistedSupports' => $notAssistedSupports
        ]);
    }

    public function contactSummaryPage()
    {
        $contacts = DB::table('contacts')
            ->latest()
            ->get();

        $notAssistedContacts = DB::table('contacts')->where('status', 0)->count();
        $notAssistedCareers = DB::table('careers')->where('status', 0)->count();
        $notAssistedSupports = DB::table('supports')->where('status', 0)->count();

        return view('modules.contactussummary', [
            'contacts' => $contacts,
            'notAssistedContacts' => $notAssistedContacts,
            'notAssistedCareers' => $notAssistedCareers,
            'notAssistedSupports' => $notAssistedSupports
        ]);
    }

    public function activateCareer($id)
    {
        $data = Career::find($id);
        $data->status = 1;
        $data->save();
        return redirect('career-summary');
    }

    public function deactivateCareer($id)
    {
        $data = Career::find($id);
        $data->status = 0;
        $data->save();
        return redirect('career-summary');
    }

    public function activateApplication($id)
    {
        $data = Career::find($id);
        $data->accept = 1;

        $data2 = [
            'name' => $data->name,
            'email' => $data->email
        ];

        Mail::to($data->email)->send(new AcceptMail($data2));

        $data->save();
        return redirect('career-summary');
    }

    public function activateContact($id)
    {
        $data = Contact::find($id);
        $data->status = 1;
        $data->save();
        return redirect('contact-summary');
    }

    public function deactivateContact($id)
    {
        $data = Contact::find($id);
        $data->status = 0;
        $data->save();
        return redirect('contact-summary');
    }

    public function activateSupport($id)
    {
        $data = Support::find($id);
        $data->status = 1;
        $data->save();
        return redirect('support-summary');
    }

    public function deactivateSupport($id)
    {
        $data = Support::find($id);
        $data->status = 0;
        $data->save();
        return redirect('support-summary');
    }
}

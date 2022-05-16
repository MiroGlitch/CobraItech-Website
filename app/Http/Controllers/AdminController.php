<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function careerSummaryPage()
    {
        return view('modules.careersummary');
    }

    public function supportSummaryPage()
    {
        return view('modules.supportsummary');
    }

    public function contactSummaryPage()
    {
        return view('modules.contactussummary');
    }
}

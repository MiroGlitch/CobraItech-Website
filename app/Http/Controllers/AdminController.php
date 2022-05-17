<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function careerSummaryPage()
    {
        return view('modules.careersummary');
    }

    public function supportSummaryPage()
    {
        $supports = DB::table('supports')
            ->latest()
            ->get();

        return view('modules.supportsummary', [
            'supports' => $supports
        ]);
    }

    public function contactSummaryPage()
    {
        return view('modules.contactussummary');
    }
}

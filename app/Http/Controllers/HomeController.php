<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countContacts = DB::table('contacts')->count();
        $countCareers = DB::table('careers')->count();
        $countSupports = DB::table('supports')->count();

        $notAssistedContacts = DB::table('contacts')->where('status', 0)->count();
        $notAssistedCareers = DB::table('careers')->where('status', 0)->count();
        $notAssistedSupports = DB::table('supports')->where('status', 0)->count();

        return view('home', [
            'countContacts' => $countContacts,
            'countCareers' => $countCareers,
            'countSupports' => $countSupports,
            'notAssistedContacts' => $notAssistedContacts,
            'notAssistedCareers' => $notAssistedCareers,
            'notAssistedSupports' => $notAssistedSupports
        ]);
    }
}

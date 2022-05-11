<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function companyPage()
    {
        return view('main.company');
    }

    public function foundersPage()
    {
        return view('main.founders');
    }

    public function servicesPage()
    {
        return view('main.services');
    }

    public function partnersPage()
    {
        return view('main.partners');
    }

    public function careersPage()
    {
        return view('main.careers');
    }

    public function supportPage()
    {
        return view('main.support');
    }

    public function contactusPage()
    {
        return view('main.contact');
    }
}

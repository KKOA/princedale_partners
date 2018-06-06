<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about-us');
    }

    public function team()
    {
        return view('meet-the-team');
    }
}

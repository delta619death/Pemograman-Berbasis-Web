<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function profile()
    {
        return view("profile");
    }
}

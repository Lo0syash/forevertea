<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('pages.loginPage');
    }

    public function registrationPage()
    {
        return view('pages.registrationPage');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
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

    public function registration(RegistrationRequest $registartionRequest)
    {
        $data = $registartionRequest->validated();
        $user = User::query()->create($data);
        auth()->login($user);
        return redirect()->route('index.index');
    }

    public function login(LoginRequest $loginRequest)
    {
        $data = $loginRequest->validated();
        if (auth()->attempt($data)) {
            return back()->withInput()->withErrors(['Invalid_credential'=>'Неправильный логин или пароль']);
        }
        return redirect()->route('index.index');
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('auth.loginPage');
    }
}

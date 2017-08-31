<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('users.create');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'first_name'   =>   'required|max:255|alpha',
            'last_name'    =>   'required|max:255|alpha',
            'email'        =>   'required|max:255|email|unique:users',
            'phone_number' =>   'required|numeric',
            'password'     =>   'required|max:255',
            'address'      =>   'required|max:255'
        ]);

        return redirect('/')->with('Status', 'Registered Successfully');
    }

    public function showLoginForm()
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        /*$this->validate($request, [
            'first_name'   =>   'required|max:255|alpha',
            'last_name'    =>   'required|max:255|alpha',
            'email'        =>   'required|max:255|email|unique:users',
            'phone_number' =>   'required|numeric',
            'password'     =>   'required|max:255',
            'address'      =>   'required|max:255'
        ]);

        return redirect('/')->with('Status', 'Registered Successfully');*/
    }
}

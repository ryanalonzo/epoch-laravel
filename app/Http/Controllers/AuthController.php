<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class AuthController extends Controller
{
    function showRegisterForm()
    {
        return view('users.create');
    }

    function register(Request $request)
    {
        $this->validate($request, [
            'first_name'   =>   'required|max:255|alpha',
            'last_name'    =>   'required|max:255|alpha',
            'email'        =>   'required|max:255|email|unique:users',
            'phone_number' =>   'required|numeric',
            'password'     =>   'required|max:255',
            'address'      =>   'required|max:255'
        ]);

        $request['password'] = password_hash($request->password, PASSWORD_DEFAULT);

        User::create($request->all());

        return redirect('/')->with('Status', 'Registered Successfully');
    }

    function showLoginForm()
    {
        return view('users.login');
    }

    function login(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email|max:255',
            'password' => 'required|max:255'
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->get();

        if(count($user)) {
            foreach($user as $u) {
                if(password_verify($password, $u->password) && $u->user_type == 'Customer') {
                    Session::put('customer_id', $u->id);
                    return redirect('/');
                } else {
                    return 'Incorrect password';
                }
            }
        } else {
            return 'User not found';
        }
    }

    function logout()
    {
        Session::flush();
        return redirect('/');
    }
}

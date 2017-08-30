<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('index');
    }

    function showLogin()
    {
        return view('loginSignup');
    }

    function showCart()
    {
        return view('cart');
    }

    function showProducts()
    {
        return view('products');
    }
}

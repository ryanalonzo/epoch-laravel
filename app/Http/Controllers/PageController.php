<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('users.index');
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

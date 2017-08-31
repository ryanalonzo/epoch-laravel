<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('users.index');
    }

    function showDashboard()
    {
        return view('admin.admin');
    }

    function showAdminProducts()
    {
        return view('admin.adminProducts');
    }

    function showUsers()
    {
        return view('admin.users');
    }

    function showOrders()
    {
        return view('admin.orders');
    }

    function showCart()
    {
        return view('cart');
    }

    function showProducts()
    {
        return view('products');
    }

    function showIcons()
    {
        return view('icons');
    }
}

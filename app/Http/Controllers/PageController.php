<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index()
    {
        return view('users.index');
    }

    function showAdminProducts()
    {
        return view('admin.adminProducts');
    }

    function showAddNewProduct()
    {
        return view('admin.addNewProduct');
    }

    function showUsers()
    {
        return view('admin.users');
    }

    function showDashboard()
    {
        return view('admin.orders');
    }

    function showCart()
    {
        return view('cart');
    }

    function showIcons()
    {
        return view('icons');
    }
}

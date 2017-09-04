<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PageController extends Controller
{
    function index()
    {
        if(Session::has('admin_id')) {
            return view('admin.orders');
        }
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
        if(Session::has('admin_id')) {
            return view('admin.orders');
        } else {
            return view('users.index');
        }
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

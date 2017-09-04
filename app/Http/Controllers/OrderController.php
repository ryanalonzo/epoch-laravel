<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Session;

class OrderController extends Controller
{
    function checkout()
    {
        $order = new Order;
        $date = date('Y-m-d');

        $order->customer_id = Session::get('customer_id');
        $order->save();

        return view('checkout');
    }
}

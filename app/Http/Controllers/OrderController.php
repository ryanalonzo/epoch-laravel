<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetails;
use App\Product;
use Session;
use DB;

class OrderController extends Controller
{
    function checkout()
    {
        $order = new Order;
        $date = date('Y-m-d');

        $order->customer_id = Session::get('customer_id');
        $order->save();

        $details = new OrderDetails;
        $orderDetails = Session::get('order_details');
        $orderID = DB::getPdo()->lastInsertId();

        foreach($orderDetails as $order) {
            $details->product_id = $order['prod_id'];
            $details->order_id = $orderID;
            $details->quantity = $order['quantity'];
            $details->price = $order['total'];

            $details->save();

            $p = new Product;

            $product = $p->where('id', $order['prod_id'])->get();

            foreach($product as $prod) {
                $prod->decrement('stocks', $order['quantity']);
            }
        }

        Session::forget('cart');

        return view('checkout');
    }
}

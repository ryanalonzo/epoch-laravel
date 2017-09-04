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
    function showOrders()
    {
        if(Session::has('admin_id')) {
            $orders = DB::table('users')
                        ->join('orders', 'users.id', '=', 'orders.customer_id')
                        ->join('order_details', 'orders.id', '=', 'order_details.order_id')
                        ->join('products', 'order_details.product_id', '=', 'products.id')
                        ->select('users.*', 'order_details.quantity', 'orders.id', 'order_details.price', 'products.prod_name', 'orders.created_at', 'orders.status')
                        ->get();

            return view('admin.orders', [
                'orders' => $orders
            ]);
        } else {
            return view('users.index');
        }
    }

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

    function ship($id)
    {
        $order = Order::find($id);

        $order->status = 'Shipped';

        $order->save();

        return redirect('admin');
    }

    function deliver($id)
    {
        $order = Order::find($id);

        $order->status = 'Delivered';

        $order->save();

        return redirect('admin');
    }
}

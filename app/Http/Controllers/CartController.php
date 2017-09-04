<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;

class CartController extends Controller
{
    /**
     * Display all items in cart
     * @return uri, array
     */
    function showCart()
    {
        if(count(Session::get('cart'))) {
            $items = array_count_values(Session::get('cart'));

            return view('cart', [
                'items' => $items
            ]);
        }

        return view('cart');
    }
    /**
     * Add items to cart
     */
    function add()
    {
        $product = new Product;

        $id = $_POST['prod_id'];

        Session::push('cart', $id);

        return redirect('products');
    }
    /**
     * Remove item/s from cart
     */
    function remove()
    {
        $cartID = $_POST['prod_id'];

        $values = array_values(array_diff(Session::get('cart'),array($cartID)));

        Session::put('cart', $values);

        return redirect('cart');
    }
}

<?php use App\Product; ?>
@extends('layouts.main')

@section('content')
    @if(count(Session::get('cart')))
        <section id="cart_items">
            <div class="container">
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description"></td>
                                <td class="price">Price</td>
                                <td class="quantity">Quantity</td>
                                <td class="total">Total</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $key => $item)
                            <?php
                                $match = Product::where('id', $key)->get();
                            ?>
                            @foreach($match as $m)
                            <?php
                                $total = $m->unit_price * $item;

                                if(!isset($totalPrice))
                                {
                                    $totalPrice = 0;
                                }

                                $totalPrice += $total;
                            ?>
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img src="{{ $m->image_src }}" alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4>{{ $m->prod_name }}</h4>
                                        <p>{{ $m->description }}</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>{{ $m->unit_price }}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <input class="cart_quantity_input" type="text" name="quantity" value="{{ $item }}" autocomplete="off" size="2">
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">{{ $total }}</p>
                                    </td>
                                    <td class="cart_delete">
                                        <form action="cart" method="POST">
                                            <input type="submit" name="remove" value="Remove" class="cart_quantity_delete">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="prod_id" value="<?php echo $m->id; ?>">
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <section id="do_action">
            <div class="col-sm-6">
                <div class="total_area">
                    <h3>TOTAL PRICE: &#8369;<?php echo $totalPrice; ?></h3>
                    <a class="btn btn-default check_out" href="checkout">Check Out</a>
                </div>
            </div>
        </section>
        @elseif(Session::get('customer_id'))
            <div class="empty">
                <h1>EMPTY CART</h1>
                <button><a href="products">Shop Now!</a></button>
            </div>
        @else
            <div class="empty">
                <h1>EMPTY CART</h1>
                <button><a href="login">Please login or signup to continue</a></button>
            </div>
        @endif
    </section>
@endsection
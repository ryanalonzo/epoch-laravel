<?php use App\Product; ?>
@extends('layouts.main')

@section('content')
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
    </section>
    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span>$59</span></li>
                        <li>Eco Tax <span>$2</span></li>
                        <li>Shipping Cost <span>Free</span></li>
                        <li>Total <span>$61</span></li>
                    </ul>
                        <a class="btn btn-default check_out" href="">Check Out</a>
                </div>
            </div>
        </div>
    </section>
@endsection
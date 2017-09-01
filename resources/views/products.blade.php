@extends('layouts.main')

@section('content')
    @foreach($products as $product)
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <div class="single_product">
                            <img src="{{ $product->image_src }}" alt="" />
                        </div>
                        <h2>{{ $product->unit_price }}</h2>
                        <p>{{ $product->prod_name }}</p>
                        <form action="products" method="POST">
                            <input type="submit" name="add_to_cart" value="Add to cart" class="btn btn-default add-to-cart">
                            {{ csrf_field() }}
                            <input type="hidden" name="prod_id" value="<?php echo $product->id; ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
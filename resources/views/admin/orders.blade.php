@extends('layouts.dashboard')

@section('sidebar')
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="admin" class="simple-text">
                    Epoch | Admin
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="admin">
                        <i class="pe-7s-paperclip"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li>
                    <a href="users">
                        <i class="pe-7s-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="adminProducts">
                        <i class="pe-7s-user"></i>
                        <p>Products</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="table-responsive">
        @if(count($orders))
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->first_name }} {{ $order->last_name }} </td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->prod_name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->price }}</td>
                            <td>
                                <button>Shipped</button>
                                <button>Delivered</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
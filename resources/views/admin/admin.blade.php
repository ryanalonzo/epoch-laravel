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
                    <a href="orders">
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
            <tr>
              <td>1,001</td>
              <td>Lorem</td>
              <td>ipsum</td>
              <td>dolor</td>
              <td>sit</td>
              <td>sit</td>
              <td>Edit</td>
              <td>Delete</td>
            </tr>
          </tbody>
        </table>
    </div>
@endsection
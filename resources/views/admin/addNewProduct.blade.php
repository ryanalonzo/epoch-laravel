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
                <li>
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
                <li class="active">
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
    <form method="POST" action="addNewProduct" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Product Name" name="prod_name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Product Description" name="description">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Unit Price" name="unit_price">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Stocks" name="stocks">
        </div>
        <div class="form-group">
            <input type="file" name="fileToUpload" id="fileToUpload" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </form>
@endsection
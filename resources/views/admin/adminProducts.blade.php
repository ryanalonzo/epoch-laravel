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
    <a href="addNewProduct"><button type="submit" class="btn btn-primary" >Add new</button></a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
@endsection
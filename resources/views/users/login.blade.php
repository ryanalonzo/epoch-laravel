@extends('layouts.main')

@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Login to your account</h2>
                        <form method="POST" action="login">
                            {{ csrf_field() }}
                            @if(session('error'))
                                <p> {{ session('error') }} </p>
                            @endif
                            <input type="email" placeholder="Email Address" name="email" />
                            <input type="password" placeholder="Password" name="password" />
                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
            </div>
        </div>
    </section>
@endsection
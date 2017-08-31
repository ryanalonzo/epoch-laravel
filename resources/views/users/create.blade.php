@extends('layouts.main')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="signup-form">
                        <h2>New User Signup!</h2>
                        <form method="POST" action="create">
                        {{ csrf_field() }}
                            <input type="text" placeholder="First Name" name="first_name" required autocomplete="off"/>
                            <input type="text" placeholder="Last Name" name="last_name" required autocomplete="off"/>
                            <input type="email" placeholder="Email Address" name="email" required autocomplete="off"/>
                            <input type="password" placeholder="Password" name="password" required autocomplete="off"/>
                            <input type="text" placeholder="Phone Number" name="phone_number" required autocomplete="off"/>
                            <textarea name="address" placeholder="Address" autocomplete="off"></textarea>
                            <button type="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<div class="header_top">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +639363515387</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> epoch.com </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/">EPOCH</a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            @if(session('Status'))
                                <li><p style="margin-top: 10px;">{{ session('Status') }}</p></li>
                            @endif
                            @if(session('customer_id'))
                                <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li><a href="products"> Products</a></li>
                                <li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="logout"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a></li>
                            @else
                                <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li><a href="products"> Products</a></li>
                                <li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                                <li><a href="create"><i class="fa fa-plus" aria-hidden="true"></i> Sign Up</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>


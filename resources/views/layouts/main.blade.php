<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <link href="/css/price-range.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
</head><!--/head-->

<body>

    <!--header-->
        @include('header')
    </header>
    <!--/header-->
        <!--banner-->
        @yield('banner')
        <!--/banner-->

    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>

    <footer id="footer"><!--Footer-->
        @include('footer')
    </footer><!--/Footer-->



    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.scrollUp.min.js"></script>
    <script src="/js/price-range.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
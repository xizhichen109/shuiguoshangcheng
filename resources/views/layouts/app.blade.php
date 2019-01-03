<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>高级食品商城</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">

    {{--商城首页--}}
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- All css here -->
    {{--<link rel="stylesheet" href="assets/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/ie7.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    {{--商城首页结束--}}


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top header-fixed">
            <div class="container">
                <div class="col-lg-5 display-none-md display-none-xs">
                    <div class="ht-main-menu header_nav">
                        <nav>
                            <ul>
                                <li class="active"><a href="/home">首页 </a></li>
                                <li><a href="#">全部商品 </a></li>
                                <li><a href="#">购物车 </a></li>
                                <li><a href="#">文章推送 </a></li>
                                <li><a href="#">关于我们</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-4">
                    <div class="logo text-center log_title">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt="NatureCircle"></a>
                    </div>
                </div>


                @guest
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('login') }}">登录</a></li>
                    <li><a href="{{ route('register') }}">注册</a></li>
                </ul>
                @else
                <div class="col-lg-5 col-sm-8">
                    <div class="header-content d-flex justify-content-end left_nav">
                        <div class="search-wrapper wrapper_public">
                            <a href="#"><span class="icon icon-Search"></span></a>
                            <form action="#" class="search-form">
                                <input type="text" placeholder="Search entire store here ...">
                                <button type="button">Search</button>
                            </form>
                        </div>
                        <div class="settings-wrapper wrapper_public">
                            <a href="#"><i class="icon icon-Settings"></i></a>
                            <div class="settings-content">
                                <h4>个人中心</h4>
                                <ul>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            退出登录
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart-wrapper wrapper_public">
                            <a href="#">
                                <i class="icon icon-FullShoppingCart"></i>
                                <span>2</span>
                            </a>
                            <div class="cart-item-wrapper ">
                                <div class="single-cart-item">
                                    <div class="cart-img">
                                        <a href="cart.html"><img src="assets/img/cart/1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-text-btn">
                                        <div class="cart-text">
                                            <h5><a href="cart.html">Fresh Fruit Juice</a></h5>
                                            <span class="cart-qty">×1</span>
                                            <span class="cart-price">$68.00</span>
                                        </div>
                                        <button type="button"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="single-cart-item">
                                    <div class="cart-img">
                                        <a href="cart.html"><img src="assets/img/cart/2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-text-btn">
                                        <div class="cart-text">
                                            <h5><a href="cart.html">Fresh Vegetables</a></h5>
                                            <span class="cart-qty">×1</span>
                                            <span class="cart-price">$98.00</span>
                                        </div>
                                        <button type="button"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="cart-price-total">
                                    <div class="cart-price-info d-flex justify-content-between">
                                        <span>Sub-Total :</span>
                                        <span>$135.00</span>
                                    </div>
                                    <div class="cart-price-info d-flex justify-content-between">
                                        <span>Eco Tax (-2.00) :</span>
                                        <span>$4.00</span>
                                    </div>
                                    <div class="cart-price-info d-flex justify-content-between">
                                        <span>VAT (20%) :</span>
                                        <span>$27.00</span>
                                    </div>
                                    <div class="cart-price-info d-flex justify-content-between">
                                        <span>Total :</span>
                                        <span>$166.00</span>
                                    </div>
                                </div>
                                <div class="cart-links">
                                    <a href="cart.html">View cart</a>
                                    <a href="checkout.html">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endguest
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{--商城首页--}}
    <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/ajax-mail.js"></script>
    <script src="assets/js/main.js"></script>
    {{--商城首页结束--}}
</body>
</html>

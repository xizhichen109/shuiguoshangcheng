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

    <footer class="footer-area">
        <!-- Footer Top Area Start -->
        <div class="footer-top bg-4 pt-120 pb-120">
            <!-- Newsletter Area Start -->
            <div class="newsletter-area">
                <div class="container text-center">
                    <div class="newsletter-container">
                        <h2>订阅简报</h2>
                        <p>获取电子邮件更新我们最新的商店和特价。</p>
                        <div class="newsletter-form mc_embed_signup">
                            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll" class="mc-form">
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="请在这里输入您的电子邮件" required>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                    <button id="mc-embedded-subscribe" type="submit" name="subscribe" class="default-btn">订阅</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="social-icon">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-flickr"></i></a>
                    </div>
                </div>
            </div>
            <!-- Newsletter Area End -->
            <!-- Service Area Start -->
            <div class="service-area pt-50">
                <div class="container">
                    <div class="service-container">
                        <div class="service-content">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-service">
                                        <div class="service-image">
                                            <img src="assets/img/icon/rocket.png" alt="">
                                        </div>
                                        <div class="service-text">
                                            <h3>免费邮递</h3>
                                            <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-service">
                                        <div class="service-image">
                                            <img src="assets/img/icon/money.png" alt="">
                                        </div>
                                        <div class="service-text">
                                            <h3>金钱担保</h3>
                                            <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-service">
                                        <div class="service-image">
                                            <img src="assets/img/icon/support.png" alt="">
                                        </div>
                                        <div class="service-text">
                                            <h3>在线服务</h3>
                                            <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Area End -->
            <!-- Footer Widget Area Start -->
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-footer-widget">
                                <div class="footer-logo">
                                    <a href="#"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <p>它是动力过程的一部分，它决定了凝集层的相互关系。</p>
                                <div class="footer-text">
                                    <span><i class="icon icon-Pointer"></i>Address : Haidian District, Beijing, China.</span>
                                    <span><i class="icon icon-Phone"></i>Phone : 125441125</span>
                                    <span><i class="icon icon-Mail"></i>Email : team@qq.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="single-footer-widget">
                                <h3>商品</h3>
                                <ul class="footer-widget-list">
                                    <li><a href="shop.html">产品价格大幅下跌</a></li>
                                    <li><a href="shop.html">最新产品</a></li>
                                    <li><a href="shop.html">最佳销售</a></li>
                                    <li><a href="shop.html">商店</a></li>
                                    <li><a href="#">登陆</a></li>
                                    <li><a href="#">我的帐户</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="single-footer-widget">
                                <h3>公司简介</h3>
                                <ul class="footer-widget-list">
                                    <li><a href="#">交付</a></li>
                                    <li><a href="#">法律告示</a></li>
                                    <li><a href="#">证明文件</a></li>
                                    <li><a href="#">安全支付</a></li>
                                    <li><a href="contact.html">联系我们</a></li>
                                    <li><a href="shop.html">加盟店</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-footer-widget">
                                <h3>照片分享</h3>
                                <div class="instagram-image">
                                    <div class="single-insta-img">
                                        <a href="#"><img src="assets/img/instagram/1.jpg" alt=""></a>
                                    </div>
                                    <div class="single-insta-img">
                                        <a href="#"><img src="assets/img/instagram/2.jpg" alt=""></a>
                                    </div>
                                    <div class="single-insta-img">
                                        <a href="#"><img src="assets/img/instagram/3.jpg" alt=""></a>
                                    </div>
                                    <div class="single-insta-img">
                                        <a href="#"><img src="assets/img/instagram/4.jpg" alt=""></a>
                                    </div>
                                    <div class="single-insta-img">
                                        <a href="#"><img src="assets/img/instagram/5.jpg" alt=""></a>
                                    </div>
                                    <div class="single-insta-img">
                                        <a href="#"><img src="assets/img/instagram/6.jpg" alt=""></a>
                                    </div>
                                    <div class="single-insta-img">
                                        <a href="#"><img src="assets/img/instagram/7.jpg" alt=""></a>
                                    </div>
                                    <div class="single-insta-img">
                                        <a href="#"><img src="assets/img/instagram/8.jpg" alt=""></a>
                                    </div>
                                </div>
                                <a href="#">跟随我们的照片分享 <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Widget Area End -->
        </div>
        <!-- Footer Top Area End -->
        <!-- Footer Bottom Area Start -->
        <div class="footer-bottom-area pt-15 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex col-md-6">
                        <div class="footer-text-bottom">
                            <p>版权 &copy; <a href="http://www.17sucai.com/">Naturecircle</a>. 版权所有</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="payment-img d-flex justify-content-end">
                            <img src="assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area End -->
    </footer>
    <!-- Footer Area End -->

    <!-- QUICKVIEW PRODUCT -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
                <div class="quick-view-container">
                    <div class="column-left">
                        <div class="tab-content product-details-large" id="myTabContent">
                            <div class="tab-pane fade show active" id="single-slide1" role="tabpanel" aria-labelledby="single-slide-tab-1">
                                <div class="single-product-img">
                                    <img src="assets/img/product/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide2" role="tabpanel" aria-labelledby="single-slide-tab-2">
                                <div class="single-product-img">
                                    <img src="assets/img/product/2.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide3" role="tabpanel" aria-labelledby="single-slide-tab-3">
                                <div class="single-product-img">
                                    <img src="assets/img/product/3.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide4" role="tabpanel" aria-labelledby="single-slide-tab-4">
                                <div class="single-product-img">
                                    <img src="assets/img/product/4.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide5" role="tabpanel" aria-labelledby="single-slide-tab-5">
                                <div class="single-product-img">
                                    <img src="assets/img/product/5.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="single-slide6" role="tabpanel" aria-labelledby="single-slide-tab-6">
                                <div class="single-product-img">
                                    <img src="assets/img/product/6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="single-product-menu">
                            <div class="nav single-slide-menu" role="tablist">
                                <div class="single-tab-menu">
                                    <a class="active" data-toggle="tab" id="single-slide-tab-1" href="#single-slide1"><img src="assets/img/product/1.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img src="assets/img/product/2.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img src="assets/img/product/3.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img src="assets/img/product/4.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img src="assets/img/product/5.jpg" alt=""></a>
                                </div>
                                <div class="single-tab-menu">
                                    <a data-toggle="tab" id="single-slide-tab-6" href="#single-slide6"><img src="assets/img/product/6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-right">
                        <div class="quick-view-text">
                            <h2>Curabitur a purus</h2>
                            <h3 class="q-product-price">￥34.00<span class="old-price">￥37.00</span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                            <div class="input-cart">
                                <input value="1" type="number">
                                <button class="default-btn">加入购物车</button>
                            </div>
                            <div class="share-product">
                                <h4>Share this product</h4>
                                <div class="social-link">
                                    <a href="#" target="_blank" class="facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" target="_blank" class="twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" target="_blank" class="pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                    <a href="#" target="_blank" class="google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#" target="_blank" class="linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END QUICKVIEW PRODUCT -->

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

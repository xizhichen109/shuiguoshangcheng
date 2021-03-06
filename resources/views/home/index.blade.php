﻿@extends('layouts/app')

@section('content')
        <div class="mobile-menu-area">
            <div class="mobile-menu container">
                <nav id="mobile-menu-active">
                    <ul class="menu-overflow">
                        <li><a href="index.html">HOME</a>
                            <ul>
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                                <li><a href="index-4.html">Home Four</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a>
                            <ul>
                                <li><a href="shop-full-width.html">shop full Width</a></li>
                                <li><a href="shop-right-sidebar.html">shop Right Sidebar</a></li>
                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                <li><a href="cart.html">cart Page</a></li>
                                <li><a href="checkout.html">checkout Page</a></li>
                                <li><a href="product-details.html">Single Shop</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog-2-column.html">blog 2 column</a></li>
                                <li><a href="blog-3-column.html">blog 3 column</a></li>
                                <li><a href="blog-left-sidebar.html">blog Left Sidebar</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                                <li><a href="blog-details-left-sidebar.html">blog details left Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Mobile Menu Area End -->
        <!--Start of Login Form-->
        <div class="modal fade" id="login_box" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-pop-up-content">
                            <h2>Login to your account</h2>
                            <form action="#" method="post">
                                <div class="form-box">
                                    <input type="text" placeholder="User Name" name="username">
                                    <input type="password" placeholder="Password" name="pass">
                                </div>
                                <div class="checkobx-link">
                                    <div class="left-col">
                                        <input type="checkbox" id="remember_me"><label for="remember_me">Remember Me</label>
                                    </div>
                                    <div class="right-col"><a href="#">Forget Password?</a></div>
                                </div>
                                <button type="submit">Sign In</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Login Form-->
        <!--Start of Register Form-->
        <div class="modal fade" id="register_box" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-pop-up-content">
                            <h2>Sign Up</h2>
                            <form action="#" method="post">
                                <div class="form-box">
                                    <input type="text" placeholder="Full Name" name="fullname">
                                    <input type="text" placeholder="User Name" name="username">
                                    <input type="email" placeholder="Email" name="email">
                                    <input type="password" placeholder="Password" name="pass">
                                    <input type="password" placeholder="Confirm Password" name="re_pass">
                                </div>
                                <div class="checkobx-link">
                                    <div class="left-col">
                                        <input type="checkbox" id="remember_reg"><label for="remember_reg">Remember Me</label>
                                    </div>
                                </div>
                                <button class="text-uppercase" type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Register Form-->
    </header>
    <!-- Header Area End -->
    <!-- Hero Area Start -->
    <div class="ht-hero-section fix">
        <div class="ht-hero-slider">
            <!-- Single Slide Start -->
            <div class="ht-single-slide" style="background-image: url(assets/img/slider/1.jpg)">
                <div class="ht-hero-content-one container">
                    <h3>Cold Process Organic</h3>
                    <h1 class="cssanimation leDoorCloseLeft sequence">Savon Stories</h1>
                    <p>We believe that healthy eating, clean air, and gentle character is the best start to genuine wellbeing.</p>
                    <a href="shop.html" class="default-btn large circle blue hover-blue uppercase">Shop now</a>
                </div>
            </div>
            <!-- Single Slide End -->
            <!-- Single Slide Start -->
            <div class="ht-single-slide" style="background-image: url(assets/img/slider/2.jpg)">
                <div class="ht-hero-content-one container">
                    <h3>Healthy life with</h3>
                    <h1 class="cssanimation leDoorCloseLeft sequence">Nature Organic</h1>
                    <p>Vegetables are the edible parts of a plant that is used in cooking or can be eaten raw.</p>
                    <a href="shop.html" class="default-btn">Shop now</a>
                </div>
            </div>
            <!-- Single Slide End -->
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Food Categry Area Start -->
    <div class="food-category-area pt-105 pb-70">
        <div class="container text-center">
            <div class="section-title-img">
                <img src="assets/img/banner/text.png" alt="">
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>
            </div>
        </div>
        <div class="container">
            <div class="ht-food-slider row">
                <div class="col text-center">
                    <div class="single-food-category">
                        <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/tea.png" alt=""></a>
                        <img src="assets/img/icon/border.png" alt="">
                        <h4><a href="shop.html">tea</a></h4>
                        <span>(13 items)</span>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="single-food-category">
                        <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/burger.png" alt=""></a>
                        <img src="assets/img/icon/border.png" alt="">
                        <h4><a href="shop.html">bread</a></h4>
                        <span>(14 items)</span>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="single-food-category">
                        <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/fruit.png" alt=""></a>
                        <img src="assets/img/icon/border.png" alt="">
                        <h4><a href="shop.html">fruits</a></h4>
                        <span>(8 items)</span>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="single-food-category">
                        <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/drinks.png" alt=""></a>
                        <img src="assets/img/icon/border.png" alt="">
                        <h4><a href="shop.html">juices</a></h4>
                        <span>(11 items)</span>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="single-food-category">
                        <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/vegetable.png" alt=""></a>
                        <img src="assets/img/icon/border.png" alt="">
                        <h4><a href="shop.html">vegetables</a></h4>
                        <span>(11 items)</span>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="single-food-category">
                        <a href="shop.html" class="food-cat-img"><img src="assets/img/icon/tea.png" alt=""></a>
                        <img src="assets/img/icon/border.png" alt="">
                        <h4><a href="shop.html">tea</a></h4>
                        <span>(13 items)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Food Categry Area End -->
    <!-- Protuct Area Start -->
    <div class="product-area bg-1 pt-110 pb-80">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-img d-flex justify-content-center">
                    <img src="assets/img/icon/title.png" alt="">
                </div>
                <h2><span>Organic </span>featured products</h2>
            </div>
        </div>
        <div class="container">
            <div class="product-tab-list nav" role="tablist">
                <a class="active" href="#tab1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="tab1">vegetables</a>
                <a href="#tab2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab2">fruits</a>
                <a href="#tab3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab3">juices</a>
                <a href="#tab4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab4">bread</a>
            </div>
            <div class="tab-content text-center">
                <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                    <div class="product-carousel">
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/1.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/1.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Juicy Grapes</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$86.00</span>
                                        <span class="old-price">$92.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/2.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/2.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Banana</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$43.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/3.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/3.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Red Capsicum</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$34.00</span>
                                        <span class="old-price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/4.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/4.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Rippen Mango</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$20.00</span>
                                        <span class="old-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/5.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/5.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Farm's Onion</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/6.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/6.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Coconut</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$50.00</span>
                                        <span class="old-price">$80.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/7.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/7.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Tangerin Juice</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$44.00</span>
                                        <span class="old-price">$47.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/8.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/8.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Pine Apple</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$33.00</span>
                                        <span class="old-price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/9.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/9.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Cucumber</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$86.00</span>
                                        <span class="old-price">$92.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/10.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/10.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Grape</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$43.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel">
                    <div class="product-carousel">
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/9.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/9.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Cucumber</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$86.00</span>
                                        <span class="old-price">$92.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/10.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/10.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Grape</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$43.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/11.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/11.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Farm's Cucumber</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$34.00</span>
                                        <span class="old-price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/12.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/12.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Strawberry Juice</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$20.00</span>
                                        <span class="old-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/13.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/13.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Green Pee's</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/14.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/14.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Onion</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$50.00</span>
                                        <span class="old-price">$80.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/15.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/15.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Juicy Orange</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$44.00</span>
                                        <span class="old-price">$47.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/16.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/16.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Kiwi Juice</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$33.00</span>
                                        <span class="old-price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/12.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/12.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Strawberry Juice</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$20.00</span>
                                        <span class="old-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/13.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/13.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Green Pee's</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel">
                    <div class="product-carousel">
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/17.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/17.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Red Beet</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$34.00</span>
                                        <span class="old-price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/18.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/18.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Spring Onion</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$20.00</span>
                                        <span class="old-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/19.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/19.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Tomato</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/20.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/20.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Juicy Watermelon</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$50.00</span>
                                        <span class="old-price">$80.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/7.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/7.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Tangerin Juice</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$44.00</span>
                                        <span class="old-price">$47.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/8.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/8.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Pine Apple</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$33.00</span>
                                        <span class="old-price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/1.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/1.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Juicy Grapes</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$86.00</span>
                                        <span class="old-price">$92.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/2.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/2.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Banana</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$43.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab4" role="tabpanel">
                    <div class="product-carousel">
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/12.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/12.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Strawberry Juice</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$20.00</span>
                                        <span class="old-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/13.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/13.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Green Pee's</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/14.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/14.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Onion</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$50.00</span>
                                        <span class="old-price">$80.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/15.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/15.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Juicy Orange</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$44.00</span>
                                        <span class="old-price">$47.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/9.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/9.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Cucumber</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$86.00</span>
                                        <span class="old-price">$92.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/12.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/12.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Strawberry Juice</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$20.00</span>
                                        <span class="old-price">$28.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/13.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/13.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Green Pee's</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$50.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/10.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/10.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Fresh Grape</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$40.00</span>
                                        <span class="old-price">$43.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/11.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/11.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Farm's Cucumber</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$34.00</span>
                                        <span class="old-price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-col">
                            <div class="single-product-item">
                                <div class="product-image">
                                    <a href="shop.html">
                                        <img src="assets/img/product/16.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <ul class="hover-icon-list">
                                            <li>
                                                <a href="wishlist.html"><i class="icon icon-Heart"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon icon-Restart"></i></a>
                                            </li>
                                            <li><a href="assets/img/product/16.jpg" data-toggle="modal" data-target="#productModal"><i class="icon icon-Search"></i></a></li>
                                        </ul>
                                        <button type="button" class="p-cart-btn">Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o color"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5><a href="shop.html">Kiwi Juice</a></h5>
                                    <div class="pro-price">
                                        <span class="new-price">$33.00</span>
                                        <span class="old-price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Protuct Area End -->
    <!-- Banner Area Start -->
    <div class="banner-area banner-one-area bg-2 fix pt-60 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="banner-text pt-15">
                        <h3>Cold Process <span>Organic</span></h3>
                        <h1>Savon Stories</h1>
                        <h2>
                            <img src="assets/img/icon/mark.png" alt="">
                            <span>Buy 1 get 1 free</span>
                        </h2>
                        <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                        <a href="shop.html" class="default-btn">shop now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-image-wrapper">
                        <div class="banner-image">
                            <img src="assets/img/banner/1.jpg" alt="">
                        </div>
                        <div class="banner-image-text">
                            <h4>organic savon stories</h4>
                            <p>We believe that healthy eating, clean air, and gentle character is the best start to genuine wellbeing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Featured Area Start -->
    <div class="featured-area bg-3 pt-105 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="featured-carousel-wrapper">
                        <h3>Organic <span>new arrivals</span></h3>
                        <div class="feaured-carousel">
                            <div class="single-featured-carousel">
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/4.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Radiant Tee</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$241.99</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/17.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Farm Fresh Beet</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$98.99</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/7.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Orange Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$68.00</span>
                                            <span class="old-price">$74.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/15.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Orange</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$123.00</span>
                                            <span class="old-price">$74.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-carousel">
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/1.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Juicy Grape</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$675.99</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/2.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Banana</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$76.53</span>
                                            <span class="old-price">$78.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/3.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Red Capsicum</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$43.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/5.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Large Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$22.00</span>
                                            <span class="old-price">$23.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-carousel">
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/6.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Large Coconut</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$54.56</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/7.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Orange Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$43.43</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/8.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Juicy Pineapple</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$43.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/9.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$32.00</span>
                                            <span class="old-price">$36.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-carousel-wrapper">
                        <h3>Organic <span>bestseller</span></h3>
                        <div class="feaured-carousel">
                            <div class="single-featured-carousel">
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/10.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                        </div>
                                        <h5><a href="shop.html">Juicy Grapes</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$64.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/12.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Farm Fresh Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$54.54</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/13.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Peas</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$46.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/14.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span>
                                            <span class="old-price">$35.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-carousel">
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/16.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Kewe's Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$53.43</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/18.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Vegetables</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$43.00</span>
                                            <span class="old-price">$58.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/19.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                        </div>
                                        <h5><a href="shop.html">Red Tomato</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$67.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/1.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Large Grapes</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$55.00</span>
                                            <span class="old-price">$57.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-carousel">
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/2.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Banana</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$65.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/3.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Red Capsicum</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$54.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/5.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Farm's Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$54.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/9.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$32.00</span>
                                            <span class="old-price">$36.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-carousel-wrapper">
                        <h3>Organic <span>most viewed</span></h3>
                        <div class="feaured-carousel">
                            <div class="single-featured-carousel">
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/5.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Farm's Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$54.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/9.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Cucumber</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$32.00</span>
                                            <span class="old-price">$36.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/6.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Medium Coconut</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$54.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/14.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Onion</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$34.00</span>
                                            <span class="old-price">$35.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-carousel">
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/12.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Strawberry Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$53.43</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/1.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Large Grapes</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$55.00</span>
                                            <span class="old-price">$57.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/2.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Banana</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$65.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/3.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Red Capsicum</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$54.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-featured-carousel">
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/18.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Fresh Vegetables</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$43.00</span>
                                            <span class="old-price">$58.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/19.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                        </div>
                                        <h5><a href="shop.html">Red Tomato</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$67.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/10.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o color"></i>
                                        </div>
                                        <h5><a href="shop.html">Juicy Grapes</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$64.00</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                                <div class="single-featured-item">
                                    <div class="feature-image">
                                        <a href="shop.html"><img src="assets/img/featured/12.jpg" alt=""></a>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star-o color"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <h5><a href="shop.html">Farm Fresh Juice</a></h5>
                                        <div class="pro-price">
                                            <span class="new-price">$54.54</span>
                                        </div>
                                        <a href="#" class="feature-cart"><i class="icon icon-FullShoppingCart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Area End -->
    <!-- Testimonial Area Start -->
    <div class="testimonial-area pt-110 pb-95">
        <div class="container">
            <div class="testimonial-slider-wrapper">
                <div class="text-carousel text-center">
                    <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                        <p>This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque felis lorem, pulvinar sed ero..</p>
                    </div>
                    <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit tenetur rerum maiores eos fugit dolores neque eius ex eum quo, quis aspernatur odio accusantium architecto, amet repellat.</p>
                    </div>
                    <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                        <p>Reprehenderit tenetur rerum maiores eos fugit dolores neque eius ex eum quo, quis aspernatur odio accusantium architecto, amet repellat Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                        <p>This is Photoshops version  of Lorem Ipsum. Proin gravida nibh vel velit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In molestie augue magna. Pellentesque felis lorem, pulvinar sed ero..</p>
                    </div>
                    <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit tenetur rerum maiores eos fugit dolores neque eius ex eum quo, quis aspernatur odio accusantium architecto, amet repellat.</p>
                    </div>
                    <div class="slider-text">
                            <span class="testi-quote">
                                <img src="assets/img/icon/quote.png" alt="">
                            </span>
                        <p>Reprehenderit tenetur rerum maiores eos fugit dolores neque eius ex eum quo, quis aspernatur odio accusantium architecto, amet repellat Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="image-carousel">
                    <div class="testi-img">
                        <img src="assets/img/testimonial/1.png" alt="">
                        <h4>Dewey Tetzlaff</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/img/testimonial/2.png" alt="">
                        <h4>Rebecka Filson</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/img/testimonial/3.png" alt="">
                        <h4>Alva Ono</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/img/testimonial/1.png" alt="">
                        <h4>Dewey Tetzlaff</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/img/testimonial/2.png" alt="">
                        <h4>Rebecka Filson</h4>
                    </div>
                    <div class="testi-img">
                        <img src="assets/img/testimonial/3.png" alt="">
                        <h4>Alva Ono</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->
    <!-- Blog Area Start -->
    <div class="blog-area pb-95">
        <div class="container">
            <div class="section-title text-center mb-50">
                <div class="section-img d-flex justify-content-center">
                    <img src="assets/img/icon/title.png" alt="">
                </div>
                <h2><span>Organic </span>from our blog</h2>
            </div>
        </div>
        <div class="container">
            <div class="custom-row">
                <div class="blog-carousel">
                    <div class="custom-col text-center">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="assets/img/blog/1.jpg" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <h4><a href="blog-details.html">Coconut improve heart and immunity.</a></h4>
                                <div class="post-meta">
                                    <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                    <span class="post-date"> - Oct 30,2018</span>
                                </div>
                                <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk make it quite popular.</p>
                                <a href="blog-details.html" class="default-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col text-center">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="assets/img/blog/2.jpg" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <h4><a href="blog-details.html">The most healthful food you can eat.</a></h4>
                                <div class="post-meta">
                                    <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                    <span class="post-date"> - Sep 11,2018</span>
                                </div>
                                <p>Health benefits of apple include improved digestion, prevention of stomach disorders, gallstones.</p>
                                <a href="blog-details.html" class="default-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col text-center">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="assets/img/blog/3.jpg" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <h4><a href="blog-details.html">Delicious and nutritious vegetable.</a></h4>
                                <div class="post-meta">
                                    <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                    <span class="post-date"> - Apr 22,2018</span>
                                </div>
                                <p>Research shows drinking beetroot juice benefit digestion, boost athletic performance. They are a good source.</p>
                                <a href="blog-details.html" class="default-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="custom-col text-center">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img src="assets/img/blog/1.jpg" alt=""></a>
                            </div>
                            <div class="blog-text">
                                <h4><a href="blog-details.html">Coconut improve heart and immunity.</a></h4>
                                <div class="post-meta">
                                    <span class="author-name">post by: <span>Naturecircle Themes</span></span>
                                    <span class="post-date"> - Oct 30,2018</span>
                                </div>
                                <p>Coconut milk is one of the healthiest foods on world, health benefits of coconut milk make it quite popular.</p>
                                <a href="blog-details.html" class="default-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <!-- Blog Area End -->




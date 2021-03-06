<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hub Nail - @yield('meta_title', 'title')</title>
    <meta name="description" content="@yield('meta_description', 'description')">

    <link rel="icon" href="@yield('path_favicon', \Illuminate\Support\Facades\URL::asset('assets/img/favicon.png'))" type="image/png">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/style.css')}}">
</head>
<body>
<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav-shop">
                        <li class="nav-item"><button><i class="ti-search"></i></button></li>
                        <li class="nav-item">
                            <button id="top-cart" data-toggle="modal" data-target="#modal-cart">
                                <i class="ti-shopping-cart"></i>
                                @if($cart_sum > 0)
                                    <span class="nav-shop__circle">{{$cart_sum}}</span>
                                @endif
                            </button>
                        </li>
                        <li class="nav-item"><a class="button button-header" href="#">Магазин</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->

<main class="site-main">
    @yield('content')
</main>


<!--================ Start footer Area  =================-->
<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title large_title">Our Mission</h4>
                        <p>
                            So seed seed green that winged cattle in. Gathering thing made fly you're no
                            divided deep moved us lan Gathering thing us land years living.
                        </p>
                        <p>
                            So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Quick Links</h4>
                        <ul class="list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Brand</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h4 class="footer_title">Gallery</h4>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="img/gallery/r1.jpg" alt=""></li>
                            <li><img src="img/gallery/r2.jpg" alt=""></li>
                            <li><img src="img/gallery/r3.jpg" alt=""></li>
                            <li><img src="img/gallery/r5.jpg" alt=""></li>
                            <li><img src="img/gallery/r7.jpg" alt=""></li>
                            <li><img src="img/gallery/r8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Contact Us</h4>
                        <div class="ml-40">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span>
                                Head Office
                            </p>
                            <p>123, Main Street, Your City</p>

                            <p class="sm-head">
                                <span class="fa fa-phone"></span>
                                Phone Number
                            </p>
                            <p>
                                +123 456 7890 <br>
                                +123 456 7890
                            </p>

                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Email
                            </p>
                            <p>
                                free@infoexample.com <br>
                                www.infoexample.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->
<script src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/skrollr.min.js') }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/mail-script.js') }}"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('assets/js/main.js') }}"></script>
<script>

    $( document ).ready(function() {
        $('#loginSubmit').click(function(){
            alert(888);
        });

        $('#modal-view-product').on('show.bs.modal', function (event) {
            var modal = $(this);
            var button = $(event.relatedTarget);
            var id = button.data('id');

            $.ajax({
                url: "http://hubnail.loc/maslechkin/product/" + id,
                success: function(data){
                    modal.find('.modal-content#product-view').html(data);
                    console.log(data);
                }
            });
        });

        $('#modal-cart').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);

            if(button.data('id')) {
                var id = button.data('id');
                sendToCart(id, $(this));
            } else {
                getCartProducts($(this));
            }

        });

        function sendToCart(id, modal) {
            $.ajax({
                url: "http://hubnail.loc/maslechkin/cart/product/" + id,
                method: 'POST',
                success: function(data){
                    modal.find('.cart-table tbody').html(data);
                    $('.cart-product-quantity').on('change', function(){
                        changeCount($(this).data('id'), modal, $(this).val());
                    });
                    $('#sendCart').on('click', function(){
                        $.ajax({
                            url: "http://hubnail.loc/maslechkin/cart/send",
                            method: 'POST',
                            success: function(data){
                                console.log('Success ');
                            }
                        });
                    });
                }
            });
        }

        function changeCount(id, modal, product_sum) {
            $.ajax({
                url: "http://hubnail.loc/maslechkin/cart/product/" + id + "/count/" + product_sum,
                method: 'POST',
                success: function(data){
                    modal.find('.cart-table tbody').html(data);
                    $('.cart-product-quantity').on('change', function(){
                        changeCount($(this).data('id'), modal, $(this).val());
                    });
                }
            });
        }

        function getCartProducts(modal) {
            $.ajax({
                url: "http://hubnail.loc/maslechkin/cart/product/",
                method: 'GET',
                success: function(data){
                    modal.find('.cart-table tbody').html(data);
                    $('.cart-product-quantity').on('change', function(){
                        changeCount($(this).data('id'), modal, $(this).val());
                    });
                    $('#sendCart').on('click', function(){
                        $.ajax({
                            url: "http://hubnail.loc/maslechkin/cart/send",
                            method: 'POST',
                            success: function(data){
                                console.log('Success ');
                            }
                        });
                    });
                }
            });
        }


    });
</script>
</body>
</html>

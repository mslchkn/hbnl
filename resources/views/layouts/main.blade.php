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
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item">
                            <a class="nav-link">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Контактьі</a>
                        </li>
                    </ul>
                    <ul class="nav-shop">
                        <li class="nav-item">
                           <span class="fa fa-phone"></span>
                        </li>
                        <li class="nav-item">
                            <i class="ti-instagram"></i>
                        </li>
                        <li class="nav-item">
                            <span class="fa ti-facebook"></span>
                        </li>
                        <li class="nav-item">
                            <span class="fa fa-location-arrow"></span>
                        </li>
                        <li class="nav-item"><button><i class="ti-search"></i></button></li>
                        <li class="nav-item">
                            <button id="top-cart" data-toggle="modal" data-target="#modal-cart">
                                <i class="ti-shopping-cart"></i>
                                <span class="nav-shop__circle">
                                    @if($cart_sum > 0){{$cart_sum}}@endif
                                </span>
                            </button>
                        </li>
                        <li class="nav-item"><a class="button button-header" href="{{ URL::route('product.get.all') }}">Магазин</a></li>
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
<!-- ================ Subscribe section start ================= -->
<section class="subscribe-position">
    <div class="container">
        <div class="subscribe text-center">
            <h3 class="subscribe__title">Подписка на новости</h3>
            <p>Текст про подписку</p>
            <div id="mc_embed_signup">
                <form target="_blank" method="get" class="subscribe-form form-inline mt-5 pt-1">
                    <div class="form-group ml-sm-auto">
                        <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Email"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
                        <div class="info"></div>
                    </div>
                    <button class="button button-subscribe mr-auto mb-1" type="submit">Подписаться</button>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- ================ Subscribe section end ================= -->
<!--================ Start footer Area  =================-->
<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title large_title">Заголовок</h4>
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
                        <h4 class="footer_title">Меню</h4>
                        <ul class="list">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Контактьі</h4>
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
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                </p>
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
                    $('.nav-shop__circle').html(modal.find('tr.product-cart').length > 0 ?
                        modal.find('tr.product-cart').length : ''
                    );
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
                    $('.nav-shop__circle').html(modal.find('tr.product-cart').length > 0 ?
                        modal.find('tr.product-cart').length : ''
                    );

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
                    $('.nav-shop__circle').html(modal.find('tr.product-cart').length > 0 ?
                        modal.find('tr.product-cart').length : ''
                    );
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

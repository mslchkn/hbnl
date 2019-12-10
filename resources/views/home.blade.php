@extends('layouts.main')

@section('meta_title', 'Заголовок страницы')
@section('meta_description', 'Описание страницы')

@section('content')
    <section class="hero-banner">
        <div class="container">
            <div class="row no-gutters align-items-center pt-60px">
                <div class="col-5 d-none d-sm-block">
                    <div class="hero-banner__img">
                        <img src="{{ URL::to('/') }}/assets/images/hero-banner.png"/>
                    </div>
                </div>
                <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
                    <div class="hero-banner__content">
                        <h4>Shop is fun</h4>
                        <h1>Browse Our Premium Product</h1>
                        <p>Us which over of signs divide dominion deep fill bring they're meat beho upon own earth
                            without morning over third. Their male dry. They are great appear whose land fly grass.</p>
                        <a class="button button-hero" href="#">В магазин</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ trending product section start ================= -->
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Популярньіе продуктьі</p>
                <h2>Trending <span class="section-intro__style">Product</span></h2>
            </div>
            <div class="row">
                @foreach($top as $product)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="card-img" src="{{ URL::to('/') }}/assets/images/product1.png" alt="">
                                <ul class="card-product__imgOverlay">
                                    <li>
                                        <button type="button" class="btn btn-primary modal-view-button" data-toggle="modal"
                                                data-id="{{$product['id']}}" data-target="#modal-view-product">
                                            <i class="ti-search"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-primary add-to-cart" data-toggle="modal"
                                                data-id="{{$product['id']}}" data-target="#modal-cart">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <p>{{$product->category['name']}}</p>
                                <h4 class="card-product__title"><a href="single-product.html">{{$product['name']}}</a></h4>
                                <p class="card-product__price">{{(float)$product['price']}} грн.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================ trending product section end ================= -->
    <!-- ================ offer section start ================= -->
    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1"
             data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="offer__content text-center">
                        <h3>Up To 50% Off</h3>
                        <h4>Winter Sale</h4>
                        <p>Him she'd let them sixth saw light</p>
                        <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ offer section end ================= -->
    <!-- ================ Best Selling item  carousel ================= -->
    <section class="section-margin calc-60px">
        <div class="container">
            <div class="section-intro pb-60px">
                <p>Popular Item in the market</p>
                <h2>Best <span class="section-intro__style">Sellers</span></h2>
            </div>
            <div class="owl-carousel owl-theme" id="bestSellerCarousel">
                @foreach($top as $product)
                <div class="card text-center card-product">
                    <div class="card-product__img">
                        <img class="img-fluid" src="{{ URL::to('/') }}/assets/images/product1.png" alt="">
                        <ul class="card-product__imgOverlay">
                            <li>
                                <button type="button" class="btn btn-primary modal-view-button" data-toggle="modal"
                                        data-id="{{$product['id']}}" data-target="#modal-view-product">
                                    <i class="ti-search"></i>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn btn-primary add-to-cart" data-toggle="modal"
                                        data-id="{{$product['id']}}" data-target="#modal-cart">
                                    <i class="ti-shopping-cart"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p>{{$product->category['name']}}</p>
                        <h4 class="card-product__title"><a href="single-product.html">{{$product['name']}}</a></h4>
                        <p class="card-product__price">{{(float)$product['price']}} грн.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================ Best Selling item  carousel end ================= -->
    <!-- ================ Subscribe section start ================= -->
    <section class="subscribe-position">
        <div class="container">
            <div class="subscribe text-center">
                <h3 class="subscribe__title">Get Update From Anywhere</h3>
                <p>Bearing Void gathering light light his eavening unto dont afraid</p>
                <div id="mc_embed_signup">
                    <form target="_blank"
                          action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                          method="get" class="subscribe-form form-inline mt-5 pt-1">
                        <div class="form-group ml-sm-auto">
                            <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                            <div class="info"></div>
                        </div>
                        <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ================ Subscribe section end ================= -->
    <!-- ================ Modal windows ========================= -->
    <!-- ================ Modal product view ==================== -->
    <div class="modal fade" id="modal-view-product" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="product-view">

            </div>
        </div>
    </div>
    <!-- ================ Modal cart ============================ -->
    <div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width:1200px; padding: 5px;">
                <h3 style="text-align: center">Оформление заказа</h3>
                    <table class="table cart-table">
                        <thead>
                        <tr>
                            <th scope="col">Товар</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Количество</th>
                            <th scope="col">Сумма</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <!-- ================ End of modal windows ================== -->
@stop

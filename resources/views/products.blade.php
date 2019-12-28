@extends('layouts.main')

@section('meta_title', 'Заголовок страницы')
@section('meta_description', 'Описание страницы')

@section('content')
    <h3>Наши слайдерьі</h3>
    <!-- ================ category section start ================= -->
    <section class="section-margin--small mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-7">
                   <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-md-6 col-lg-4">
                                <div class="card text-center card-product">
                                    <div class="card-product__img">
                                        <img class="card-img" src="{{ URL::to('/') . '/assets/images/product1.png' }}" alt="">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>{{$product->name}}</p>
                                        <h4 class="card-product__title"><a href="#">{{$product->description}}</a></h4>
                                        <p class="card-product__price">{{(float)$product->price}} грн.</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- End Best Seller -->
                </div>
            </div>
        </div>
    </section>
    <!-- ================ category section end ================= -->
@stop

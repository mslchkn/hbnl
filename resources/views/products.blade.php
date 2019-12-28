@extends('layouts.main')

@section('meta_title', 'Заголовок страницы')
@section('meta_description', 'Описание страницы')

@section('content')
    <!-- ================ start banner area ================= -->
    <section class="blog-banner-area" id="contact">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Каталог</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL::route('home.page') }}">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Каталог</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="categories_post">
                        <img class="card-img rounded-0" src="{{ URL::to('/') . '/assets/images/cat-post-3.jpg' }}" alt="post">
                        <a class="@if($current_page == 'catalog.page') active @endif"
                           href="{{ URL::route('catalog.page') }}" >
                            <div class="categories_details">
                                <div class="categories_text">
                                    <h5>Все</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @foreach($categories as $category)
                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="categories_post">
                        <img class="card-img rounded-0" src="{{ URL::to('/') . '/assets/images/cat-post-3.jpg' }}" alt="post">
                        <a class="@if($current_page == 'catalog.category.page.' . $category->id) active @endif"
                           href="{{ URL::route('catalog.category.page', ['category_id' => $category->id]) }}" >
                        <div class="categories_details">
                            <div class="categories_text">
                                    <h5>{{$category->name}}</h5>
                                <div class="border_line"></div>
                                <p>{{$category->description}}</p>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->
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
                                        <p>{{$product->category['name']}}</p>
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

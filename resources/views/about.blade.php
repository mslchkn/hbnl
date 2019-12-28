@extends('layouts.main')

@section('meta_title', 'Заголовок страницы')
@section('meta_description', 'Описание страницы')

@section('content')
    <!-- ================ start banner area ================= -->
    <section class="blog-banner-area" id="contact">
        <div class="container h-100">
            <div class="blog-banner">
                <div class="text-center">
                    <h1>Про нас</h1>
                    <nav aria-label="breadcrumb" class="banner-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ URL::route('home.page') }}">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Про нас</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ end banner area ================= -->
    <!-- ================ category section start ================= -->
    <section class="section-margin--small mb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-8 col-md-7">
                   Информация про нас
                </div>
            </div>
        </div>
    </section>
    <!-- ================ category section end ================= -->
@stop

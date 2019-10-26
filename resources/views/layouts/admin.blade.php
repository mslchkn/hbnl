<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hub Nail - @yield('meta_title', 'title')</title>
    <meta name="description" content="@yield('meta_description', 'description')">
    <link rel="icon" href="@yield('path_favicon', \Illuminate\Support\Facades\URL::asset('assets/img/favicon.png'))"
          type="image/png">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('assets/css/style.css')}}">
</head>
<body>

<section>
    <div class="col-md-12 form-group">
    <div class="text-center">
        <h1>Admin panel</h1>
    </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-lg-2">
            <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget post_category_widget">
                    <ul class="list cat-list">
                        <li>
                            <a href="{{ url('admin/home') }}" class="d-flex justify-content-between">
                                <i class="ti-layout"></i>
                                <p>Main page</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/products') }}" class="d-flex justify-content-between">
                                <i class="ti-layout"></i>
                                <p>Products list</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/product') }}" class="d-flex justify-content-between">
                                <i class="ti-layout"></i>
                                <p>Product</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/cart') }}" class="d-flex justify-content-between">
                                <i class="ti-layout"></i>
                                <p>Cart</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/settings') }}" class="d-flex justify-content-between">
                                <i class="ti-settings"></i>
                                <p>General settings</p>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
        <div class="col-lg-10">
            <aside>
                <div class="text-left">
                    <h3>@yield('title', 'Edit')</h3>
                </div>
                @yield('content')
            </aside>
        </div>
    </div>
</section>
</body>
</html>

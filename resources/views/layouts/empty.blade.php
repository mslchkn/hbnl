<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
@yield('content')

</body>
</html>

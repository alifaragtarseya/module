<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! stripslashes(JsonLd::generate()) !!}
        <meta name="author" content="{{ getSettingValue('site_name_en') }}">

    {{-- <title>@yield('title')</title> --}}

     <!-- Favicon -->
     <link href="{{ asset(getSettingValue('favicon')) }}" rel="icon">

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
     <link href="https://db.onlinewebfonts.com/a/knx47Mn2" rel="stylesheet" type="text/css"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Source+Sans+3&family=Tajawal:wght@500&display=swap');
        body,html,*{
            font-family: "Tajawal", sans-serif;
            font-weight: 600 !important;
            font-style: normal;
            letter-spacing: 1px;
            line-height: 100%;
        }
            :root {
                --primary:#000;
                --secondary: #ECF2F4;
                --light: #F6F7FC;
                --dark: #15233C;
            }
    </style>
     @include('front.layouts.css')
</head>
<body>
     <!-- Spinner Start -->
     {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow main-color" role="status"></div>
    </div> --}}
    <!-- Spinner End -->

    @include('front.layouts.header')
    @yield('content')
    @include('front.layouts.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg bg-main text-white btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('front.layouts.script')
</body>
</html>

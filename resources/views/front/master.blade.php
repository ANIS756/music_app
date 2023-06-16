<!DOCTYPE html>


<html lang="en" class="ie8 no-js">

<html lang="en" class="ie9 no-js">


<html lang="en">


<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    @include('front.includes.css')
</head>

<body id="">
<!----loader Start---->
<div class="ms_loader">
    <div class="wrap">
        <img src="{{asset('/')}}front/assets/images/loader.gif" alt="loader">
    </div>
</div>
<!----Main Wrapper Start---->
<div class="ms_main_wrapper ms_mainindex_wrapper">
    <!---Side Menu Start--->
    @include('front.includes.sidebar')
    <!---Main Content Start--->
    <div class="ms_content_wrapper padder_top8">
        <!---Header--->
        @include('front.includes.header')
        <!---index page--->
        @yield('body')


    </div><!---Main Content end--->

    <!----Audio Player Section---->
    @include('front.includes.audioplayer')

</div>

@include('front.includes.js')
</body>

</html>

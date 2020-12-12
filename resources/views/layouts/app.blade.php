<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="description" content="">
        <!-- Twitter meta-->
        <meta property="twitter:card" content="">
        <meta property="twitter:site" content="">
        <meta property="twitter:creator" content="">
        <!-- Open Graph Meta-->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="">
        <meta property="og:title" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <meta property="og:description" content="">
        <title>{{config('app.name')}}|@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('admin.layouts.head_styles')
    </head>

    <body>
        <section class="material-half-bg">
            <div class="cover"></div>
        </section>
        @yield('content')

        <!-- Essential javascripts for application to work-->
        <script src="{{asset('dashboard/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('dashboard/js/popper.min.js')}}"></script>
        <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('dashboard/js/main.js')}}"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="{{asset('dashboard/js/plugins/pace.min.js')}}"></script>
        <script type="text/javascript">
            // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
    });
        </script>
    </body>

</html>
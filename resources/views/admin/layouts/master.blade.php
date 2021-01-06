<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="description"
            content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
        <!-- Twitter meta-->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:site" content="@pratikborsadiya">
        <meta property="twitter:creator" content="@pratikborsadiya">
        <!-- Open Graph Meta-->
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Vali Admin">
        <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
        <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
        <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
        <meta property="og:description" content="">
        <title>{{config('app.name')}}|@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('admin.layouts.head_styles')
        <style>
            #loading_wrap {
                position: fixed;
                height: 100%;
                width: 100%;
                overflow: hidden;
                top: 0;
                left: 0;
                z-index: 9999;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #loading_wrap h2 .fas {
                transform: scale(1);
                animation: pulse 1s infinite;
            }

            @keyframes pulse {
                0% {
                    transform: scale(0.85);
                }

                70% {
                    transform: scale(1);
                }

                100% {
                    transform: scale(0.85);
                }
            }
        </style>
    </head>

    <body class="app sidebar-mini">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <main class="app-content">
            @yield('content')
        </main>
        @include('admin.layouts.footer_scripts')
        <div id='loading_wrap' class="bg-white">
            <h2 class="text-primary"><i class="fas fa-heartbeat fa-3x"></i></h2>
        </div>
    </body>

</html>
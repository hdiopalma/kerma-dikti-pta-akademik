<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | {{ config('app.name', 'Apliksasi Izin Kerjasama DIKTI') }}</title>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Custom css -->
        @stack('styles')
        <link href="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}" rel="icon" type="image/png">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('layouts.navbar')
            @include('layouts.sidebar')
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <h1>@yield('title')</h1>
                    </div>
                </section>
                <section class="content">
                    <div class="container-fluid">
                        @yield('contents')
                    </div>
                </section>
            </div>
            @include('layouts.footer')
        </div>
        @stack('scripts')

    </body>
</html>
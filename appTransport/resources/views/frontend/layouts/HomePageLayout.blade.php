<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        @yield('meta')
        <meta name="author" content="Công Ty Van Chuyen Quy Long">
        <meta name="copyright" content="Công Ty Van Chuyen Quy Long">
        <meta content="INDEX,FOLLOW" name="robots">

        @include('frontend.partials.homepage_head')
        <style type="text/css">
            @yield('style')
        </style>

    </head>
    <body>
        <div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
            @include('frontend.partials.homepage_header')
            @if(session()->has('success-message'))
                <div class="alert alert-success">
                    {{ session()->get('success-message') }}
                </div>
            @endif
            @if(session()->has('warning-message'))
                <div class="alert alert-warning">
                    {{ session()->get('warning-message') }}
                </div>
            @endif
            @yield('content')
            @include('frontend.partials.homepage_footer')
        </div>
    </body>
</html>

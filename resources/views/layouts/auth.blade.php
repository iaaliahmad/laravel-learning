<!DOCTYPE html>
<html lang="en" class="dark">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('assets/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@stack('title')</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">

            @yield('content')
        
        </div>
        
        <!-- BEGIN: JS Assets-->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>
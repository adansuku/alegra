<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('loginTitle')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
</head>

<body class="bg-gradient-primary">

    <div class="container-fluid">
    
    
    @yield('content')
    </div>


    <!-- Bootstrap core JavaScript, Core plugin JavaScript, Page level plugins -->
    <script src="{{mix('js/app.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{mix('js/customJs/custom.js')}}"></script>

</body>

</html>

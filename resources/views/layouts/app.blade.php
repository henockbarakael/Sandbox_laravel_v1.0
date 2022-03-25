<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Adminos | Login Page') }}</title>
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="{{ asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/authentication/login.css')}}">
    <!--Google Font APIS CSS-->
    <link rel="stylesheet" href="{{ asset('font-googleapis/Nunito.cs')}}s">
    <link rel="stylesheet" href="{{ asset('font-googleapis/PoiretOne.css')}}">
</head>
<body class="default-theme">
    @yield('content')
    <script src="{{ asset('plugins/jquery/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('plugins/popper/popper.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

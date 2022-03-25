<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adminos | Login Page</title>
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('pcss/style.css') }}">
    <link rel="stylesheet" href="{{ asset('pcss/authentication/login.css') }}">
    <!--Google Font APIS CSS-->
    <link rel="stylesheet" href="{{ asset('pfont-googleapis/Nunito.css') }}">
    <link rel="stylesheet" href="{{ asset('pfont-googleapis/PoiretOne.css') }}">
    @livewireStyles
</head>

<body class="default-theme">
    <div class="container">
        {{$slot}}
    </div><!-- /.container -->
    <script src="{{ asset('plugins/jquery/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('plugins/popper/popper.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
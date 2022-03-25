<!--
*
*  Adminos - Responsive Admin Template
*  version 1.0
*
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adminos | Admin Dashboard</title>
    <link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <!--  Feather Icon CSS -->
    <link href="{{ asset('icon/feather/css/feather.css') }}" rel="stylesheet">
    <!-- Toastr style -->
    <link href="{{ asset('plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    <!-- Gritter -->
    <link href="{{ asset('plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="{{ asset('plugins/animate.css/css/animate.css') }}" rel="stylesheet">
    <!-- Radial Charts-->
    <link href="{{ asset('plugins/radial/css/radial.css') }}" rel="stylesheet">
    <!-- Our Custom CSS -->
    <link href="{{ asset('plugins/iCheck/custom.css') }}" rel="stylesheet">
    <!-- Mervick EmojioneArea-->
    <link rel="stylesheet" href="{{ asset('plugins/mervick/emojionearea.css') }}">
    <!--Vector Map CSS-->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/css/jqvmap.css') }}">
    <!-- Jquery-ui-->
    <link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}">
    <!-- Jquery-ui-->
    <link rel="stylesheet" href="{{ asset('img/flag-icon-css/css/flag-icon.css') }}">
    <!-- Custom CSS Style-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--Themify Icons-->
    <link rel="stylesheet" href="{{ asset('icon/themify-icons/themify-icons.css') }}">
    <!--Ion Icons-->
    <link rel="stylesheet" href="{{ asset('icon/ion-icon/css/ionicons.min.css') }}">
    @livewireStyles
</head>
<body class="default-theme canvas-menu mini-navbar">
    @yield('content')
   <!-- Mainly scripts -->
   <script src="{{ asset('plugins/jquery/jquery-3.1.1.min.js') }}"></script>
   <script src="{{ asset('plugins/popper/popper.min.js') }}"></script>
   <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('plugins/metisMenu/jquery.metisMenu.js') }}"></script>
   <script src="{{ asset('plugins/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
    <!--Sparkline JS-->
    <script src="{{ asset('plugins/sparkline/js/jquery.sparkline.min.js') }}"></script>
    <!-- Toastr JS -->
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <!-- GITTER -->
    <script src="{{ asset('plugins/gritter/jquery.gritter.min.js') }}"></script>
    <!-- jquery UI -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Touch Punch - Touch Event Support for jQuery UI -->
    <script src="{{ asset('plugins/touchpunch/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- Pace JS -->
    <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
    <!-- Amcharts4 Resources -->
    <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
    <!--Chart JS-->
    <script src="{{ asset('plugins/chartJS/js/Chart.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
    <!--Mervick EmojioneArea-->
    <script src="{{ asset('plugins/mervick/emojionearea.js') }}"></script>
    <!--VectorMap JS-->
    <script src="{{ asset('plugins/jqvmap/js/jquery.vmap.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/js/jquery.vmap.sampledata.js') }}"></script>
    <!--Jquery Cookies JS-->
    <script src="{{ asset('plugins/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <!--Custom JS-->
    <script src="{{ asset('js/AdminosJS.js') }}"></script>
    <script src="{{ asset('js/pages-js/dashboardv1.js') }}"></script>
    @livewireScripts
</body>

</html>
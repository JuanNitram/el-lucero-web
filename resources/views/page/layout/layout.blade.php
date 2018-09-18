<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Estudio El Lucero</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('assets/page/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="{{asset('assets/page/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

        <!-- Custom fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- Custom styles for this template -->
        <link href="{{asset('assets/page/css/agency.css')}}" rel="stylesheet">
        <link href="{{asset('assets/page/css/estilos.css')}}" rel="stylesheet">

    </head>
    <body id="page-top">
        @yield('content')

        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('assets/page/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/page/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Plugin JavaScript -->
        <script src="{{asset('assets/page/js/jquery.easing.min.js')}}"></script>

        <!-- Contact form JavaScript -->
        <script src="{{asset('assets/page/js/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('assets/page/js/contact_me.js')}}"></script>

        <!-- Custom scripts for this template -->
        <script src="{{asset('assets/page/js/agency.min.js')}}"></script>

        @stack('scripts')
    </body>
</html>
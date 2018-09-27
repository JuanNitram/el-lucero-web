<html>
    <head>
        <title>El Lucero</title>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.min.css')}}"/>    
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/preloader.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/sidebar.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/styles.css')}}"/>    
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/vanilla-dataTables.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/flatpickr.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/admin/css/flatpickr.min.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">El Lucero</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                <a class="nav-link-logout" href="{{ url('auth/logout') }}">Salir</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Secciones</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column">
                        <li class="nav-item">
                        <a class="nav-link {{ section_is_active($section, 'Home') }}" href="{{ url('admin') }}">
                            <span data-feather="home"></span>
                            <i class="fas fa-home"></i><span class="fa-padding">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ section_is_active($section, 'Administradores') }}" href="{{ url('admin/administradores') }}">
                            <span data-feather="layers"></span>
                            <i class="fas fa-users"></i><span class="fa-padding">Administradores</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ section_is_active($section, 'Inscripciones') }}" href="{{ url('admin/inscripciones') }}">
                            <span data-feather="layers"></span>
                            <i class="far fa-clipboard"></i><span class="fa-padding">Inscripciones</span>
                            </a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1 class="h2">{{$section}}</h1>
                <div class="btn-toolbar mb-2 mb-md-0">

                </div>
            </div>

            <div class="container-fluid">
                @yield('content')
            </div>
        </main>

        <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/vanilla-dataTables.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/moment.js')}}"></script>
        <script src="{{asset('assets/admin/js/fontawsome.js')}}"></script>

        @stack('scripts')

    </body>
</html>
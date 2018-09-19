<html>
    <head>
        <title>El Lucero</title>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.min.css')}}"/>    
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/preloader.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/sidebar.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/styles.css')}}"/>    
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/vanilla-dataTables.min.css')}}"/>
    </head>
    <body>
        <header>
            <div class="pos-f-t">
                <nav class="navbar navbar-expand-lg navbar-dark nav-bg-custom">
                    <a href="#menu-toggle" class="navbar-brand" id="menu-toggle">
                        <span class="navbar-toggler-icon"></span>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a href="{{ url('admin') }}" class="location-ref">{{$section}}</a>
                            </li>
                        </ul>
                    </div>
                    
                    <form class="form-inline my-2 my-lg-0" action="{{ url('auth/logout') }}" method="GET">
                        <input class="form-control mr-sm-2 search-input" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0 btn-nav" type="submit">Search</button>
                        <button class="btn btn-secondary btn-nav" type="submit">Salir</button>
                    </form>
                </nav>
            </div>

            <div id="wrapper">
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li>
                            <a href="{{ url('admin/') }}"><button class="button-fill fill">Home</button></a>
                        </li>
                        <li>
                            <a href="{{ url('admin/administradores') }}"><button class="button-fill fill">Administradores</button></a>
                        </li>
                        <li>
                            <a href="{{ url('admin/inscripciones') }}"><button class="button-fill fill">Inscripciones</button></a>
                        </li>
                    </ul>
                </div>
            </div>  
        </header>

        <div class="container-fluid">
            @yield('content')
        </div>

        <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/admin/js/vanilla-dataTables.min.js')}}"></script>
        
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            
            $(document).ready(function(){
                $('#load-screen').delay(800).fadeOut(function(){$(this).remove()});
            });
        </script>

        @stack('scripts')

    </body>
</html>
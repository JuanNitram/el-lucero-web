<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.min.css')}}"/>    
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/preloader.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/sidebar.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/styles.css')}}"/>    
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/vanilla-dataTables.min.css')}}"/>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a href="#menu-toggle" class="btn btn-secondary btn-sm" id="menu-toggle">
                    <span>
                        <img class="manImg" src="{{asset('assets/admin/images/baseline_menu_white_18dp.png')}}"/>
                    </span>
                </a>
                <a href="{{ url('admin') }}" class="location-ref">Home</a>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="menu-link nav-link" href=""></a>
                    </li>
                    </ul>
                </div>
                <form class="form-inline">
                    <input class="form-control search-input mr-sm-2" type="search" placeholder="Busqueda ..." aria-label="Search" disabled>
                    <button class="btn btn-secondary btn-sm my-2 my-sm-0" type="submit">
                    <span>
                        <img class="manImg" src="{{asset('assets/admin/images/baseline_search_white_18dp.png')}}"/>
                    </span>
                    </button>
                </form>
                <form action="{{ url('auth/logout') }}" method="GET">
                    <button class="btn btn-secondary btn-sm ml-sm-2" type="submit">
                    <span>
                        <img class="manImg" src="{{asset('assets/admin/images/outline_exit_to_app_white_18dp.png')}}"/>
                    </span>
                    </button>
                </form>
            </nav>
                    
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
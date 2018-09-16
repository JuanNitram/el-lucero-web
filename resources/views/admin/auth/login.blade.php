<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/styles.css')}}"/>    
    </head>
    <body>
        <div class="container container-center">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/auth/login">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check form-check-login">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                        </div>
                        <div class="form-group form-group-login">
                            <button type="submit" class="btn btn-primary btn-login">Iniciar Sesion</button>
                        </div>
                        {!! csrf_field() !!}
                    </form>
                </div>    
            </div>
        </div>
    </body>
</html>
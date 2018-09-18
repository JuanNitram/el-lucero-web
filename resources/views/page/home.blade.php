@extends('page.layout.layout')

@section('title', 'Page Title')

@section('content')
    <!-- Navigation -->
        <!--<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img src="img/logo.png" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <img src="img/menu.png">
            </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#relevamientoFotografico">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#interpretacionConceptos">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#animacion">Actividades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#resolume">Talleres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#glitch">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#glitch">contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img src="{{asset('assets/page/images/logo.png')}}" alt="">    
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="">
            <img src="{{asset('assets/page/images/menu.png')}}">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#eventosYtalleres">Eventos y Talleres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#equipoDeTrabajo">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#glitch">contacto</a>
                        </li>
            </ul>
        </div>
        </nav>

        <!-- Header -->
        <header class="masthead">
            <div class="container">
                <div class="intro-text">
                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">
                            <div class="intro-lead-in" style="margin-bottom:0">
                                <h1>¡Es hora de despegar!</h1>
                            </div>
                            <hr>
                            <div class="" style="margin-bottom:5px">
                                <p>Estudio El Lucero, es un estudio de ideas y estrategia comercial, enfocado al Turismo, Industria de la Hospitalidad y Comunicación.</p>
                            </div>
                            <a class="btn  text-uppercase js-scroll-trigger" href="#servicios" style="margin-bottom:5px">SERVICIOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- servicios -->
        <section id="servicios" class="bg-white">
            <div class="container">
                <div class="row justify-content-md-center text-center">

                    <div class="col-md-12 ">
                        <h2 class="titulo">Servicios</h2>
                        <p class="descripcion-titulo">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat vo</p>
                        <div class="row justify-content-md-center">
                            <div class="cuadro-exterior col-md-5 text-left">
                                <div class="cuadro-servicios">
                                    <h3>Asesoría en Marketing turístico</h3>
                                    <img src="{{asset('assets/page/images/header.jpg')}}" width="100%">
                                    <hr>
                                    <p>Por experiencia y pasión, trabajamos el desarrollo de productos turísticos, posicionamiento en el Mercado, desarrollo de imagen, calidad del servicio y análisis de procesos operativos.<br>Apertura de emprendimientos turísticos / Desarrollo de producto turístico / Promoción del destino turístico / desarrollo de producto hotelero / Talleres de capacitación en servicios.</p>
                                </div>

                            </div>
                            <div class="cuadro-exterior col-md-5 text-left">
                                <div class="cuadro-servicios">
                                    <h3>Analítica turística</h3>
                                    <img src="{{asset('assets/page/images/header.jpg')}}" width="100%">
                                    <hr>
                                    <p>Entendemos del rubro y nos movemos en él.Tenemos experiencia en la comercialización de productos hoteleros y turísticos, tanto para individuales como para el sector corporativo y de grupos.Realizamos consultoría en Revenue Management, estrategia de comercialización y soporte al área de ventas.<br>Asesorías puntuales / Comercialización de cartera de productos / Promoción / Consolidación de Base de Datos / Trabajo con segmento corporativo y grupos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center serviciosChicos text-center">
                            <div class="cuadro-exterior col-md-2 text-center">
                                <div class="cuadro-servicios">
                                    <h4>Asesoría en Revenue Management</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="cuadro-exterior col-md-2">
                                <div class="cuadro-servicios">
                                    <h4>Capacitaciones para el sector turístico</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="cuadro-exterior col-md-2">
                                <div class="cuadro-servicios">
                                    <h4>Eventos & Talleres</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="cuadro-exterior col-md-2">
                                <div class="cuadro-servicios">
                                    <h4>Desarrollo de imagen</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="cuadro-exterior col-md-2">
                                <div class="cuadro-servicios">
                                    <h4>Proyectos capsula</h4>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Talleres y eventos -->
        <section id="eventosYtalleres" class="bg-white">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <h2 class="titulo text-white">Talleres y eventos</h2>
                    <p class="descripcion-titulo text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat vo</p>
                    <div class="col-md-12 ">
                        <div class="row justify-content-md-center contenedorTaller">
                            <div class="col-md-3">
                                <img src="{{asset('assets/page/images/header.jpg')}}">
                            </div>
                            <div class="col-md-9">
                                <div class="textoTalleres text-left">
                                    <h3>Asesoría en Revenue Management</h3>
                                    <p>15 de Septiembre Montevideo</p>
                                    <a class="inscription-btn" data-toggle="modal" data-target="#InscripcionTaller">inscribirse</a>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center contenedorTaller">
                            <div class="col-md-3">
                                <img src="{{asset('assets/page/images/header.jpg')}}">
                            </div>
                            <div class="col-md-9">
                                <div class="textoTalleres text-left">
                                    <h3>Asesoría en Revenue Management</h3>
                                    <p>15 de Septiembre Montevideo</p>
                                    <a class="inscription-btn" data-toggle="modal" data-target="#InscripcionTaller">inscribirse</a>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-md-center contenedorTaller">
                            <div class="col-md-3">
                                <img src="{{asset('assets/page/images/header.jpg')}}">
                            </div>
                            <div class="col-md-9">
                                <div class="textoTalleres text-left">
                                    <h3>Asesoría en Revenue Management</h3>
                                    <p>15 de Septiembre Montevideo</p>
                                    <a class="inscription-btn" data-toggle="modal" data-target="#InscripcionTaller">inscribirse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Equipo de trabajo -->
        <section id="equipoDeTrabajo" class="bg-white">
            <div class="container">
                <div class="row justify-content-md-center text-center">
                    <h2 class="titulo text-white">Equipo de trabajo</h2>
                    <p class="descripcion-titulo text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat vo</p>
                    <div class="col-md-4" >
                        <div class=" personaDelEquipo text-left">
                            <h3>Guillermina Frick</h3>
                            <img src="{{asset('assets/page/images/guillermina.jpg')}}" width="100%">
                            <hr>
                            <p>Facilitadora, porque me gusta vincular y vincularme. Emprendedora, porque soy una fanática de las ideas y las personas. Turismo, porque me enfoco en entender las motivaciones para mejorar las experiencias. Docente, porque me gusta desafiarme.</p>
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <div class=" personaDelEquipo text-left">
                            <h3>Mariana Silva</h3>
                            <img src="{{asset('assets/page/images/mariana.jpg')}}" width="100%">
                            <hr>
                            <p>Resolutiva, porque me gusta atender al cliente y superar sus expectativas, solucionando sus necesidades. Emprendedora, porque me gusta generar, facilitar posibilidades a las personas y tomar nuevos desafíos. Inquieta en busca de mejorar la productividad y rentabilidad de los negocios. Turismo, porque es donde me he desarrollado profesionalmente desde hace 17 años.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
        
        <footer>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="InscripcionTaller" tabindex="-1" role="dialog" aria-labelledby="InscripcionTallerLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="InscripcionTallerLabel">Inscripción a taller</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <div class="modal-body">
                        <div class="success success-none">
                            <h1>Inscripcion realizada satisfactoriamente!</h1>
                        </div>
                        <div class="sk-fading-circle sk-fading-circle-none">
                            <div class="sk-circle1 sk-circle"></div>
                            <div class="sk-circle2 sk-circle"></div>
                            <div class="sk-circle3 sk-circle"></div>
                            <div class="sk-circle4 sk-circle"></div>
                            <div class="sk-circle5 sk-circle"></div>
                            <div class="sk-circle6 sk-circle"></div>
                            <div class="sk-circle7 sk-circle"></div>
                            <div class="sk-circle8 sk-circle"></div>
                            <div class="sk-circle9 sk-circle"></div>
                            <div class="sk-circle10 sk-circle"></div>
                            <div class="sk-circle11 sk-circle"></div>
                            <div class="sk-circle12 sk-circle"></div>
                        </div>
                        <form id="inscription_form">
                            <div class="form-group">
                                <label for="nombre">Nombre<spam>*</spam></label>
                                <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder="Ingrese su nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido<spam>*</spam></label>
                                <input name="apellido" type="text" class="form-control" id="apellido" aria-describedby="apellido" placeholder="Ingrese su apellido" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email<spam>*</spam></label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electonico" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono de contacto<spam>*</spam></label>
                                <input name="telefono" type="number" class="form-control" id="telefono" placeholder="Ingrese su número de contacto" required>
                            </div>
                            <div class="form-group">
                                <label for="empresa">Empresa/Institución</label>
                                <input name="empresa" type="text" class="form-control" id="empresa" aria-describedby="empresa" placeholder="Empresa para la cual se encuentra trabajando">
                            </div>
                            <div class="form-group">
                                <label for="cargo">Cargo</label>
                                <input name="cargo" type="text" class="form-control" id="cargo" aria-describedby="cargo" placeholder="Cargo que ocupa en la empresa">
                            </div>
                            <div class="form-group">
                                <label for="codigo">Código promocional</label>
                                <input name="codigo" type="text" class="form-control" id="codigo" aria-describedby="codigo" placeholder="Ingrese su codigo promocional">
                            </div>
                                <div class="form-group">
                                    <p>Forma de pago ($1900)<spam>*</spam></p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pagopresencial" id="Presencial" value="0" checked>
                                        <label class="form-check-label" for="pagopresencial1">Presencial (día del evento)</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="transferenciaBancaria" id="Transferencia" value="1">
                                        <label class="form-check-label" for="transferenciaBancaria2">Transferencia bancaria (te enviamos mail con información)</label>
                                    </div>
                                </div>
                            <button id="btn-submit-form" type="submit" class="btn btn-primary">Enviar</button>
                            {!! csrf_field() !!}
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('scripts')
    <script>
        let selected_taller;
        $(document).ready(() => {
            $('.inscription-btn').on('click', () => {
                $('.sk-fading-circle').hide();
                $('#inscription_form').show();
                $('.success').hide();
            });
            $('#inscription_form').submit((e) => {
                e.preventDefault();

                $('.sk-fading-circle').show();
                $('#inscription_form').hide();

                let forma_pago = 0;

                if($('input[id="Transferencia"]').prop('checked')) forma_pago = 1;

                $.post('/save_inscription', {
                    name: $('input[name="nombre"]').val(),
                    surname: $('input[name="apellido"]').val(),
                    telefono: $('input[name="telefono"]').val(),
                    institucion: $('input[name="empresa"]').val(),
                    promocional: $('input[name="codigo"]').val(),
                    cargo: $('input[name="cargo"]').val(),
                    forma_pago,
                    email: $('input[name="email"]').val(),
                    _token: $('input[name="_token"]').val(),
                }).done(function(res){
                    $('.sk-fading-circle').hide();
                    $('.success').show();
                });
            });
        });
    </script>
@endpush
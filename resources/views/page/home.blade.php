@extends('page.layout.layout')

@section('title', 'Page Title')

@section('content')
<nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="page-top">
            <img src="{{asset('assets/page/images/logo.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="">
                <img src="{{asset('assets/page/images/menu.png')}}">
            </span>
        </button>
        <div class="collapse navbar-collapse form-inline" id="navbarText">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#talleres">Talleres</a>
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
                    <div class="col-lg-7 col-md-6 col-12  text-right">
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
                    <h2 class="titulo">SERVICIOS</h2>
                    <p class="descripcion-titulo">Trabajamos con firmas que buscan ampliarse en el mercado local, desarrollar una unidad de negocio o inaugurar un nuevo producto turístico. No hay dos proyectos iguales; todos tienen sus propias exigencias y merecen su propio plan, por lo cual en cada caso armamos un equipo especializado de acuerdo a la magnitud, a los objetivos y al presupuesto.</p>
                    <div class="row justify-content-md-center">
                        <div class="cuadro-exterior col-lg-5 col-md-6 col-sm-6 col-12 text-left">
                            <div class="cuadro-servicios">
                                <h3>Asesoría en Marketing turístico</h3>
                                <img src="{{asset('assets/page/images/uy-natural.jpg')}}" width="100%">
                                <hr>
                                <p>Por experiencia y pasión, trabajamos el desarrollo de productos turísticos, posicionamiento en el Mercado, desarrollo de imagen, calidad del servicio y análisis de procesos operativos.</p>
                                <ul>
                                    <li>Apertura de emprendimientos turísticos</li>
                                    <li>Desarrollo de producto turístico</li>
                                    <li>Promoción del destino turístico</li>
                                    <li>Promoción del destino turístico</li>
                                    <li>Desarrollo de producto hotelero</li>
                                    <li>Talleres de capacitación en servicios.</li>
                                </ul>   
                            </div>
                        </div>
                        <div class="cuadro-exterior col-lg-5 col-md-6 col-sm-6 col-12 text-left">
                            <div class="cuadro-servicios">
                                <h3>Analítica turística</h3>
                                <img src="{{asset('assets/page/images/grafica.jpg')}}" width="100%">
                                <hr>
                                <p>Entendemos del rubro y nos movemos en él.Tenemos experiencia en la comercialización de productos hoteleros y turísticos, tanto para individuales como para el sector corporativo y de grupos.Realizamos consultoría en Revenue Management, estrategia de comercialización y soporte al área de ventas.</p>
                                <br>
                                <ul>
                                    <li>Asesorías puntuales</li>
                                    <li>Comercialización de cartera de productos</li>
                                    <li>Promoción</li>
                                    <li>Consolidación de Base de Datos</li>
                                    <li>Trabajo con segmento corporativo y grupos.</li>
                                </ul>   
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-sm-center serviciosChicos text-center">
                        <div class="cuadro-exterior col-lg-2 col-md-4 col-sm-4 col-6 text-center">
                            <div class="cuadro-servicios chicos">
                                <img src="{{asset('assets/page/images/Revenue-Management.png')}}" alt="">
                                <hr>
                                <h4>Asesoría en Revenue Management</h4>
                            </div>
                        </div>
                        <div class="cuadro-exterior col-lg-2 col-md-4 col-sm-4 col-6">
                            <div class="cuadro-servicios chicos">
                                <img src="{{asset('assets/page/images/Capacitaciones-y-Talleres.png')}}" alt="icono de">
                                <hr>
                                <h4>Capacitaciones para el sector turístico</h4>
                            </div>
                        </div>
                        <div class="cuadro-exterior col-lg-2 col-md-4 col-sm-4 col-6">
                            <div class="cuadro-servicios chicos">
                                <img src="{{asset('assets/page/images/Eventos.png')}}" alt="icono de Eventos">
                                <hr>
                                <h4>Eventos & Talleres</h4>
                            </div>
                        </div>
                        <div class="cuadro-exterior col-lg-2 col-md-4 col-sm-4 col-6 ">
                            <div class="cuadro-servicios chicos">
                                <img src="{{asset('assets/page/images/Desarrollo-de-imagen.png')}}" alt="icono de">
                                <hr>
                                <h4>Desarrollo de imagen</h4>
                            </div>
                        </div>
                        <div class="cuadro-exterior col-lg-2 col-md-4 col-sm-4 col-6">
                            <div class="cuadro-servicios chicos">
                                <img src="{{asset('assets/page/images/Proyectos-capsula.png')}}" alt="icono de">
                                <hr>
                                <h4>Proyectos capsula</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Talleres y eventos -->
    <section id="talleres" class="bg-white">
        <div class="container-fluid degrade1">
            <div class="row justify-content-md-center text-center ">
                <div class="col-12">
                    <h2 class="titulo ">TALLERES</h2>
                    <p class="descripcion-titulo text-white">Nos motiva recorrer, compartir y aprender.<br>Dentro del área Comercial, Marketing y Comunicación, realizamos talleres y eventos que buscan conectar a los empresarios, pymes y profesionales de todo el País, en búsqueda de una constante aprendizaje en base a lo teórico-práctico, siempre con mirada local. </p>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row justify-content-md-center text-center">
                <div class="col-md-12 ">
                    <div class="row justify-content-md-center contenedorTaller">
                        <div class="col-md-3 col-sm-12">
                            <img src="{{asset('assets/page/images/taller-img.jpg')}}" class="img-taller-ver">
                            <img src="{{asset('assets/page/images/taller-h.jpg')}}" class="img-taller-hor">
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="textoTalleres text-left">
                                <h3>Taller Comercialización Turística</h3>
                                <p class="localTaller"> (Colonia) 19/10 Hotel Royal</p>
                                <a data-toggle="collapse" href="#detalledDelTaller2" role="button" aria-expanded="false" aria-controls="detalledDelTaller2" class="btn-masInfo">Más info</a>
                                <a id="taller-colonia" data-toggle="modal" data-target="#InscripcionTaller" class="btn-inscribirse inscription-btn">inscribirse</a>
                                <div class="collapse detalledDelTaller" id="detalledDelTaller2">
                                  <div class="card card-body">
                                    <p>Taller expositivo sobre prácticas de comercialización en el sector turístico, enfocado a todos los agentes, emprendedores o profesionales que trabajan el sector: Gastronomía, Hotelería, Tour&Travel Servicios.</p>
                                    <p>Temario</p>
                                    <ul>
                                        <li>Marketing de servicios: claves y conceptos para vender servicios.</li>  
                                        <li>Revenue Management: estrategias de pricing y canales de distribución.</li>  
                                        <li>Producto Gastronómico: cómo armar y rentabilidad productos gastronómicos.</li>  
                                        <li>Finanzas y Estrategia Comercial: cómo equilibrar costos y ventas.</li>  
                                        <li>Circuitos turísticos: claves y recomendaciones para delinear torus y circuitos turísticos. </li>  
                                    </ul>
                                    <p>
                                        Cronograma<br>
                                            12.50 – 13.00 – Acreditaciones<br>
                                            13.00 – 13.40 – Exposición: Producto Gastronómico (Proinsias O´Neill)<br> 
                                            13.45 – 14.25 – Exposición: Marketing de Servicios (Lic. Guillermina Frick)<br>
                                            14.30 – 15.00 – Exposición: Revenue Management (Mariana Silva)<br>
                                            15.00 – 15.30 – Coffee Break<br>
                                            15.30 – 16.00 – Exposición: Finanzas y Estrategia Comercial. (Cra. Luciana Arriola)<br>
                                            16.00 - 16.30 - Exposición: Circuitos Turísticos. (Lic. Maria Eugenia Gonzalez)<br>
                                            16.30 – 17.30 – Workshops: ronda por temática para profundización.<br>
                                            17.30 – 18.00 – Ronda de Casos: dinámica de presentación de casos locales por parte de asistentes.<br>
                                            18.00 – Certificados y Aftter office
                                      </p>
                                      <p>Inversión: $1900 / Cupos limitados</p>
                                      <a data-toggle="modal" data-target="#InscripcionTaller">inscribirse</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-md-center contenedorTaller">
                        <div class="col-md-3">
                            <img src="{{asset('assets/page/images/taller-img.jpg')}}" class="img-taller-ver">
                            <img src="{{asset('assets/page/images/taller-h.jpg')}}" class="img-taller-hor">
                        </div>
                        <div class="col-md-9">
                            <div class="textoTalleres text-left">
                                <h3>Taller Comercialización Turística</h3>
                                <p class="localTaller">(Mercedes) 9/11 Sala Biblioteca Eusebio Gimenez</p>
                                <a data-toggle="collapse" href="#detalledDelTaller" role="button" aria-expanded="false" aria-controls="detalledDelTaller" class="btn-masInfo">Más info</a>
                                <a id="taller-mercedes" data-toggle="modal" data-target="#InscripcionTaller" class="btn-inscribirse inscription-btn">inscribirse</a>
                                <div class="collapse detalledDelTaller" id="detalledDelTaller">
                                  <div class="card card-body">
                                    <p>Taller expositivo sobre prácticas de comercialización en el sector turístico, enfocado a todos los agentes, emprendedores o profesionales que trabajan el sector: Gastronomía, Hotelería, Tour&Travel Servicios.</p>
                                    <p>Temario</p>
                                    <ul>
                                        <li>Marketing de servicios: claves y conceptos para vender servicios.</li>  
                                        <li>Revenue Management: estrategias de pricing y canales de distribución.</li>  
                                        <li>Producto Gastronómico: cómo armar y rentabilidad productos gastronómicos.</li>  
                                        <li>Finanzas y Estrategia Comercial: cómo equilibrar costos y ventas.</li>  
                                        <li>Circuitos turísticos: claves y recomendaciones para delinear torus y circuitos turísticos. </li>  
                                    </ul>
                                    <p>
                                        Cronograma<br>
                                            12.50 – 13.00 – Acreditaciones<br>
                                            13.00 – 13.40 – Exposición: Producto Gastronómico (Proinsias O´Neill)<br> 
                                            13.45 – 14.25 – Exposición: Marketing de Servicios (Lic. Guillermina Frick)<br>
                                            14.30 – 15.00 – Exposición: Revenue Management (Mariana Silva)<br>
                                            15.00 – 15.30 – Coffee Break<br>
                                            15.30 – 16.00 – Exposición: Finanzas y Estrategia Comercial. (Cra. Luciana Arriola)<br>
                                            16.00 - 16.30 - Exposición: Circuitos Turísticos. (Lic. Maria Eugenia Gonzalez)<br>
                                            16.30 – 17.30 – Workshops: ronda por temática para profundización.<br>
                                            17.30 – 18.00 – Ronda de Casos: dinámica de presentación de casos locales por parte de asistentes.<br>
                                            18.00 – Certificados y Aftter office
                                      </p>
                                      <p>Inversión: $1900 / Cupos limitados</p>
                                      <a data-toggle="modal" data-target="#InscripcionTaller">inscribirse</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-md-center contenedorTaller">
                        <div class="col-md-3">
                            <img src="{{asset('assets/page/images/taller-img.jpg')}}" class="img-taller-ver">
                            <img src="{{asset('assets/page/images/taller-h.jpg')}}" class="img-taller-hor">
                        </div>
                        <div class="col-md-9">
                            <div class="textoTalleres text-left">
                                <h3>Taller Comercialización Turística</h3>
                                <p class="localTaller">(Paysandu) 16/11 Salinas del Almirón Resort Termal </p>
                                <a data-toggle="collapse" href="#detalledDelTaller3" role="button" aria-expanded="false" aria-controls="detalledDelTaller" class="btn-masInfo">Más info</a>
                                <a id="taller-paysandu" data-toggle="modal" data-target="#InscripcionTaller" class="btn-inscribirse inscription-btn">inscribirse</a>
                                <div class="collapse detalledDelTaller" id="detalledDelTaller3">
                                  <div class="card card-body">
                                    <p>Taller expositivo sobre prácticas de comercialización en el sector turístico, enfocado a todos los agentes, emprendedores o profesionales que trabajan el sector: Gastronomía, Hotelería, Tour&Travel Servicios.</p>
                                    <p>Temario</p>
                                    <ul>
                                        <li>Marketing de servicios: claves y conceptos para vender servicios.</li>  
                                        <li>Revenue Management: estrategias de pricing y canales de distribución.</li>  
                                        <li>Producto Gastronómico: cómo armar y rentabilidad productos gastronómicos.</li>  
                                        <li>Finanzas y Estrategia Comercial: cómo equilibrar costos y ventas.</li>  
                                        <li>Circuitos turísticos: claves y recomendaciones para delinear torus y circuitos turísticos. </li>  
                                    </ul>
                                    <p>
                                        Cronograma<br>
                                            12.50 – 13.00 – Acreditaciones<br>
                                            13.00 – 13.40 – Exposición: Producto Gastronómico (Proinsias O´Neill)<br> 
                                            13.45 – 14.25 – Exposición: Marketing de Servicios (Lic. Guillermina Frick)<br>
                                            14.30 – 15.00 – Exposición: Revenue Management (Mariana Silva)<br>
                                            15.00 – 15.30 – Coffee Break<br>
                                            15.30 – 16.00 – Exposición: Finanzas y Estrategia Comercial. (Cra. Luciana Arriola)<br>
                                            16.00 - 16.30 - Exposición: Circuitos Turísticos. (Lic. Maria Eugenia Gonzalez)<br>
                                            16.30 – 17.30 – Workshops: ronda por temática para profundización.<br>
                                            17.30 – 18.00 – Ronda de Casos: dinámica de presentación de casos locales por parte de asistentes.<br>
                                            18.00 – Certificados y Aftter office
                                      </p>
                                      <p>Inversión: $1900 / Cupos limitados</p>
                                      <a data-toggle="modal" data-target="#InscripcionTaller">inscribirse</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Equipo de trabajo -->
    <section id="equipoDeTrabajo" class="bg-white">
        <div class="container-fluid degrade2">
            <div class="row justify-content-md-center text-center">
                <h2 class="titulo text-white">EQUIPO DE TRABAJO</h2>
                <p class="descripcion-titulo text-white">No hay dos proyectos iguales; todos tienen sus propias exigencias y merecen su propio plan, por lo cual en cada caso armamos un equipo especializado de acuerdo a la magnitud, a los objetivos y al presupuesto.</p>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center text-center">
                    
                <div class="col-md-4">
                    <div class=" personaDelEquipo text-left">
                        <h3>Guillermina Frick</h3>
                        <p>Directora y Asesora Marketing Turístico </p>
                        <img src="{{asset('assets/page/images/guillermina.jpg')}}" width="100%">
                        <hr>
                        <p>Facilitadora, porque me gusta vincular y vincularme. Emprendedora, porque soy una fanática de las ideas y las personas. Turismo, porque me enfoco en entender las motivaciones para mejorar las experiencias. Docente, porque me gusta desafiarme. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" personaDelEquipo text-left">
                        <h3>Maria Eugenia Gonzalez</h3>
                        <p>Asesora en Turismo & Investigación </p>
                        <img src="{{asset('assets/page/images/mariana.jpg')}}" width="100%">
                        <hr>
                        <p>Resolutiva, porque me gusta atender al cliente y superar sus expectativas, solucionando sus necesidades. Emprendedora, porque me gusta generar, facilitar posibilidades a las personas y tomar nuevos desafíos. Inquieta en busca de mejorar la productividad y rentabilidad de los negocios. Turismo, porque es donde me he desarrollado profesionalmente desde hace 17 años.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" personaDelEquipo text-left">
                        <h3>Mariana Silva</h3>
                        <p>Asesora Comercial </p>
                        <img src="{{asset('assets/page/images/mariana.jpg')}}" width="100%">
                        <hr>
                        <p>Resolutiva, porque me gusta atender al cliente y superar sus expectativas, solucionando sus necesidades. Emprendedora, porque me gusta generar, facilitar posibilidades a las personas y tomar nuevos desafíos. Inquieta en busca de mejorar la productividad y rentabilidad de los negocios. Turismo, porque es donde me he desarrollado profesionalmente desde hace 17 años.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <h1>jhalsjdfhahdfjhd</h1>
        <p>ahsdfoiajsdñfkañsdkfñadfñalkfalkfdf</p>
    </div>
    <div class="carousel-item">
      <h1>jhalsjdfhahdfjhd</h1>
        <p>ahsdfoiajsdñfkañsdkfñadfñalkfalkfdf</p>
    </div>
    <div class="carousel-item">
      <h1>jhalsjdfhahdfjhd</h1>
        <p>ahsdfoiajsdñfkañsdkfñadfñalkfalkfdf</p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </section>-->


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
                            <p>Forma de pago ($1900)
                                <spam>*</spam>
                            </p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pagopresencial" id="pagopresencial1" value="option1" checked>
                                <label class="form-check-label" for="pagopresencial1">Presencial (día del evento)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="transferenciaBancaria" id="transferenciaBancaria2" value="option2">
                                <label class="form-check-label" for="transferenciaBancaria2">Transferencia bancaria (te enviamos mail con información)</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
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

            $('.inscription-btn').on('click', (e) => {
                if(e.target.id == 'taller-mercedes') selected_taller = 1;
                else if(e.target.id == 'taller-colonia') selected_taller = 0;
                else selected_taller = 2;
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
                    taller_id: selected_taller,
                    forma_pago,
                    email: $('input[name="email"]').val(),
                    _token: $('input[name="_token"]').val(),
                }).done(function(res){
                    window.history.pushState("", "", "/");
                    $('.sk-fading-circle').hide();
                    $('.success').show();
                });

            });

        });
    </script>
@endpush
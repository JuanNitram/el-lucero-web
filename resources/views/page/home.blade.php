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
                    <a class="nav-link js-scroll-trigger" href="#queHacemos">Que Hacemos?</a>
                </li>
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
                    <a class="nav-link js-scroll-trigger" href="#evento">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contacto">contacto</a>
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

     <!-- que hacemos -->
     <section id="queHacemos">
        <div class="container-fluid">
                <div class="row justify-content-md-center text-center ">
                    <div class="col-12">
                        <h2 class="titulo ">¿QUE HACEMOS?</h2>
                        <p class="descripcion-titulo">Nuestra principal labor es ayudar al cliente o entidad a articular la propuesta y facilitarle las herramientas y contactos para que pueda llevarla a cabo.</p>
                    </div>
                </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center text-center ">
                <div class="col-10">
                    <img src="{{asset('assets/page/images/animacionInicio.gif')}}" width="100%" class="desktop">
                    <img src="{{asset('assets/page/images/animacionIniciocel.gif')}}" width="100%" class="mobile">
                </div>
            </div>
        </div>
    </section>

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
                        <img src="{{asset('assets/page/images/mEugenia.png')}}" width="100%">
                        <hr>
                        <p>Licenciada en Dirección de Empresas Turísticas de la UCUDAL y Técnica de la Escuela Superior de Hotelería, Gastronomía, y Turismo del Consejo de Educación Técnico Profesional. Docente y Asistente de Investigación en la Universidad Católica del Uruguay.<br>Cofundadora de Siempre Hay Tours, emprendimiento que propone poner en valor la cultura uruguaya</p>
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
    
    <!-- Evento -->
    <section id="evento">
        <div class="container-fluid">
                <div class="row justify-content-md-center text-center ">
                    <div class="col-12">
                        <h2 class="titulo ">EVENTOS</h2>
                        <p class="descripcion-titulo">Talleres impartidos</p>
                    </div>
                </div>
        </div>
        <div class="container">
                <div class="row justify-content-center text-left ">
                    <div class="col-10 col-sm-4 col-md-3">
                        <div class="cursosYaDictados">
                            <h4 class="">Herramientas para obtener una empresa sana, rentable y en crecimiento</h4>
                            <p class=""><span>Entidad:</span> Programa de AL-Invest apoyo de Union Europea, Camara de Comercio y Estudio SVET</p>
                            <p class=""><span>Lugar y fecha:</span> Montevideo 30/09/16 - Colonia del Sacramento 14/10/2016 – Maldonado 4/11/2016</p>
                            <p class=""><span>Horas impartidas:</span> 8</p>
                            <p class=""><span>Resumen Títulos Ponencias:</span> Comercialización. Importancia de la selección del producto y fijación de precios. Formas de promoción y gestión de marca. Herramientas para la gestión eficiente de canales de distribución.</p>
                        </div>
                    </div>
                    <div class="col-10 col-sm-4 col-md-3">
                        <div class="cursosYaDictados">
                            <h4 class="">Marketing Digital: Taller para brillas en las redes.</h4>
                            <p class=""><span>Entidad:</span> Estudio YoTrabajo</p>
                            <p class=""><span>Lugar y fecha:</span> Colonia del Sacramento, 16/8/17 – 13/9/17 – 4/10/17</p>
                            <p class=""><span>Horas impartidas:</span> 9</p>
                            <p class=""><span>Resumen Títulos Ponencias:</span> Introducción a Marketing Digital y Redes Sociales. Planificación de Campañas Digitales. Planificación Multicanal.</p>
                        </div>
                    </div>
                    <div class="col-10 col-sm-4 col-md-3">
                        <div class="cursosYaDictados">
                            <h4 class="">Taller Comercialización Turística</h4>
                            <p class=""><span>Entidad:</span>  Estudio El lucero</p>
                            <p class=""><span>Lugar y fecha:</span> Centro Comercial e Industrial Carmelo 17/08/2018</p>
                            <p class=""><span>Horas impartidas:</span> 4</p>
                            <p class=""><span>Resumen Títulos Ponencias:</span> Marketing de Servicios en el sector turístico. Claves y conceptos para vender servicios.</p>
                        </div>
                    </div>
                    
                </div>
        </div>
    </section>
    
    <!-- Porfolio -->
    <section id="porfolio">
        <div class="container-fluid">
                <div class="row justify-content-md-center text-center ">
                    <div class="col-12">
                        <h2 class="titulo ">PORFOLIO</h2>
                        <p class="descripcion-titulo">Proyectos en los que hemos participado</p>
                    </div>
                </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-md-center text-center ">
                <div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">
                    <!--<ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>-->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row justify-content-center text-center">
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img class="" src="{{asset('assets/page/images/icons/figariFood.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img class="" src="{{asset('assets/page/images/icons/figari.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img class="" src="{{asset('assets/page/images/icons/figariHotel.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img class="" src="{{asset('assets/page/images/icons/sacramentoManagment.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img class="" src="{{asset('assets/page/images/icons/SART.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row justify-content-center text-center">
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/arapey-thermal.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/BIT.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/logoRc.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/radison.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/logoPsh.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row justify-content-center text-center">
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/sunset.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/frontier.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/logoPDA.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/logoPDV.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row justify-content-center text-center">
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/fb.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/bh1.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/DaysInn.png')}}">
                                    </div>
                                    <div class="col-4 col-sm-4 col-md-4 col-lg-2">
                                        <img src="{{asset('assets/page/images/icons/DaysInnMdo.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only" style="color: black">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="container-fluid">
        <div class="row justify-content-center text-center ">
            <div class="col-12">
                <h2 class="titulo ">CONTACTO</h2>
                <p class="descripcion-titulo">Nuestra base está en Montevideo y Colonia del Sacramento, con cobertura a nivel Nacional de modo remoto.</p>
            </div>
            <div id="mapa" class="col-sm-10 col-md-6 col-lg-6 col-xl-4 col-12">
                <div id="map" style="height: 300px"></div>
            </div>
            <div id="informacion" class="col-sm-10 col-md-6 col-lg-6 col-xl-4 col-12 text-left">
                <h3>MONTEVIDEO</h3>
                <p><i class="material-icons">phone</i>+ 598 99 371 957</p>
                <p><i class="material-icons">email</i>gfrick@estudioellucero.com</p>
                <h3>COLONIA DEL SACRAMENTO</h3>
                <p><i class="material-icons">phone</i>+598 98 450 870</p>
                <p><i class="material-icons">email</i>msilva@estudioellucero.com</p>
            </div>
        </div>
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
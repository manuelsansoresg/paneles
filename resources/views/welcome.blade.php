<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>.:: Servicios | Grupo TIM ::.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <meta name="description" content="Grupo TIM es una empresa en Mérida Yucatán que ofrece una variedad de servicios tecnológicos, incluyendo mantenimiento de computadoras, instalación de paneles solares y cámaras de seguridad CCTV. Nuestro objetivo es brindar soluciones personalizadas y de calidad a hogares y empresas. Contáctenos para obtener una cotización personalizada." />
    <meta name="keywords" content="mantenimiento de computadoras, reparación de computadoras, instalación de paneles solares, cámaras de seguridad, CCTV, tecnología, hogares, empresas, Mérida Yucatán" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    {!! NoCaptcha::renderJs() !!}
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/app.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <div id="inicio"></div>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary">
                <img src="{{ asset('img/logo-grupotim.png') }}" alt="">
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="#" onclick="scrollToElement('inicio')" class="nav-item nav-link">INICIO</a>
                <a   onclick="scrollToElement('servicios')" class="nav-item nav-link cursor">SERVICIOS</a>
                <a href="#" class="nav-item nav-link cursor">BLOG</a>
                <a  onclick="scrollToElement('clientes')" class="nav-item nav-link cursor">CLIENTES</a>
                <a  onclick="scrollToElement('contacto')" class="nav-item nav-link cursor">CONTACTO</a>
               {{--  <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($banners as $banner)
            <div class="owl-carousel-item position-relative" data-dot="<img src='/banners/{{ $banner->image }}'>">
                <img class="img-fluid" src="/banners/{{ $banner->image }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                               {{--  <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           {{--  <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-2.jpg'>">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/carousel-3.jpg'>">
                <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">Pioneers Of Solar And Renewable Energy</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fas fa-desktop text-white"></i>
                        </div>
                        <h6 class="mb-0" data-toggle="">COMPUTACIÓN</h6>
                    </div>
                    <h5 class="mb-3"></h5>
                    <span>Lo que necesites en instalación de servidores, servicio de mantenimiento preventivo y correctivo, hosting y diseño de páginas web, redes y reparación de computadoras.</span>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fas fa-solar-panel text-white"></i>
                        </div>
                        <h6 class="mb-0" data-toggle="">PANELES SOLARES</h6>
                    </div>
                    <h5 class="mb-3"></h5>
                    <span>El sol es una fuente inagotable de energía, úsala de forma confiable y sencilla en tu hogar o negocio, refleja el ahorro en tu consumo de energía eléctrica y contribuye al cuidado ambiental.</span>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fas fa-video text-white"></i>
                        </div>
                        <h6 class="mb-0" data-toggle="">CÁMARAS DE SEGURIDAD CCTV</h6>
                    </div>
                    <h5 class="mb-3"></h5>
                    <span>Un circuito cerrado de cámaras es necesario para supervisar tu hogar o negocio. La seguridad de tus seres querido y de tus bienes al alcance de tus manos. Te asesoramos.</span>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Feature Start -->
    <div id="servicios"></div>

    <!-- paneles -->
    <h2 class="text-primary text-center">PANELES SOLARES</h2>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        
                        <h1 class="mb-4">más de 15 años de experiencia en la industria de la energía solar renovable</h1>
                      
                        <p>
                            La energía solar es una fuente de energía limpia que se puede transformar en energía eléctrica. ¿Cómo podemos aprovecharla? Por medio de paneles fotovoltaicos
                        </p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>los paneles solares pueden ahorrar dinero en la factura de electricidad.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i> La energía solar es una forma limpia y renovable de producir energía. La energía solar no produce emisiones de gases de efecto invernadero ni otros contaminantes atmosféricos.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Durabilidad: Los paneles solares son duraderos y pueden durar hasta 25 años o más con un mantenimiento adecuado.</p>
                        <a href="" class="btn btn-success rounded-pill py-3 px-5 mt-3">+ INFORMACIÓN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- computacion -->
    <h2 class="text-primary text-center">COMPUTACIÓN</h2>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
               
                <div class="col-lg-6 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary"></h6>
                        <h1 class="mb-4">Tecnología al servicio de tu tranquilidad: Soluciones informáticas profesionales</h1>
                      
                        <p>
                            ¿Está buscando soluciones informáticas confiables para actualizar sus equipos y resolver problemas de hardware, software, virus o spyware? En nuestros servicios de computación, contamos con un equipo de profesionales capacitados para brindarle la mejor atención técnica.
                        </p>
                        
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Ahorro de costos: Al invertir en soluciones informáticas profesionales, los clientes pueden ahorrar tiempo y dinero a largo plazo al evitar problemas costosos causados ​​por hardware o software obsoletos o infectados con virus o spyware.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i> Nuestro enfoque en proporcionar soluciones rápidas y efectivas significa que nuestros clientes pueden sentirse seguros de que sus necesidades serán atendidas de manera profesional y confiable.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>nuestros clientes pueden estar seguros de que sus problemas serán resueltos de manera oportuna y eficiente. Esto significa que pueden volver a enfocarse en sus actividades diarias sin perder tiempo o energía en resolver problemas técnicos.</p>
                        <a href="" class="btn btn-success rounded-pill py-3 px-5 mt-3">+ INFORMACIÓN</a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/computer.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- camaras de seguridad --}}

    <h2 class="text-primary text-center">SEGURIDAD</h2>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/camera.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        
                        <h1 class="mb-4">Maximice la seguridad y mejore el servicio con un CCTV personalizado para su negocio o local</h1>
                      
                        <p>
                            Un circuito cerrado de televisión o CCTV es una solución de seguridad y vigilancia esencial para todo tipo de negocios y locales. Nuestros sistemas personalizados pueden adaptarse a las necesidades específicas de cada cliente, ya sea para mejorar la seguridad, la vigilancia o el servicio al cliente. 
                        </p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i> Ofrecemos sistemas de CCTV personalizados para satisfacer las necesidades específicas de su negocio o local.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i> Experiencia en seguridad y vigilancia: Contamos con profesionales altamente capacitados y con experiencia en seguridad y vigilancia para proporcionar soluciones confiables y eficientes.</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Un CCTV puede ayudar a prevenir pérdidas en su negocio o local al disuadir a los delincuentes y detectar actividades sospechosas.</p>
                        <a href="" class="btn btn-success rounded-pill py-3 px-5 mt-3">+ INFORMACIÓN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
   
    {{-- clientes --}}
    
    
    <div class="bg-white">
        <div id="clientes"></div>
        <h2 class="text-primary text-center py-4">CLIENTES</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="owl-carousel owl-theme owl-clients">
                        <div class="item"><h4><img src="/img/clients/grupotim-aditimber.jpg?text=1" class="linkopacity1"></h4></div>
                        <div class="item"><h4> <img src="/img/clients/grupotim-crit.jpg?text=2" class="linkopacity1"></h4></div>
                        <div class="item"><h4> <img src="/img/clients/grupotim-andymaq.jpg?text=3" class="linkopacity1"></h4></div>
                        <div class="item"><h4><img src="/img/clients/grupotim-montessori.jpg?text=4" class="linkopacity1"></h4></div>
                        <div class="item"><h4><img src="/img/clients/grupotim-xaze.jpg?text=5" class="linkopacity1"></h4></div>
                        <div class="item"><h4><img src="/img/clients/grupotim.jpg?text=6" class="linkopacity1"></h4></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="contacto"></div>
    <!-- Quote Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        {{-- <img class="position-absolute img-fluid w-100 h-100" src="img/quote.jpg" style="object-fit: cover;" alt=""> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.75949071340358!2d-89.5785236611863!3d21.026609212423974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56772de31410af%3A0xd725e9f4ce547824!2stim%20Reparaci%C3%B3n%20Computadoras!5e0!3m2!1ses-419!2smx!4v1629747477196!5m2!1ses-419!2smx" class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h1 class="mb-4">¡Contáctanos!</h1>
                        <p class="mb-4 pb-2">Si necesita ayuda con nuestros servicios de mantenimiento de computadoras, instalación de paneles solares o cámaras de seguridad CCTV, contáctenos. Complete el formulario de contacto, llámenos o envíenos un correo electrónico. Nos aseguramos de brindar una atención personalizada y de calidad a nuestros clientes.</p>
                        <p class="text-small text-success">Los campos marcados con * y el captcha son obligatorios</p>
                        <form id="frm-contact">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="*Nombre" name="nombre" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="*Email" name="email" style="height: 55px;" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Teléfono" name="telefono" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="*Asunto" name="asunto" style="height: 55px;" required>
                                </div>
                               
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Mensaje" name="mensaje" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    {!! NoCaptcha::display() !!}
                                </div>
                                <div class="col-12 text-center mt-3" id="content-spinner"  style="display: none;">
                                    <div class="spinner-border" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                      </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-success rounded-pill py-3 px-5" type="submit" id="btn-submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-12 col-md-4 text-white align-self-center">
                    <h5 class="text-white mb-4">Dirección</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                        Calle 18 No. 346 Local 5 por 1-A y 1-B
                        Fracc. Vista Alegre Norte, CP. 97130
                        Mérida, Yucatán
                    </p>
                </div>
                <div class="col-12 col-md-4 text-white align-self-center">
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>999 156 72 24</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>ventas@grupotim.mx</p>
                </div>
                
                <div class="col-12 col-md-4 align-self-center">
                    
                    
                   <div class="text-end col-12">
                       <h5 class="text-white mb-4">Solicite información sin compromiso
                        
                    </h5> 
                        
                   </div>
                </div>
            </div>
        </div>
        <div class="container text-white">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center mb-3 mb-md-0">
                        &copy; <a href="#"> Grupo TIM</a>, Derechos reservados.
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle btn-to-whats"><i class="bi bi-arrow-up"></i></a> --}}
    
    <a target="_blank" href="https://api.whatsapp.com/send?phone=529991567224&amp;text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20" class="btn btn-success rounded-circle position-fixed bottom-0 end-0 m-4 py-2" style="z-index: 1000;">
        <i class="fab fa-whatsapp text-white fa-2x"></i>
      </a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
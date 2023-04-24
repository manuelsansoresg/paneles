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
            <span class="sr-only">Cargando...</span>
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
                <a href="/" onclick="scrollToElement('inicio')" class="nav-item nav-link">INICIO</a>
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

    @yield('content')



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
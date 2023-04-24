@extends('layouts.template')
@section('content')
    
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
                        <a href="/paneles" class="btn btn-success rounded-pill py-3 px-5 mt-3">+ INFORMACIÓN</a>
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
                        <a href="/computacion" class="btn btn-success rounded-pill py-3 px-5 mt-3">+ INFORMACIÓN</a>
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
                        <a href="/camaras" class="btn btn-success rounded-pill py-3 px-5 mt-3">+ INFORMACIÓN</a>
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
@endsection
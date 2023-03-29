(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 500, 'easeInOutExpo');
        return false;
    });
    
    window.scrollToElement = function (id) {
        var element = document.getElementById(id);
        console.log(id);
        element.scrollIntoView({behavior: "smooth"});
    }

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })

    /* for contact */

    const form = document.getElementById('frm-contact');
    const submitBtn = document.getElementById('btn-submit');

    submitBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Obtiene los datos del formulario y los convierte en un objeto
        const formData = new FormData(form);
        const data = {};
        for (const [key, value] of formData.entries()) {
            data[key] = value;
        }
        document.getElementById("content-spinner").style.display = "block";
        // Envía los datos del formulario al servidor usando Axios
        axios.post('/contact', data)
            .then(response => {
            // Maneja la respuesta del servidor en caso de éxito
                document.getElementById("content-spinner").style.display = "none";
                Swal.fire({
                    icon: 'success',
                    html: 'Gracias por contactarnos. <br> Tu correo ha sido enviado con éxito y nos pondremos en contacto contigo lo antes posible. <br>  <br> ¡Que tengas un gran día!',
                    confirmButtonText: 'Aceptar'
                })
            })
            .catch(error => {
                document.getElementById("content-spinner").style.display = "none";
                // Maneja la respuesta del servidor en caso de error
                Swal.fire({
                    icon: 'error',
                    title: 'Ups...',
                    text: 'Revisar los campos obligatorios',
                    confirmButtonText: 'Aceptar'
                })
            });
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });
    
})(jQuery);
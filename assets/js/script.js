$(document).ready(function() {
    $('.burger-menu').click(function(event) {
        $('.burger-menu-icon,.long-menu').toggleClass('burger-active');
    });

    $('.contact-form-popup__btn').click(function(event) {
        $('.contact-form-modal').toggleClass('contact-form-modal-active');
    });

    $('.contact-form-modal-toggle').click(function(event) {
        $('.contact-form-modal').removeClass('contact-form-modal-active');
    });


    $('.brands-slider').slick({
        arrows: false,
        slidesToShow: 5,
        infinite: true,
        slidesToScroll: 1,
        autoplaySpeed: 1000,
        cssEase: 'ease',
        pauseOnFocus: false,
        pauseOnHover: false,
        touchThreshold: 10,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1441,
                settings: {
                slidesToShow: 4
                }
            },
            {
                breakpoint: 771,
                settings: {
                slidesToShow: 3,
                }
            },
            {
                breakpoint: 501,
                settings: {
                slidesToShow: 1,
                }
            }
        ]
    });

    $('.slider-portfolio').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 1000,
        infinite: true,
        cssEase: 'linear',
        touchThreshold: 10,
        responsive: [
            {
                breakpoint: 1301,
                settings: {
                slidesToShow: 3
                }
            },
            {
                breakpoint: 951,
                settings: {
                slidesToShow: 2,
                autoplay: true,
                autoplaySpeed: 1000,

                }
            },
            {
                breakpoint: 581,
                settings: {
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 1000,

                }
            }
            

        ]
        
    });

    $('.feedback-slider').slick({ 
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
        arrows: false,
        dots: true,
    })
    
});





$(document).ready(function() {
    $('#main-menu').smartmenus();

    // Diasble right click menu
    //$(this).bind("contextmenu", function(e) {
    //	e.preventDefault();
    //});


    // Carousel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav:false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: false,
                margin: 20
            }
        }
    });

    // Parallax
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // создаем объект
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed')); // вычисляем коэффициент
            // Присваиваем значение background-position
            var coords = 'center '+ yPos + 'px';
            // Создаем эффект Parallax Scrolling
            $bgobj.css({ backgroundPosition: coords });
        });
    });

    // To Top
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
           //$('#toTop').fadeIn();
        } else {
            //$('#toTop').fadeOut();
        }
    });

    $('#toTop').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });

    // Animate
    jQuery('.ce-textpic, .model-detail__img-wrap, .animate').addClass("visible").viewportChecker ({
        classToAdd: 'visible animated zoomIn',
        offset: 250
    });

});

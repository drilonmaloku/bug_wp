// set up text to print, each item in array is new line
var aText = new Array(
    "Website Development",
    "UI/UX Design",
    "App Development",
    "Branding",
);
var iSpeed = 100; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines

var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row

function typewriter()
{
    sContents =  ' ';
    iRow = Math.max(0, iIndex-iScrollAt);
    var destination = document.getElementById("typedtext");

    while ( iRow < iIndex ) {
        sContents += aText[iRow++] + '<br />';
    }
    destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
    if ( iTextPos++ == iArrLength ) {
        iTextPos = 0;
        iIndex++;
        if ( iIndex != aText.length ) {
            iArrLength = aText[iIndex].length;
            setTimeout("typewriter()", 500);
        }
    } else {
        setTimeout("typewriter()", iSpeed);
    }
}


typewriter();

hamburgerOptions = {
    init :function () {
        $("a.toscroll").on('click',function(e) {
            var url = e.target.href;
            var hash = url.substring(url.indexOf("#")+1);
            $('#menu').removeClass('active');
            $('html, body').animate({
                scrollTop: $('#'+hash).offset().top - 85
            }, 800);


            return false;
        });
        $('.hamburger').on('click',function () {
            $('#menu').toggleClass('active');
        })
        $('.close_hamburger').on('click',function (e) {
            e.preventDefault();
            $('#menu').toggleClass('active');
        })

    }
}
sliderOptions = {
    init : function () {
        $('.services-section-flipcards').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            nextArrow: '.next_slider_service',
            prevArrow: '.prev_slide_service',
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 776,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.team_users_slider').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '.prev_slide_team',
            nextArrow: '.next_slide_team',
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 776,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    }
}
projectsOptions = {
    init : function () {
        if(window.innerWidth < 767){
            $('#projects_section').addClass('container');
        }else{
            $('#projects_section').removeClass('container');
        }
    }
}
servicesOptions = {
    init : function () {
        if(window.innerWidth > 767){
            $('.flip-card').on('mouseover',function () {
                $(this).addClass('active');
            })
            $('.flip-card').on('mouseleave',function () {
                $(this).removeClass('active');
            })
        }else{
            $('.flip-card').on('click',function () {
                $(this).toggleClass('active');
            });
        }

    }
}

jQuery(document).ready(function ($) {
    hamburgerOptions.init();
    sliderOptions.init();
    projectsOptions.init();
    servicesOptions.init();
    // Window Resize Event
    $(window).resize(function () {
        projectsOptions.init();

    });
    /*$(document).mousemove(function(event){
        var fontSize = parseInt($('.text-animation').css('font-size'));
        fontSize++;
        console.log(fontSize);
        $('.text-animation').css('font-size',fontSize+'px');

    });*/
    var animatedSize = 0;
    var currentFont = (window.innerWidth < 1200) ? 55 : 70;
    var letterSpacing = 0;
    var currentSpacing = 2;
    $(window).scroll( function() {
        if(window.innerWidth > 1600){
            var scroll = $(window).scrollTop();
            var speed = 0.15;
            var topOffset = 1000;
            $('.scroller').each(function(){
                var $this = $(this);
                var $parent = $this.parent().closest('.section-about');
                var topOffset = $parent.offset().top;
                var height = $parent.outerHeight(true);
                var parallaxSize = (scroll - topOffset) * speed;

                // prevent parallax when scroll down
                if(scroll > topOffset + height) {
                    return;
                }

                $this.css({
                    'transform': scroll >= topOffset ? ('translateY(' + parallaxSize + 'px)' ) : ''
                });
            });
            animatedSize = currentFont + (scroll /60);
            letterSpacing = currentSpacing + (scroll /200);
            $('.text-animation').css('font-size',animatedSize+'px');
            $('.text-animation').css('letter-spacing',letterSpacing+'px');
        }


    });
});





(function($) {
    "use strict";
    /**
     * [isMobile description]
     * @type {Object}
     */
    window.isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    window.isIE = /(MSIE|Trident\/|Edge\/)/i.test(navigator.userAgent);
    window.windowHeight = window.innerHeight;
    window.windowWidth = window.innerWidth;


// /**
// * Dropdown
// */
    $('[data-init="dropdown"]').each(function(index, el) {

        $(el).find('a.dropdown__toggle').on('click', function(event) {
            event.preventDefault();
            $(el).find('.dropdown__content').toggleClass('open');
            $(el).toggleClass('open');
        });

        $(document).on('click', function(event) {
            var $content = $(el).find('.dropdown__content');
            if ($.contains(el, event.target)) {
                return;
            }

            if ($(el).hasClass('open')) {
                $(el).removeClass('open');
            }

            if ($content.hasClass('open')) {
                $content.removeClass('open');
            }
        });
    });


    $('.js-post-effect').each(function() {
        var contentHeight = $(this).find('.post-02__content').height() + 30;

        if(windowWidth > 768) {
            var contentHeight = $(this).find('.post-02__content').height() + 50;
        }

        $(this).find('.post-02__body').css('transform', 'translateY(' + contentHeight + 'px)');

        $(this).hover(function() {
            $(this).find('.post-02__body').css('transform', 'translateY(' + 0 + 'px)');
        }, function() {
            $(this).find('.post-02__body').css('transform', 'translateY(' + contentHeight + 'px)');
        });
    });
    $(document).ready(function(){
        $('a[href^="#"].clickScroll').on('click',function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function() {
                window.location.hash = target;
            });
        });
    });

    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
    /**
     * Menu
     */
    $('.consult-nav').dropdownMenu({
        menuClass: 'consult-menu',
        breakpoint: 992,
        toggleClass: 'active',
        classButtonToggle: 'navbar-toggle',
        subMenu: {
            class: 'sub-menu',
            parentClass: 'menu-item-has-children',
            toggleClass: 'active'
        }
    });

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $('.header').addClass('shrink');
        } else {
            $('.header').removeClass('shrink');
        }
    });

    /**
     * Event click navbar-toggle
     */
    $('.navbar-toggle').each(function(index, el) {
        $(el).on('click', function(event) {
            event.preventDefault();
            $(el).toggleClass('open');
        });

        $(document).on('click', function(event) {
            var $content = $(el);
            if ($.contains(el, event.target)) {
                return;
            }

            if ($(el).hasClass('open')) {
                $(el).removeClass('open');
            }
        });
    });

    /**
     * Event click search-form
     */
    $('.search-form').each(function(index, el) {
        $(el).on('click', function(event) {
            event.preventDefault();
            $(el).addClass('open');
        });

        $(document).on('click', function(event) {
            var $content = $(el);
            if ($.contains(el, event.target)) {
                return;
            }

            if ($(el).hasClass('open')) {
                $(el).removeClass('open');
            }
        });
    });


})(jQuery);


$('.grid').isotope({
    itemSelector: '.grid-item',
    //percentPosition: true,
    masonry: {
        // use element for option
        //columnWidth: '.grid-sizer',
        //columnWidth : 10,
        //isFitWidth: true
        columnWidth: '.grid-item',
        gutter: 0
    }
}).resize;

// init Isotope
let $grid = $('.grid').isotope({
    // options...
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
});



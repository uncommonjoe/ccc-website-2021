var body = $('body');
var isMobile = false;

$(document).ready(function() {
    checkSize();
    mobileNavigation();
    pace();

    $(window).resize(checkSize);

    $('.side-nav-button').click(function() {
        navigation();
    });

    $('#overlay').click(function() {
        navigation();
    });
});

function checkSize() {
    if ($('.window-mobile').css('float') == 'none') {
        isMobile = true;
    } else {
        isMobile = false;
    }
}

function mobileNavigation() {
    /**** Show #top-fixed-nav after scrolling down a little bit ****/
    if (!isMobile) {
        $('#top-fixed-nav').hide();

        $(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('#top-fixed-nav').fadeIn();
                } else {
                    $('#top-fixed-nav').fadeOut();
                }
            });
        });
    }
}

function navigation() {
    body.toggleClass('nav-open');

    if (body.hasClass('nav-open')) {
        body.on('touchmove', function(e) {
            e.preventDefault();
        });

        body.css('overflow', 'hidden');
    } else {
        body.css('overflow', 'auto');
        body.unbind('touchmove');
    }
}

function pace() {
    paceOptions = {
        ajax: true,
        document: true,
        eventLag: false
    };

    Pace.on('done', function() {
        $('.animate-down, .animate-up').css('transform', 'scaleY(0)');

        setTimeout(function() {
            $('#preloader').css({
                'z-index': '0',
                'bottom': 'auto'
            });
            $('#preloader .row').css('height', '0');
        }, 900);
    });
}

scrollMagic();

function scrollMagic() {
    var controller = new ScrollMagic.Controller();
    var parralaxBg = TweenMax.staggerFromTo(".parallax-bg", 5, { backgroundPosition: "0 100px" }, { backgroundPosition: "0 0" });

    var animation = new TimelineMax().add([
        TweenMax.fromTo(
            ".scroll-fast",
            1, { top: 0 }, { top: -600, ease: Linear.easeNone }
        ),

        TweenMax.fromTo(
            ".scroll-medium",
            1, { top: 0 }, { top: -400, ease: Linear.easeNone }
        ),

        TweenMax.fromTo(
            ".scroll-slow",
            1, { top: 0 }, { top: -200, ease: Linear.easeNone }
        ),
    ]);


    $('.a-fade-up').each(function() {
        new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 1,
                reverse: false
            })
            .setClassToggle(this, 'animated')
            .addTo(controller)
    })

    new ScrollMagic.Scene({
            triggerElement: ".parallax",
            duration: $(window).height() * 1.6,
            triggerHook: 1
        })
        .setTween(animation)
        //.addIndicators()
        .addTo(controller);


    if ($(window).width() > 845) {
        new ScrollMagic.Scene({
                triggerElement: ".pin-trigger",
                triggerHook: .05,
                duration: 400
            })
            .setPin(".pin", { pushFollowers: true })
            //.addIndicators()
            .addTo(controller);
    }


    new ScrollMagic.Scene({
            triggerElement: ".parallax-bg",
            duration: $(window).height() * 3,
            triggerHook: 1
        })
        .setTween(parralaxBg)
        .addIndicators()
        .addTo(controller);
}
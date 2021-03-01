function checkSize() {
    isMobile = "none" == $(".window-mobile").css("float");
}
function mobileNavigation() {
    isMobile ||
        ($("#top-fixed-nav").hide(),
        $(function () {
            $(window).scroll(function () {
                $(this).scrollTop() > 300 ? $("#top-fixed-nav").fadeIn() : $("#top-fixed-nav").fadeOut();
            });
        }));
}
function navigation() {
    body.toggleClass("nav-open"),
        body.hasClass("nav-open")
            ? (body.on("touchmove", function (e) {
                  e.preventDefault();
              }),
              body.css("overflow", "hidden"))
            : (body.css("overflow", "auto"), body.unbind("touchmove"));
}

function scrollMagic() {
    var e = new ScrollMagic.Controller(),
        o = TweenMax.staggerFromTo(".parallax-bg", 5, { backgroundPosition: "0 0" }, { backgroundPosition: "0 -20vh" }),
        n = new TimelineMax().add([
            TweenMax.fromTo(".scroll-fast", 1, { top: 0 }, { top: -600, ease: Linear.easeNone }),
            TweenMax.fromTo(".scroll-medium", 1, { top: 0 }, { top: -400, ease: Linear.easeNone }),
            TweenMax.fromTo(".scroll-slow", 1, { top: 0 }, { top: -200, ease: Linear.easeNone }),
        ]);
    $(".a-fade-up").each(function () {
        new ScrollMagic.Scene({ triggerElement: this, triggerHook: 1, reverse: !1 }).setClassToggle(this, "animated").addTo(e);
    }),
        new ScrollMagic.Scene({ triggerElement: ".parallax", duration: 1.6 * $(window).height(), triggerHook: 1 }).setTween(n).addTo(e),
        $(window).width() > 845 && new ScrollMagic.Scene({ triggerElement: ".pin-trigger", triggerHook: 0.05, duration: 400 }).setPin(".pin", { pushFollowers: !0 }).addTo(e),
        new ScrollMagic.Scene({ triggerElement: ".parallax-bg", duration: 3 * $(window).height(), triggerHook: 1 }).setTween(o).addTo(e);
}
var body = $("body"),
    isMobile = !1;
$(document).ready(function () {
    checkSize(),
        mobileNavigation(),
        
        $(window).resize(checkSize),
        $(".side-nav-button").click(function () {
            navigation();
        }),
        $("#overlay").click(function () {
            navigation();
        });
}),
    scrollMagic();

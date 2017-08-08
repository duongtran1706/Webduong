//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 30) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");

    }

}
);
$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn(50);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut(50);
});
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

(function() {
    var $allMenus = $(".dropdown");
    var $allToggles = $allMenus.find('> a');
    var $allTopLinks = $(".nav > li > a");

    var hoverTimer, blurTimer,
        delay = 500;

    // Reusable functions
    function openMenu($current) {
        $allToggles.attr("aria-expanded", "false");
        $current.attr("aria-expanded", "true");
    }

    function closeMenu($current) {
        $current.attr("aria-expanded", "false");
    }

    function focusSubmenu($current) {
        $current.on("transitionend", function() {
            if ($current.css("visibility") === "visible") {
                $current.find("li:first-child a").focus();
                $current.off("transitionend");
            }
        });
    }

    // Add aria roles
    $(".menu-item.active > a").attr("aria-current", "page");
    $allToggles.attr({
        "aria-haspopup": "true",
        "aria-expanded": "false",
        "role": "button"
    });

    // Open menu on hover
    $allMenus.on("mouseenter", function(e) {
        openMenu($(this).find("[aria-expanded]"));

        clearTimeout(hoverTimer);
    });

    // Close menu after a short delay
    $allMenus.on("mouseleave", function() {
        $element = $(this).find("[aria-expanded]");

        hoverTimer = setTimeout(function() {
            closeMenu($element);
        }, delay);
    });

    // Toggle menu on click, tap, or focus + enter/space
    $allToggles
        .on("click touchstart", function(e) {
            $this = $(this);
            $submenu = $this.next(".dropdown-menu");

            if ($this.attr("aria-expanded") === "true") closeMenu($this);
            else openMenu($this);

            focusSubmenu($submenu);

            e.preventDefault();
        })
        .on("keyup", function(e) {
            if (e.keyCode === 32) {
                openMenu($(this));
                focusSubmenu($(this).next(".sub-menu"));
            }
        });

    // Close menu when refocusing on top-level links
    $allTopLinks.on("focus", function() {
        closeMenu($allToggles);
    });

    // Close menu on esc and focus loss
    $(".site-navigation").on("keyup", function(e) {
        if (e.keyCode === 27) closeMenu($allToggles);
    });

    // Close menu if focus isn't inside site navigation
    $('.dropdown-menu').on('focusout', function(){
        // There's a delay between focusout and re-focus
        setTimeout( function() {
            $focused = $(document.activeElement);
            if($focused.closest('.navbar-fixed-top').length === 0 ) {
                closeMenu($allToggles);
            }
        }, 1);
    });

})();
$(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#on_top').fadeIn();
        } else {
            $('#on_top').fadeOut();
        }
    });
    $('#on_top').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

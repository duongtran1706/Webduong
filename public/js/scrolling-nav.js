
$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn(50);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut(50);
});
//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('hover', 'a.page-scroll', function(event) {
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
        .on("hover", function(e) {
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

})();

var subu;
var subuUl;
var subuUlLi;
var countChildren;
var arrayLastEntry;
var b;
var newi=0;
var currCount=0;

(function($) {
    jQuery.fn.fadeslider = function() {

        //set duration time;
        window.setInterval(setDuration, 3000);
        function setDuration(){
            if(currCount==0){
                currCount=1;
            }
            else{
                $(subuSliderNext);
            }
        }

        subu = $(this).attr('id');
        subuUl = $("#"+subu+' ul');
        subuUlLi = $("#"+subu+' ul li');
        countChildren = subuUl.children().length; //count total li
        arrayLastEntry = countChildren-1;
        b = subuUlLi.hide();

        // push li element to array
        var imgArr = [];
        $(subuUlLi).each(function(){
            imgArr.push(this);
        });

        altTextPrint();
        function altTextPrint(){
            var setValue = $(imgArr[newi]).find('img').attr("alt");
            if(setValue!=0)
            {
                $(imgArr[newi]).append('<div class="slider-title">');
                $('.slider-title').html(setValue).animate({'top':40+'px'},1000)
            }
        };
        function subuSliderNext(){
            $('.slider-title').remove();
            if(arrayLastEntry>newi)
            {
                $(imgArr[newi]).fadeOut(0);
                $(bulArr[newi]).removeClass('bulletactive');
                ++newi;
                $(imgArr[newi]).fadeIn(2000);
                altTextPrint();
                $(bulArr[newi]).addClass('bulletactive');
            }
            else{
                $(imgArr[newi]).fadeOut(0);
                $(bulArr[newi]).removeClass('bulletactive');
                newi=0;
                $(imgArr[newi]).fadeIn(2000);
                altTextPrint();
                $(bulArr[newi]).addClass('bulletactive');
            }
        };
        function subuSlsiderPreview(){
            $('.slider-title').remove();
            if(newi>0)
            {
                $(bulArr[newi]).removeClass('bulletactive');
                $(imgArr[newi]).fadeOut(0);
                $(bulArr[newi-1]).addClass('bulletactive');
                $(imgArr[newi-1]).fadeIn(1000);
                altTextPrint();
                --newi;
            }
            else
            {
                newi=0;
                $(bulArr[newi]).removeClass('bulletactive');
                $(imgArr[newi]).fadeOut(0);
                newi=countChildren-1;
                $(bulArr[newi]).addClass('bulletactive');
                $(imgArr[newi]).fadeIn(1000);
                altTextPrint();

            }
        };

        var vParentDiv=$('<div id="sliderBulet"></div>');
        $('#'+subu).append(vParentDiv);
        for(newk=0; newk<countChildren; newk++)
        {
            var vChildDiv=$('<div>',{'id':'b'+newk});
            $('#sliderBulet').append(vChildDiv);
        }

        var bulArr = [];
        $("#sliderBulet div").each(function(){
            bulArr.push(this);
        });

        var c = subuUlLi.first().show();
        $(bulArr[newi]).addClass('bulletactive');

        $("#sliderBulet div").on("click", function(){
            $('.slider-title').remove();
            var id=$(this).attr("id");
            id = id.replace('b','');
            if(newi<id){
                $(imgArr[newi]).fadeOut(0);
                $(bulArr[newi]).removeClass('bulletactive');
                $(bulArr[id]).addClass('bulletactive');
                $(imgArr[id]).fadeIn(1000);
                newi=id;
                currCount=0;
                altTextPrint();
            }
            else{
                $(imgArr[newi]).fadeOut(0);
                $(bulArr[newi]).removeClass('bulletactive');
                $(bulArr[id]).addClass('bulletactive');
                $(imgArr[id]).fadeIn(1000);
                newi=id;
                currCount=0;
                altTextPrint();
            }
        });
        $('#'+subu).append('<a id="subuprev">','<a id="subunext">');
        $("#subunext").on("click", function(e){
            e.preventDefault();
            subuSliderNext();
            currCount=0;
        });
        $("#subuprev").on("click", function(e){
            e.preventDefault();
            subuSlsiderPreview();
            currCount=0;
        });
    };
})(jQuery);
!function (n) {
    "use strict";
    n.fn.bsTouchSlider=function (i) {
        var a=n(".carousel");
       return this.each(function () {
           function i(i) {
                var a="webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
                i.each(function () {
                    var i=n(this),t=i.data("animation");
                    i.addClass(t).one(a,function () {
                        i.removeClass(t)
                    })
                })
           }
           var t=a.find(".item:first").find("[data-animation ^='animated']");
           a.carousel(),i(t),a.on("slide.bs.carousel",function (a) {
               var t=n(a.relatedTarget).find("[data-animation ^='animated']");
               i(t)
           }),n(".carousel .carousel-inner").swipe({swipeLeft:function (n,i,a,t,e) {
               this.parent().carousel("next")
           },
               swipeRight:function () {
                   this.parent().carousel("prev")
               },
               threshold:0
           })


       })
    }
}(jQuery);
    /*cut text*/
(function($) {
    if ($.fn.motrim) {
        return;
    }
    $.fn.motrim = function(options) {
        var settings = $.extend({
            width: null,
            ellipsis: '...',
            cut_by: null,
        }, options);

        return this.each(function() {
            var textContent = $(this).text();
            if (settings.width == null) {
                var parentWidth = $(this).parent().width();
            }
            else {
                var parentWidth = parseInt(settings.width);
            }
            $('<span id="guide" ad_style="display: none; white-space: nowrap;"></span>').insertBefore(this);

            $(this).html(doTrim(textContent, parentWidth));

            $("#guide").remove();
        });

        function getTextWidth(textElement) {
            var ruler = $("#guide");
            ruler.empty();
            ruler.html(textElement);
            return ruler.width();
        }

        function doTrim(textContent, length) {
            if (settings.cut_by == 'char') {
                return trimByCharacter(textContent, length);
            }
            else if (settings.cut_by == 'word') {
                return trimByWords(textContent, length);
            }
            else {
                return '';
            }
        }

        function trimByCharacter(textContent, length) {
            var tmp = textContent;
            var trimmed = '';
            var splitContent = new Array();
            var newSplit = new Array();
            if (getTextWidth(tmp) > length) {
                splitContent = tmp.trim().split('');
                newSplit = tmp.trim().split('');
                for (index = 0; index < splitContent.length; ++index) {
                    trimmed = newSplit.join('');
                    if (length > getTextWidth(trimmed + settings.ellipsis)) {
                        break;
                    }
                    newSplit = trimmed.split('');
                    newSplit.pop();
                }
                trimmed = trimmed + settings.ellipsis;
            }
            else {
                trimmed = textContent;
            }
            return trimmed;
        }

        function trimByWords(textContent, length) {
            var tmp = textContent;
            var trimmed = '';
            var splitContent = new Array();
            var newSplit = new Array();
            var index;
            if (getTextWidth(tmp) > length) {
                splitContent = tmp.trim().split(' ');
                newSplit = tmp.trim().split(' ');
                for (index = 0; index < splitContent.length; ++index) {
                    trimmed = newSplit.join(' ');
                    if (length > getTextWidth(trimmed + settings.ellipsis)) {
                        break;
                    }
                    newSplit = trimmed.split(' ');
                    newSplit.pop();
                }
                trimmed = trimmed + settings.ellipsis;
            }
            else {
                trimmed = textContent;
            }
            return trimmed;
        }
    }
})(jQuery);
$(document).ready(function() {
    $('.slide-text>p').motrim({cut_by: 'word',width: '350px'});
    $('.slide-text>h1').motrim({cut_by: 'word',width: '350px'});
});
    $('#touch-slider').bsTouchSlider();


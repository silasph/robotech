$(document).ready(function () {
    $(document).foundation();
    fullscreen('.fullscreen');

    anchorLinks();
    goTop();
    onScroll();

    backgroundParallax('.bg-parallax');

    $(window).resize(function () {
        fullscreen('.fullscreen');
    });
});

function goTop()
{
    var wh = $(window).height()/2;
    var $gotop = $('.go-top');

    $(window).scroll(function() {
        if($(window).scrollTop() > wh) {
            $gotop.fadeIn();
        } else {
            $gotop.fadeOut();
        }
    });

    $gotop.click(function() {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
  });
}

function fullscreen(selector)
{
    var wh = $(window).height();
    $(selector).css('min-height', wh);
}

function backgroundParallax(selector)
{
    $(window).scroll(function() {
        toTop = $(this).scrollTop();
        $(selector).css('background-position', '0 ' + (toTop/1.9) + 'px');
    });
}

function onScroll()
{
    var fslogan = ($(window).height()/2) - 125;

    $(window).scroll(function() {
        if($(window).scrollTop() >= fslogan) {
            $('header .slogan').fadeOut('slow');
        } else {
            $('header .slogan').fadeIn('slow');
        }

        if($(window).scrollTop() >= ($(window).height()-65)) {
            $('nav.top-bar').addClass('scroll');
        } else {
            $('nav.top-bar').removeClass('scroll');
        }
    });
}

function anchorLinks()
{
    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top-65
        }, 500);
        return false;
    });
}
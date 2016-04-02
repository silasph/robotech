$(document).ready(function () {
    $(document).foundation();
    fullscreen('.fullscreen');

    anchorLinks();

    onScroll();

    backgroundParallax('.bg-parallax');

    $(window).resize(function () {
        fullscreen('.fullscreen');
    });
});

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
    });
}

function anchorLinks()
{
    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });
}
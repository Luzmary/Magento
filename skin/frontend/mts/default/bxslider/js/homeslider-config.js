jQuery(function(j$) {

j$('.slider1').bxSlider({
    pager: false,
    infiniteLoop: false,
    hideControlOnEnd: true
});

j$('.slider2').bxSlider({
    pager: false,
    infiniteLoop: false,
    hideControlOnEnd: true,
    adaptiveHeight: true
});

j$('.slider3').bxSlider({
    mode: 'vertical',
    slideWidth: 285,
    minSlides: 5,
    moveSlides: 1,
    slideMargin: 20,
    pager: false,
    infiniteLoop: false,
    hideControlOnEnd: true
});

j$('.slider7').bxSlider({
    slideWidth: 183,
    minSlides: 1,
    maxSlides: 6,
    moveSlides: 1,
    slideMargin: 0,
    pager: false,
    infiniteLoop: false,
    hideControlOnEnd: true
});

});
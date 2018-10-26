(function($){
    // jumbo slider
    $('.visual-slider').on('init', function(){
        $('video').each(function () {
            this.play();
        });
    });
    $(document).ready(function(){
        $('.visual-slider').slick({
            arrows: false,
            dots: false
        });
    });
    $('.visual-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active').addClass('action'); 
        });
    });
    $('.visual-slider').on('init', function(event,slick){
        setTimeout(function(){ 
            $('.slick-active').addClass('action'); 
        });
    });

    // our-shop slider
    $(document).ready(function(){
        $('.shop-slider').slick({
            arrows: false,
            dots: true
        });
    });

    // our-brands slider
    $(document).ready(function(){
        $('.our-partners .partners-area > ul').slick({
            arrows: false,
            dots: true,
            slidesToShow: 2,
            slidesToScroll: 2
        });
    });
    
    // effect event
    $(window).on('scroll', function() {
        $('.special-agent').each(function(index, elem) {
            if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                $(elem).addClass('on');
            }
        });
    });

})(jQuery);
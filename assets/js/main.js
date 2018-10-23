(function($){
    // visual slider
    $('.visual-slider').on('init', function(){
        $('video').each(function () {
            this.play();
        });
    });
    $(document).ready(function(){
        $('.visual-slider').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            prevArrow: '<div class="control-btn btn-left"><button type="button" class="slick-prev"><i class="icon-left-open"></i></button></div>',
            nextArrow: '<div class="control-btn btn-right"><button type="button" class="slick-next"><i class="icon-right-open"></i></button></div>'
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

    // shops-list slider
    $(document).ready(function(){
        $('.shops-list ul').slick({
            dots: true,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });

    // our-brands slider
    $(document).ready(function(){
        $('.our-brands ul').slick({
            dots: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 4
        });
    });
    
    // effect event
    $(window).on('scroll', function() {
        $('.special-agent > .container-fluid > article').each(function(index, elem) {
            if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                $(elem).addClass('on');
            }
        });
    });
})(jQuery);
(function($){
    // gnb open event
    $(document).on('click','#header .btn-nav-open', function(){
        $(this).addClass('btn-nav-close');
        $(this).removeClass('btn-nav-open');
        $('body').addClass('opened');
    });
    $(document).on('click','#header .btn-nav-close', function(){
        $(this).addClass('btn-nav-open');
        $(this).removeClass('btn-nav-close');
        $('body').removeClass('opened');
    });
})(jQuery);
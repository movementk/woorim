<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- Content -->
    <main id="content">
        <div class="jumbotron">
            <ul class="visual-slider">
                <li>
                    <video class="video" loop muted autoplay>
                        <source src="/assets/images/video/21655117-preview.mp4" type="video/mp4">
                        <!--<source src="movie.ogg" type="video/ogg">-->
                            Your browser does not support the video tag.
                    </video>
                    <div class="slogan">
                        <div class="table-box">
                            <div class="v-align">
                                <h3>Join us, Be the best</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(/assets/images/main/img_slider01.jpg);">
                    <div class="slogan">
                        <div class="table-box">
                            <div class="v-align">
                                <h3>Join us, Be the best</h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li  style="background-image: url(/assets/images/main/img_slider01.jpg);">
                    <div class="slogan">
                        <div class="table-box">
                            <div class="v-align">
                                <h3>Join us, Be the best</h3>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--section class="special-agent">
            <div class="container-fluid">
                <article>
                    <figure>
                        <img src="/assets/images/main/img_special_agent01.jpg" class="img-fluid" alt="">
                    </figure>
                    <div class="details">
                        <small>Who we us</small>
                        <h3>We are specialized distributor <br>in Duty Free market</h3>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="/assets/images/main/img_special_agent02.jpg" class="img-fluid" alt="">
                    </figure>
                    <div class="details">
                        <p>
                            Since the beginning of 2000s, Korea's duty-free market has been <br>
                            developing and its market size has exceeded USD 10 billion. <br><br>
                            Woorim Trade is a specialized distributor in the Korea Duty Free Shop <br>
                            and is expanding and growing with our valuable partners.
                        </p>
                        <ul>
                            <li><a href="#">Our mission <span></span></a></li>
                            <li><a href="#">Our vision <span></span></a></li>
                            <li><a href="#">Our history <span></span></a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </section-->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        (function($){
            // header scrolled event
            /*
            $(window).on('scroll', function(){
                if( $(this).scrollTop() > 0 ){
                    $('body').addClass('scrolled');
                } else {
                    $('body').removeClass('scrolled');
                }
            });
            */
            
            // visual slider
            $('.visual-slider').on('init', function(){
                $('video').each(function () {
                    this.play();
                });
            });
            $(document).ready(function(){
                $('.visual-slider').slick({
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
        })(jQuery);
    </script>
</body>
</html>
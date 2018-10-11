<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- Content -->
    <main id="content">
        <div class="jumbotron">
            <ul class="visual-slider">
                <li>
                    <video loop autoplay class="video">
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
                <li style="background-image: url(/assets/images/main/img_slider01.jpg);">
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
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
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
            $(document).ready(function(){
                $('.visual-slider').bxSlider({
                    auto: true,
                    pause: 6000,
                    pager: false,
                    autoHover: true,
                    prevText: '<i class="icon-left-open"><span class="sr-only">이전</span></i>',
                    nextText: '<i class="icon-right-open"><span class="sr-only">다음</span></i>',
                    onSliderLoad: function(currentIndex) {
                        var jumboVideo = $(".visual-slider li:not('.bx-clone'):eq("+currentIndex+")").addClass('active').find("video").get(0);
                        if (jumboVideo) {
                            jumboVideo.play();
                        }
                    },
                    onSlideBefore: function($slideElement, oldIndex, newIndex) {
                        //var jumboVideo = $slideElement.find("video").get(0);
                        var jumboVideo = $(".visual-slider li:not('.bx-clone'):eq("+oldIndex+")").find("video").get(0);
                        console.log(jumboVideo, oldIndex, newIndex);
                        if (jumboVideo) {
                            jumboVideo.pause();
                        }
                    },
                    onSlideAfter: function($slideElement, oldIndex, newIndex) {
                        //var jumboVideo = $slideElement.find("video").get(0);
                        $slideElement.siblings('.active').removeClass('active');
                        $slideElement.addClass('active');
                        var jumboVideo = $(".visual-slider li:not('.bx-clone'):eq("+newIndex+")").find("video").get(0);
                        console.log(jumboVideo, oldIndex, newIndex);
                        if (jumboVideo) {
                            jumboVideo.play();
                        }
                    }
                });
            });
        })(jQuery);
    </script>
</body>
</html>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/mobile/assets/css/style.css">
</head>
<body class="introduction">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="introduce">
        <div class="page-header">
            <div class="container">
                <div class="details">
                    <small>Who we are</small>
                    <h3>We are specialized distributor <br>in Duty Free market</h3>
                    <p>
                        Since the beginning of 2000s, <br>
                        Korea's duty-free market has been developing and <br>
                        its market size has exceeded USD 10 billion.
                    </p>
                </div>
            </div>
            <div class="slogan">
                <p>
                    Woorim Trade is a specialized<br> distributor in the Korea<br> Duty Free Shop and is expanding<br> and growing with our valuable<br> partners.
                </p>
            </div>
        </div>
        <section class="mission-vision">
            <div class="container">
                <h4>Mission &amp; Vision</h4>
                <article class="mission">
                    <figure>
                        <img src="/mobile/assets/images/introduction/img_mission.jpg" class="img-fluid" alt="">
                        <figcaption>
                            <h5>Our Mission</h5>
                            <p>
                                Brand development to succeed in Korea's duty-free market.
                            </p>
                        </figcaption>
                    </figure>
                </article>
                <article class="vision">
                    <figure>
                        <img src="/mobile/assets/images/introduction/img_vision.jpg" class="img-fluid" alt="">
                        <figcaption>
                            <h5>Our Vision</h5>
                            <p>
                                As a specialized distributor in the Korea Duty Free 
                                market, we are growing along with the Korean Duty Free Shop.
                            </p>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </section>
        <section class="history">
            <div class="container">
                <h4>Our history</h4>
                <ol>
                    <li>
                        <dl>
                            <dt>2017 <span class="line"></span></dt>
                            <dd>Importing Japan and Australia’s cosmetic</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>2016 <span class="line"></span></dt>
                            <dd>Entering Duty Free business</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>2012 <span class="line"></span></dt>
                            <dd>Importing food business</dd>
                        </dl>
                    </li>
                    <li>
                        <dl>
                            <dt>2011 <span class="line"></span></dt>
                            <dd>Established</dd>
                        </dl>
                    </li>
                </ol>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script>
        (function($){
            setTimeout(function(){
                $('.page-header').addClass('action');
            });
        })(jQuery);
    </script>
</body>
</html>
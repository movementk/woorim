<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/mobile/assets/css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <div class="jumbotron">
            <ul class="visual-slider">
                <li>
                    <video class="video" loop muted autoplay>
                        <source src="/assets/images/video/21655117-preview.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                    </video>
                    <div class="details">
                        <div class="v-align">
                            <h3>Join us, Be the best</h3>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(/mobile/assets/images/main/img_slider01.jpg);">
                    <div class="details">
                        <div class="v-align">
                            <h3>Join us, Be the best</h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <section class="special-agent">
            <div class="container">
                <small>Who we us</small>
                <h3>We are specialized distributor in Duty Free market</h3>
                <p>
                    Since the beginning of 2000s, Korea's duty-free market has been developing and its market size has exceeded USD 10 billion. 
                    <br><br>
                    Woorim Trade is a specialized distributor in the Korea Duty Free Shop and is expanding and growing with our valuable partners.
                </p>
                <ul>
                    <li><a href="/mobile/introduction/introduce.php">Our mission</a></li>
                    <li><a href="/mobile/introduction/introduce.php">Our vision</a></li>
                    <li><a href="/mobile/introduction/introduce.php">Our hisoty</a></li>
                </ul>
            </div>
        </section>
        <section class="brand-value">
            <div class="container">
                <small>What we do</small>
                <h3>Brand value and philosophy is <br>our priority</h3>
                <p>Woorim Trade has been operating brands that <br>
                can succeed in Korea's duty free market based on its <br>
                brand value and philosophy.</p>
                <div class="btn-more">
                    <a href="/mobile/business/work.php" class="btn btn-default">Detail view</a>
                </div>
            </div>
        </section>
        <section class="our-shops">
            <div class="container">
                <h3>Our Shops</h3>
                <ul class="shop-slider">
                    <li>
                        <div class="item-img">
                            <figure>
                                <img src="/mobile/assets/images/main/img_shops_slide01.jpg" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="details">
                            <div>
                                <h4>The Shilla DFS</h4>
                                <div class="btn-more">
                                    <a href="/mobile/shop/shop_list.php" class="btn btn-default">Detail view</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-img">
                            <figure>
                                <img src="/mobile/assets/images/main/img_shops_slide01.jpg" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="details">
                            <div>
                                <h4>The Shilla DFS</h4>
                                <div class="btn-more">
                                    <a href="/mobile/shop/shop_list.php" class="btn btn-default">Detail view</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="office">
            <article class="seoul-office">
                <div class="container">
                    <small>Local office</small>
                    <h3>Seoul office</h3>
                    <address>
                        TWO IFC 22F <br>
                        10, Gukjegeum-ro Yeodeungpo-ku<br>
                        Seoul Korea
                    </address>
                </div>
            </article>
            <article class="japan-office">
                <div class="container">
                    <small>Local office</small>
                    <h3>Japan Office</h3>
                    <address>
                        K TOWER  4F, 1-2-7 Motoakasaka <br>
                        Minato-ku Tokyo-to 107-0051 <br>
                        JAPAN
                    </address>
                </div>
            </article>
            <article class="warehouse">
                <div class="container">
                    <small>Local office</small>
                    <h3>Warehouse</h3>
                    <address>
                        Kumno-gil 2-50 Anseong-si <br>
                        Kyounggi-do<br>
                        South korea 
                    </address>
                </div>
            </article>
        </section>
        <section class="our-brands">
            <div class="container">
                <article class="brand-area">
                    <h3>Our Brands</h3>
                    <ul class="row">
                        <li class="col-6">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/assets/images/main/img_brand_logo01.jpg" alt="">
                                </figure>
                            </a>
                        </li>
                        <li class="col-6">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/assets/images/main/img_brand_logo02.jpg" alt="">
                                </figure>
                            </a>
                        </li>
                        <li class="col-6">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/assets/images/main/img_brand_logo01.jpg" alt="">
                                </figure>
                            </a>
                        </li>
                        <li class="col-6">
                            <a href="#">
                                <figure>
                                    <img src="/mobile/assets/images/main/img_brand_logo02.jpg" alt="">
                                </figure>
                            </a>
                        </li>
                    </ul>
                </article>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script src="/mobile/assets/js/main.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>
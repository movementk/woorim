<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="sub business">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- Content -->
    <main id="content" class="work">
        <div class="page-header">
            <figure>
                <img src="/assets/images/business/img_work_pageheader.jpg" class="img-fluid" alt="">
            </figure>
            <div class="slogan">
                <small>What we do</small>
                <h3>Brand value and <br>philosophy is our priority</h3>
                <p>
                    Woorim Trade has been operating brands that can succeed in <br>
                    Korea's duty free market based on its brand value and philosophy.
                </p>
            </div>
        </div>
        <section class="process">
            <div class="container">
                <div class="section-header">
                    <h4>Process</h4>
                </div>
                <div class="section-content">
                    <ul class="row">
                        <li class="col-4">
                            <div class="item-icon">
                                <img src="/assets/images/business/icon_process01.png" alt="">
                            </div>
                            <div class="details">
                                <dl>
                                    <dt>01</dt>
                                    <dd>Identify brands appropriate to our<br> duty-free market</dd>
                                </dl>
                            </div>
                        </li>
                        <li class="col-4">
                            <div class="item-icon">
                                <img src="/assets/images/business/icon_process02.png" alt="">
                            </div>
                            <div class="details">
                                <dl>
                                    <dt>02</dt>
                                    <dd>Offer entry into the duty-free market</dd>
                                </dl>
                            </div>
                        </li>
                        <li class="col-4">
                            <div class="item-icon">
                                <img src="/assets/images/business/icon_process03.png" alt="">
                            </div>
                            <div class="details">
                                <dl>
                                    <dt>03</dt>
                                    <dd>Establish a strategy for brands to <br>succeed in the duty-free market</dd>
                                </dl>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script>
        (function($){
            setTimeout(function(){
                $('.page-header').addClass('action');
            });
        })(jQuery);
    </script>
</body>
</html>
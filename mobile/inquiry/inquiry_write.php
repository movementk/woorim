<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="/mobile/assets/css/style.css">
</head>
<body class="inquiry">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <section class="inquiry-write">
            <div class="container">
                <div class="section-header">
                    <h3>Inquiry</h3>
                    <p>Thank you for visiting our website. <br>Please fill out the form below for your inquiry.</p>
                </div>
                <div class="section-content">
                    <form action="#">
                        <ul>
                            <li>
                                <label for="u-name">Your name</label>
                                <div class="form-group">
                                    <input type="text" id="u-name" class="form-control">
                                </div>
                            </li>
                            <li>
                                <label for="u-mail">E-mail</label>
                                <div class="form-group">
                                    <input type="text" id="u-mail" class="form-control">
                                </div>
                            </li>
                            <li>
                                <label for="u-subject">Subject</label>
                                <div class="form-group">
                                    <input type="text" id="u-subject" class="form-control">
                                </div>
                            </li>
                            <li>
                                <label for="u-comment">Comment</label>
                                <div class="form-group">
                                    <textarea id="u-comment" class="form-control"></textarea>
                                </div>
                            </li>
                        </ul>
                        <div class="btn-area">
                            <p>
                                <button type="submit" class="btn btn-send">Send</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
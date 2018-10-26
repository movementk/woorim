<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="sub inquiry">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- Content -->
    <main id="content">
        <section class="inquiry-write">
            <div class="container">
                <div class="section-header">
                    <h3>Inquiry</h3>
                    <p>Thank you for visiting our website. Please fill out the form below for your inquiry.</p>
                </div>
                <div class="section-content">
                    <form action="#">
                        <div class="table-wrap">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th><label for="u-name">Your name</label></th>
                                        <td class="s-form">
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-mail">E-mail</label></th>
                                        <td class="s-form">
                                            <div class="form-group">
                                                <input type="text" id="u-mail" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-subject">Subject</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="v-top"><label for="u-comment">Comment</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control" id="u-comment"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
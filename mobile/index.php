<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link rel="stylesheet" href="/mobile/assets/css/main.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content">
        <div class="container">
            
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script>
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
    </script>
</body>
</html>
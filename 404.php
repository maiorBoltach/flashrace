<?php 
include_once '/php/config.inc.php'; 
include_once '/php/header_logged.php';
 ?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">


<link rel="shortcut icon" href="images/splash/favicon.ico" type="image/x-icon" /> 
    
<title><?php echo $PRETITLE; ?> | Ошибка 404</title>

<link href="styles/style.css"           rel="stylesheet" type="text/css">
<link href="styles/framework.css"       rel="stylesheet" type="text/css">
<link href="styles/font-awesome.css"    rel="stylesheet" type="text/css">
<link href="styles/animate.css"         rel="stylesheet" type="text/css">

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jqueryui.js"></script>
<script type="text/javascript" src="scripts/framework-plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</head>

<body class="left-sidebar"> 

<?php include_once '/templates/preloader.php'; ?>
    
<div class="gallery-fix"></div> <!-- Important for all pages that have galleries or portfolios -->
    
<div id="header-fixed" class="header-style-1">
    <a class="header-1 open-left-sidebar" href="#"><i class="fa fa-navicon"></i></a>
    <a class="header-logo" href="/index.php"><img src="images/logo-dark2.png" alt="img"></a>
</div>
    
            
<div class="all-elements">
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-left">        
            <div class="sidebar-header-left">
                <a href="/index.php"><img src="images/logo-dark2.png" alt="img"></a>
                <a class="close-sidebar" href="#"><i class="fa fa-times"></i></a>
            </div>      
        
			<?php 
				include_once 'templates/main_menu.php';
				include_once 'templates/user_menu.php';
				include_once 'templates/admin_menu.php';
			    include_once 'templates/sponsors.php'; ?>
                       
            <p class="sidebar-footer">Copyright 2015. Все права защищены</p>
            
        </div>
        
        <div id="content" class="snap-content">
            <div class="header-clear"></div>
                
            <div class="error-page bg-3 cover-screen">    
                <div class="error-content cover-center">
                    <div class="unboxed-layout">
                        <h3>Ошибка 404</h3>
                        <h4>Здесь ничего нету, проходите мимо!</h4>
                        <p>
                            Давайте Вы больше не будете сюда заходить, а пойдёте и поучаствуете в нашей замечательной гонке. Хорошо?
							<br>Вот и славненько ;)
                        </p>
                        <a href="index.php" class="back-home"><i class="fa fa-home"></i></a>
                    </div>
                </div>
                <div class="overlay bg-black"></div>
                <a href="index.php" class="left-button"><i class="fa fa-home"></i>Вернуться домой</a>
            </div>
                         
            <!-- End of entire page content-->
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Наверх</a>
</div>
    
</body>































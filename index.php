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
    
<title><?php echo $PRETITLE; ?> | Главная</title>

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
        
            <p class="sidebar-divider">Главное меню</p>
            
            <div class="sidebar-menu">
                <a class="menu-item  menu-item-active" href="index.php">
                    <i class="fa fa-home"></i>
                    <em>Главная</em>
                    <i class="fa fa-circle"></i>
                </a>       
			<a class="menu-item" href="about.php">
                    <i class="fa fa-info"></i>
                    <em>О мероприятии</em>
                    <i class="fa fa-circle"></i>
                </a>                 
                             
                <a class="menu-item close-sidebar" href="#">
                    <i class="fa fa-times"></i>
                    <em>Закрыть</em>
                    <i class="fa fa-circle"></i>
                </a>
            </div>
            
			 <?php 
				include_once 'templates/user_menu.php';
				include_once 'templates/admin_menu.php';
			    include_once 'templates/sponsors.php'; ?>
                       
            <p class="sidebar-footer">Copyright 2015. Все права защищены</p>
            
        </div>     
               
        
        
        <div id="content" class="snap-content">
            <div class="content">
            <div class="header-clear"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->

                <div class="homepage-slider container-fullscreen">
                    <div class="homepage-slider-transition" data-snap-ignore="true">
                        <div class="homepage-slider-item">
                            <h5 class="right-text">Добро пожаловать!</h5>
                            <p class="right-text">FLASHRCE - спортивно-интеллектуальная гонка</p>
                            <img src="images/pictures/slider/5.jpg" alt="img">
                            <div class="overlay bg-black"></div>
                        </div>                
                        <div class="homepage-slider-item">
                            <h5 class="center-text">FLASHRACE - игра для умных</h5>
                            <p class="center-text">А также сообразительных!</p>
                            <img src="images/pictures/slider/2.jpg" alt="img">
                            <div class="overlay bg-black"></div>
                        </div>                
                        <div class="homepage-slider-item">
                            <h5 class="right-text">FLASHRACE - спортивная гонка</h5>
                            <p class="right-text">Настало время проявить силу!</p>
                            <img src="images/pictures/slider/1.jpg" alt="img">
                            <div class="overlay bg-black"></div>
                        </div>
						
						 <div class="homepage-slider-item">
                            <h5 class="left-text">FLASHRACE - командная игра</h5>
                            <p class="left-text">Команда - большая шестерёнка, ведущая к победе!</p>
                            <img src="images/pictures/slider/4.jpg" alt="img">
                            <div class="overlay bg-black"></div>
                        </div>
						
						<div class="homepage-slider-item">
                            <h5 class="left-text">В FLASHRACE побеждают лучшие</h5>
                            <p class="left-text">Каждый может выйграть хороший приз!</p>
                            <img src="images/pictures/slider/3.jpg" alt="img">
                            <div class="overlay bg-black"></div>
                        </div>
						
						<div class="homepage-slider-item">
                            <h5 class="center-text">Мы - одна большая семья</h5>
                            <p class="center-text">Мы остаёмся одним организмом!</p>
                            <img src="images/pictures/slider/6.jpg" alt="img">
                            <div class="overlay bg-black"></div>
                        </div>
                    </div>
                    <a href="#" class="next-home-slider"><i class="fa fa-angle-right"></i></a>
                    <a href="#" class="prev-home-slider"><i class="fa fa-angle-left"></i></a>
                </div>     
                
                <div class="container">
                    <h4>Добро пожаловать!</h4>
                    <p>
                        Вы находитесь на странице спортивно-интеллектуальная квест-гонки FLASHRACE. Гонки, в которой студенты БГУ прикладывают свои знания, сообразительность и силу для победы над своими одногруппниками и однокурсниками!
                        <a href="/about.php" class="right-text small-text half-top">Подробнее <i class="fa space-left fa-long-arrow-right"></i></a>
                    </p>
                </div>
                
                <div class="decoration"></div>
                                
                <? include_once 'templates/footer.php'; ?>
                  
            <!-- End of entire page content-->
            </div> 
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Наверх</a>
</div>
    
</body>































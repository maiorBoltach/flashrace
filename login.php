<?php 
include_once '/php/config.inc.php';
include_once '/php/login_script.php';
include_once '/php/header_logged.php';
 ?>

<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="shortcut icon" href="images/splash/favicon.ico" type="image/x-icon" /> 
    
<title><?php echo $PRETITLE; ?> | Авторизация на гонку</title>

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
			include_once 'templates/main_menu.php'; ?>
			
            <p class="sidebar-divider">Гонка</p>
			<div class="sidebar-menu">
			<a class="menu-item menu-item-active" href="login.php">
                    <i class="fa fa-sign-in"></i>
                    <em>Авторизация</em>
                    <i class="fa fa-circle"></i>
             </a>
			</div>
			<?php 
			include_once 'templates/admin_menu.php';
			include_once 'templates/sponsors.php'; ?>
                       
            <p class="sidebar-footer">Copyright 2015. Все права защищены</p>
            
        </div>
                
        
        
        <div id="content" class="snap-content">
            <div class="header-clear"></div>
            <!--Page content goes here, fixed elements go above the all elements class-->  

            <div class="pageapp-login bg-5 cover-screen">    
                <div class="pageapp-login-content cover-center">
                    <div class="unboxed-layout">
                        
						
						<form action="" method="post">
						
                        <div class="pageapp-login-field">
                            <i class="fa fa-user"></i>
                            <input type="text" value="Логин" name = "email" onfocus="if (this.value=='Логин') this.value = ''" onblur="if (this.value=='') this.value = 'Логин'" required>
                        </div>
                        <div class="pageapp-login-field">
                            <i class="fa fa-lock"></i>
                            <input type="password" value="Пароль" name = "pass" onfocus="if (this.value=='Пароль') this.value = ''" onblur="if (this.value=='') this.value = 'Пароль'" required>
                        </div>
						<?php if(isset($_GET['send'])) echo $message; ?>
                        <input type="submit" name="btn-login" class="buttonWrap button button-green contactSubmitButton" value="Войти">   
						
						</form>


						
                    </div>
                </div>
                <div class="overlay bg-black"></div>
            </div>
                                
            <!-- End of entire page content-->
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Наверх</a>
</div>
    
 
    
</body>































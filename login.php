<?php
include_once 'config.inc.php';
include_once 'scripts/login_script.php';
include_once 'scripts/header_logged.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title><?php echo $PRETITLE; ?> &#9679; Авторизация</title>

	<meta name="description" content="..." />
	<meta name="keywords" content="..." />

	<style type="text/css" media="all">
		@import url("css/style.css");
		@import url("css/nivo-slider.css");
		@import url("css/custom-nivo-slider.css");
		@import url("css/jquery.fancybox.css");
	</style>
	
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->

</head>




<body>
	
	<div id="bgc">
							
		<div class="wrapper">		<!-- wrapper begins -->
			<div id="header">
				<h1><a href="/"><span><?php echo $PRETITLE; ?></span></a></h1>
				
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="/about.php" >О мероприятии</a></li>
					<li><a href="/login.php" class="active"><font color='#f6cc36'><?php echo $menu_race; ?> </font></a></li>
					<?php echo $menu_admin; ?> 
				</ul>
			</div>		<!-- #header ends -->
			
			
			<div id="holder">
				<div class="pagetitle">
					<h2>Авторизация</h2>
				</div>
				
				
				<div id="content">
					<div id="wide" align="center">
							
								
							<form action="" method="post">
								<?php echo "<div style ='color:#ec0000'>" .$message. " </div>"; ?>
								<p><input type="text" class="text" name = "email"  placeholder="Логин" required/></p>
								<p><input type="password" class="text" name = "pass" placeholder="Пароль" required/></p>
								<p><input type="submit" class="submit" value="Войти" name="btn-login"/></p>
							</form>
							<form action="admin/index.php"> 
							<p><input type="submit" class="submitblue" value="Админ-центр"/></p>
							</form>
						
					</div>		<!-- #wide ends -->
				
				</div>		<!-- #content ends -->
			
			
			
			
			</div>		<!-- #holder ends -->
			
			
			<?php include 'templates/footer.php' ?>
		</div>		<!-- wrapper ends -->
		
	
	</div>




	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.easing.pack.js"></script>
	<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
			
</body>
</html>
<?php
include_once 'config.inc.php';
include_once 'scripts/header_logged.php';
?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $PRETITLE; ?></title>
	<meta name="description" content="..." />
	<meta name="keywords" content="..." />
	 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
					<li><a href="/" class="active">Главная</a></li>
					<li><a href="/about.php">О мероприятии</a></li>
					<li><a href="/login.php"><font color='#f6cc36'><?php echo $menu_race; ?> </font></a></li>
					<?php echo $menu_admin; ?> 
					
				</ul>
			</div>		<!-- #header ends -->
			
						
	<?php include 'templates/slider.php' ?>
				
				
				
				<div id="content" class="homepage">
					<div id="main">
						<h2>ВНИМАНИЕ. ВАЖНАЯ ИНФОРМАЦИЯ ПО САЙТУ!</h2>
						
						<p>Данный сайт ещё находится в очень сильно зачаточном состоянии, поэтому на нём могут всречаться большое количество различного рода ошибок.</p>
					</div>		<!-- #main ends -->
					
										
					<div id="side">
						<?php include 'templates/vk_side.php' ?>
					</div>		<!-- #side ends -->
									
					
					
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
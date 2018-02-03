<?php
include_once 'config.inc.php';
include_once 'scripts/header_logged.php';
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?php echo $PRETITLE; ?> &#9679; О мероприятии</title>

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
					<li><a href="/about.php" class="active">О мероприятии</a></li>
					<li><a href="/login.php"><font color='#f6cc36'><?php echo $menu_race; ?> </font></a></li>
					<?php echo $menu_admin; ?> 
				</ul>
			</div>		<!-- #header ends -->
			
			
			<div id="holder">
				<div class="pagetitle">
					<h2>О мероприятии</h2>
					<ul>
					</ul>
				</div>
								
				<div id="content">
					
					
					<div id="main">
						<p>Fusce mauris ante, adipiscing id scelerisque eget, vulputate non sem. Vestibulum lobortis, quam sit amet venenatis laoreet, elit lectus sollicitudin erat, ac facilisis nulla ante sed leo. Mauris non neque velit, sed aliquam orci. Suspendisse suscipit, lectus sit amet auctor accumsan, dolor est pellentesque quam, eu fermentum elit sem varius massa.</p>
						
						<h3>Lorem ipsum</h3>
												
						<blockquote> Maecenas volutpat sapien eu velit vulputate congue. Aliquam imperdiet mauris non felis varius non accumsan enim sodales. Fusce pretium bibendum ullamcorper.</blockquote>
						
						<h4>Lorem ipsum</h4>
						
						<p>Nam sed dui nulla, quis fermentum diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						
						<ul>
							<li>Nulla facilisi.</li>
							<li>Nullam purus ipsum, consequat mollis molestie eget, vestibulum at nibh.</li>
							<li>Curabitur viverra congue tortor.</li>
						</ul>
						
						<h5>Lorem ipsum</h5>
						
						<p>Curabitur id elit enim. Suspendisse tincidunt ante nec nunc pulvinar at blandit purus porta. Aenean ligula tellus, consequat non porttitor quis, rhoncus non nisi.</p>
						
						<ol>
							<li>Nulla facilisi.</li>
							<li>Nullam purus ipsum, consequat mollis molestie eget, vestibulum at nibh.</li>
							<li>Curabitur viverra congue tortor.</li>
						</ol>
						
					</div>		<!--  #main ends -->
					
					
					<div id="side">
					
						<p><img src="images/office.jpg" alt="" /></p>
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
+	
</body>
</html>
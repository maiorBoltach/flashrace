<?php 
include_once 'php/config.inc.php'; 
include_once 'php/header_logged.php';
?>

<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="shortcut icon" href="images/splash/favicon.ico" type="image/x-icon" /> 
    
<title><?php echo $PRETITLE; ?> | О мероприятии</title>

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

<?php include_once 'templates/preloader.php'; ?>
    
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
                <a class="close-sidebar" href="/index.php"><i class="fa fa-times"></i></a>
            </div>      
        
            <p class="sidebar-divider">Главное меню</p>
            
            <div class="sidebar-menu">
                <a class="menu-item" href="index.php">
                    <i class="fa fa-home"></i>
                    <em>Главная</em>
                    <i class="fa fa-circle"></i>
                </a>       
			<a class="menu-item menu-item-active" href="about.php">
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
            <div class="header-clear-large"></div>
                
                <div class="heading-style-1 container half-bottom">
                    <a href="#"><i class="fa fa-info"></i></a>
                    <h4>О мероприятии</h4>
                    <div class="heading-block bg-red-dark"></div>
                    <div class="heading-decoration bg-red-dark"></div>
                </div>
                <div class="container">
                    <p>
                        FlashRace - спортивно-интеллектуальная квест-гонка, проводящаяся среди студентов Белорусского Государственного Университета. Студенты и курсанты всех факультетов, институтов и колледжей БГУ
						объединяются в команды от 3 до 5 человек для прохождения большого количества контрольных точек и пикетов, которые подготовлены специально для проверки не только знаний о университете, а также
						для проявления сообразительности, ума и командной сплочённости.
                    </p>
                </div>
				<div class="decoration"></div>
				
				 <div class="one-half-responsive">
                    <div class="responsive-video full-bottom">
                        <iframe src="https://www.youtube.com/embed/Ob05XPlj0k8"></iframe>
                    </div> 
                </div>
				<div class="decoration hide-if-responsive"></div>
				
				<div class="one-half-responsive last-column">
              
                    <p>
                        Гонка проходит по всем корпусам БГУ, а также на прилегающей к ней местности. Не стоит бояться - все задания решаемы в хорошей команде, которая, вне сомнения, достигнет цели и победит в этой схватке!
						Собери и ты свою команду!
                    </p>
					<br>
					<center><a href="https://vk.com/wall-87583311_118" class="button button-icon button-orange button-xl">ЗАРЕГИСТРИРОВАТЬСЯ<br>(до 25 марта)</a></center>
					<br>
                </div>
                
                <div class="decoration"></div>
				
                
                <div class="container no-bottom">
                    <div class="container-fullscreen heading-style-3 bg-4">
                        <h3 class="heading-title">Регламент проведения</h3>
                        <em class="heading-subtitle">Официальные правила квест-гонки</em>
                        <div class="overlay bg-black"></div>
                    </div>
                    
                </div>
				<div class="container">
                <h5>УЧАСТНИКИ КВЕСТ-ГОНКИ </h5>
                        <ul>
                            <li>Участниками конкурса являются студенты, курсанты и учащиеся учреждений образования комплекса БГУ.</li>
                            <li>Количество участников в команде от 3 до 5.</li>
                            <li>В команде обязательно должен быть один студент или курсант первого курса. </li>
                        </ul> 

				<br>
				<h5>ПОРЯДОК ПРОВЕДЕНИЯ КВЕСТ-ГОНКИ </h5>
                        <ul>
                            <li>Основанием для участия является заявка, подписанная представителем оргкомитета.</li>
                            <li>Этапы квест-гонки проходят в корпусах БГУ.</li>
                            <li>На этапах участники выполняют задания спортивной и интеллектуальной направленности. </li>
                        </ul>
				
				<br>
				<h5>ОРГАНИЗАЦИЯ ТРАНСПОРТА И ПИТАНИЯ ВО ВРЕМЯ ПРОВЕДЕНИЯ КВЕСТ-ГОНКИ </h5>
                        <ul>
                            <li>Прибытие участников на место проведения квест-гонки осуществляется самостоятельно.</li>
                            <li>Питание в течение дня команда организовывает самостоятельно.</li>
                            <li>Членам команд следует одеваться по погоде и иметь с собой спортивную одежду и удобную обувь.</li>
                        </ul>
			
				<br>
				<h5>ПОДВЕДЕНИЕ ИТОГОВ КВЕСТ-ГОНКИ И НАГРАЖДЕНИЕ</h5>
                        <ul>
                            <li>На каждом этапе участники допустив ошибку могут получить штрафное время, которое жюри учитывает при подведении итогов.</li>
                            <li>Победитель определяется по наименьшему количеству затраченного времени на прохождение всей гонки. В случае спорных ситуаций предпочтение отдается команде, получившей меньше штрафов в течение прохождения гонки.</li>
                            <li>Победители и призеры Конкурса награждаются ценными подарками, специальными дипломами и памятными сувенирами от организаторов Конкурса. </li>
							<li>Информация о ходе проведения Конкурса и его победителей освещается в городских, университетских печатных и электронных средствах массовой информации.</li>
                        </ul>
				</div>
                <div class="decoration"></div>                
                
               
                <div class="container-fullscreen heading-style-3 bg-5">
                    <h3 class="heading-title">Наши спонсоры</h3>
                    <em class="heading-subtitle"></em>
                    <div class="overlay bg-black"></div>
                </div>
                <center>
                <div class="one-third-responsive">
					<a href="http://turlan.by/"><img src="images/sponsors/turlan.png" alt="img"></a> 
                     <br>
                </div>
				<div class="decoration hide-if-responsive"></div>
                <div class="one-third-responsive">
                         <a href="http://podzamkom.by/"><img src="images/sponsors/podzamkom.png" alt="img"></a>
						 <br>
                </div>
				
                <div class="decoration hide-if-responsive"></div>
                <div class="one-third-responsive last-column">
                         <a href="http://salamandra.by/"><img src="images/sponsors/salamandra.png" alt="img"></a>
						 <br>
                </div>
				<div class="decoration hide-if-responsive"></div>
				<div class="clear"></div>
				<div class="clear"></div>
                <div class="one-half-responsive">
                         <a href="http://piranya.by/"><img src="images/sponsors/piranya.png" alt="img"></a>
						 <br>
                </div>
				<div class="decoration hide-if-responsive"></div>
				<div class="one-half-responsive  last-column">
                         <a href="http://vk.com/public100905672"><img src="images/sponsors/yogurty.png" alt="img"></a>
						 <br>
                </div>
				</center>
                <div class="clear"></div>
                
                              
                <div class="decoration"></div>
				
                 <div class="container-fullscreen heading-style-3 bg-3">
                    <h3 class="heading-title">Организаторы квест-гонки</h3>
                    <em class="heading-subtitle"></em>
                    <div class="overlay bg-black"></div>
                </div>
				<center>
				 <div class="one-half-responsive">
                   <a href="http://bsu.by/"><img src="images/bsu.png" alt="img"></a>
				    <br>
                </div>
				<div class="decoration hide-if-responsive"></div>
				
				<div class="one-half-responsive last-column">
					<a href="http://brsm.bsu.by/"><img src="images/brsm.png" alt="img"></a>
					 <br>
                </div>
				</center>
				<div class="decoration"></div>
                <?php include_once 'templates/footer.php'; ?>            
                
            <!-- End of entire page content-->
            </div> 
        </div>
    </div>  
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Наверх</a>
</div>
    
</body>































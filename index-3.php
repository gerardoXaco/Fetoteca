<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jobs</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Vegur_500.font.js" type="text/javascript"></script>
	<script src="js/Ropa_Sans_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script>  
	<script src="js/script.js" type="text/javascript"></script>	
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
 		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page4">
	<!--==============================header=================================-->
	<header>
		<div class="border-bot">
			<div class="main zerogrid">
				<h1><a href="index.php">Principal</a></h1>
				<nav>
					<ul class="menu">
						<li><a class="active" href="index.php">Principal</a></li>
						<li><a href="index-1.php">Tema 1</a></li>
						<li><a href="index-2.php">Tema 2</a></li>
						<li><a href="index-3.php">Tema 3</a></li>
						<li><a href="contact.php">Tema 4</a></li>
						<?php 
							if (isset($_SESSION['nivel'])) {
								if($_SESSION['nivel']==0){
									echo '<li><a href="logout.php">Administrar</a></li>'; 
							    }
							}
						?>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
		</div>
	</header>
	<!--==============================content================================-->
	<section id="content">
		<div class="main">
			<div class="zerogrid">
				<!--<div class="row">-->
					<!--<article class="col-2-3"><div class="wrap-col">-->
						<h3>Tema 3</h3>
						<h6 class="prev-indent-bot">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </h6>
						<p class="indent-bot">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
						<div class="wrapper p2">
							<div class="col-1-3"><figure class="img-indent"><img src="images/slider-img1.jpg" alt=""></figure></div> 
							<div class="col-2-3 extra-wrap">
								<ul class="list-1">
									<li><a href="#">Eirmod tempor invidunt ut labore et dolore magna.</a></li>
									<li><a href="#">At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren, no sea takimata.</a></li>
									<li><a href="#">Sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, consetetur sadipscing elitr.</a></li>
								</ul>
							</div>
						</div>
						
					<!--</div></article>-->
					
				<!--</div>-->
			</div>
		</div>
	</section>
	<!--==============================footer=================================-->
	<footer>
		<div class="main">
			<div class="zerogrid">
				<div class="wrapper">
					<div class="col-2-4">
						<div class="wrap-col indent-top2">
							<p class="prev-indent-bot">Universidad Autónoma de Zacatecas <a rel="nofollow" href="http://www2.uaz.edu.mx/" target="_blank">Página web</a></p>
							Facultad de Embriología
						</div>
					</div>
					<div class="col-1-4">
						<ul class="wrap-col list-services">
							<li><a class="item-1" href="#"></a></li>
							<li><a class="item-4" href="#"></a></li>
						</ul>
						<span class="footer-text">Redes sociales</span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>

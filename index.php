<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Principal</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
	<link rel="stylesheet" href="css/responsiveslides.css" />  
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/cufon-replace.js" type="text/javascript"></script>
	<script src="js/Vegur_500.font.js" type="text/javascript"></script>
	<script src="js/Ropa_Sans_400.font.js" type="text/javascript"></script> 
	<script src="js/FF-cash.js" type="text/javascript"></script>	  
	<script src="js/tms-0.3.js" type="text/javascript"></script>
	<script src="js/tms_presets.js" type="text/javascript"></script>
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			maxwidth: 960,
			namespace: "centered-btns"
		  });
		});
	</script>
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
<body id="page1">
	<!--==============================header=================================-->
	<header>
		<div class="border-bot">
			<div class="main zerogrid">
				<h1><a href="index.html">Principal</a></h1>
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
		<div class="row-bot">
			<div class="slider zerogrid">
		   		<div class="rslides_container">
					<ul class="rslides" id="slider">
						<li><img src="images/slider-img1.jpg" alt="" /></li>
						<li><img src="images/slider-img2.jpg" alt="" /></li>
						<li><img src="images/slider-img3.jpg" alt="" /></li>
					</ul>
				</div>
		    </div>
	    </div>
	</header>

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
	<script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'diagonalFade',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
	</script>
</body>
</html>
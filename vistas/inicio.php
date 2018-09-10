
<?php
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>prueba1</title>
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
<script type="text/javascript">
$(function() {
	
	$('#da-slider').cslider({
		autoplay : true,
		bgincrement : 450
	});

});
	</script>
	<!-- Owl Carousel Assets -->
	<link href="css/owl.carousel.css" rel="stylesheet">
	<script src="js/owl.carousel.js"></script>
	<script>
	$(document).ready(function() {

		$("#owl-demo").owlCarousel({
			items : 4,
			lazyLoad : true,
			autoPlay : true,
			navigation : true,
			navigationText : ["", ""],
			rewindNav : false,
			scrollPerPage : false,
			pagination : false,
			paginationNumbers : false,
		});

	});
		</script>
		<!-- //Owl Carousel Assets -->
		<!----font-Awesome----->
		<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
		<!----font-Awesome----->
		</head>
		<body>
		<div class="header_bg">
		<div class="container">
		<div class="row header">
		<div class="logo navbar-left">
		<h1><a href="inicio.html">EL DRAGONCITO </a></h1>
		</div>
		<div class="h_search navbar-right">
		<form>
		<input type="text" class="text" value="ingrese texto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
		<input type="submit" value="buscar">
		</form>
		</div>
		<div class="clearfix"></div>
		</div>
		</div>
		</div>
		<div class="container">
		<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		<li class="active"><a href="inicio.html">INICIO</a></li>
		<li><a href="menu.html">MENUS</a></li>
		<li><a href="conocenos.html">CONOCENOS</a></li>
		<li><a href="calificanos.html">CALIFICANOS</a></li>
		<li><a href="contactos.html">CONTACTANOS</a></li>
		<li><a href="administardor.html">ADMINISTRADOR</a></li>
		</ul>
		</div><!-- /.navbar-collapse -->
		<!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
		<ul class="list-unstyled text-center">
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		<li><a href="#"><i class="fa fa-youtube"></i></a></li>
		<li><a href="../vistas/login.php" ><i class="fa fa-user"></i></a></li>
		</ul>
		</div>


		</div>
		</div>
		<div class="slider_bg"><!-- start slider -->
		<div class="container">
		<div id="da-slider" class="da-slider text-center">
		<div class="da-slide">
		<h2>BIENVENIDOS</h2>
		<p>No hay plato desdeñado en la cocina<span class="hide_text"> cuando se realiza de una manera autentica¡¡¡</span></p>
		<h3 class="da-link"><a href="#" class="fa-btn btn-1 btn-1e">ver</a></h3>
		</div>
		<div class="da-slide">
		<h2>NUESTRAS PLATOS</h2>
		<p>texto1<span class="hide_text">texto2</span></p>
		<h3 class="da-link"><a href="#" class="fa-btn btn-1 btn-1e">ver</a></h3>
		</div>
		<div class="da-slide">
		<h2>NUESTRAS OFERTAS</h2>
		<p>opcioens<span class="hide_text"> texto3</span></p>
		<h3 class="da-link"><a href="#" class="fa-btn btn-1 btn-1e">ver</a></h3>
		</div>
		<div class="da-slide">
		<h2>comidas4</h2>
		<p>texto<span class="hide_text"> comidas</span></p>
		<h3 class="da-link"><a href="#" class="fa-btn btn-1 btn-1e">ver</a></h3>
		</div>
		</div>
		</div>
		</div><!-- end slider -->

		<div class="main_btm"><!-- start main_btm -->
		<div class="container">
		<div class="main row">
		<div class="col-md-6 content_left">
		<img src="images/pic1.jpg" alt="" class="img-responsive">
		</div>
		<div class="col-md-6 content_right">
		<h4>CONOCE <span>NUESTRAS </span> FAMILIA</h4>
		<p class="para">En 2016 se concibió la idea de hacer en Arequipa un restaurante exclusivo , y el 25 de setiembre de ese año abrió sus puertas EL DRAGONCITO, que poco a poco fue conquistando los paladares de peruanos y extranjeros, convirtiéndose en paso obligado de turistas, quienes desde siempre son nuestros mejores publicistas en el exterior.
		El dragoncito marcó el rumbo de la buena gastronomía china  desde esa época, habiendo pasado por su cocina los más importantes chef del país, quienes han aportado las especialidades que hoy se reúnen en nuestra carta, y ofrecemos a los comensales. </p>
		<a href="#" class="fa-btn btn-1 btn-1e">ver mas</a>
		</div>
		</div>
		<!----start-img-cursual---->
		<div id="owl-demo" class="owl-carousel text-center">
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato1</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato2</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato3</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato4</a></h4>
		<p>
		desripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato5</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">palto6</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato7</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato7</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c2.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">palto8</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c3.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato9</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c1.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato10</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		<div class="item">
		<div class="cau_left">
		<img class="lazyOwl" data-src="images/c4.jpg" alt="Lazy Owl Image">
		</div>
		<div class="cau_left">
		<h4><a href="#">plato11</a></h4>
		<p>
		descripcion
		</p>
		</div>
		</div>
		</div>
		<!----//End-img-cursual---->
		</div>
		</div>
		<div class="footer_bg"><!-- start footer -->
		<div class="container">
		<div class="row  footer">
		<div class="copy text-center">
		<p class="link"><span>&#169; .... | ...&nbsp;<a href="http://w3layouts.com/"> opciones</a></span></p>
		</div>
		</div>
		</div>
		</div>
		</body>
		</html>
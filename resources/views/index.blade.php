<!DOCTYPE html>
<html lang="en">
	
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>JBGM Contigo en cada paso</title>
		<!-- Boostrap externo-->
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<!-- Bootstrap core CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		
		<!-- Custom styles for this template -->
		<link href="{{asset('css/modern-business.css')}}" rel="stylesheet">
		
	</head>
	<script>
		
		
		$(document).ready(function(){
			$("#myBtn").click(function(){
				$("#ventana1").modal({backdrop: true});
			});
			$("#myBtn1").click(function(){
				$("#ventana2").modal({backdrop: true});
			});
			$("#myBtn2").click(function(){
				$("#ventana3").modal({backdrop: "static"});
			});
		});
		
	</script>
	
	<body>
		
		<!-- Navigation -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container">
				<a class="navbar-brand" href="/">JBGM Technology</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/about">Nuestra Empresa</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="/products" id="navbarDropdowProductos"data-toggle="dropdown"aria-hashpopup="true"    aria-expanded="false">
								Productos
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
								<a class="dropdown-item" href="/quicksoft">Quick Suite</a>
								<a class="dropdown-item" href="/fresche">Fresche Solutions</a>
								<a class="dropdown-item" href="revsoft">Software Rev-Soft</a>
								<a class="dropdown-item" href="/valery">Valery</a>
								<a class="dropdown-item" href="/green">Green Light</a>
								
							</div>
						</li>
						<li class="nav-item dropdown">
							<div>
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Servicios
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
									
									<a class="dropdown-item" href="/services">Soporte Técnico de Aplicaciones </a>
									<!--<a class="dropdown-item" href="portfolio-3-col.html">Outsourcing </a>
									-->
								</div>
							</div>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="/contact">Contacto</a>
						</li>
						
						
						
					</ul>
				</div>
			</div>
		</nav>
		
		<header>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<!-- Slide One - Set the background image for this slide in the line below -->
					<div class="carousel-item active" style="background-image: url('img/Logo JBGM.png')">
						<div class="carousel-caption d-none d-md-block">
							
							
						</div>
					</div>
					<!-- Slide Two - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('img/redes2.png')">
						<div class="carousel-caption d-none d-md-block">
							
						</div>
					</div>
					<!-- Slide Three - Set the background image for this slide in the line below -->
					<div class="carousel-item" style="background-image: url('img/so.jpg')">
						<div class="carousel-caption d-none d-md-block">
							
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Proximo</span>
				</a>
			</div>
		</header>
		
		<!-- Page Content -->
		@yield('content')
		
		<!-- /.container -->
		
		<!-- Footer -->
		<footer class="py-5 bg-dark">
			<div class="container">
				<p class="m-0 text-center text-white">Copyright &copy; JBGM Technology Solutions 2018</p>
			</div>
			<!-- /.container -->
		</footer>
		
		<!-- Bootstrap core JavaScript -->
		<script src="{{ asset('js/jquery.min.js')}}"></script>
		<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
		
	</body>
	
</html>

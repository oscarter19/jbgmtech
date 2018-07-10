@extends('index')

@section('content')
<!-- Page Content -->
<div class="container">
	
	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">JBGM
		<small>Productos</small>
	</h1>
	
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="/">Inicio</a>
		</li>
		<li class="breadcrumb-item active"></li>
	</ol>
	
	<!-- Project One -->
	<div class="row">
		<div class="col-md-7">
			<a href="{{asset('http://valery.com/')}}"target="_blank">
				<img class="img-fluid rounded mb-3 mb-md-0" src="img/productos/valery.jpg" alt="">
			</a>
		</div>
		
		
		<div class="col-md-5">
			
			<h3>Valery Software</h3>
			<p>Valery Software es una suite completa de modulos administrativos diseñados con la finalidad de apoyarlo en la toma de decisiones gerenciales, para que su empresa obtenga los mayores beneficios de la información suministrada por sus más de 60 reportes. Valery cuenta con soporte técnico via chat con el cual podrá despejar cualquier duda referente al manejo y configuración de cada uno de los módulos, cuenta con una interfaz gráfica muy intuitiva y facil de aprender. Permite personalizar cotizaciones y enviarlas por correo.</p>
		</div>
		
		<p>Ventajasde usar Valery Software :
			
			
			<div class="col-md-12">
				<ul>
					<li>Más de 60	reportes gerenciales para la Toma de decisiones 
					</li>
					<li>Reportes interactivos
					</li>
					<li>Adapta los formatos a tu imagen corporativa
					</li>
					<li>La mejor forma de registrar compras, gastos y movimientos bancarios
					</li>
					<li>Exporta a Excel PDF y envia por correo todos los reportes
					</li>
					<li>Modulo completo de cobranzas
					</li>
					
					
				</ul>
			</p>
			
		</div>
		
	</div>
	<!-- /.row -->
	
	
	
	<!-- Pagination -->
	
	
</div>
<!-- /.container -->
@endsection
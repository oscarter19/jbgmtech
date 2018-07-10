@extends('index')

@section('content')
		<!-- Page Content -->
		<div class="container">
			
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">RevSoft
				<small>Rev Guardian</small>
			</h1>
			
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="/">Inicio</a>
				</li>
				<li class="breadcrumb-item active">Rev Guardian</li>
			</ol>
			
			<!-- Portfolio Item Row -->
			<div class="row">
				
				<div class="col-md-8">
				<a href="{{asset('http://www.revsoft.com/rev-guardian')}}"target="_blank">
				<img class="img-fluid" src="img/revsoft/guard.png" alt="">
				</a>
					
				</div>
				
				<div class="col-md-4">
					<h3 class="my-3">Integridad del entorno operativo de la empresa</h3>
					<p>Asegure la integridad de su Entorno Operativo haciendo que REV GUARDIAN ejecute periódicamente Controles y en función del estado (Verdadero o Falso) ejecute Acciones</p>
					<h3 class="my-3">Ventajas</h3>
					<ul>
						<li>Scripts que se ejecutan dependiendo de las ocurrencias del check list</li>
						<li>Control de las operaciones</li>
						<li>Facilita la auditación</li>
						<li>Registra todas las operaciones</li>
					</ul>
				</div>
				
			</div>
			<!-- /.row -->
			
			<!-- Related Projects Row -->
			<h3 class="my-4">Productos Relacionados</h3>
			
			<div class="row">
				
                <div class="col-md-3 col-sm-6 mb-4">
					<a href="/revSche"><img class="card-img-top" src="img/revsoftIcons/revScheduler.jpg" alt=""></a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a href="/revMessage"><img class="card-img-top" src="img/revSoftIcons/message.jpg" alt=""></a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a href="revView"><img class="card-img-top" src="img/revSoftIcons/view.jpg" alt=""></a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a href="revDataF"><img class="card-img-top" src="img/revSoftIcons/flow.jpg" alt=""></a>
				</div>
				
			</div>
			<!-- /.row -->
			
		</div>
		<!-- /.container -->
		
@endsection		
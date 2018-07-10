
@extends('index')

@section('content')
<!-- Page Content -->
<div class="container">
	
	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">RevSoft
        <small>Rev DataFlow</small>
	</h1>
	
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
			<a href="/">Inicio</a>
		</li>
        <li class="breadcrumb-item active">Rev DataFlow</li>
	</ol>
	
	<!-- Portfolio Item Row -->
	<div class="row">
		
		<div class="col-md-8">
			<a href="{{asset('http://www.revsoft.com/rev-dataflow/')}}"target="_blank">
				<img class="img-fluid" src="img/revsoft/flow.png" alt="">
			</a>
			
		</div>
		
        <div class="col-md-4">
			<h3 class="my-3">Transferencias seguras de datos de Cross Platform</h3>
			<p>La transferencia de datos entre plataformas similares y / o diferentes se ha convertido en una tarea cotidiana de las empresas en diferentes plataformas y sistemas operativos</p>
			
			
			<h3 class="my-3">Rev Dataflow te permite Transferencias de datos</h3>
			<ul>
				<li>Totalmente seguras</li>
				<li>Con Autenticación</li>
				<li>Encriptadas</li>
				<li>Entorno sin uso de FTP</li>
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
			<a href="revGuard"><img class="card-img-top" src="img/revSoftIcons/guardian.jpg" alt=""></a>
		</div>
		
	</div>
	<!-- /.row -->
	
</div>
<!-- /.container -->
@endsection
@extends('index')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">RevSoft
        <small>Rev View</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Rev View</li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">
		  
        <div class="col-md-8">
		<a href="{{asset('http://www.revsoft.com/rev-view')}}"target="_blank">
				<img class="img-fluid" src="img/revsoft/view.png" alt="">
			</a>
          
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Componente de red de Rev View</h3>
          <p>Controle y administre TODAS las aplicaciones de RevSoft en cualquier plataforma de su empresa utilizando el marco de trabajo de red REV VIEW.</p>
          <h3 class="my-3">Siempre puedes monitorear y administrar</h3>
          <ul>
            <li>Trabajos programados críticos
           (REV SCHEDULER)</li>
            <li>Mensajes vitales
             (REV MENSAJE)</li>
            <li>Transferencias de datos
              (REV DATAFLOW)</li>
            <li>Entorno y disponibilidad
             (REV GUARDIAN)</li>
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
					<a href="/revGuard"><img class="card-img-top" src="img/revSoftIcons/guardian.jpg" alt=""></a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a href="revmessage"><img class="card-img-top" src="img/revSoftIcons/message.jpg" alt=""></a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a href="revDataF"><img class="card-img-top" src="img/revSoftIcons/flow.jpg" alt=""></a>
				</div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
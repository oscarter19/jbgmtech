@extends('index')

@section('content')
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">RevSoft
        <small>RevScheduler</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Inicio</a>
        </li>
        <li class="breadcrumb-item active">RevScheduler</li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
		<a href="{{asset('http://www.revsoft.com/rev-scheduler')}}"target="_blank">
				<img class="img-fluid" src="img/revsoft/sched.png" alt="">
			</a>
          
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Programe tareas de forma efectiva</h3>
          <p>Defina la forma de planificar: crear tareas programadas, calendarios, seguridad, LDAP, entornos, etc.
        Operaciones de Host & Enterprise: para administrar y ver y escuchar todos los trabajos mientras se ejecutan
        </p>
          <h3 class="my-3">Ventajas</h3>
          <ul>
		  
            <li> Alta disponibilidad: para administrar y verificar la integridad de la producción y el fracaso en los trabajos</li>
            <li>Guardar y restaurar: para guardar y restaurar trabajos y opciones y su sitio o sitios de DRP</li>
            <li>Proveemos Motor: para configurar, agregar sistemas y migrar datos.</li>
            
          </ul>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Productos Relacionados</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
         <a href="/revDataF"><img class="card-img-top" src="img/revsoftIcons/flow.jpg" alt=""></a>
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
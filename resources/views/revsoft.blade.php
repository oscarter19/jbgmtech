
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
        <li class="breadcrumb-item active">RevSoft</li>
      </ol>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="/revSche"><img class="card-img-top" src="img/revScheduler.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/revSche">Rev Scheduler</a>
              </h4>
              <p class="card-text">Ejecutar trabajos programados en cualquier tipo de servidor y tener una vista empresarial, ya que todos interactuamos para trabajos de dependencias o grupos en todas las plataformas</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="/revDataF"><img class="card-img-top" src="img/revsoft/flow.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/revDataF">Rev DataFlow</a>
              </h4>
              <p class="card-text">Enviar y recibir datos en cualquier tipo de servidor en un entorno seguro (no usando ftp) con traducción opcional, compresión de cifrado y scripting.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="/revGuard"><img class="card-img-top" src="img/revsoft/guardian.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/revGuard">Rev Guardian</a>
              </h4>
              <p class="card-text">Ejecutar controles de entornos operativos en cualquier tipo de servidor e informar cualquier discrepancia o ejecutar scripts para rectificar una irregularidad detectada</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="/revMessage"><img class="card-img-top" src="img/revsoft/message.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/revMessage">Rev Message</a>
              </h4>
              <p class="card-text">Administrar mensajes / registros / alertas en cualquier tipo de servidor usando vistas empresariales con múltiples puntos focales en múltiples plataformas.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="/revView"><img class="card-img-top" src="img/revsoft/view.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="/revView">Rev View</a>
              </h4>
              <p class="card-text">Marco de trabajo en red gratuito que conecta módulos de revsoft en múltiples servidores / plataformas para permitir interacciones y vistas empresariales.</p>
            </div>
          </div>
        </div>
       
      </div>

      <!-- Pagination 
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
	  -->

    </div>
    <!-- /.container -->
@endsection

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
	
	<div class="row">
		<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
				<a href="{{asset('https://www.sinaptrix.com/edd-ha.php')}}"target="_blank">
					<img class="card-img-top" src="img/qedd_ha.png" alt="">
				</a>
				
				<div class="card-body">
					<h4 class="card-title">
						Quick-EDD/HA
					</h4>
					<p class="card-text">La alta disponibilidad asegura que toda la aplicación funcionará en destino. Por tanto, tanto los datos como los objetos están bajo monitorización simultánea por parte de la herramienta de alta disponibilidad </p>
					
					<button type="button" class="btn btn-info btn-md" id="myBtn">Leer más</button>
					
				</div>
				
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="ventana1" role="dialog">
			<div class="modal-dialog">
				
				<!-- Modal content-->
				<div class="modal-content">
					<!-- Header de la ventana -->
					<div class="modal-header">
						
						<h4 class="modal-title">Quick-EDD/HA</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<p>Quick-EDD/HA le ayuda a lograr:
							<ul>
								<li>Seguridad y HA 
								</li>
								<li>Migración de datos 
								</li>
								<li>Migración de aplicaciones 
								</li>	
								<li>Quality Assurance (QA) 
								</li>
								<li>Operación de switch optimizada
								</li>
								<li>Bajo consumo de CPU y ancho de banda
								</li>
							</ul>
							
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
				
			</div>
		</div>
		
		
		<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
				<a href="{{asset('https://www.sinaptrix.com/edd-csi.php')}}"target="_blank">
					<img class="card-img-top" src="img/qedd_csi.png" alt="">
				</a>
				
				<div class="card-body">
					<h4 class="card-title">
						Quick-CSi
					</h4>
					<p class="card-text" >Auditoria continua y Control de seguridad para IBM Power i. La mera presencia de una herramienta de auditoria reduce el riesgo de ataques internos, las alertas permanentes le permiten anticipar riesgos y auditoria con total serenidad.
					</p>
					<button type="button" class="btn btn-info btn-md" id="myBtn1">Leer más</button>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="ventana2" role="dialog">
			<div class="modal-dialog">
				
				<!-- Modal content-->
				<div class="modal-content">
					<!-- Header de la ventana -->
					<div class="modal-header">
						
						<h4 class="modal-title">Quick-CSi</h4>
						
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<p>Auditoria continua y Control de seguridad para IBM Power i</p>
						<p> En materia de funcionamiento, el producto es transparente para los usuarios. Por último, y por encima de todo, la elección estratégica es no bloquear NUNCA ningún proceso de producción sino generar alertas eficaces que permitan a la dirección la toma de la desición final sobre la acción auditada. Esto permite: 
							<ul>
								<li>Auditoria del sistema 
								</li>
								<li>Trazabilidad de las transacciones 
								</li>
								<li>Protección de los datos y del sistema 
								</li>
								<li>Control de accesos al sistema
								</li>
							</ul>
							
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-lg-4 col-sm-6 portfolio-item">
			<div class="card h-100">
				<a href="{{asset('https://www.sinaptrix.com/edd-smartdata.php')}}"target="_blank">
					<img class="card-img-top" src="img/smardata.jpg" alt="">
				</a>
				
				<div class="card-body">
					<h4 class="card-title">
						Quick-SmartData
					</h4>
					<p class="card-text">Replicación de datos y distribución para bases de datos heterogéneas necesitamos información en tiempo real para tener éxito en un entorno competitivo.
					</p>
					<button type="button" class="btn btn-info btn-md" id="myBtn2">Leer más</button>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="ventana3" role="dialog">
			<div class="modal-dialog">
				
				<!-- Modal content-->
				<div class="modal-content">
					<!-- Header de la ventana -->
					<div class="modal-header">
						
						<h4 class="modal-title">Quick-SmartData</h4>
						
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						
						<p>  El reto de Quick-SmartData es conseguir ofrecer esta información disponible en cualquier momento para: 
							<ul>
								<li>Mejorar el marketing a clientes o para obtener nuevos clientes 
								</li>
								<li>Mejorar el soporte a los responsables de tomas de decisiones 
								</li>
								<li>Ahorrar dinero usando bases de datos internas
								</li>
								<li>Incrementar la flexibilidad IT con un soporte de infraestructura diferente
								</li>
							</ul>
							
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
				
			</div>
		</div>
		
		
	</div>
</div>

<!-- /.container -->

@endsection
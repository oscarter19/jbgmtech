
@extends('index')

@section('content')		
		<!-- Page Content -->
		<div class="container">
			
			<h1 class="my-4">JBGM Contigo en cada paso</h1>
			
			<!-- Marketing Icons Section -->
			<div class="row">
				<!-- Modal -->
				<div class="modal fade" id="ventana1" role="dialog">
					<div class="modal-dialog">
						
						<!-- Modal content-->
						<div class="modal-content">
							<!-- Header de la ventana -->
							<div class="modal-header">
								
								<h4 class="modal-title">Personal Especilizado</h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<p>Perfil del personal
									<ul>
										<li>Recursos muy capacitados en análisis, desarrollo, mantenimiento y migraciones de sistemas en IBM I. 
										</li>
										<li>Poseen amplia experiencia en el área bancaria, commercial, ERP. 
										</li>
										<li>Amplios conocimientos en RPG IV, RPG ILE/FREE. SQL/RPG FREE. 
										</li>	
										<li>Dominio de lenguaje de control CLP. 
										</li>
										<li>Modelado de Datos y soporte Soporte de ABAP – SAP
										</li>
										<li>Dominio de varias herramientas de desarrollo, tales como: SDA, RLU,PDM, SQL, DDS, Rational Developer for I.
										</li>
										<li>Buena disposición para el trabajo en equipo, orientados a brindar soluciones satisfactorias a nuestros clientes.
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
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="img/indice/personas.jpg">
						<h4 class="card-header">Personal Capacitado</h4>
						<div class="card-body">
							<p class="card-text">En JBGM nos encargamos de poner a dispocición el personal más capacitado para cubrir sus necesidades</p>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-info btn-md" id="myBtn">Leer más</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<img class="card-img-top" src="img/indice/datos.jpg">
						<h4 class="card-header">An&aacute;lisis de datos</h4>
						<div class="card-body">
							<p class="card-text">Proveemos las recomendaciones más acertadas para que ud y su empresa se mantengan actualizadas bajo los nuevos estandares de desarrollo para equipos IBM</p>
						</div>
						<div class="card-footer">
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 mb-4">
					<div class="card h-100">
						<img  class="card-img-top" src="img/indice/so.jpg">
						<h4 class="card-header">Multiplataforma</h4>
						<div class="card-body">
							<p class="card-text">Desarrollamos soluciones totalmente escalables y orientadas a trabajar en cualquier plataforma</p>
						</div>
						<div class="card-footer">
							
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
			
			<!-- Portfolio Section -->
			<h2>Software que proveemos </h2>
			
			<div class="row">
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a href="/quicksoft"><img class="card-img-top" src="{{URL::asset('/img/indice/sinaptrix.png')}}" alt=""></a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="/quicksoft">Sinaptrix</a>
							</h4>
							<p class="card-text">Somos partners de QSL Quick Software Line, ofrecemos soluciones a PYMES y grandes compañías para garantizar el éxito de sus proyectos. La suite QSL, proporciona soluciones de software para alta disponibilidad en diferentes plataformas (suite Quick-EDD) y una completa suite de impresión y manejo de documentos (Quick-DOC suite) para IBM System i.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a href="/fresche"><img class="card-img-top" src="{{URL::asset('/img/clientes/freshe.jpg')}}" alt=""></a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="/fresche">Fresche Solutions</a>
							</h4>
							<p class="card-text">En Fresche encontrará todo lo que necesita para maximizar el valor de su TI y cumplir sus objetivos comerciales. Fresche ayuda a administrar, mejorar y evolucionar sus aplicaciones de IBM i para que pueda aprovechar la tecnología moderna, satisfacer las crecientes demandas comerciales y aprovechar su inversión de TI existente.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a href="/revsoft"><img class="card-img-top" src="{{URL::asset('/img/indice/revScheduler.jpg')}}" alt=""></a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="/revsoft">Revsoft</a>
							</h4>
							<p class="card-text">Proporcionamos soluciones empresariales para todos los productos de automatización y administración con el mismo modelo base en cada plataforma. Esto permite utilizar una interfaz común de aplicaciones de Windows para todas las máquinas / plataformas y sistemas operativos</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a href="/valery"><img class="card-img-top" src="{{URL::asset('/img/indice/valery.png')}}" alt=""></a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="/valery">Valery</a>
							</h4>
							<p class="card-text">Software Administrativo para empresas PYME. 
								Permanezca 100% al día con el sistema tributario. 
								Emite fácilmente libros de compra, venta e inventario según las providencias administrativas establecidas en la ley.
								Gestiona el inventario de forma segura, sencilla y eficaz.
								Mantiene sus cobranzas y pagos  al día con los módulos de cuentas por cobrar y cuentas por pagar.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 portfolio-item">
					<div class="card h-100">
						<a href="/green"><img class="card-img-top" src="{{URL::asset('/img/indice/gltec.jpg')}}" alt=""></a>
						<div class="card-body">
							<h4 class="card-title">
								<a href="/green">Green Light Tech</a>
							</h4>
							<p class="card-text">Además de nuestro conocimiento en el área de Infraestructura de TI, Green Light mantiene una fuerte experiencia en el campo de la seguridad de TI, por lo cual siempre estamos actualizados con las regulaciones y normativas de cumplimiento para cada industria en los países de América Central y Sur América.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
			
			<!-- Features Section -->
			<div class="row">
				<div class="col-lg-6">
					<h2>Soporte SAP</h2>
					<p>Brindamos soporte SAP</p>
					
					<p>Nuestros personal brinda apoyo y orientación a su empresa en configuración y desarrollo de sistemas SAP</p>
				</div>
				<div class="col-lg-6">
					<img class="img-fluid rounded" src="{{URL::asset('/img/indice/sap.jpg')}}" alt="">
				</div>
			</div>
			<!-- /.row -->
			
			<hr>
			
			<!-- Call to Action Section -->
			<div class="row mb-4">
				<div class="col-md-8">
					<p>Solicite nuestros servicios y con gusto le daremos una propuesta ajustada a sus necesidades</p>
				</div>
				<div class="col-md-4">
					<a class="btn btn-lg btn-secondary btn-block" href="/contact">Contactenos</a>
				</div>
			</div>
			
		</div>
		<!-- /.container -->
		
@endsection

@extends('index')

@section('content')			
<!-- Page Content -->
<div class="container">
	
	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3">Contactos
		<small></small>
	</h1>
	
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="/">Inicio</a>
		</li>
		<li class="breadcrumb-item active">Contactos</li>
	</ol>
	
	<!-- Content Row -->
	<div class="row">
		<!-- Map Column -->
		<div class="col-lg-8 mb-4">
			<!-- Embedded Google Map -->
			<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.334561533384!2d-69.94772758697155!3d18.468498775589172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89fcf0d241ef%3A0xe4b96ccfe845f0aa!2sCalle+Max+Henr%C3%ADquez+Ure%C3%B1a+98%2C+Santo+Domingo!5e0!3m2!1ses!2sdo!4v1527280059995"></iframe>
			
		</div>
		<!-- Contact Details Column -->
		<div class="col-lg-4 mb-4">
			<h3>Dirección</h3>
			<p>
				Max Henríquez Ureña 98. Evaristo Morales. Sto. Dgo., R.D.
			<br>
			</p>			
			<p>
				<abbr title="Email">Email</abbr>:
				<a href="mailto:name@example.com">info@jbgmtech.com
				</a>
			</p>
			<p>
				<abbr title="Hours">Horarios</abbr>: Lunes - Viernes: 8:00 AM to 5:00 PM
			</p>
		</div>
	</div>
	<!-- /.row -->
	
	
	<!-- Contact Form -->
	<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
	<div class="row">
		<div class="col-lg-8 mb-4">
			<h3>Contactenos</h3>
			@if(Session::has('flash_message'))
				<div class="alert alert-succes">{{Session::get('flash_message')}}</div>
		
			@endif
			 <form  method="POST" action="{{route('mail.store')}}">
			 {!! csrf_field() !!}
            <div class="control-group form-group">
              <div class="controls">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="name"id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefono:</label>
                <input type="tel" class="form-control" name="telf" id="telf" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese email">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Mensaje:</label>
                <textarea rows="10" cols="100" class="form-control" name="msj" id="msj" required data-validation-required-message="Please enter your message" maxlength="300" style="resize:none"></textarea>
              </div>
            </div>
           
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar Mensaje</button>
          </form>
	
			
		
			
			 
		</div>
		
	</div>
	<!-- /.row -->
	
</div>
<!-- /.container -->

@endsection		
@extends('layouts.default')
@section('content')

<section id="intro">
	<div class="container">
		<div class="row">
			<div class="span8 offset2 margin25">
				<div id="carousel_fade_intro" class="carousel slide carousel-fade">
					<div class="carousel-inner">
						<div class="active item">
							<h2>Tenga su propio dominio .com</h2>
						</div>
						<div class="inactive item">
							<h2>Desarrollo y Hosting</h2>
						</div>
						<div class="inactive item">
							<h2>Aplicaciones Móviles</h2>
						</div>
						<div class="inactive item">
							<h2>Creación y acceso a bases de datos</h2>
						</div>
						<div class="inactive item">
							<h2>Todo al alcance de un click</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fadeInUp delay animated hidden-phone" id="more">
		<a href="#contact-top" class="m-btn a-btn blue big icn-only"><i class="icon-sort-down icon-3x pull-left"></i></a>
	</div>
</section>

<section id="contact-top">
<!--start contact-desktop header-->
	<section id="contact-top" class="hidden-desktop">
		<h1 class="header">Contáctese</h1>
		<p class="header">Rellene el formulario, nos contactaresmos con Ud.</p>
	</section>
<!--start contact-mobile header-->
	<section id="contact-top-mobile" class="hidden-desktop">
		<h1 class="header">Contáctese</h1>
		<p class="header">Rellene el formulario, nos contactaremos con Ud.</p>
	</section>
</section>



<!--start contact-->
	<section id="contact">
		<div class="container">
			<div class="row divide">
				<div class="span8">
					<div class="row">
						{{ Form::open(array('route' => 'contactos.store')) }}
							<div class="span4">
								<label>Nombre:</label>
								{{ Form::text('nombre', '', array('class' => 'form-control span4', 'id' => 'nombre', 'placeholder' => 'Ingrese el nombre')) }}
							</div>
							<div class="span4">
								<label>Email:</label>
								{{ Form::text('email', '', array('class' => 'form-control span4', 'id' => 'email', 'placeholder' => 'Ingrese el email valido')) }}
							</div>
							<div class="span4">
								<label>Telefono:</label>
								{{ Form::text('telefono', '', array('class' => 'form-control span4', 'id' => 'telefono', 'placeholder' => 'Ingrese un telefono de contacto')) }}
							</div>
							<div class="span8">
								<label>Mensaje:</label>
								<textarea rows="6" name="contacto" id="contacto" class="span8" placeholder="En que podemos ayudarlo ?"></textarea>
							</div>
							<div class="span8">
								<div class="message"><div class="alert"></div></div>
								{{ Form::submit('Agregar', array('class' => 'm-btn blue')) }}
							</div>
						</form>
					</div>
				</div>
<!--start sidebar-->
				<div class="span4" id="address">
					<p>Lavalle y Manuel Ocampo<br>
					Gdor. Virasoro, Corrientes, Arg.</p>
					<p>general: info@codex-sa.com<br>
					support: support@codex-sa.com<br>
					press: press@codex-sa.com</p>
					<p><abbr title="Mobile">Teléfono:</abbr> (3756) 417-551<br>
					<abbr title="Mobile">Teléfono:</abbr> (3756) 610-566<br>
					<abbr title="Mobile">Skype:</abbr> victor.yaczesen<br>
					<abbr title="Mobile">Skype:</abbr> keloxers<br></p>
				</div>
			</div>
		</div>
	</section>
<!--start footer-->

@stop

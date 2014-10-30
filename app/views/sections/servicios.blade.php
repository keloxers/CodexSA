@extends('layouts.default')
@section('content')


<section id="services-top">
<!--start services-desktop header-->
	<section id="services-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<h1 class="header">Servicios</h1>
		<p class="header">Que podemos hacer por Ud ?</p>
	</section>
<!--start services-mobile header-->
	<section id="services-top-mobile" class="hidden-desktop">
		<h1 class="header">Servicios</h1>
		<p class="header">Que podemos hacer por Ud ?</p>
	</section>
</section>
<!--start services-->
<section id="services">
	<div class="container">
		<div class="row divide">
			<div class="span12">
				<ul class="thumbnails">
					<li class="span4">
						<div class="thumbnail">
							<i class="icon-cogs"></i>
							<h4>Esqueletos Adaptables</h4>
							<span>HTML5 & CSS3</span>
							<p>Todo negocio o empresa es diferente, es por eso que se debe analizar primero cada una de las necesidades de estos y así lograr establecer las tecnologías adecuadas que se utilizaran en cada sitio web. Hoy en día lo más novedoso y eficaz en el desarrollo de páginas web es el nuevo lenguaje HTML5 y CSS3.</p>
						</div>
					</li>
					<li class="span4">
						<div class="thumbnail">
							<i class="icon-eye-open"></i>
							<h4>Imagenes HD</h4>
							<span>Retina Ready</span>
							<p>Mientras que el diseño responsive habla en cuanto al “layout” o distribución del contenido del sitio según la resolución de la pantalla, Retina Ready es, entonces, que el sitio web estará adaptado con imágenes de alta resolución para verlo correctamente en estos dispositivos.</p>
						</div>
					</li>
					<li class="span4">
						<div class="thumbnail">
							<i class="icon-stethoscope"></i>
							<h4>Soporte Técnico</h4>
							<span>Parte del servicio</span>
							<p>El conjunto de servicios de nuestro centro de asistencia pone rápida y directamente a disposición una persona de contacto en caso de avería o para dar informaciones técnicas que ofrece apoyo para solucionar los problemas las 24 horas de los 365 días del año..</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section id="contact-top">
<!--start contact-desktop header-->
	<section id="contact-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
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

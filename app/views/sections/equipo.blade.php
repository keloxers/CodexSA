@extends('layouts.default')
@section('content')

<section id="team-top">
<!--start team-desktop header-->
	<section id="team-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<h1 class="header">Nuestro equipo</h1>
		<p class="header">Apple Fans</p>
	</section>
<!--start team-mobile header-->
	<section id="team-top-mobile" class="hidden-desktop">
		<h1 class="header">Nuestro equipo</h1>
		<p class="header">Apple Fans</p>
	</section>
</section>
<!--start team-->
<section id="team">
	<div class="container">
		<div class="row divide">
			<div class="span8 offset2">
				<h1>Quienes somos</h1>
				<p class="center">Nuestros clientes buscan soluciones escalables, modulares y a medida, esto es lo que siempre intentamos darles.

Codex S.A. es una empresa con trabajadores apasionados por su trabajo, estamos especializados en desarrollos online, ya sea sobre navegador web o sobre plataformas móviles (Android, iOS).

Nos involucramos completamente en los trabajos, con ello conseguimos aportar nuestros conocimientos de diseño web y nuestra experiencia en usabilidad, navegación y optimización en la indexación para buscadores web; si a esto le sumamos un cliente involucrado que aporta todo su conocimiento sobre su marca, su sector y su competencia; conseguimos sin ninguna duda, proyectos preparados para tener resultados tangibles. </p>
			</div>
			<div class="span12">
				<ul class="thumbnails">
					<li class="span6">
						<div class="thumbnail">
							<h4>Miguel Mendez</h4>
							<span>Fundador</span>
							<p>Developer, Video&Image, Movies, Coffee.<br>
							@keloxers</p>
						</div>
					</li>
					<li class="span6">
						<div class="thumbnail">
							<h4>Victor Yaczesen</h4>
							<span>Fundador</span>
							<p>Ceo, Job, PopCorn, LEGO, Twitter Fan.<br>
							@vjyac</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--start contact header-->
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

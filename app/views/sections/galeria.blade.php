@extends('layouts.default')
@section('content')

<section id="gallery-top">
<!--start gallery-desktop header-->
	<section id="gallery-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<h1 class="header">Galería</h1>
		<p class="header">Algunos desarrollos</p>
	</section>
<!--start gallery-mobile header-->
	<section id="gallery-top-mobile" class="hidden-desktop">
		<h1 class="header">Galería</h1>
		<p class="header">Algunos desarrollos</p>
	</section>
</section>
<!--start gallery-->
<!--start thumbnails section-->
<section id="gallery">
	<div class="container">
		<div class="row divide">
			<div class="span8 offset2">
				<h1>Clientes satisfechos</h1>
				<p class="center">Nos enorgullecemos de trabajar con nuestros clientes y socios de negocios del mundo y
					poder contar historias del éxito que han alcanzado junto con la tecnología de Codex S.A.  Entre nuestros
					clientes se encuentran marcas líderes como Navar S.A, VirasoroVirtual.com, Estudio Machado y Asociados, Inmobiliaria Litoral,
					Adolfo Navajas S.R.L., Itunet.com, wCut.com, Diarioellector.com, Esoquequeres.com, Red de Seguridad S.R.L.
			</div>
			<div class="span12">
				<ul class="thumbnails">
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="reddeseguridadsrl.com me" data-placement="top">
							<a href="#gallery_1" data-toggle="lightbox">
								<img src="/img/gallery/gallery_1.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="esoquequeres.com" data-placement="bottom">
							<a href="#gallery_2" data-toggle="lightbox">
								<img src="/img/gallery/gallery_2.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="untrabajomejor.com" data-placement="top">
							<a href="#gallery_3" data-toggle="lightbox">
								<img src="/img/gallery/gallery_3.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="virasolpropiedades.com.ar" data-placement="bottom">
							<a href="#gallery_4" data-toggle="lightbox">
								<img src="/img/gallery/gallery_4.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="machadoyasociados.com.ar" data-placement="top">
							<a href="#gallery_5" data-toggle="lightbox">
								<img src="/img/gallery/gallery_5.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="inmobiliarialitoral.com" data-placement="bottom">
							<a href="#gallery_6" data-toggle="lightbox">
								<img src="/img/gallery/gallery_6.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="diarioellector.com" data-placement="top">
							<a href="#gallery_7" data-toggle="lightbox">
								<img src="/img/gallery/gallery_7.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="radiomaster887.com" data-placement="bottom">
							<a href="#gallery_8" data-toggle="lightbox">
								<img src="/img/gallery/gallery_8.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="srvirasoro.com" data-placement="top">
							<a href="#gallery_9" data-toggle="lightbox">
								<img src="/img/gallery/gallery_9.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="guiavirasoro.com" data-placement="bottom">
							<a href="#gallery_10" data-toggle="lightbox">
								<img src="/img/gallery/gallery_10.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="transporteinca.com" data-placement="top">
							<a href="#gallery_11" data-toggle="lightbox">
								<img src="/img/gallery/gallery_11.jpg" alt="">
							</a>
						</div>
					</li>
					<li class="span3">
						<div class="thumbnail" data-thumb="tooltip" title="itunet.com.ar" data-placement="bottom">
							<a href="#gallery_12" data-toggle="lightbox">
								<img src="/img/gallery/gallery_12.jpg" alt="">
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--end thumbnails section-->
<!--start lightboxes-->
<div id="gallery_1" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_1@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_2" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_2@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_3" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_3@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_4" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_4@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_5" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_5@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_6" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_6@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_7" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_7@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_8" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_8@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_9" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_9@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_10" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_10@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_11" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_11@2x.jpg" alt="">
	</div>
</div>
<div id="gallery_12" class="lightbox hide fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class='lightbox-content'>
		<img src="/img/gallery/gallery_12@2x.jpg" alt="">
	</div>
</div>

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

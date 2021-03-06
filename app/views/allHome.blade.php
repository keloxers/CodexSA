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
		<a href="#services-top" class="m-btn a-btn blue big icn-only"><i class="icon-sort-down icon-3x pull-left"></i></a>
	</div>
</section>
<!--start services header-->
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
<section id="hint1">
	<a href="#" target="_blank"><strong>24!</strong> Su sitio institucional en <strong>24 horas</strong>, registro de dominios y servicio de email.</a>
</section>
<!--start works header-->
<section id="works-top">
<!--start works-desktop header-->
	<section id="works-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<h1 class="header">Trabajos</h1>
		<p class="header">Algunos clientes satisfechos!</p>
	</section>
<!--start works-mobile header-->
	<section id="works-top-mobile" class="hidden-desktop">
		<h1 class="header">Trabajos</h1>
		<p class="header">Algunos clientes satisfechos!</p>
	</section>
</section>
<!--start works-->
<section id="works">
	<div class="container">
		<div class="row divide">
			<div class="span12">
				<div id="carousel_vertical_slide" class="carousel slide vertical">
					<div class="carousel-inner">
						<div class="active item">
							<img src="/img/works/works_1.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_2.jpg" alt="">
						</div>
					</div>
					<button class="carousel-control left m-btn icn-only" href="#carousel_vertical_slide" data-slide="prev"><i class="icon-chevron-left"></i></button>
					<button class="carousel-control right m-btn icn-only" href="#carousel_vertical_slide" data-slide="next"><i class="icon-chevron-right"></i></button>
				</div>
			</div>
			<div class="span8 offset2">
				<h1>VirasoroVirtual.com</h1>
				<h4>Portal de noticias</h4>
				<p class="center">Desarrollo de sitio web completo, Responsive Design, auto adaptables tanto para desktop y móviles, sección especial para clasificados y autentificación de usuarios, envío de boletines automáticos vía e-mail semanales. Noticias mas importantes de la semana.</p>
			</div>
		</div>
		<div class="divider"></div>
		<div class="row divide">
			<div class="span12">
				<div id="carousel_horizontal_slide" class="carousel slide horizontal">
					<div class="carousel-inner">
						<div class="active item">
							<img src="/img/works/works_3.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_4.jpg" alt="">
						</div>
					</div>
					<button class="carousel-control left m-btn icn-only" href="#carousel_horizontal_slide" data-slide="prev"><i class="icon-chevron-left"></i></button>
					<button class="carousel-control right m-btn icn-only" href="#carousel_horizontal_slide" data-slide="next"><i class="icon-chevron-right"></i></button>
				</div>
				<h1>Totalmente Responsive</h1>
				<h4>Sitios autoadaptables</h4>
			</div>
			<div class="span7 offset1">
				<p>El diseño web adaptable o adaptativo, conocido por las siglas RWD (del inglés, Responsive Web Design) es una filosofía de diseño y desarrollo cuyo objetivo es adaptar la apariencia de las páginas web al dispositivo que se esté utilizando para visualizarla. Hoy día las páginas web se visualizan en multitud de tipos de dispositivos como tabletas, smartphones, libros electrónicos, portátiles, PCs,... Además, aún dentro de cada tipo, cada dispositivo tiene sus características concretas: Tamaño de pantalla, resolución, potencia de CPU, capacidad de memoria,... Esta tecnología pretende que con un solo diseño web tengamos una visualización adecuada en cualquier dispositivo.!</p>
			</div>
			<div class="span2 offset1">
				<p><strong>Client:</strong> Cooperativa de Servicios Públicos<br><br>
				<strong>Date:</strong> 21.09.2014
				<a href="http://www.cooperativavirasoro.com" class="m-btn blue span2">Ver online</a>
			</div>
		</div>
		<div class="divider"></div>
		<div class="row divide">
			<div class="span12">
			</div>
			<div class="span7">
				<div id="carousel_fade" class="carousel slide carousel-fade">
					<div class="carousel-inner">
						<div class="active item">
							<img src="/img/works/works_5.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_6.jpg" alt="">
						</div>
					</div>
					<button class="carousel-control left m-btn icn-only" href="#carousel_fade" data-slide="prev"><i class="icon-chevron-left"></i></button>
					<button class="carousel-control right m-btn icn-only" href="#carousel_fade" data-slide="next"><i class="icon-chevron-right"></i></button>
				</div>
			</div>
			<div class="span5 divide">
				<h1>Blog Profesional</h1>
				<h4>Mantengase en contacto con sus clientes</h4>
				<p>Total control de tu presencia online – Muchas personas cometen el error de pensar que sólo con estar en Facebook, Twitter o cualquier otra red social no es importante tener su propio blog. Tu no eres dueño de ninguna red social, cada vez que actualizan algo tu contenido y horas de trabajo esta en peligro. Tu controlas tu propio blog por que lo estas pagando. De ahí conectas todas las redes sociales y crear un tráfico de las redes sociales a tu blog y de tu blog a las redes sociales!</p>
				<a href="http://www.toledoaldo.com" class="m-btn blue pull-right">Ver online</a>
				<p><strong>Client:</strong> Toledoaldo.com<br>
				<strong>Date:</strong> 20.08.2014
			</div>
		</div>
		<div class="divider"></div>
		<div class="row divide">
			<div class="span5 divide">
				<h1>Herramientas</h1>
				<h4>Angular.js Html5 Javascript Css3</h4>
				<p>Ellos juega un rol muy importante en el desarrollo de aplicaciones web ya que la nueva generación
					de estas se ha vuelto cada vez mas compleja y competitiva. De esta forma, hay varias herramientas para
					agilizar y optimizar el proceso general de desarrollo, siempre con la idea de lograr la mejor experiencia
					de usuario posible. Nosotros usamos estas herramientas.</p>
			</div>
			<div class="span7">
				<div id="carousel_fade_2" class="carousel slide carousel-fade">
					<div class="carousel-inner">
						<div class="active item">
							<img src="/img/works/works_7.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_8.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_9.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_10.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_11.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_12.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_13.jpg" alt="">
						</div>
						<div class="inactive item">
							<img src="/img/works/works_14.jpg" alt="">
						</div>
					</div>
					<button class="carousel-control left m-btn icn-only" href="#carousel_fade_2" data-slide="prev"><i class="icon-chevron-left"></i></button>
					<button class="carousel-control right m-btn icn-only" href="#carousel_fade_2" data-slide="next"><i class="icon-chevron-right"></i></button>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="hint2">
	Experiencia
</section>
<!--start gallery header-->
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
<!--end lightbox section-->
<section id="hint3">
	Responsabilidad
</section>
<!--start team header-->
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

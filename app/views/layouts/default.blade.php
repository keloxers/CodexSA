<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Codex S.A.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="MyWay - Parallax Retina Bootstrap Multipurpose Template">
		<meta name="author" content="awerest - interactive agency">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
		<link href="/css/style.css" rel="stylesheet">
		<link href="/css/bootstrap-lightbox.min.css" rel="stylesheet">
		<link href="/css/m-styles.min.css" rel="stylesheet">
		<link href="/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
		<link rel="image_src" href="thumbnail.png">
		<!-- <link rel="icon" type="image/ico" href="favicon.ico"> -->

        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <meta http-equiv='Content-Language' content='es' />
        <meta name='google-site-verification' content='W8bAMgC8Sr5gk8OtozoKpt8D3gtejBAQS4ZnJyaso-M' />
        <meta name='LANGUAGE' content='es' />
        <meta name='DISTRIBUTION' content='Global' />
        <meta name='ROBOTS' content='all' />
        <meta http-equiv='REFRESH' CONTENT='3400;URL=http://www.codex-sa.com'>
        <meta name='AUTHOR' content='Codex S.A.' />
        <meta name='classification' content='Hosting site web desarrollo developer app movil angular android iphone' />
        <meta name='Googlebot' content='all' />
        <meta name='GENERATOR' content='www.codex-sa.com | codex-sa.com' />
        <meta name='SUBJECT' content='www.codex-sa.com | codex-sa.com' />

        <meta name='DESCRIPTION' content='Hosting site web desarrollo developer app movil angular android iphone' />
        <meta name='ABSTRACT' content='Hosting site web desarrollo developer app movil angular android iphone' />
        <meta name='KEYWORDS' content='Hosting site web desarrollo developer app movil angular android iphone' />
				<meta name='keywords' content='Hosting site web desarrollo developer app movil angular android iphone' />


	</head>

	<body data-spy="scroll" data-target=".navbar" data-offset='64' onLoad="$.stellar();">
		<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>
	<!--start navigation-->
		<div class="navbar navbar-fixed-top" id="navigation">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a href="/#intro" class="brand"><img src="/img/logo.png" alt=""></a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right">
							<li><a href="/#intro">Home</a></li>
							<li><a href="/#services-top">Servicios</a></li>
							<li><a href="/#works-top">Trabajos</a></li>
							<li><a href="/#gallery-top">Galería</a></li>
							<li><a href="/#team-top">Equipo</a></li>
							<li><a href="/#contact-top">Contacto</a></li>

							@if (Sentry::check())
							<li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}><a href="{{ URL::to('users') }}/{{ Session::get('userId') }}"><i class="icon-user"></i></a></li>
							<li><a href="{{ URL::to('logout') }}">{{trans('pages.logout')}}</a></li>
							@else
							<li {{ (Request::is('login') ? 'class="active"' : '') }}><a href="{{ URL::to('login') }}">{{trans('pages.login')}}</a></li>
							@endif

						</ul>
					</div>
				</div>
			</div>
		</div>




@yield('content')






<!--start footer-->
	<section id="footer">
		<div class="container">
			<div class="row divide">
<!--logo and copyright-->
				<div class="span3">
					<a href="#intro" class="brand"><img src="/img/logo.png" alt=""></a>
					<p>2014 © Codex S.A.</p><br>
					<p>CodexControl es un producto <br> de <a href="http://www.codexcontrol.com" target="_blank">Codex S.A.</a></p><br>
					<p>Lavalle y Manuel Ocampo. 1º. Piso. Virasoro, Corrientes, AR.</p>
				</div>
<!--footer menu-->
				<div class="span2 offset4">
					<ul>
						<li><h5>Menu</h5></li>
						<li><a href="/#intro">Home</a></li>
						<li><a href="/#services-top">Servicios</a></li>
						<li><a href="/#works-top">Trabajos</a></li>
						<li><a href="/#gallery-top">Galería</a></li>
						<li><a href="/#team-top">Equipo</a></li>
					</ul>
				</div>
<!--link to social networks-->
				<div class="span2 offset1">
					<ul>
						<li><h5>Social</h5></li>
						<li><a class="facebook" href="http://www.facebook.com/codexcontrol" target="_blank">Facebook</a></li>
						<li><a class="twitter" href="http://www.twitter.com/codexcontrol" target="_blank">Twitter</a></li>
						<li><a class="google" href="https://plus.google.com/u/0/104533843132286032110/posts" target="_blank">Google+</a></li>
						<li><a class="instagram" href="http://www.instagram.com/codexcontrol" target="_blank">Instagram</a></li>
						<li><a class="pinterest" href="http://www.pinterest.com/codexcontrol" target="_blank">Pinterest</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!--latest jQuery-->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
<!--main bootstrap js-->
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<!--custom js-->
	<script src="/js/custom.js" type="text/javascript"></script>
<!--preloader-->
	<script type="text/javascript">
		$(window).load(function() {
			$("#status").fadeOut();
			$("#preloader").delay(350).fadeOut("slow");
		})
	</script>
<!--retina support-->
	<script src="/js/retina.js" type="text/javascript"></script>
<!--smooth scroll on page-->
	<script src="/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
<!--custom scrollbar-->
	<script src="/js/jquery.nicescroll.min.js" type="text/javascript"></script>
<!--parallax-->
	<script src="/js/jquery.stellar.js" type="text/javascript"></script>
<!--contact-->
	<script src="/js/jquery.form.js"></script>
<!--gallery lightbox-->
	<script src="/js/bootstrap-lightbox.min.js"></script>
<!--google analytics-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-137439-2', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>

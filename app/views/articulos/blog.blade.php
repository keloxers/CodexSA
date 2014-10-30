@extends('layouts.default')
@section('content')

<section id="works-top">
<!--start works-desktop header-->
	<section id="works-top-desktop" class="visible-desktop" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<h1 class="header">Blog</h1>
		<p class="header">Noticias!</p>
	</section>
<!--start works-mobile header-->
	<section id="works-top-mobile" class="hidden-desktop">
		<h1 class="header">Blog</h1>
		<p class="header">Noticias!</p>
	</section>
</section>


<section id="works">
	<div class="container">

		@foreach ($articulos as $articulo)

		<?php
		$texto = $articulo->texto;
		$archivos = DB::table('archivos')
		->where('padre', '=', 'articulo')
		->where('padre_id', '=', $articulo->id)
		->get();

		if (preg_match('/^.{1,260}\b/s', $articulo->texto, $match))
		{ $texto = $match[0]; }
		$categoria = Categoria::find($articulo->categorias_id);
		?>

		<div class="row divide">
			<div class="span12">
			</div>
			<div class="span7">

				@if (count($archivos)>0 )
				<div id="carousel_fade" class="carousel slide carousel-fade">
					<div class="carousel-inner">

						@foreach ($archivos as $archivo)
						<div class="active item">
							<img src="/uploads/big/{{ $archivo->archivo }}" alt="">
						</div>
						@endforeach

					</div>
					<button class="carousel-control left m-btn icn-only" href="#carousel_fade" data-slide="prev"><i class="icon-chevron-left"></i></button>
					<button class="carousel-control right m-btn icn-only" href="#carousel_fade" data-slide="next"><i class="icon-chevron-right"></i></button>
				</div>
			</div>

			@endif

			<div class="span5 divide">
				<h3>{{ $articulo->articulo }}</h3>
				<h4>{{ $articulo->copete }}</h4>
				<p>{{ $texto }}</p>
				<a href="/articulos/{{$articulo->id}}" class="m-btn blue pull-right">Ver ...</a>
				<p><strong>Fecha:</strong> {{ $articulo->created_at }}<br>
					<strong>Visitas:</strong> {{ $articulo->visitas }}<br>
					@if (Sentry::check() && Sentry::getUser()->hasAccess('admin'))
					· <a href="/articulos/{{$articulo->id}}/edit">Editar</a>
					@endif
				</div>
			</div>
			<div class="divider"></div>
			@endforeach

			{{ $articulos->links()}}

		</div>
	</section>

	@stop

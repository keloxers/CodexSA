@extends('layouts.default')
@section('content')


<section id="services">
	<div class="container">
		<div class="row divide">
			<div class="span12">
				<ul class="thumbnails">
					<li class="span12">
						<div class="thumbnail">
							<i class="icon-user"></i>
							<h3>Perfil</h3>


								<div>

								<h3>Tus Datos:</h3>

								@if ($user->first_name)
										<p><strong>Nombre:</strong> {{ $user->first_name }} </p>
								@endif
								@if ($user->last_name)
										<p><strong>Apellido:</strong> {{ $user->last_name }} </p>
								@endif
										<p><strong>Email: </strong> {{ $user->email }}</p>


								<p><em>Fecha creacion Perfil: {{ $user->created_at }}</em></p>
								<p><em>Modificados: {{ $user->updated_at }}</em></p>

								<a href="/users/{{$user->id}}/edit" class="btn pi-btn-orange pi-btn-bigger">Editar</a>

								<p>
								<br><br>
								<h3>Grupos a los que eres miembro:</h3>
								<?php $userGroups = $user->getGroups(); ?>
								<div>

								@if (count($userGroups) >= 1)
								@foreach ($userGroups as $group)
								{{ $group['name'] }}<br>
								@endforeach
								@else
								<li>{{trans('groups.notfound')}}</li>
								@endif

								</div>
							</p>



						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>



@stop




@stop

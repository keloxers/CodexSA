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




					{{trans('pages.actionedit')}}
					@if ($user->email == Sentry::getUser()->email)
					{{trans('users.yours')}}
					@else
					{{ $user->email }}
					@endif

					<p>

	{{ Form::open(array(
				'action' => array('UserController@update', $user->id),
				'method' => 'put',
				'class' => 'form-horizontal',
				'role' => 'form'
				)) }}



				<div class="form-group {{ ($errors->has('firstName')) ? 'has-error' : '' }}" for="firstName">
						{{ trans('users.fname') }}:
						{{ Form::text('firstName', $user->first_name, array('class' => 'form-control', 'placeholder' => trans('users.fname'), 'id' => 'edit_firstName'))}}
						{{ ($errors->has('firstName') ? $errors->first('firstName') : '') }}
					</div>
				<br>

				<div class="form-group {{ ($errors->has('lastName')) ? 'has-error' : '' }}" for="lastName">
						{{ trans('users.lname') }}: 
						{{ Form::text('lastName', $user->last_name, array('class' => 'form-control', 'placeholder' => trans('users.lname'), 'id' => 'edit_lastName'))}}
						{{ ($errors->has('lastName') ? $errors->first('lastName') : '') }}
				</div>
				<br>
				@if (Sentry::getUser()->hasAccess('admin'))
				<div class="form-group">
						{{trans('users.group_membership')}}
								@foreach ($allGroups as $group)
										<label class="checkbox-inline">
												<input type="checkbox" name="groups[{{ $group->id }}]" value='1'
												{{ (in_array($group->name, $userGroups) ? 'checked="checked"' : '') }} > {{ $group->name }}
										</label>
								@endforeach
				</div>
				@endif

				<div class="form-group">
								{{ Form::hidden('id', $user->id) }}
								{{ Form::submit(trans('pages.actionedit'), array('class' => 'btn pi-btn-base pi-btn-small'))}}
			</div>
		{{ Form::close()}}
			</p>
<br><br>
<h4>{{trans('users.change_passwort')}}</h4>

		{{ Form::open(array(
				'action' => array('UserController@change', $user->id),
				'class' => 'form-inline',
				'role' => 'form'
				)) }}

				<div class="form-group {{ $errors->has('oldPassword') ? 'has-error' : '' }}">
					{{ Form::label('oldPassword', trans('users.oldpassword_lbl'), array('class' => 'sr-only')) }}
			{{ Form::password('oldPassword', array('class' => 'form-control', 'placeholder' => trans('users.oldpassword_lbl'))) }}
			</div>
			<br>
				<div class="form-group {{ $errors->has('newPassword') ? 'has-error' : '' }}">
					{{ Form::label('newPassword', trans('users.newpassword_lbl'), array('class' => 'sr-only')) }}
						{{ Form::password('newPassword', array('class' => 'form-control', 'placeholder' => trans('users.newpassword_lbl'))) }}
			</div>
			<br>
			<div class="form-group {{ $errors->has('newPassword_confirmation') ? 'has-error' : '' }}">
					{{ Form::label('newPassword_confirmation', trans('users.newcompassword_lbl'), array('class' => 'sr-only')) }}
						{{ Form::password('newPassword_confirmation', array('class' => 'form-control', 'placeholder' => trans('users.newcompassword_lbl'))) }}
			</div>
			<br>
				{{ Form::submit(trans('users.change_passwort'), array('class' => 'btn pi-btn-base pi-btn-small'))}}

			{{ ($errors->has('oldPassword') ? '<br />' . $errors->first('oldPassword') : '') }}
			{{ ($errors->has('newPassword') ?  '<br />' . $errors->first('newPassword') : '') }}
			{{ ($errors->has('newPassword_confirmation') ? '<br />' . $errors->first('newPassword_confirmation') : '') }}

			{{ Form::close() }}



						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>



@stop

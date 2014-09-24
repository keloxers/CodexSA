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
							<h3>Login</h3>

							{{ Form::open(array('action' => 'SessionController@store')) }}
							<!-- Email form -->
							<div class="form-group">
									{{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => trans('users.email'), 'autofocus')) }}
							</div>
							<!-- End email form -->

							<!-- Password form -->
							<div class="form-group">
									{{ Form::password('password', array('class' => 'form-control', 'placeholder' => trans('users.pword')))}}
							</div>
							<!-- End password form -->

							<a href="{{ route('forgotPasswordForm') }}">
									{{trans('pages.password_reset')}}?
							</a>
							<br>

									{{ Form::checkbox('rememberMe', 'rememberMe') }} {{trans('users.remember')}}?
							<!-- End checkbox -->

							<!-- Submit button -->
							<p>
								{{ Form::submit(trans('pages.login'), array('class' => 'btn pi-btn-base pi-btn-wide pi-weight-600'))}}
							</p>

<p>
	No tienes una cuenta ? <a href="/register">Registrarse gratis !</a>
</p>


							<!-- End submit button -->
							{{ Form::close() }}
							</div>
							<!-- End box -->



						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>



@stop

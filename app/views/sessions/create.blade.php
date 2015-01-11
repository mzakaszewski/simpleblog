@extends('layouts/master')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12 col-md-offset-3 col-xs-offset-6">
				<h2>Log In</h2>

				@include('layouts/partials/errors')
				
				{{ Form::open(['route' => 'login']) }}
				
					<div class="form-group">
						{{ Form::label('username', 'Username') }}
						{{ Form::text('username', '', ['class' => 'form-control']) }}
					</div>
					
					<div class="form-group">
						{{ Form::label('password', 'Password') }}
						{{ Form::password('password', ['class' => 'form-control']) }}
					</div>
					
					<div class="form-group">
						{{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
					</div>
				
				{{ Form::close() }}
				
			</div>
		</div>
	</div>

@stop
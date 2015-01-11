@extends('layouts/master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-xs-12 col-md-offset-3 col-xs-offset-6">
			<h2>New Post</h2>

			@include('layouts/partials/errors')

			{{ Form::open(['route' => 'admin.post.store']) }}

				<div class="form-group">
					{{ Form::label('title', 'Post Title') }}
					{{ Form::text('title', '', ['class' => 'form-control']) }}
				</div>

				<div class="form-group">
					{{ Form::label('content', 'Post Content') }}
					{{ Form::textarea('content', '', ['class' => 'form-control']) }}
				</div>

				<div class="form-group">
					{{ Form::submit('Post', ['class' => 'btn btn-primary']) }}
				</div>

			{{ Form::close() }}

		</div>
	</div>
</div>

@stop
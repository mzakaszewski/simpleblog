<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			
		</div>
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
			<ul class="nav navbar-nav navbar-right">

				@if (Auth::user())

					<li>{{ link_to_route('admin.post.create', 'Create Post'); }}</li>
					<li>{{ link_to_route('logout', 'Logout'); }}</li>
				@else

					<li><a>Login To Backstage</a></li>
				
				@endif	
			</ul>
		</div>
  </div>
</nav>
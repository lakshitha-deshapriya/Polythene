@if(Session::has('success'))
	<div class="alert alert-success" role="alert">
		<strong>Success: </strong>{{ Session:: pull('success')}}
	</div>

@endif

@if(Session::has('failer'))
	<div class="alert alert-danger" role="alert">
		<strong>Error: </strong>{{ Session:: pull('failer')}}
	</div>
@endif
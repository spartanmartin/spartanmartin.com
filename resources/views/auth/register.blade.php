@extends('app')

@section('title')Register @stop

@section('jumbotron')black-belt @stop

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<!--// <div class="panel-heading">Register</div> //-->
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label for="name" class="control-label">Name</label>
							<div>
								<input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="control-label">E-Mail Address</label>
							<div>
								<input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="control-label">Password</label>
							<div>
								<input id="password" name="password" type="password" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="password_confirmation" class="control-label">Confirm Password</label>
							<div>
								<input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<div>
								<button type="submit" class="btn btn-primary btn-lg">
									Register
								</button>

								<a class="btn btn-link" href="{{ url('/auth/login') }}">Already registered? Log in!</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

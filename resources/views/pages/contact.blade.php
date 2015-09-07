@extends('app')

@section('title')Contact Me @stop

@section('stylesheets')
		<link rel="stylesheet" id="styles-contact" href="/css/contact.css" type="text/css">
@stop

@section('jumbotron')contact @stop

@section('content')
		<section>

			<div class="container-fluid">

				<div class="row">

					<div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">

						<div class="panel panel-default">

							<div class="panel-heading">

								<h2>Contact Me</h2>
								<p>I would love to hear from you whether you are enquiring about my services, critiquing my work, or just want to chat.  Fill out the form below and I will get back to you as soon as possible.</p>

							</div>

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

								<form class="form-horizontal" role="form" method="POST" action="{{ url('/contact') }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<div class="row spartan-horizontal">

										<div class="col-md-6">

											<div class="form-group">
												<label for="name" class="control-label">Your Name</label>
												<div>
													<input id="name" name="name"  type="text" class="form-control"value="{{ old('name') }}">
												</div>
											</div>

										</div>

										<div class="col-md-6">

											<div class="form-group">
												<label for="phone" class="control-label">Phone (if you would like a call)</label>
												<div>
													<input id="phone" name="phone"  type="phone" class="form-control"value="{{ old('phone') }}">
												</div>
											</div>

										</div>

										<div class="col-md-12">

											<div class="form-group">
												<label for="email" class="control-label">E-Mail Address</label>
												<div>
													<input id="email" name="email"  type="email" class="form-control"value="{{ old('email') }}">
												</div>
											</div>

											<div class="form-group">
												<label for="message" class="control-label">Message</label>
												<div>
													<textarea id="message" name="message" class="form-control">{{ old('message') }}</textarea>
												</div>
											</div>

											<div class="form-group">
												<div>
													<button type="submit" class="btn btn-primary btn-lg">Send</button>
												</div>
											</div>

										</div>

									</div>

								</form>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>
@stop

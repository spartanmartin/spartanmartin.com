@extends('app')

@section('title')Spartan Martin @stop

@section('stylesheets')
		<link rel="stylesheet" id="styles-home" href="/css/home.css" type="text/css">
@stop

@section('jumbotron')black-belt @stop

@section('content')
	<section>

		<div class="container">

			<div class="row">

				<div class="col-sm-5 col-md-4 col-lg-3">@if(is_object($founder))

					<div class="profile">

						<div class="profile-pic">
							<div class="profile-hover">Hover for more info</div>
						</div>
						<div class="profile-info">
							<div class="profile-name">
								<p>{{ $founder->first_name }} {{ $founder->last_name }}</p>
								<span>{{ $founder->title }}</span>
							</div>@if(!empty($founder->email))
							<div class="profile-email"><a href="/contact/{{ strtolower($founder->first_name) }}" title="Email Me!">Email</a></div>@endif @if(!empty($founder->facebook))
							<div class="profile-facebook"><a href="http://facebook.com/{{ $founder->facebook }}" title="Facebook" target="_blank">Facebook</a></div>@endif @if(!empty($founder->twitter))
							<div class="profile-twitter"><a href="http://twitter.com/{{ $founder->twitter }}" title="Twitter" target="_blank">Twitter</a></div>@endif @if(!empty($founder->googleplus))
							<div class="profile-googleplus"><a href="http://googleplus.com/{{ $founder->googleplus }}" title="Google+" target="_blank">Google+</a></div>@endif @if(!empty($founder->linkedin))
							<div class="profile-linkedin"><a href="http://linkedin.com/{{ $founder->linkedin }}" title="LinkedIn" target="_blank">LinkedIn</a></div>@endif @if(!empty($founder->treehouse))
							<div class="profile-treehouse"><a href="http://teamtreehouse.com/{{ $founder->treehouse }}" title="Treehouse Profile" target="_blank">Treehouse</a></div>@endif @if(!empty($founder->codeacademy))
							<div class="profile-codeacademy"><a href="http://codeacademy.com/{{ $founder->codeacademy }}" title="Code Academy Profile" target="_blank">Code Academy</a></div>@endif
						</div>

					</div>@endif

				</div>

				<div class="col-sm-7 col-md-8 col-lg-9">

					<div class="definition">

						<div class="definition-term">Spartan [<b>spahr</b>-tn]</div>
						<div class="definition-type"><i>adjective</i></div>
						<div class="definition-desc">
							<ol>
								<li>of or relating to Sparta or it's people</li>
								<li>Rigorously self-disciplined or self-restrained</li>
								<li>Resolute in the face of pain or danger or adversity; "<b>spartan</b> courage"</li>
							</ol>
						</div>

					</div>

					<div class="definition">

						<div class="definition-term">Martin [<b>mahr</b>-tn]</div>
						<div class="definition-type"><i>surname</i></div>
						<div class="definition-desc">
							<p>from the Latin name <i>Martinus</i>, a derivative of <b>Mars</b>, the Roman god of fertility and war.</p>
						</div>

					</div>

				</div>

			</div>

		</section>
<!--
		<section>

			<div class="container">

				<div class="row">

					<div class="col-xs-12">

						<h2>About Me</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula eu urna at gravida. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse ut ex quis quam bibendum mattis. Nunc quis ante tristique nisl molestie tincidunt. Vestibulum auctor quam ut ullamcorper ultricies. Duis eu pharetra sapien. Nulla facilisi. Cras bibendum leo et neque sagittis, sit amet faucibus neque iaculis. Donec ultrices lectus a metus rutrum venenatis. Curabitur interdum, turpis in tristique auctor, metus lectus elementum felis, at ultricies metus mi quis orci. Morbi imperdiet, mi id commodo ornare, leo orci porta purus, congue faucibus risus est sed enim. Praesent laoreet metus sit amet egestas euismod.</p>

						<p>Curabitur leo nunc, efficitur a finibus sit amet, vehicula vel arcu. Duis auctor velit quis vulputate tincidunt. Nullam tempus velit ut porttitor lacinia. Duis tempus risus ipsum, et placerat purus volutpat nec. Sed leo leo, dictum sed mi quis, mattis dictum est. Nunc vitae sem ac nisl interdum commodo ullamcorper quis massa. Duis convallis leo blandit sollicitudin tempus.</p>

						<p>Vivamus vel augue ac risus egestas porta. Ut facilisis eget lectus id efficitur. Cras iaculis blandit risus ac vehicula. Nunc at dolor purus. Maecenas ultricies mollis facilisis. Pellentesque facilisis, neque id faucibus posuere, velit tellus facilisis sem, non iaculis nulla risus sit amet ex. Aenean in arcu non augue ornare iaculis. Etiam eu placerat ipsum, consequat accumsan libero. In consectetur, felis ac venenatis tincidunt, sapien nisi hendrerit ante, vel dapibus augue ex vitae eros. Aenean vehicula molestie leo, ac aliquet enim bibendum quis. Morbi eu urna varius, laoreet lectus convallis, vehicula sapien. Pellentesque et auctor nisi. Maecenas varius aliquam odio, id consequat sem gravida in. Mauris magna arcu, vulputate quis luctus eu, cursus dictum enim.</p>

						<p>Etiam cursus volutpat ipsum, a tincidunt sem vestibulum sed. Sed ut purus id lectus tincidunt eleifend. Sed non sapien vitae nunc congue porttitor sit amet ut nulla. Fusce sit amet aliquet mi. Vestibulum pharetra justo dolor, et luctus libero mattis non. Duis maximus felis purus, et tempor odio consectetur ac. Aenean rutrum porttitor aliquet. Phasellus consequat enim a purus feugiat dignissim. Donec facilisis, elit eget tristique dapibus, nisi nibh rhoncus eros, at convallis ex tellus vel erat. Phasellus convallis ut mi a tempus. Aenean vulputate hendrerit tempor. Nam vel tellus molestie, consectetur nunc eu, scelerisque libero. Nam id elit nec magna imperdiet euismod. Etiam bibendum neque et dolor laoreet sollicitudin. Aenean tincidunt risus ligula, nec lobortis dui gravida et. Integer quis maximus mi.</p>

						<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi sodales vitae dolor vitae tempus. Proin tellus orci, molestie in facilisis bibendum, tempor eu libero. Pellentesque quis rhoncus magna, id faucibus arcu. Aenean neque enim, vulputate id velit eget, accumsan faucibus diam. Aliquam a dolor tristique, lobortis ipsum et, pretium diam. Duis vehicula vestibulum neque ac imperdiet. Quisque mollis enim lacinia aliquam accumsan. Integer sagittis, purus in tristique facilisis, neque ipsum finibus ipsum, non sodales tortor nisi nec velit. Morbi fermentum lorem et ultrices tincidunt. Donec malesuada lorem vulputate varius aliquam. Pellentesque lobortis risus blandit hendrerit tristique. Fusce at sem aliquam, pretium lectus et, laoreet eros.</p>

					</div>

				</div>

			</div>

		</div>

	</section>
-->
@stop

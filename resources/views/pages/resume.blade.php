@extends('app')

@section('title')Resume @stop

@section('stylesheets')
		<link rel="stylesheet" id="styles-resume" href="/css/resume.css" type="text/css">
@stop

@section('jumbotron')resume @stop

@section('content')

	<!--// WORK HISTORY //-->

	<section id="work-history" class="resume-section">

		<div class="container">

			<div class="row">

				<div class="col-sm-4 resume-label">

					<h2>Work History</h2>

				</div>

				<div class="col-sm-8 resume-content">

					@foreach ($data['history'] as $history)
						<?php list ($employer, $position, $starting, $ending) = $history; ?>
					<div class="row work-group">

						<div class="col-sm-5 work-employer">{{ $employer }}</div>
						<div class="col-sm-7 work-position">{{ $position }}</div>

					</div>

					@endforeach

				</div>

			</div>

		</div>

	</section>

	<!--// PROFESSIONAL SKILLS //-->

	<section id="professional-skills" class="resume-section">

		<div class="container">

			<div class="row">

				<div class="col-sm-4 resume-label">

					<h2>Professional Skills</h2>

				</div>

				<div class="col-sm-8 resume-content">

					@foreach ($data['skills'] as $skillgroup)
					<div class="skills-group">
						@foreach ($skillgroup as $skillset)
							<?php
								list ($skill, $date, $stars) = $skillset;
								$year = 60*60*24*365;
								$years = ceil(time()/$year - strtotime($date)/$year);
								$year = 'year'.($years > 1 ? 's' : '' );
								if ($years > 10)
								{
									$years = "10+";
								}

							?>
						<div class="row">

							<div class="col-sm-5 col-md-6 col-lg-7 skills-name">{{ $skill }}</div>
							<div class="col-sm-3 col-md-3 col-lg-2 skills-years">{{ $years }} {{ $year }}</div>
							<div class="col-sm-4 col-md-3 col-lg-3 skills-stars">
								@for ($i=0; $i<$stars; $i++)
								<i class="fa fa-star spartan-text-dark"></i>
								@endfor
								@for($x=$i; $x<5; $x++)
								<i class="fa fa-star-o spartan-text-dark"></i>
								@endfor
							</div>

						</div>

						@endforeach
					</div>
					@endforeach

				</div>

			</div>

		</div>

	</section>

	<!--// EDUCATION //-->

	<section id="education" class="resume-section">

		<div class="container">

			<div class="row">

				<div class="col-sm-4 resume-label">

					<h2>Education</h2>

				</div>

				<div class="col-sm-8 resume-content">

					@foreach ($data['education'] as $education)
						<?php 
							list ($school, $text, $href, $desc) = $education;
							$link = (!empty($href) ? '<a href="'.$href.'" title="'.$text.'" target="_blank">' : '').$text.(!empty($href) ? '</a>' : '');

						?>
						<div class="row education-group">

							<div class="col-sm-6 education-school">{{ $school }}</div>
							<div class="col-sm-6 education-degree">@if (!empty($href))<a href="{{ $href }}" title=@if (!empty($desc))"{{ $desc }}" @else"{{ $text }}" @endif target="_blank"> @endif{{ $text }}@if (!empty($href))</a> @endif</div>

						</div>

					@endforeach

				</div>

			</div>

		</div>

	</section>
@stop

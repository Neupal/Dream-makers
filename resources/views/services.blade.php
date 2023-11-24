@include('layouts.header')
<section class="offer-section" id="special">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-10 col-md-10">
				<div class="offer-content">
					<h1 class="section-heading1">If you have any query related investment.</h1>
					<h4 class="offer">we are available 24/7</h4>
				</div>
			</div>
			<div class="col-12 col-lg-2 col-md-2 col-xs-12">
				<a href="{{url('contact')}}" class="btn btn-outline-info blue bg-warning">Contact Us</a>
			</div>
		</div>
	</div>
</section>

<section id="our_core_values" class="bg-light">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h1 class="text-capitalize">our Experience</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="main-timeline">
					@foreach($value as $data)
					<div class="timeline">
						<span class="timeline-icon"></span>
						<span class="year">{{$data->date}}</span>
						<div class="timeline-content">
							<h3 class="title">{{$data->title}}</h3>
							<p class="description">
								{{$data->description}}
							</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

<!-- *****About section***** -->
<div class="properties section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<div class="section-heading text-center">
					<h6> Our Service</h6>
					<!-- <h2>We Provide The Best Property You Like</h2> -->
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($service as $data)
			<div class="col-lg-4 col-md-6">
				<div class="item">
					<a href="property-details.html"><img src="{{asset('images/' .$data->image)}}" alt=""></a>
					<span class="category">{{$data->title}}</span>
					<!-- <h6>$2.264.000</h6> -->
					<h4><a href="property-details.html">{{$data->description}}</a></h4>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@include('layouts.footer')
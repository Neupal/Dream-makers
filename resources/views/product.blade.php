@include('layouts.header')

<div class="product_banner">
	<div class="overl"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12 pt-5">
				<div class="section-heading">
					<h1 class="display-4 text-white">Products</h1>
				</div>
				<div class="section-inline">
					<ul class="list-inline">
						<li class="list-inline-item">
							<a class="home text-white" href="index.html">Home</a>
						</li>
						<li class="list-inline-item">
							<i class="home text-white fa fa-angle-double-right"></i>
						</li>
						<li class="list-inline-item">
							<p class="home text-white">Products</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section id="services" class="bg-light">
	<!-- <div class="container">
		@foreach($consulting as $data)
		<div class="row no-gutters">
			<div class="col-lg-6">
				<div class="services_info">
					<ul>
						<li>Project Name: <span>{{$data->project}}</span></li>
						<br>

						<li>Buyer: <span>{{$data->buyer}}</span></li>
						<br>

						<li>Location: <span>{{$data->location}}</span></li>
						<br>

						<li>Date: <span>{{$data->date}}</span></li>
						<br>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="services_img">
					<img src="{{asset('images/' .$data->image)}}" alt="Services">
				</div>
			</div>
		</div>
		<br>
		@endforeach
	</div> -->
	<div id="rs-features">
		<div class="">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center heading-section animate-box">
						<h3>Our Products</h3>
						<!-- <p style="text-align:justify;">Our scope in the field of engineering are well defined here that helps to achieve desired goal</p> -->
					</div>
				</div>
				<div class="row">
					@foreach($consulting as $data)
					<div class="col-md-4 animate-box">
						<div class="property">
							<a href="#" class="rs-property">
								<img src="{{asset('images/' .$data->image)}}" alt="Services">
								<span class="status">Sold</span>
								<ul class="list-details">
									<li>Buyer: {{$data->buyer}}
									<li>
										<br>
									<li>Location: {{$data->location}}</li>
									<br>
									<li>Date: {{$data->date}}</li>
									<br>
								</ul>
							</a>
							<div class="property-details">
								<!-- <h3>{{$data->project}}</h3> -->
								<span class="price">{{$data->project}}</span>
								<!-- <p>A detail survey is carried out to locate all features on a piece of land. This includes both natural and man-made structures. Natural features include vegetation of all sorts – rocks, trees, stumps and so on.</p> -->
								<!-- <span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span> -->
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@include('layouts.footer')
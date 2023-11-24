@include('layouts.header')
<style>
	.blue{
		color:gray!important;
	}
	.blue:hover{
		color:red!important;
	}
</style>
<div class="page_banner">
	<div class="overl"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
				<div class="section-heading">
					<h1 class="display-4 text-white">About Us</h1>
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
							<p class="home text-white">About Us</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section id="global_leadership" class="bg-light">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h1>Our Leadership</h1>
					<!-- <p class="">Lorem ipsum dolor sit amet, consectetur adi sollicitudin et mollis tellus neque vitae elit.</p> -->
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($leadership as $data)
			<div class="col-md-3 col-sm-4">
				<div class="my-col">
					<div class="card">
						<img class="card-img-top" src="{{asset('images/' .$data->image)}}" alt="Card image cap">
						<ul class="footer_social list-inline mt-2">
							<li class=""><a href="#"><i class="fab fa-facebook-f blue"></i></a></li>
							<li class=""><a href="#"><i class="fab fa-twitter blue"></i></a></li>
							<li class=""><a href="#"><i class="fab fa-google-plus-g blue"></i></a></li>
						</ul>
						<div class="card-body">
							<h4 class="card-title">{{$data->name}}</h4>
							<p class="card-text">{{$data->position}}</p>
							<p class="card-text">{{$data->email}}</p>
							<p class="card-text">{{$data->experience}}</p>
							<!-- <a href="#" class="btn btn-primary">Read More</a> -->
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<!-- ***** Our Experts section start ***** -->
<section id="our_experts" class="bg-white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading text-center">
					<h1>our experts</h1>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adi sollicitudin interdum et mollis tellus neque vitae elit.</p> -->
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($expert as $data)
			<div class="col-md-3 col-sm-4">
				<div class="our_experts_img">
					<img src="{{asset('images/' .$data->image)}}" alt="our_experts_img" class="image">
					<div class="overlay">
						<div class="text">
							<h4>{{$data->name}}</h4>
							<p>{{$data->position}}</p>
							<p>{{$data->experience}}</p>
						</div>
					</div>
				</div>
				<ul class="footer_social list-inline flex justify-content-center">
					<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f blue"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter blue"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g blue"></i></a></li>
				</ul>
			</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-md-12 d-flex justify-content-center align-items-center">
				{{$expert->links('vendor.pagination.default')}}
			</div>
		</div>
	</div>
</section>
<div id="rs-wrapper">
	<div id="rs-page">
		<div id="rs-testimonial">
			<li style="background-image: url(images/user-1.jpg); background-repeat: no-repeat; background-size: 100%;">
				<div class="overlay"></div>
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Happy Clients</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div id="testimonial-slider" class="owl-carousel">
								@foreach($client as $data)
								<div class="testimonial">
									<div class="content">
										<p class="description">
											{{$data->comment}}
										</p>
									</div>
									<div class="testimonial-pic">
										<img src="{{asset('images/' .$data->image)}}" alt="testimonial">
									</div>
									<div class="testimonial-review">
										<h3 class="testimonial-title">{{$data->Name}}</h3>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</li>
		</div>
	</div>
</div>
<br>
@include('layouts.footer')
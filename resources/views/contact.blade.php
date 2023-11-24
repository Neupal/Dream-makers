@include('layouts.header')
<div class="contact_banner">
	<div class="overl"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12 pt-5">
				<div class="section-heading">
					<h1 class="display-4 text-white">Contact Us</h1>
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
							<p class="home text-white">Contact Us</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="contact-us" id="contact">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-7">
				<div class="contact-form mb-30-sm pt-0-sm">
					<h3 class="mb-5">Get in Touch</h3>
					<form action="{{url('/contactstore')}}" method="post">
					@csrf
						<input type="text" id="name" name="name" placeholder='Enter name'>
						<input type="email" id="email" name="email" placeholder='Enter email'>
						<input type="text" id="title" name="title" placeholder="title">
						<input type="text" id="message" id="description" name="description" rows="30" placeholder="description">
						<button type="submit" class="btn btn-outline-info blue bg-warning mt-5">Submit</button>
					</form>
				</div>
			</div>
			<div class="col-md-5">
				<div class="contact-detail">
					<h3 class="mb-5">Address</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<ul class="list-unstyled contact-icons">
						<li><a href="tel: 9851327959"><i class="fas fa-mobile-alt pr-3"></i> 98513-27959, 98513-27958</a>
						</li>
						<li><a href="mailto:Dmec.nepal@gmail.com"><i class="far fa-envelope pr-3"></i> Dmec.nepal@gmail.com</a></li>
						<li><a href="#"><i class="fas fa-map-marker pr-3"></i>Buddhanagar-10,  Kathmandu</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
@include('/layouts.footer')
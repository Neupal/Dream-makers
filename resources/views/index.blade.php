@include('layouts.header')
@section('title')
Index
@endsection
<div id="slider">
	<div class="container-fluid">
		<div class="row">
			<!-- Paradise Slider -->
			<div id="fw_al_002" class="carousel slide swipe_x ps_easeInOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
				<!-- Wrapper For Slides -->
				<div class="carousel-inner" role="listbox">
					@foreach($intro as $data)
					<!-- First Slide -->
					<div class="carousel-item active">
						<div class="overl"></div>
						<video controls poster="{{asset('business/images/video2.mp4')}}" width="100%" height="100%" autoplay muted loop>
							<source src="{{asset('business/images/video2.mp4')}}" type="video/mp4">
						</video>
						<div class="fw_al_002_slide" style="margin-left:48px;">
							<h1 class="bold" data-animation="animated fadeInRight">{{$data->title}}</h1>
							<p data-animation="animated fadeInRight">{{$data->description}}</p>
							<a href="{{url('contact')}}" role="button" type="submit" class="btns btn-outline-info blue bg-warning ml-3">Contact Us</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-10 col-md-6 col-sm-6 mx-auto d-flex justify-content-center align-items-center">
		<div class="p-4">
			<div class="seaction-paragraph">
				<p style="text-align:justify;text-justify:inter-word">Dream Makers Engineering Private Limited ( DMEC Pvt. Ltd.) is established as
					Multidisciplinary Engineering Company registered in the Department of
					Government of Nepal under the Nepal Company Law in 1st Dec 2015 (15th
					Mangsir,2072 BS) to render consulting services for various development sector
					within the country and abroad, which includes six major thematic areas
					Civil Engineering works, Architectural /Structural design, Planning, Construction,
					Environmental studies, Renewable Energy and Research & ID/OS services. It consists of a group of young, energetic and dynamic
					engineers, architects, accountants BBA and economists. Almost all the
					members are young, experienced and mature professionals have
					been acting as the mentors for various projects that this company has undertaken.
					The combination of youth and experienced personnel, old and new techniques have
					helped immensely more efficiently over the years.
					The Directors and Shareholders, who have gained valuable experience working
					together with expatriate consultants, constructions and have successfully executed
					number of projects, are the asset and strength of the Company.
					Dream makers Engineering Pvt. Ltd. has planned to participate in wide range of
					infrastructural development activities to contribute in national development. It
					assists in formulating Detail Engineering survey and design, relieving construction
					management & construction supervision, identifying Technical and socio-
					economic studies and evaluating fixed assets and benefits reviews etc. To
					accomplish the objectives of the firm, different experienced professionals experts
					and supporting staffs of young and energetic cadres are engaged and managed.
					They are available to the center as and when required for consultation, to ensure
					the highest level of services within the nation and outside nation in all engineering
					sectors like Airports, Irrigation, Hydro-power, Renewable Energy, Water Supply,
					Agriculture, Institutional Development and Organizational Strengthening services
					and other disciplines as well.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- *****Things You Get section***** -->
<section id="things_you_get">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h1 class="">Our Facilities</h1>
					<!-- <p class="">Lorem ipsum dolor sit amet, consectetur adi sollicitudin et mollis tellus neque vitae elit.</p> -->
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($home as $data)
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="my-col p-4">
					<div class="mb-3 section-icon fa-2x">
						<i class="{{$data->icon}}"></i>
					</div>
					<div class="section-heading mt-2">
						<h4 class="text-capitalize">{{$data->topic}}</h4>
					</div>
					<div class="seaction-paragraph">
						<p class="text-center">{{$data->details}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<!-- *****Global Leadership section***** -->
<!-- <section id="global_leadership" class="bg-light"> -->
<div class="container text-center">
	<h1>Our Standard</h1>
	<!-- <div class="col-md-4 col-sm-6">
		<div class="my-col">
			<div class="card">
				<img class="card-img-top" src="{{asset('business/images/bg-img/upcoming_events_img_1.jpg')}}" alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title">Reenal Scott</h4>
					<p class="card-text">Reenal Scott is the Founder and CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.</p>
					<a href="#" class="btn btn-primary">Read More</a>
				</div>
			</div>
		</div>
	</div>
</div>
<-- </section> -->

	<!-- ***** Video Area Start ***** -->
	<!-- <div class="video-section" id="">
	<div class="video-area" style="background-image: url('business/images/bg-img/video_img.jpg');">
		<div class="video-play-btn">
			<a class="video_btn" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-play" aria-hidden="true"></i></a>
		</div>
	</div>
</div> -->
	<!-- Features section start-->
	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-lg-5">
					<div class="features_img">
						<img src="{{asset('business/images/bg-img/standard.jpg')}}" alt="features_img">
					</div>
				</div>
				<div class="col-12 col-sm-12 col-lg-7 mx-auto">
					@foreach($standard as $data)
					<div class="my-col p-4">
						<div class="media">
							<div class="media-body">
								<h4><i class="{{$data->icon}}"></i> {{$data->topic}}</h4>
								<p>{{$data->details}}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
</div>

<div class="container text-center">
	<div class="row">
		<div class="col-md-12">
			<div class="section-heading">
				<h1 class="">Our Goodwill</h1>
			</div>
		</div>
	</div>
	<section class="facts_area">
		<div class="container text-center">
			<div class="row">
				@foreach($reach as $data)
				<!-- Single Fact-->
				<div class="col-12 col-sm-6 col-md-6 col-lg-3">
					<div class="single-fact justify-content-center">
						<div class="stats-icons">
							<i class="{{$data->icon}}"></i>
						</div>
						<div class="counter-area">
							<h3><span class="counter">{{$data->topic}}</span></h3>
						</div>
						<div class="facts-content">
							<i class="ion-arrow-down-a"></i>
							<p>{{$data->details}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
</div>

<!-- ***** FAQ section start ***** -->
<section id="faq">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading text-center mb-5">
					<h1>FAQ</h1>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($question as $data)
			<div class="col-md-6">
				<div class="my-col  p-4">
					<div class="faq_info">
						<h5>{{$data->question}}</h5>
						<p>{{$data->answer}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@include('layouts.footer')
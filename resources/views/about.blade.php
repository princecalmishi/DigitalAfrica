@extends('layouts.myapp')

@section('content')

<div class="full-width aboutus">
	<div class="overlay"></div>
	  <div class="container">
		 <div class="full-width about-title">
						 			 <h1>About Us</h1>
			 	
		 </div>
	  </div>
	</div>               



<div class="full-width about-info inn_padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<div class="about-info-details full-width">
					<h2><span>Who</span> We Are</h2>
					<p>With a huge team of qualified and skilled IT professionals, {{$name}} has been providing advanced solutions for a long time now. Since the very beginning of the company, we have been focused towards offering business-focused solutions for the clients. And that is what has gained us immense admiration and reputation in the market.
                    <br />
                    <br />
					Today, we are considered one of the leading companies in web development, IT solutions, and other services. This reputation has been achieved by the dedicated efforts of our programmers, database	specialists, consultants, project managers, digital marketers and other	specialists that we have on our team. Our team members have always been admired for their ability to align best technologies with the client requirements.</p>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="about-info-details full-width">
					<h2>Our <span>Infrastructure</span></h2>
					<p>Residing in the heart of Nairobi, {{$name}} has state-of-the-art infrastructural facilities powered with cutting edge software & hardware. Our agile infrastructure coupled with cloud computing make it perfect for outsourcing.
                    <br />
                    <br />
					We have separate labs for different technologies such as: Web Development, Mobile App
					Development, Research & Development, Designing, Testing and other support departments for Admin, HR, Finance etc. This advanced infrastructure unit helps us to deliver only the best-in-class services according to varied business needs.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="full-width counter-sec">
	<div class="container">
		<div class="girls"><img src="../wp-content/themes/twentyseventeen/assets/images/girls.png" alt="about sinontech" /></div>
		<div class="row">
																		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="counter-info">
								<ul>
									<li>
										<span class="counter">360</span>
										<h3>Happy Clients</h3>
									</li>
								</ul>
							</div>
						</div>
																				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="counter-info">
								<ul>
									<li>
										<span class="counter">8</span>
										<h3>Years In Business</h3>
									</li>
								</ul>
							</div>
						</div>
																				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="counter-info">
								<ul>
									<li>
										<span class="counter">3278</span>
										<h3>Cups Of Coffee</h3>
									</li>
								</ul>
							</div>
						</div>
																				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="counter-info">
								<ul>
									<li>
										<span class="counter">25</span>
										<h3>Employee</h3>
									</li>
								</ul>
							</div>
						</div>
									  
					</div>
	</div>
</div>
<div class="full-width our-team inn_padding">
	<div class="container">
		<h2>Meet Our <span>Expert Team</span></h2>
		<p>We’re a Kenyan software development company focused on just one thing - Offshore and Domestic Software development services. 8+ years in business &amp; 25+ developers having sharp skill sets and ability</p>
		<div class="full-width our-team-slide">
			<div class="owl-carousel owl-theme">
																			<div class="item">
							<div class="team-images">
							   <img src="../wp-content/uploads/2019/03/Sumeet-Shah.png" alt="Sumeet Shah"  />
							</div>
							<div class="team-info">
								<h4>Sumeet Shah</h4>
								<h5>Founder and CEO of {{$name}}</h5>
							</div>
						</div>
																				<div class="item">
							<div class="team-images">
							   <img src="../wp-content/uploads/2019/03/raj.png" alt="Raj Nayak"  />
							</div>
							<div class="team-info">
								<h4>Raj Nayak</h4>
								<h5>Sr. Web Designer</h5>
							</div>
						</div>
																				<div class="item">
							<div class="team-images">
							   <img src="../wp-content/uploads/2019/12/kunj-shah.png" alt="Kunj Shah"  />
							</div>
							<div class="team-info">
								<h4>Kunj Shah</h4>
								<h5>Sr. Web Developer</h5>
							</div>
						</div>
																				<div class="item">
							<div class="team-images">
							   <img src="../wp-content/uploads/2019/03/Nayna.png" alt="Nayna Asodariya"  />
							</div>
							<div class="team-info">
								<h4>Nayna Asodariya</h4>
								<h5>Sr. Android Developer</h5>
							</div>
						</div>
																				<div class="item">
							<div class="team-images">
							   <img src="../wp-content/uploads/2019/03/Jinal.png" alt="Jinal Patel"  />
							</div>
							<div class="team-info">
								<h4>Jinal Patel</h4>
								<h5>Sr. Android Developer</h5>
							</div>
						</div>
									  
						</div>
		</div>		
	</div>
</div>
<script src="../wp-content/themes/twentyseventeen/assets/js/waypoints.min.js"></script>
<script src="../wp-content/themes/twentyseventeen/assets/js/jquery.counterup.min.js"></script>
<script src="../wp-content/themes/twentyseventeen/assets/js/owl.carousel.js"></script>  
<script type="text/javascript">
jQuery(document).ready(function () {
	$('.our-team-slide .owl-carousel').owlCarousel({
		items: 3,
		nav: false,
		margin: 30,
		loop: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: false,
		responsive: {
		  0: {
			items: 1
		  },
		  600: {
			items: 2
		  },
		  1000: {
			items: 3
		  }
		}
	});
});
</script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});
	});
</script>
<div class="get_quote full-width">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
				<h3>{{$name}} has everything you need to create an awesome web-based application!</h3>
				<span>The Best in Class IT Service Provider in/from Kenya</span>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
				<a href="{{route('contact')}}" class="btn">Get Free Quote Now!!</a>
			</div>
		</div>
	</div>
</div>

@endsection

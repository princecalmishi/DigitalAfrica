
@extends('layouts.myapp')

@section('content')



<div class="banner full-width">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding0">
			<div class="banner_text full-width">
				<div class="banner_text_main">
					<h1>Web and Mobile App Development Company</h1>
					<p>{{$name}} is a mobile app development company that has helped<br> businesses establish their presence in the mobile sphere. <br>Our expert developers offer the best mobile and <br>web app development services, drawing on a decade of industry<br> experience. We deliver award-winning mobile <br>experiences across many industries after a strategic mobile application development process. </p>
					<a href="{{route('contact')}}" class="btn">Request A Quote</a>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding0">
			<div class="banner_image full-width"></div>
		</div>
	</div>




<div class="section1 full-width inn_padding">
	<div class="container">
		<h2>Information About <span>{{$name}} - IT Solutions Providers</span></h2>
		<h3>Diversified Solutions for Unique Business Needs</h3>
		<p>{{$name}}, the mobile app development company, understands that every business is different and requires a unique solution. Our highly skilled developers, programmers, and designers work together to create web and mobile app development solutions tailored for each business. Our team has examined different platforms that have similar apps and recommended the best platform, features, launch time, and other business propositions.

<h3>Our Mobile and Web App Development Services</h3>

{{$name}} offers unique solutions right at your doorstep. {{$name}} is a leading mobile app and web Development Company that believes flexibility is key to success. We provide high-end technology web and app-based solutions customized for your business. Our skilled developers can provide solutions such as web development, mobile app development JavaScript & Framework development, e-commerce development, and on-demand apps development. We deliver creative solutions that increase profit.
</p>
	</div>
</div>
<div class="section2 full-width inn_padding">
	<div class="container">
		<h2>Our Best <span>Services</span></h2>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="full-width serv">
					<ul>
																														<li><a href="#">Web and Application UI/UX Design</a></li>
																																<li><a href="#">PHP/Laravel Website Development</a></li>
																																<li><a href="#">SEO and Social Media Marketing</a></li>
																										</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="full-width serv_text">
					<img src="wp-content/uploads/2019/03/team.png" alt="Home" />
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="full-width serv serv2">
					<ul>
																														<li><a href="#">E-Commerce Website Development</a></li>
																																<li><a href="#">Android Application Development</a></li>
																																<li><a href="#">IOS Application Development</a></li>
																										</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="full-width section3 inn_padding">
	<div class="overlay"></div>
	<div class="Banner_text">
		<h5>Let’s Create Your Next <span>Success Project</span><br /> With Us !!!</h5>
		<a href="{{route('contact')}}" class="btn">Lets Go</a>
	</div>
</div>
	<div class="full-width section4 inn_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-12 col-xs-12">
					<h2>What Our Clients Says !</h2>
					<div class="full-width testimonials">
						<div class="owl-carousel owl-theme">

							
								<div class="item">
									<div class="row">
										<div class="col-md-12 col-sm-12 cl_info">
											<p><p>Sumeet’s team was professional and they did the work required quickly !</p>
													</p>
										</div>
										<div class="col-md-12 col-sm-12 cl_img">
											<div class="test_img">
																																							<img src="wp-content/uploads/2019/03/adam.jpg" alt="Mr. Adam" />
																																				</div>
											<h3>Mr. Adam</h3>
											<span>Houston, Texas USA</span>
										</div>
									</div>
								</div>
							
								<div class="item">
									<div class="row">
										<div class="col-md-12 col-sm-12 cl_info">
											<p><p>Great place to work with. Work efficiency is excellent with skilled and knowledgeable Team.</p>
</p>
										</div>
										<div class="col-md-12 col-sm-12 cl_img">
											<div class="test_img">
																																							<img src="wp-content/uploads/2019/03/krunal-shah.png" alt="Dr. Krunal Shah" />
																																				</div>
											<h3>Dr. Krunal Shah</h3>
											<span>Director at Eyeglobal</span>
										</div>
									</div>
								</div>
							
								<div class="item">
									<div class="row">
										<div class="col-md-12 col-sm-12 cl_info">
											<p><p>&#8220;Wonderful company with wonderful work experience&#8221;</p>
</p>
										</div>
										<div class="col-md-12 col-sm-12 cl_img">
											<div class="test_img">
																																							<img src="wp-content/uploads/2019/02/vishal.png" alt="Mr. Vishal Mandhyan" />
																																				</div>
											<h3>Mr. Vishal Mandhyan</h3>
											<span>Managing Director at Omnist Techhub Solutions</span>
										</div>
									</div>
								</div>
							
								<div class="item">
									<div class="row">
										<div class="col-md-12 col-sm-12 cl_info">
											<p><p>Sinon is a good software Development company.They got a good developer team and I think in software domain they are doing a great job for their client.I had a urgent requirement and manager and director both did a fabulous job to identify my requirement and they started working in to it with their developer.I was able to deploy my system on time.Thanks to the entire team of Sinon.</p>
</p>
										</div>
										<div class="col-md-12 col-sm-12 cl_img">
											<div class="test_img">
																																							<img src="wp-content/uploads/2019/02/arpitpatel.png" alt="Mr. Arpit Patel" />
																																				</div>
											<h3>Mr. Arpit Patel</h3>
											<span>CTO</span>
										</div>
									</div>
								</div>
							
								<div class="item">
									<div class="row">
										<div class="col-md-12 col-sm-12 cl_info">
											<p><p>I&#8217;ve been truly blessed to have {{$name}} develop my app, they have been no less than phenomenal. From there professionalism to expertise, they have been a dream come true. I&#8217;m excited to see what the future holds for us, and look forward to the heights we will attain together. If you&#8217;re looking for the best IT/Development company, l encourage you to look no further than {{$name}}; it will be a very rewarding experience.</p>
</p>
										</div>
										<div class="col-md-12 col-sm-12 cl_img">
											<div class="test_img">
																																							<img src="wp-content/uploads/2019/02/user.jpg" alt="Mr. Wright" />
																																				</div>
											<h3>Mr. Wright</h3>
											<span>CEO at HEW, USA</span>
										</div>
									</div>
								</div>
													</div>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12">
				<style>
					.cf7ic_instructions span {
					color: #fff !important;
					font-weight: bold;
				}
				</style>
					<div class="full-width footer_form">
						<h3>Request a Free Consultation !</h3>
						
<div class="wpcf7 no-js" id="wpcf7-f83-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>

<form action="" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="83" />
<input type="hidden" name="_wpcf7_version" value="5.7.4" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f83-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
<input type="hidden" name="_wpcf7_recaptcha_response" value="" />
</div>
<p><span class="wpcf7-form-control-wrap" data-name="Name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" value="" type="text" name="Name" /></span><br />
<span class="wpcf7-form-control-wrap" data-name="Email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="Email" /></span><br />
<span class="wpcf7-form-control-wrap" data-name="PhoneNumber"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" value="Phone Number" type="tel" name="PhoneNumber" /></span><br />
<span class="wpcf7-form-control-wrap" data-name="Message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message" name="Message"></textarea></span><br />
<br />
<button class="btn" type="submit">Send <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
</p><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>


</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="full-width our_partner inn_padding">
		<div class="container">
			<h2>Our <span>Clients</span> And <span>Partners</span></h2>
			<div class="full-width partners">
				<div class="owl-carousel owl-theme">
																										<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/logo-1.png" alt="partners" />
									</div>
								</div>
																												<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/logo-3.png" alt="partners" />
									</div>
								</div>
																												<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/Logo-2.png" alt="partners" />
									</div>
								</div>
																												<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/healthequalswealth.png" alt="partners" />
									</div>
								</div>
																												<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/logo-4.png" alt="partners" />
									</div>
								</div>
																												<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/logo-5.png" alt="partners" />
									</div>
								</div>
																												<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/logo-6.png" alt="partners" />
									</div>
								</div>
																												<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/logo-7.png" alt="partners" />
									</div>
								</div>
																												<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/logo-8.png" alt="partners" />
									</div>
								</div>
																												<div class="item">
									<div class="full-width images_partners">
										<img src="wp-content/uploads/2019/03/image_2019_03_28T08_29_38_783Z.png" alt="partners" />
									</div>
								</div>
																						</div>
			</div>
		</div>
	</div> -->


    @endsection

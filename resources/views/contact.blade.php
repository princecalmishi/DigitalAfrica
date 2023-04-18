@extends('layouts.myapp')

@section('content')
<div class="full-width aboutus">
	<div class="overlay"></div>
	  <div class="container">
		 <div class="full-width about-title">
						 			 <h1>Contact Us</h1>
			 	
		 </div>
	  </div>
	</div>               
<hr><br>
<h2>
<center>@include('inc.messages')</center>
</h2>

<div class="full-width contact_info inn_padding">
	<div class="container">
	   <div class="row">
	   	  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	   	  	  <div class="full-width contact_info_text"> 
	   	  	  	  <img src="../wp-content/themes/twentyseventeen/assets/images/contact-girl.png" alt="Contact Sinontech" />
	   	  	  	    <h2>Nairobi Office</h2>
	   	  	  	    <p>{{$address}}</p>
	   	  	  </div>
	   	  </div>
	   	  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	   	  	 <div class="full-width map_contact">
				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255282.4326969082!2d36.74510019634884!3d-1.3021297422853872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11655c311541%3A0x9dd769ac1c10b897!2sNairobi%20County!5e0!3m2!1sen!2ske!4v1678140904030!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
	   	  </div>		  
	   	  		  
	   </div>	   <br />	   <br />		   
	</div>
</div>
<div class="full-width offer_trial">
	<div class="container">
		<div class="full-width offer_trial_details">
			<h2>We Offer Free 1 Day Trial</h2>
			<h4>Hire Us Only If You Are Fully Satisfied With Our Services.</h4>
			<img src="../wp-content/themes/twentyseventeen/assets/images/offer-boy.png" alt="demo" />
		</div>
	</div>
</div>
<div class="full-width get_in inn_padding">
	<div class="container">
		 <h2>Get in touch</h2>
		 <h5>Our representative will contact you within one working day. Until then please feel free to contact us.</h5>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
				<div class="full-width contact_address">
					<ul>
						<li>
							<h6><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h6>
							<p>{{$address}}</p>
						</li>
						<li>
							<h6><i class="fa fa-mobile" aria-hidden="true"></i> Hotline (24x7)</h6>
							<p>Office 1: <a href="tel:{{$phone1}}">{{$phone1}}</a></p>
							<p>Office 2: <a href="tel:{{$phone2}}">{{$phone2}}</a></p>
							<p>Skype : <a target="_blank" href="skype:live:{{$skype}}?call">{{$skype}}</a></p>
						</li>
						<li>
							<h6><i class="fa fa-envelope-o" aria-hidden="true"></i> E-mail</h6>
							<p><a href="mailto:{{$email1}}">{{$email1}}</a></p>
						</li>
					</ul>
				</div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
            	<div class="full-width footer_form">
					
<div class="wpcf7 no-js" id="wpcf7-f137-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>


<form action="{{route('contactus')}}" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
@csrf

<div style="display: none;">
<input type="hidden" name="_wpcf7" value="137" />
<input type="hidden" name="_wpcf7_version" value="5.7.4" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f137-o1" />
<input type="hidden" name="_wpcf7_container_post" value="0" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
<input type="hidden" name="_wpcf7_recaptcha_response" value="" />
</div>
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap" data-name="Name">
			<input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" value="" type="text" name="Name" /></span>
		</p>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap" data-name="Yoursubject">
			<input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your subject" value="" type="text" name="Yoursubject" /></span>
		</p>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap" data-name="Your">
			<input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone Number" value="" type="tel" name="phone" /></span>
		</p>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap" data-name="YourE-mail">
			<input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your E-mail" value="" type="email" name="YourE-mail" /></span>
		</p>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap" data-name="Message">
			<textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message" name="Message"></textarea></span>
		</p>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<p><span class="wpcf7-form-control-wrap kc_captcha" data-name="kc_captcha"><span class="wpcf7-form-control wpcf7-radio"> 
    
    <span style="display:none">
        <input type="text" name="kc_honeypot">
    </span></span></span>
		</p>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<p><button class="btn" type="submit">Send <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
		</p>
	</div>
</div><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
            	</div>
            </div>
		</div> 
	</div>
</div>

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

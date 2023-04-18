@foreach($dataset as $data)
<div class="head_1">
	<title>Web &amp; Mobile Apps – IT Solution Services Company - {{$data->appname}}</title>

		<a href="{{route('/')}}" class=""><img src="logo.jpeg" style="height: 70px;" alt="mylogo" /></a>
		<!-- <a href="{{route('/')}}" class="logo_mobile"><img src="logo.jpeg" alt="mylogo" /></a> -->
		<ul>
			<li><a href="tel:{{$data->phone1}}"><img src="wp-content/themes/twentyseventeen/assets/images/indiaflag.png" alt="flag" />     {{$data->phone1}}</a></li>
			<li><a href="tel:+{{$data->phone2}}"><img src="wp-content/themes/twentyseventeen/assets/images/usaflag.png" alt="flag" />  {{$data->phone2}}</a></li>
			<li><a href="mailto:{{$data->contactemail}}"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{$data->contactemail}}</a></li>
		</ul>
	</div>

@endforeach
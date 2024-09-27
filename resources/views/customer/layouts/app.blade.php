<!DOCTYPE html>
<html lang="en">
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('customer/styles/bootstrap4/bootstrap.min.css') }}">
<link href="{{ asset('customer/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('customer/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('customer/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('customer/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('customer/plugins/slick-1.8.0/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('customer/styles/main_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('customer/styles/responsive.css') }}">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>		
		</div>

	

	</header><br>
	
	
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-lg-3 col-md-3">
                @include('customer.layouts.partials.sidebar')
            </div>

            <div>
                @yield('content')
            </div>
        </div>
        
    </div>
</body>





	
</div>

<script src="{{  asset('customer/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{  asset('customer/styles/bootstrap4/popper.js') }}"></script>
<script src="{{  asset('customer/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{  asset('customer/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{  asset('customer/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{  asset('customer/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{  asset('customer/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{  asset('customer/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{  asset('customer/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{  asset('customer/plugins/slick-1.8.0/slick.js') }}"></script>
<script src="{{  asset('customer/plugins/easing/easing.js') }}"></script>
<script src="{{  asset('customer/js/custom.js') }}"></script>
</body>

</html>
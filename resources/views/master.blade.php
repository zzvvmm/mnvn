<!DOCTYPE html>
<html lang="en">
<head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="{{asset('')}}">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="source/img/logo1.png">

		<!-- FONTS
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/animate.css">

		<!-- FANCYBOX CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/jquery.fancybox.css">

		<!-- BXSLIDER CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/jquery.bxslider.css">

		<!-- MEANMENU CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/meanmenu.min.css">

		<!-- JQUERY-UI-SLIDER CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/jquery-ui-slider.css">

		<!-- NIVO SLIDER CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/nivo-slider.css">

		<!-- OWL CAROUSEL CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/owl.carousel.css">

		<!-- OWL CAROUSEL THEME CSS
		============================================ -->
         <link rel="stylesheet" href="source/css/owl.theme.css">

		<!-- BOOTSTRAP CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/bootstrap.min.css">

		<!-- FONT AWESOME CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/font-awesome.min.css">

		<!-- NORMALIZE CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/normalize.css">

		<!-- MAIN CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/main.css">

		<!-- STYLE CSS
		============================================ -->
        <link rel="stylesheet" href="source/style.css">

		<!-- RESPONSIVE CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/responsive.css">

		<!-- IE CSS
		============================================ -->
        <link rel="stylesheet" href="source/css/ie.css">

		<!-- MODERNIZR JS
		============================================ -->
        <script src="source/js/vendor/modernizr-2.6.2.min.js"></script>

	</head>

    <body class="index-2">
	@include('header')
		@yield('content')
    @include('footer')
		<!-- jquery js -->
		<script src="source/js/vendor/jquery-1.11.3.min.js"></script>

		<!-- fancybox js -->
        <script src="source/js/jquery.fancybox.js"></script>

		<!-- bxslider js -->
        <script src="source/js/jquery.bxslider.min.js"></script>

		<!-- meanmenu js -->
        <script src="source/js/jquery.meanmenu.js"></script>

		<!-- owl carousel js -->
        <script src="source/js/owl.carousel.min.js"></script>

		<!-- nivo slider js -->
        <script src="source/js/jquery.nivo.slider.js"></script>

		<!-- jqueryui js -->
        <script src="source/js/jqueryui.js"></script>

		<!-- bootstrap js -->
        <script src="source/js/bootstrap.min.js"></script>

		<!-- wow js -->
        <script src="source/js/wow.js"></script>
		<script>
			new WOW().init();
		</script>
		<script src="https://cdn.firebase.com/js/client/1.0.6/firebase.js"></script>
		<!-- Google Map js -->
        {{-- <script src="https://maps.googleapis.com/maps/api/js"></script>	 --}}
		{{-- <script>
			function initialize() {
			  var mapOptions = {
				zoom: 8,
				scrollwheel: false,
				center: new google.maps.LatLng(35.149868, -90.046678)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				map: map
			  });

			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script> --}}
		<!-- main js -->
		<script src="source/js/main.js"></script>
		<script type=”text/javascript” src=”https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js”></script>
		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script>
			var popupSize = {
				width: 780,
				height: 550
			};
			$(document).on('click', '.social-buttons > a', function(e){

				var
					verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
					horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

				var popup = window.open($(this).prop('href'), 'social',
					'width='+popupSize.width+',height='+popupSize.height+
					',left='+verticalPos+',top='+horisontalPos+
					',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

				if (popup) {
					popup.focus();
					e.preventDefault();
				}
			});
		</script>
		 @yield('script')
    </body>
</html>

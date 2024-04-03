<!DOCTYPE html>
<html lang="zxx">
<head>
	@include('frontend_new.layouts.head')	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	@include('frontend_new.layouts.notification')
	<!-- Header -->
	@include('frontend_new.layouts.header')
	<!--/ End Header -->
	@yield('main-content')
	
	@include('frontend_new.layouts.footer')

</body>
</html>
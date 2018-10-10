<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PT. MSI - Digital</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{!! asset('assets/master/css/animate.css') !!}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{!! asset('assets/master/css/icomoon.css') !!}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{!! asset('assets/master/css/bootstrap.css') !!}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{!! asset('assets/master/css/style.css') !!}">

	<!-- Modernizr JS -->
	<script src="{!! asset('assets/master/js/modernizr-2.6.2.min.js') !!}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{!! asset('assets/master/js/respond.min.js') !!}"></script>
	<![endif]-->

    <style>
        .gmbr-logo{
            width: 100%;
            height: auto;
        }
        
        .gmbr-prjk{
            width: 100%;
            height: 150px;
        }

        .gmbr-prjk2{
        	width: 100%;
        	height: 250px;
        }

        .btn-view-more{
            background-color: #F36363;
            color: #ffffff;
        }

        .btn-view-more:hover{
            background-color: #e66060;
            color: #ffffff;
        }
    </style>
</head>
<body>

	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="left-menu text-right menu-1">
					<ul>
						<li><a href="{{ url('about-us') }}">About Us</a></li>
						<li><a href="{{ url('business-competence') }}">Business Competence</a></li>
					</ul>
				</div>
				<div class="logo text-center">
					<div id="fh5co-logo"><a href="{{ url('/') }}">MSI</a></div>
				</div>
				<div class="right-menu text-left menu-1">
					<ul>
						<li><a href="{{ url('digital-solutions') }}">Our Digital Solutions</a></li>
						<li><a href="{{ url('clients-partners') }}">Clients & Partners</a></li>
						<!-- <li class="btn-cta"><a href="#"><span>Login</span></a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	@yield('content')

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<p>For partnership and further inquiries, let's chat!</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-md-offset-3 col-sm-6">
		            		<button type="submit" class="btn btn-default btn-block"><a href="https://api.whatsapp.com/send?phone=628176677986&text=Hello,%20Im%20interested%20to%20discuss%20further%20about%20potential%20partnership" style="color: white;">Get In Touch WhatsApp</a></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">

				<div class="col-md-4 col-sm-8 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="{{ url('about-us') }}">About Us</a></li>
						<li><a href="{{ url('business-competence') }}">Business Competence</a></li>
						<li><a href="{{ url('/') }}">MSI / Home</a></li>
						<li><a href="{{ url('digital-solutions') }}">Our Digital Solutions</a></li>
						<li><a href="{{ url('clients-partners') }}">Clients & Partners</a></li>
						
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
					<h3>A Little About MSI</h3>
					<p style="text-align: justify;">MSI was established in early 2014 by experienced software engineers who have been working in software development field in various software development areas such as Mobile Application (Android, iOS, BB, Windows Mobile), Website Development, and management system, and many more.</p>
					<p><a href="{{ url('about-us') }}">Learn More</a></p>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; PT. MSI Developers</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{!! asset('assets/master/js/jquery.min.js') !!}"></script>
	<!-- jQuery Easing -->
	<script src="{!! asset('assets/master/js/jquery.easing.1.3.js') !!}"></script>
	<!-- Bootstrap -->
	<script src="{!! asset('assets/master/js/bootstrap.min.js') !!}"></script>
	<!-- Waypoints -->
	<script src="{!! asset('assets/master/js/jquery.waypoints.min.js') !!}"></script>
	<!-- Main -->
	<script src="{!! asset('assets/master/js/main.js') !!}"></script>
</body>
</html>
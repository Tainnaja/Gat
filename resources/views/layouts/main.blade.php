<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kindle : Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ URL::asset('image/favicon.ico') }}">
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('first_page/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->


    <!-- Slick slider -->
    <link href="{{ URL::asset('first_page/css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ URL::asset('first_page/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ URL::asset('first_page/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
 
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

  <body style="background-color:#FAEBD7;"> 	   

  	
	<!-- Start Header -->
	<header id="mu-header" class="" role="banner" style="background-color:DarkOrange;width: 100%;position: fixed;" >
		<div class="container">
			<div class="row">
				<div class="col-sm">
				
				</div>
				<div class="col-sm">
					<nav class="nav navbar navbar-default mu-navbar">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<!-- Text Logo -->
							<a class="navbar-brand" href="/"><i class="fa fa-book" aria-hidden="true"></i> GatOnline</a>

							<!-- Image Logo -->
							<!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"></a> -->


							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav mu-menu navbar-right">
									<!-- <li><a href="">HOME</a></li>					         -->
									<li><a href="">ACHIEVEMENT</a></li>
									<li><a href="">YOUR SKILL</a></li>
									<li><a href="">QUESTIONNARIE</a></li>
									<li><a href="">ACCOUNT SETTING</a></li>				            
									<li><a href="">LOG IN</a></li>
									<li><a href="">SIGN IN</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
				<div class="col-sm">
				
				</div>
			</div>		
		</div>
	</header>
	<!-- End Header -->

	
  <div class="main" style="background-color:#FAEBD7">
  	@yield('content')
  </div>	
		
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-social-media">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>
			</div>
		</div>

	</footer>
	<!-- End footer -->
	
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <!-- <script src="{{ URL::asset('first_page/js/bootstrap.min.js') }}"></script> -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{ URL::asset('first_page/js/slick.min.js') }}"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="{{ URL::asset('first_page/js/counter.js') }}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ URL::asset('first_page/js/app.js') }}"></script>
   
 
	
    <!-- Custom js -->
	<script type="text/javascript" src="{{ URL::asset('first_page/js/custom.js') }}"></script>
	
    
  </body>
</html>


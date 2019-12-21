<!DOCTYPE html>

@extends('layouts.main')
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
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ URL::asset('css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ URL::asset('css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <!-- Lato for Title -->
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
 
 
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body> 	   
  	
	

	<!-- Start Featured Slider -->

	<section id="mu-hero">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						<img src="{{ URL::asset('image/gat-icon1.png') }}" alt="Ebook img">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
						<h1>ยินดีต้อนรับสู่ GAT <br>online</h1>
						<p>ที่นี่คือแหล่งเรียนรู้ทักษะการอ่านเชิงวิเคราห์หรือข้อสอบความถนัดทั่วไปหมวดภาษาไทยที่รู้จักกันในนาม Gat เชื่อมโยง คุณสามารถศึกษาทฤษฎีต่างๆ ฝึกทำแบบฝึกหัดจากข้อสอบเก่าจริงและได้รับการประเมินความาสามารถได้ในที่นี่ที่เดียว เหมาะสำหรับนักเรียนที่กำลังศึกษาเพื่อเตรียมสอบเข้ามหาวิทยาลัยและสำหรับผู้ที่สนใจ</p>
						<a href="#" class="mu-primary-btn">เริ่มต้นเลย!!</a>
					</div>
				</div>	

			</div>
		</div>
	</section>
	
	<!-- Start Featured Slider -->
	
	<!-- Start main content -->
		
	<main role="main">

		<!-- Start Counter -->
		<section id="mu-counter">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-counter-area">

							<div class="mu-counter-block">
								<div class="row">

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-files-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="05">0</div>
											<h5 class="mu-counter-name">Chapters</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<div class="counter-value" data-count="42">0</div>
											<h5 class="mu-counter-name">Real Exams</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-users" aria-hidden="true"></i>
											<div class="counter-value" data-count="1055">0</div>
											<h5 class="mu-counter-name">Total Users</h5>
										</div>
									</div>
									<!-- / Single Counter -->

									<!-- Start Single Counter -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-single-counter">
											<i class="fa fa-trophy" aria-hidden="true"></i>
											<div class="counter-value" data-count="428">0</div>
											<h5 class="mu-counter-name">Got 150 Score</h5>
										</div>
									</div>
									<!-- / Single Counter -->

								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter -->

		<!-- Start web Overview -->
		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Chapter Overview</h2>
								<span class="mu-header-dot"></span>
								<p>บทเรียนต่างๆ เกี่ยวกับทักษะเชิงวิเคราะห์หรือวิชาความถนัดทั่วไปหมวดภาษาไทยในเว็บไซต์นี้จะถูกนำเสนออย่างมีลำดับขั้นตอน ทุกคนจึงสามารถเรียนรู้ได้แม้ว่าคุณจะไม่รู้จักเนื้อหาใดๆ มาก่อน โดยจะมีบทเนื้อหาโดยรวมและระบบสนับสนุนการฝึกฝนต่างๆ ดังนี้</p>
							</div>

							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content">
								<div class="row">

									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-list" aria-hidden="true"></i>
											</span>
											<h4>What is GAT</h4>
											<p>อะไรคือความหมายของทักษะเชิงเคราะห์และรู้จักกับรูปแบบของข้อสอบ Gat เชื่อมโยง รวมถึงทฤษฎีที่จำเป็นต้องรู้ขั้นต้น</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-connectdevelop" aria-hidden="true"></i>
											</span>
											<h4>Relationship</h4>
											<p>ทำความรู้จักความสัมพันธ์ชนิดต่างๆ ที่ใช้เชื่อมระหว่างกลุ่มคำในบทความภาษาไทยและวิธีการหาความสัมพันธ์ที่ซ่อนอยู่ในบทความ</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
											</span>
											<h4>Mini Exams</h4>
											<p>เริ่มต้นฝึกฝนจากแบบฝึกหัดเล็กๆ สำหรับสอบความเข้าใจเรื่องความสัมพันธ์และการหาความสัมพันธ์ในบทความขนาดเล็ก</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-files-o" aria-hidden="true"></i>
											</span>
											<h4>Real Exams</h4>
											<p>ที่นี่รวบรวมข้อสอบเก่าของจริงมาให้ฝึกฝนทำแบบออนไลน์มากกว่า 10 ชุด โดยที่คุณไม่ต้องเสียเวลาค้นหาหรือปริ้นเอง</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- Book Overview Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-hand-o-left" aria-hidden="true"></i>
											</span>
											<h4>Easy and Handy</h4>
											<p>ทั้งทฤษฎีและแบบฝึกหัดเข้าถึงได้ง่ายในเว็บไซต์นี้ รวมถึงข้อสอบออนไลน์ที่มีเครื่องมือสำหรับทดสะดวกและมีระบบตรวจความถูกต้องอัตโนมัติ</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-tachometer" aria-hidden="true"></i>
											</span>
											<h4>Analyze Skill</h4>
											<p>ระบบวิเคราะห์ความสามารถที่จะช่วยระบุส่วนที่ดีแล้วและส่วนที่ควรแก้ไขของคุณและยังแนะนำแนวทางการพัฒนาที่เหมาะสมที่สุดสำหรับคุณ</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-flag-checkered" aria-hidden="true"></i>
											</span>
											<h4>Achivement</h4>
											<p>ปลดล็อคความสำเร็จที่ท้าทายรูปแบบต่างๆ ด้วยการทำภารกิจที่กำหนดเพื่อที่คุณจะได้รู้ด้วยว่าความสำเร็จที่ไม่ง่ายเหล่านี้ คุณทำมันได้แล้ว</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

									<!-- About Us Single Content -->
									<div class="col-md-3 col-sm-6">
										<div class="mu-book-overview-single">
											<span class="mu-book-overview-icon-box">
												<i class="fa fa-users" aria-hidden="true"></i>
											</span>
											<h4>Comunity</h4>
											<p>กลุ่มชุมชนสำหรับชาวติวเข้มและผู้ที่ทำงานด้านภาษา สามารถแลกเปลี่ยนความคิดเห็นและตั้งกระทู้เกี่ยวกับเรื่องที่สงสัยได้ทุกเรื่อง</p>
										</div>
									</div>
									<!-- / Book Overview Single Content -->

								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End web Overview -->

		

		<!-- Start Video Review -->
		<section id="mu-video-review">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-video-review-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Tutorial Video </h2>
								<span class="mu-header-dot"></span>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
							</div>

							<!-- Start Video Review Content -->
							<div class="mu-video-review-content">
								<iframe class="mu-video-iframe" width="100%" height="480" src="https://www.youtube.com/embed/T4ySAlBt2Ug" frameborder="0" allowfullscreen></iframe>
							</div>
							<!-- End Video Review Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Review -->

		<!-- Start Testimonials -->
		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Developers(กะให้เป็นสไลด์แต่ยังไม่ได้)</h2>
								<span class="mu-header-dot"></span>
							</div>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<li>
										<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="{{ URL::asset('image/reader-1.jpg') }}" alt="img">
										<h5 class="mu-rt-name"> - Alice Boga</h5>
										<span class="mu-rt-title">CEO, Apple Inc.</span>
									</li>

									<li>
										<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="{{ URL::asset('image/reader-2.jpg') }}" alt="img">
										<h5 class="mu-rt-name"> - Jhon Doe</h5>
										<span class="mu-rt-title">Director, Google Inc.</span>
									</li>

									<li>
										<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="{{ URL::asset('image/reader-3.jpg') }}" alt="img">
										<h5 class="mu-rt-name"> - Jessica Doe</h5>
										<span class="mu-rt-title">Web Developer</span>
									</li>

								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials -->
		

	</main>
	
	<!-- End main content -->	
			
			
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
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{ URL::asset('js/slick.min.js') }}"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="{{ URL::asset('js/counter.js') }}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
   
 
	
    <!-- Custom js -->
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
	
    
  </body>
</html>
@extends('layouts.header')
@section('body')
<!-- banner -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="banner-top1">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Sevicios Clinicos
									<span>de calidad</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">Conoce nuestros servicios.</p>
								<a href="{{route('about')}}">Saber más.
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top2">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Personal de excelencia
									<span>todos los días</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">Contamos con diferentes horarios de atención.</p>
								<a href="appointment.html">Agenda tu Cita.
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top3">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Una clínica al alcance
									<span>de todos</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">Estamos aún más cerca de ti.</p>
								<a href="{{route('contact')}}">Conócenos. 
									<i class="fa fa-caret-right ml-2" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!---- banner bottom --
	<div class="banner-bottom py-5">
		<div class="d-flex container py-xl-3 py-lg-3">
			<div class="banner-left-bottom-w3ls offset-lg-2 offset-md-1">
				<h6 class="text-white">Sed do eiusmod tempor</h6>
				<h3 class="text-white my-3">High professional doctors</h3>
				<p>all specialists have extensive practical experience and regularly training courses in educational centers of the
					world</p>
			</div>
			<div class="button">
				<a href="about.html" class="w3ls-button-agile">Read More
					<i class="fas fa-hand-point-right"></i>
				</a>
			</div>
		</div>
	</div>
	-- //banner bottom ---->

	<!-- middle section -->
	<div class="w3ls-welcome py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-5 welcome-right">
					<img src="images/b2.png" alt=" " class="img-fluid">
				</div>
				<div class="col-lg-7 welcome-left mt-4">
					<h3>Nos adaptamos a la nuevas medidas de higiene</h3>
					<h6 class="mt-3">Al momento de llegar contamos con varios filtros de sanidad</h6>
					<h4 class="my-4 font-italic">Estamos seguros de que si nos cuidamos, podremos salir adelante de esta situación, juntos.</h4>
					<p></p>
					<!--<div class="readmore-w3-agileits mt-md-5 mt-4">
						<a href="#.html" class="w3ls-button-agile text-dark">Boton de Texto</a>
					</div>-->
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section -->

	<!--- services ---
	<div class="why-choose-agile pt-5" id="services">
		<div class="container pt-xl-5 pt-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Our Best Services</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="row why-choose-agile-grids-top">
				<div class="col-lg-4 agileits-w3layouts-grid">
					<div class="row wthree_agile_us">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fas fa-user-md"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">General health care</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
					</div>
					<div class="row wthree_agile_us my-5">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fas fa-syringe"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Dental services</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
					</div>
					<div class="row wthree_agile_us">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fab fa-medrt"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Medical Treatment</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 agileits-w3layouts-grid img text-center">
					<img src="images/b3.png" alt=" " class="img-fluid" />
				</div>
				<div class="col-lg-4 agileits-w3layouts-grid">
					<div class="row wthree_agile_us">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Cardiac Clinic</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-medkit"></i>
							</div>
						</div>
					</div>
					<div class="row wthree_agile_us my-5">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Orthopedics</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-wheelchair"></i>
							</div>
						</div>
					</div>
					<div class="row wthree_agile_us">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Laboratory</h4>
							<p>Lorem ipsum magna, vehicula ut porta ete.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-hospital"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	--- //services --->

	<!--- blog ---
	<div class="blog-w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white">Our Blog</h3>
				<span>
					<i class="fas fa-user-md text-white"></i>
				</span>
				<p class="mt-2 text-white">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="row package-grids mt-5">
				<div class="col-md-4 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog1.jpg" alt="" class="img-fluid" />
						</a>
						<h3>13
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Sit voluptatem accusantium doloremque</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-4 pricing my-md-0 my-5">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog2.jpg" alt="" class="img-fluid" />
						</a>
						<h3>24
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Sit voluptatem accusantium doloremque</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-4 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog3.jpg" alt="" class="img-fluid" />
						</a>
						<h3>30
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Sit voluptatem accusantium doloremque</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	--- //blog --->

	<!--- treatments ---
	<div class="screen-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Best Treatments</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="row">
				<div class="col-lg-6 w3ls-wthree-screen text-center">
					<img src="images/b5.png" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 w3ls-wthree-texts mt-5">
					<div class="row icons-screen">
						<div class="col-3 screen-agile text-right">
							<i class="fas fa-syringe"></i>
						</div>
						<div class="col-9 screen-agile-2">
							<h5 class="mb-3">Oxygen therapy</h5>
							<p>Incididunt ut labore et dolore magna aliqua, sed do eiusmod tempor incididunt ut</p>
						</div>
					</div>
					<div class="row icons-screen mt-5">
						<div class="col-3 screen-agile text-right">
							<i class="fab fa-medrt"></i>
						</div>
						<div class="col-9 screen-agile-2">
							<h5 class="mb-3">Medical procedure</h5>
							<p>Incididunt ut labore et dolore magna aliqua, sed do eiusmod tempor incididunt ut</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	--- //treatments -->
	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->
@endsection
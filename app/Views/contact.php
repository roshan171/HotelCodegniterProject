<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico')?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/apple-touch-icon.png')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css')?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="<?php echo base_url('assets/images/logo.png')?>" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a class="nav-link" href="<?php echo base_url('user')?>">Home</a></li>
						<li class="nav-item "><a class="nav-link" href="<?php echo base_url('menu')?>">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url('about')?>">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('reservation')?>">Reservation</a></li>
						<li class="nav-item active"><a class="nav-link" href="<?php echo base_url('contact')?>">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->

	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			
			<form action="<?php echo base_url('add-contact')?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control"  name="name" id="name"  data-error="Write your name" placeholder="Enter Your name" required>
	<div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="text" class="form-control"  name="email" id="email" data-error="Write your email"  placeholder="Enter Your email" required>
	<div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone:</label>
    <input type="text" class="form-control"  name="phone" id="phone" data-error="Write your phone" placeholder="Enter Your phone" required>
	<div class="help-block with-errors"></div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message:</label>
    <textarea class="form-control"  rows="3" name="message" id="message" data-error="Write your message" placeholder="Enter Your message" required></textarea>
	<div class="help-block with-errors"></div>
  </div>
  <div class=" text-center">
  <button type="submit" class="btn btn-common" name="submit">Submit</button>
  <div id="msgSubmit" class="h3 text-center hidden"></div> 
	<div class="clearfix"></div> 
</div>
</form>

		</div>
	</div>
	<!-- End Contact -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+01 123-456-4590
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							800, Lorem Street, US
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
	
	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
					<p class="lead"><a href="#">+01 2000 800 9999</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Yamifood Restaurant</a> Design By : 
					<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- ALL PLUGINS -->
	
	<script src="<?php echo base_url('assets/js/jquery.superslides.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/images-loded.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/isotope.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/baguetteBox.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.mapify.js')?>"></script>
	<script src="<?php echo base_url('assets/js/form-validator.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/contact-form-script.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
	<script>
		$('.map-full').mapify({
			points: [
				{
					lat: 40.7143528,
					lng: -74.0059731,
					marker: true,
					title: 'Marker title',
					infoWindow: 'Yamifood Restaurant'
				}
			]
		});	
	</script>
</body>
</html>
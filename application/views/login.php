<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?=base_url('assets/img/sales/fav.png') ?>">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>MAJU JAYA AUTOPART</title>

	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/linearicons.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/owl.carousel.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/themify-icons.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/nice-select.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/nouislider.min.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/main.css') ?>">
</head>

<body>

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row" style="height: 30rem; width: 100%; margin-top: 5rem;">
				<div class="col-lg-6">
					<div class="login_box_img" style="height:100%">
						<img class="img-fluid" src="<?=base_url('assets/img/sales/login.jpg') ?>" alt="" style="height:100%; object-fit:cover;">
						<div class="hover">
							<h4>E KATALOG SPAREPART</h4><hr style="border: 1px solid white; margin: 1rem 8rem;"/>
                            <h2><b>PT MAJU JAYA AUTOPART</b></h2>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="<?= site_url('home/login') ?>" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<!-- <a href="#">Forgot Password?</a> -->
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->


	<script src="<?=base_url('assets/js/sales/vendor/jquery-2.2.4.min.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?=base_url('assets/js/sales/vendor/bootstrap.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/jquery.ajaxchimp.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/jquery.nice-select.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/jquery.sticky.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/nouislider.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/owl.carousel.min.js') ?>"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?=base_url('assets/js/sales/gmaps.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/main.js') ?>"></script>
</body>

</html>
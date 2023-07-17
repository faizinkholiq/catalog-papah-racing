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
	<title>MAJU JAYA AUTOPART | Sales</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/linearicons.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/themify-icons.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/owl.carousel.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/nice-select.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/nouislider.min.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/ion.rangeSlider.css') ?>" />
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/ion.rangeSlider.skinFlat.css') ?>" />
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/sales/main.css') ?>">

	<style>
		.organic-breadcrumb{
			margin-bottom: 100px;
		}
	</style>
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box" style="height: 5rem;">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="#!"><b>PT MAJU JAYA AUTOPART</b></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item <?= ($highlight_menu == 'katalog')? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('sales/katalog') ?>">E-Katalog</a></li>
							<li class="nav-item <?= ($highlight_menu == 'produk')? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('sales/produk') ?>">Tabel Produk</a></li>
							<li class="nav-item <?= ($highlight_menu == 'processing')? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('sales/processing') ?>">Sales Processing</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

    <?php $this->load->view('sales/'.$content_view); ?>

	<!-- start footer Area -->
	<footer class="footer-area" style="margin-top: 5rem; padding-top:0;">
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0" style="padding: 1.5rem 0 2rem;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#!" target="_blank">NNF Production</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
	</footer>
	<!-- End footer Area -->

	<script src="<?=base_url('assets/js/sales/vendor/jquery-2.2.4.min.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?=base_url('assets/js/sales/vendor/bootstrap.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/jquery.ajaxchimp.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/jquery.nice-select.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/jquery.sticky.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/nouislider.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/countdown.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/owl.carousel.min.js') ?>"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="<?=base_url('assets/js/sales/gmaps.min.js') ?>"></script>
	<script src="<?=base_url('assets/js/sales/main.js') ?>"></script>
</body>

</html>
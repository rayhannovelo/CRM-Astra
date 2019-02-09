<?php $this->session->set_flashdata('sukses','<div class="alert alert-warning alert-dismissable text-center">Silahkan Login untuk membeli produk!</div>'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Astra Motor</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/beranda/styles/bootstrap4/bootstrap.min.css'); ?>">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/beranda/plugins/OwlCarousel2-2.2.1/owl.carousel.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/beranda/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/beranda/plugins/OwlCarousel2-2.2.1/animate.css'); ?>">
<link href="<?php echo base_url('assets/beranda/plugins/colorbox/colorbox.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/beranda/styles/main_styles.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/beranda/styles/responsive.css'); ?>">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#" style="font-size: 25px;">Astra Motor</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="<?php echo site_url('beranda'); ?>">home</a></li>
					<!-- <li><a href="<?php echo site_url('beranda/produk'); ?>">Produk</a></li> -->
					<li><a href="<?php echo site_url('beranda/profil'); ?>">Profil</a></li>
					<li><a href="<?php echo site_url('beranda/visi_misi'); ?>">Visi Misi</a></li>
					<li><a href="<?php echo site_url('login/registrasi'); ?>">Registrasi</a></li>
					<?php if($this->session->userdata('login') != 'login') { ?>
					<li><a href="<?php echo site_url('login'); ?>"><i class="fa fa-sign-in"></i> Log In</a></li>
					<?php }else { ?>
					<li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
					<?php }?>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<!--
				<div class="search header_search">
					<form action="#">
						<input type="search" class="search_input" required="required">
						<button type="submit" id="search_button" class="search_button"><img src="<?php echo base_url('assets/beranda/images/magnifying-glass.svg'); ?>" alt=""></button>
					</form>
				</div>
				-->
				<div class="shopping">
					<!-- Avatar -->
					<a href="#">
						<div class="avatar">
							<img src="<?php echo base_url('assets/beranda/images/avatar.svg'); ?>" alt="">
						</div>
					</a><a href="<?php echo site_url('transaksi'); ?>"><span style="padding-top: 10px"><?php echo $this->session->userdata('nama_pembeli') ?></span></a>
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">Menu</a></div>
		<!--
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="<?php echo base_url('assets/beranda/images/magnifying-glass.svg'); ?>" alt=""></button>
			</form>
		</div>
		-->
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?php echo site_url('beranda'); ?>">Home</a></li>
				<!-- <li class="menu_mm"><a href="<?php echo site_url('beranda/produk'); ?>">Produk</a></li> -->
				<li class="menu_mm"><a href="<?php echo site_url('beranda/profil'); ?>">Profil</a></li>
				<li class="menu_mm"><a href="<?php echo site_url('beranda/visi_misi'); ?>">Visi Misi</a></li>
				<li class="menu_mm"><a href="<?php echo site_url('login/registrasi'); ?>">Registrasi</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-size: contain;background-image:url(<?php echo base_url('assets/beranda/images/bg3.jpg'); ?>"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<!--
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
							-->
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-size: contain;background-image:url(<?php echo base_url('assets/beranda/images/bg4.jpg'); ?>"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<!--
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
							-->
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-size: contain;background-image:url(<?php echo base_url('assets/beranda/images/bg5.jpg'); ?>"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<!--
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
							-->
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="<?php echo base_url('assets/beranda/images/arrow_r.png'); ?>" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- Visi -->

	<div class="testimonials" style="padding-top: 0px">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title">Visi</div>
					</div>
				</div>
			</div>
			<div class="row test_slider_container">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="test_name">
						<center><i>“To be the Motorcycle Retailer of choice by Providing Solutions that Exceeding People’s Expectation”</i></center>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Misi -->

	<div class="testimonials" style="padding-top: 0px">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title">Misi</div>
					</div>
				</div>
			</div>
			<div class="row test_slider_container">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="test_name">
						<center><i>“We make people Happy and Enjoy Unlimited Opportunities”</i></center>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title">Testimoni Pembeli</div>
					</div>
				</div>
			</div>
			<div class="row test_slider_container">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="owl-carousel owl-theme test_slider text-center">

						<?php if($komentar != NULL) foreach ($komentar as $key => $value) { ?>
						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“<?php echo $value['komentar']; ?>”</div>
							<div class="test_content">
								<div class="test_name"><?php echo $value['nama_pembeli']; ?></div>
								<div class="test_title">Pembeli - <?php echo $value['pekerjaan']; ?></div>
							</div>
						</div>
						<?php } ?>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="footer_logo"><a href="#">Astra Motor</a></div>
					<nav class="footer_nav">
						<ul>
							<li><a href="<?php echo site_url('beranda'); ?>">home</a></li>
							<!-- <li><a href="<?php echo site_url('beranda/produk'); ?>">Produk</a></li> -->
							<li><a href="<?php echo site_url('beranda/profil'); ?>">Profil</a></li>
							<li><a href="<?php echo site_url('beranda/visi_misi'); ?>">Visi Misi</a></li>
							<li><a href="<?php echo site_url('login/registrasi'); ?>">Registrasi</a></li>
						</ul>
					</nav>
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="copyright">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Astra Motor Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url('assets/beranda/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/beranda/styles/bootstrap4/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/beranda/styles/bootstrap4/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/beranda/plugins/OwlCarousel2-2.2.1/owl.carousel.js'); ?>"></script>
<script src="<?php echo base_url('assets/beranda/plugins/easing/easing.js'); ?>"></script>
<script src="<?php echo base_url('assets/beranda/plugins/parallax-js-master/parallax.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/beranda/plugins/colorbox/jquery.colorbox-min.js'); ?>"></script>
<script src="<?php echo base_url('assets/beranda/js/custom.js'); ?>"></script>
</body>
</html>
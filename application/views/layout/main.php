<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
	<meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
	<meta name="author" content="Shreethemes" />
	<meta name="email" content="shreethemes@gmail.com" />
	<meta name="website" content="http://www.shreethemes.in" />
	<meta name="Version" content="v2.5.1" />
	<!-- favicon -->
	<link href="<?= base_url(); ?>assets/images/favicon/p.png" rel="icon">
	<title><?= $this->lang->line('text_title'); ?></title>
	<!-- Bootstrap -->
	<link href="<?= base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Icons -->
	<link href="<?= base_url(); ?>assets/front/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<!-- Magnific -->
	<link href="<?= base_url(); ?>assets/front/css/magnific-popup.css" rel="stylesheet" type="text/css" />
	<!-- Slider -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/front/css/owl.carousel.min.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/front/css/owl.theme.default.min.css" />
	<!-- FLEXSLIDER -->
	<link href="<?= base_url(); ?>assets/front/css/flexslider.css" rel="stylesheet" type="text/css" />
	<!-- Date picker -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/front/css/flatpickr.min.css">
	<!-- Main Css -->
	<link href="<?= base_url(); ?>assets/front/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
	<link href="<?= base_url(); ?>assets/front/css/colors/default.css" rel="stylesheet" id="color-opt">
	<!-- Foxx -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/foxx/foxx-css/foxx.css">
	<!-- JQuery -->
	<script src="<?= base_url(); ?>assets/front/js/jquery-3.5.1.min.js"></script>
	<style>
		.text-lang {
			display: none;
		}

		/* .bg-animation-left {
			background: rgba(255, 255, 255, 0.8) !important;
		} */

		/* .area {
			background: #f8f9fc;
			background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);


		} */

		.circles {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			z-index: -1;
		}

		.circles li {
			position: absolute;
			display: block;
			list-style: none;
			width: 20px;
			height: 20px;
			background: rgba(47, 86, 212, 0.1);
			animation: animate 25s linear infinite;
			bottom: -150px;

		}

		.circles li:nth-child(1) {
			left: 25%;
			width: 80px;
			height: 80px;
			animation-delay: 0s;
		}


		.circles li:nth-child(2) {
			left: 10%;
			width: 20px;
			height: 20px;
			animation-delay: 2s;
			animation-duration: 12s;
		}

		.circles li:nth-child(3) {
			left: 70%;
			width: 20px;
			height: 20px;
			animation-delay: 4s;
		}

		.circles li:nth-child(4) {
			left: 40%;
			width: 60px;
			height: 60px;
			animation-delay: 0s;
			animation-duration: 18s;
		}

		.circles li:nth-child(5) {
			left: 65%;
			width: 20px;
			height: 20px;
			animation-delay: 0s;
		}

		.circles li:nth-child(6) {
			left: 75%;
			width: 110px;
			height: 110px;
			animation-delay: 3s;
		}

		.circles li:nth-child(7) {
			left: 35%;
			width: 150px;
			height: 150px;
			animation-delay: 7s;
		}

		.circles li:nth-child(8) {
			left: 50%;
			width: 25px;
			height: 25px;
			animation-delay: 15s;
			animation-duration: 45s;
		}

		.circles li:nth-child(9) {
			left: 20%;
			width: 15px;
			height: 15px;
			animation-delay: 2s;
			animation-duration: 35s;
		}

		.circles li:nth-child(10) {
			left: 85%;
			width: 150px;
			height: 150px;
			animation-delay: 0s;
			animation-duration: 11s;
		}



		@keyframes animate {

			0% {
				transform: translateY(0) rotate(0deg);
				opacity: 1;
				border-radius: 0;
			}

			100% {
				transform: translateY(-1000px) rotate(720deg);
				opacity: 0;
				border-radius: 50%;
			}

		}

		@media only screen and (max-width: 700px) {
			.text-lang {
				display: inline;
			}

			.logo-panera {
				height: 50px !important;
			}

			.des-side {
				display: none;
			}

			.mob-side {
				display: block !important;
			}

			/* .main-slider {
				height: 100vh;
			} */

			.share-w {
				display: block !important;
			}


		}

	</style>

</head>

<body>
	<!-- Loader -->
	<!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
	<!-- Loader -->

	<!-- Navbar STart -->
	<header id="topnav" class="defaultscroll sticky bg-white">
		<div class="container">
			<!-- Logo container-->
			<div>
				<a class="logo" style="padding: 5px 0 0 0;" href="<?= base_url(); ?>">
					<img class="logo-panera" src="<?= base_url(); ?>assets/images/logo/panera.png" style="height: 65px;"
						alt="">
				</a>
			</div>
			<!-- End Logo container-->
			<div class="menu-extras">
				<div class="menu-item">
					<!-- Mobile menu toggle-->
					<a class="navbar-toggle">
						<div class="lines">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</a>
					<!-- End mobile menu toggle-->
				</div>
			</div>

			<div id="navigation">
				<!-- Navigation Menu-->
				<ul class="navigation-menu nav-right">
					<?php $menu = $this->Menu_m->getmenubyLang($this->lang->line('text_nation'))->result(); 
					foreach($menu as $row) : ?>
					<?php if($row->HAVE_SUB == 0) : ?>
					<li style="margin: 0 5px;"><a href="javascript:void"><?= $row->MENU; ?></a></li>
					<?php else : ?>
					<li style="margin: 0 5px;" class="has-submenu">
						<a href="javascript:void(0)"><?= $row->MENU; ?></a><span class="menu-arrow"></span>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<?php $submenu = $this->Menu_m->getsubbylangIdMenu($this->lang->line('text_nation'), $row->ID_MENU)->result(); 
                    				foreach($submenu as $sub) : ?>
									<li><a href="javascript:void"><?= $sub->SUB_MENU;?></a></li>
									<?php endforeach; ?>
								</ul>
							</li>
						</ul>
					</li>
					<?php endif; ?>
					<?php endforeach; ?>
					<li class="has-submenu" style="margin: 0 5px;">
						<a href="javascript:void(0)"><img src="<?= base_url(); ?>assets/images/flags/id.png" alt=""
								width="25px;"><span class="text-lang"> Bahasa Indonesia</span></a><span
							class="menu-arrow"></span>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="#"><img src="<?= base_url(); ?>assets/images/flags/en.png" alt=""
												width="25px;">&nbsp;&nbsp;English</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				<!--end navigation menu-->
			</div>
			<!--end navigation-->
		</div>
		<!--end container-->
	</header>
	<!--end header-->
	<!-- Navbar End -->

	<?= $contents; ?>

	<!-- <div id="wave" class="position-relative" style="margin-top: 50px;">
		<div class="shape overflow-hidden text-footer">
			<img class="img-fluid" src="<?= base_url(); ?>assets/images/wave/waven.svg" alt="">
		</div>
	</div> -->

	<!-- Footer Start -->
	<footer class="footer border bg-transparent area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
					<a href="#" class="logo-footer">
						<img src="<?= base_url(); ?>assets/images/logo/panera.png" height="75"
							style="border-radius: 10px;" alt="">
					</a>
					<p class="mt-4 text-muted">Jalan Kapuk Raya No. 88 E, F, G Penjaringan Jakarta Utara DKI Jakarta
						14460
						Indonesia</p>
					<ul class="list-unstyled social-icon social mb-0 mt-4">
						<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
									data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
									data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
									data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i
									data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
					</ul>
					<!--end icon-->
				</div>
				<!--end col-->

				<div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<h4 class="text-dark footer-head">Company</h4>
					<ul class="list-unstyled footer-list mt-4">
						<li><a href="<?= site_url('profile#company'); ?>" class="text-muted"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_profile'); ?></a></li>
						<li><a href="<?= site_url('profile#vision'); ?>" class="text-muted"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_vision'); ?></a></li>
						<li><a href="<?= site_url('news'); ?>" class="text-muted"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_news'); ?></a></li>
						<li><a href="<?= site_url('management'); ?>" class="text-muted"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_hr'); ?></a></li>
						<li><a href="<?= site_url('career'); ?>" class="text-muted"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_career'); ?></a></li>
						<!-- <li><a href="page-jobs.html" class="text-muted"><i class="mdi mdi-chevron-right mr-1"></i>
								Careers</a></li>
						<li><a href="page-blog-grid.html" class="text-muted"><i class="mdi mdi-chevron-right mr-1"></i>
								Blog</a></li>
						<li><a href="auth-cover-login.html" class="text-muted"><i class="mdi mdi-chevron-right mr-1"></i>
								Login</a></li> -->
					</ul>
				</div>
				<!--end col-->

				<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<h4 class="text-dark footer-head">Usefull Links</h4>
					<ul class="list-unstyled footer-list mt-4">
						<li><a href="javascript:void" class="text-muted"><i class="mdi mdi-chevron-right mr-1"></i>
								Terms
								of Services</a></li>
						<li><a href="javascript:void" class="text-muted"><i class="mdi mdi-chevron-right mr-1"></i>
								Privacy Policy</a></li>
						<li><a href="javascript:void" class="text-muted"><i class="mdi mdi-chevron-right mr-1"></i>
								Sitemap</a></li>
						<!-- <li><a href="changelog.html" class="text-muted"><i class="mdi mdi-chevron-right mr-1"></i>
								Changelog</a></li>
						<li><a href="components.html" class="text-muted"><i class="mdi mdi-chevron-right mr-1"></i>
								Components</a></li> -->
					</ul>
				</div>
				<!--end col-->

				<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<h4 class="text-dark footer-head">Subscribe</h4>
					<p class="mt-4 text-muted">Sign up and receive the latest news and job opportunities via email.</p>
					<form>
						<div class="row">
							<div class="col-lg-12">
								<div class="foot-subscribe foot-white form-group position-relative">
									<label class="text-muted">Write and submit your email <span
											class="text-danger">*</span></label>
									<i data-feather="mail" class="fea icon-sm icons"></i>
									<input type="email" name="email" id="emailsubscribe"
										class="form-control bg-light border pl-5 rounded" placeholder="Your email : "
										required>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="submit" id="submitsubscribe" name="send"
									class="btn btn-soft-primary btn-block" value="Subscribe">
							</div>
						</div>
					</form>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
		<ul class="circles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</footer>
	<!--end footer-->
	<footer class="footer footer-bar bg-light border">
		<div class="container text-center">
			<div class="row align-items-center">
				<div class="col-sm-9">
					<div class="text-sm-left">
						<p class="mb-0 text-muted">© 2020 PAN ERA Group. All rights reserved.
						</p>
					</div>
				</div>
				<!--end col-->

				<div class="col-sm-3 mt-sm-0 pt-2 pt-sm-0">
					<p class="mb-0 text-muted">Crafted with <i class="mdi mdi-heart text-danger"></i> by
						IT Team.
					</p>
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end container-->
	</footer>
	<!--end footer-->
	<!-- Footer End -->

	<!-- Back to top -->
	<a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
	<!-- Back to top -->

	<!-- javascript -->
	<script src="<?= base_url(); ?>assets/front/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/jquery.easing.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/scrollspy.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?= base_url(); ?>assets/front/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/magnific.init.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/portfolio.init.js"></script>
	<!-- SLIDER -->
	<script src="<?= base_url(); ?>assets/front/js/owl.carousel.min.js "></script>
	<script src="<?= base_url(); ?>assets/front/js/owl.init.js "></script>
	<!--FLEX SLIDER-->
	<script src="<?= base_url(); ?>assets/front/js/jquery.flexslider-min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/flexslider.init.js"></script>
	<!-- Datepicker -->
	<script src="<?= base_url(); ?>assets/front/js/flatpickr.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/flatpickr.init.js"></script>
	<!-- Parallax -->
	<script src="<?= base_url(); ?>assets/front/js/parallax.js "></script>
	<!-- Contact -->
	<script src="<?= base_url(); ?>assets/front/js/contact.js"></script>
	<!-- Icons -->
	<script src="<?= base_url(); ?>assets/front/js/feather.min.js"></script>
	<script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
	<!-- Foxx -->
	<script src="<?= base_url(); ?>assets/plugins/foxx/foxx.js"></script>
	<!-- Main Js -->
	<script src="<?= base_url(); ?>assets/front/js/app.js"></script>

	<script>
		$(function () {
			// <?php if (!isset($_COOKIE['device-browser'])): setcookie('device-browser', 'Chrome', time() + (86400 * 30), "/"); ?>

			// fx.toast.info({
			// 		title: 'This website use cookies',
			// 		body: 'By continuing to browse, you are agreeing to our use of cookies as explained in our <a style="text-decoration: underline;" target="_blank" href="https://www.paneragroup.com/company/privacy">Privacy and Policy</a>',
			// 		opt: {
			// 			css: 'light',
			// 			position: 'place_bottom_right',
			// 			timeOut: 20000,
			// 			delay: 0,
			// 			dismiss: true
			// 		}
			// 	}) 
			// <?php endif; ?>
		});

	</script>
</body>

</html>

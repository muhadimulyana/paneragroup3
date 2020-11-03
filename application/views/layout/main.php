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
	<!-- AOS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/aos/aos.css">
	<!-- JQuery -->
	<script src="<?= base_url(); ?>assets/front/js/jquery-3.5.1.min.js"></script>

	<style>
		.text-lang {
			display: none;
		}

		@font-face {
			font-family: Rimouski;
			src: url('fonts/rimouski sb.ttf');
		}

		@font-face {
			font-family: Couture;
			src: url('fonts/couture-bld.otf');
		}

		@font-face {
			font-family: Pala;
			src: url('fonts/pala.ttf');
		}

		.font-rimouski {
			font-family: Rimouski !important;
			font-size: 15px !important;
			text-transform: capitalize !important;

		}

		.font-couture {
			font-family: Couture !important;
		}

		.font-pala {
			font-family: Pala !important;
		}

		.bg-tp-blue {
			background-color: rgba(175, 203, 245, 0.465) !important;
		}

		.bg-overlay-navy {
			background-color: rgba(15, 15, 140, 0.57);
			/* background-color: rgba(60, 72, 88, 0.7); */
			position: absolute;
			top: 0;
			right: 0;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 100%;
		}

		.bg-overlay-white {
			background-color: rgba(255, 255, 255, 0.7);
			/* background-color: rgba(60, 72, 88, 0.7); */
			position: absolute;
			top: 0;
			right: 0;
			left: 0;
			bottom: 0;
			width: 100%;
			height: 100%;
		}

		.text-navy {
			color: #282c73;
		}


		@media only screen and (max-width: 991px) {

			.logo-panera {
				height: 50px !important;
			}

			#navigation {
				position: absolute;
				top: 74px;
				left: 0;
				width: 100%;
				display: none;
				height: auto;
				padding-bottom: 0;
				overflow: auto;
				border-top: 1px solid #050b36;
				border-bottom: 1px solid #050b36;
				background-color: #626f9eeb;
			}

			.text-lang {
				display: inline;
			}

			.logo-panera {
				height: 50px !important;
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
	<header id="topnav" class="defaultscroll sticky" style="position:absolute">
		<div class="container">
			<!-- Logo container-->
			<div>
				<a class="logo" style="padding: 5px 0 0 0;" href="<?= base_url(); ?>">
					<img class="logo-panera" src="<?= base_url(); ?>assets/images/logo/pan-era.png" height="45" alt="">
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
					<li style="margin: 0 5px;"><a href="javascript:void" class="text-white"><?= $row->MENU; ?></a></li>
					<?php else : ?>
					<li style="margin: 0 5px;" class="has-submenu">
						<a href="javascript:void(0)" class="text-white"><?= $row->MENU; ?></a><span
							class="menu-arrow border-white"></span>
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
							class="menu-arrow border-white"></span>
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
			<img class="" src="<?= base_url(); ?>assets/front/images/biji_plastik/wave.svg" alt="">
		</div>
	</div> -->


	<!-- Footer Start -->
	<footer class="footer border-0 pb-0"
		style="margin-top: -60px; background:url('<?= base_url(); ?>assets/front/images/biji_plastik/footer.png'); background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
					<a href="#" class="logo-footer">
						<h2 class="text-light">Pan Era Group</h2>
					</a>
					<p class="mt-4 text-foot">Jalan Kapuk Raya No. 88 E, F, G Penjaringan Jakarta Utara DKI Jakarta
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
					<h4 class="text-light footer-head">Company</h4>
					<ul class="list-unstyled footer-list mt-4">
						<li><a href="<?= site_url('profile#company'); ?>" class="text-foot"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_profile'); ?></a></li>
						<li><a href="<?= site_url('profile#vision'); ?>" class="text-foot"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_vision'); ?></a></li>
						<li><a href="<?= site_url('news'); ?>" class="text-foot"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_news'); ?></a></li>
						<li><a href="<?= site_url('management'); ?>" class="text-foot"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_hr'); ?></a></li>
						<li><a href="<?= site_url('career'); ?>" class="text-foot"><i
									class="mdi mdi-chevron-right mr-1"></i>
								<?= $this->lang->line('qlink_career'); ?></a></li>
						<!-- <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Careers</a></li>
						<li><a href="page-blog-grid.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Blog</a></li>
						<li><a href="auth-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Login</a></li> -->
					</ul>
				</div>
				<!--end col-->

				<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<h4 class="text-light footer-head">Usefull Links</h4>
					<ul class="list-unstyled footer-list mt-4">
						<li><a href="javascript:void" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Terms
								of Services</a></li>
						<li><a href="javascript:void" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Privacy Policy</a></li>
						<li><a href="javascript:void" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Sitemap</a></li>
						<!-- <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Changelog</a></li>
						<li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i>
								Components</a></li> -->
					</ul>
				</div>
				<!--end col-->

				<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
					<h4 class="text-light footer-head">Subscribe</h4>
					<p class="mt-4 text-foot">Sign up and receive the latest news and job opportunities via email.</p>
					<form>
						<div class="row">
							<div class="col-lg-12">
								<div class="foot-subscribe foot-white form-group position-relative">
									<label class="text-foot">Write and submit your email <span
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
	</footer>
	<!--end footer-->
	<footer class="footer footer-bar border-0" style="background-color: #30326b;">
		<div class="container text-center">
			<div class="row align-items-center">
				<div class="col-sm-6">
					<div class="text-sm-left">
						<p class="mb-0">© 2020 PAN ERA GROUP. All rights reserved</a>.
						</p>
					</div>
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
	<a href="#" class="btn btn-icon btn-pills btn-light back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
	<!-- Back to top -->

	<!-- javascript -->
	<script src="<?= base_url(); ?>assets/front/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/jquery.easing.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/scrollspy.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?= base_url(); ?>assets/front/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url(); ?>assets/front/js/magnific.init.js"></script>
	<!-- <script src="<?= base_url(); ?>assets/front/js/portfolio.init.js"></script> -->
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
	<!-- AOS Js -->
	<script src="<?= base_url(); ?>assets/plugins/aos/aos.js"></script>

	<script>
		//$(function () {
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
		//});

		AOS.init();

	</script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=0, user-scalable=no, user-scalable=0" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="#194ba2">

	<!--=====Title=======-->
	<title><?php if (isset($meta->title)) {
				echo $meta->title;
			} else {
				echo "Apply for Instant Personal Loan Online approvals | Rupay Credit";
			} ?></title>
	<meta name="description" content="<?php if (isset($meta->descriptions)) {
											echo $meta->descriptions;
										} ?>" />
	<meta name="keywords" content="<?php if (isset($meta->keywords)) {
										echo $meta->keywords;
									} ?>" />

	<meta property="og:title" content="Rupay credit: Your Trusted Source for Quick and Easy Financing">
	<meta property="og:site_name" content="Kreditway">
	<meta property="og:url" content="<?php echo site_url(); ?>">
	<meta property="og:description" content="Rupay credit Expert Financial Consultation company provides fast and easy financing solutions to individuals and businesses in need of financial assistance.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?php echo base_url('assets/img/logo/logo.png'); ?>">
	<meta property="og:locale" content="en_IN">

	<link rel="canonical" href="<?php echo base_url(uri_string()); ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="author" content="vw-team">

	<!--=====Fav icon=======-->
	<link rel="shortcut icon" href="<?= base_url('assets/img/logo/rupeycredit_favicon.png') ?>" type="image/x-icon" />
	<link rel="icon" href="<?= base_url('assets/') ?>img/logo/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/') ?>img/logo/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/') ?>img/logo/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/') ?>img/logo/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="<?= base_url('assets/') ?>img/logo/apple-icon.png">
	<link rel="icon" href="<?= base_url('assets/') ?>img/logo/apple-icon.png" type="image/x-icon">
	<!--=====CSS=======-->
	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-all.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/odometer.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/aos.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/default.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">

	<link rel="stylesheet" href="<?= base_url('assets/css/toastr.min.css') ?>">

	<link href="<?= base_url('assets/plugins/datatables/css/datatables.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/plugins/datatables/css/responsive.dataTables.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/plugins/datatables/css/buttons.dataTables.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/plugins/datatables/css/buttons.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css" />

	<script>
		const base_url = '<?php echo base_url() ?>'
	</script>
	<style>
		.error {
			color: red !important;
			font-size: 14px;
			font-weight: 400 !important;
		}
	</style>

	<!-- Facebook Domain + Pixel Code -->
	<?php
	$fbdomain = getFacebookDomain();
	if ($fbdomain != Null) {
		echo '<meta name="facebook-domain-verification" content="' . $fbdomain . '" />';
	}

	$fbpixel = getFacebookPixel();
	if ($fbpixel != Null) {
	?>
		<script>
			! function(f, b, e, v, n, t, s) {
				if (f.fbq) return;
				n = f.fbq = function() {
					n.callMethod ?
						n.callMethod.apply(n, arguments) : n.queue.push(arguments)
				};
				if (!f._fbq) f._fbq = n;
				n.push = n;
				n.loaded = !0;
				n.version = '2.0';
				n.queue = [];
				t = b.createElement(e);
				t.async = !0;
				t.src = v;
				s = b.getElementsByTagName(e)[0];
				s.parentNode.insertBefore(t, s)
			}(window, document, 'script',
				'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '<?php echo $fbpixel; ?>');
			fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $fbpixel; ?>&ev=PageView&noscript=1" /></noscript>
	<?php } ?>
	<!-- End Facebook Domain + Pixel Code -->

</head>

<body>
	<!--=====Header start=======-->
	<header>
		<div id="header-fixed-height"></div>
		<div id="sticky-header" class="tg-header__area">
			<div class="container custom-container">
				<div class="row">
					<div class="col-12">
						<div class="tgmenu__wrap">
							<nav class="tgmenu__nav">
								<div class="logo">
									<a href="<?= base_url('customer/dashboard'); ?>"><img src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="Logo"></a>
								</div>
								<div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
									<ul class="navigation">
										<li><a href="<?= base_url('customer/dashboard') ?>">Dashboard</a></li>
										<li class="menu-item-has-children"><a href="javascript:;">My Loan</a>
											<ul class="sub-menu">
												<li><a href="<?= base_url('customer/offers') ?>">Apply Now</a></li>
												<li><a href="<?= base_url('customer/offers/preapproved') ?>">Pre-Approval Loan</a></li>
												<li><a href="<?= base_url('customer/loan/history') ?>">My Loan History</a></li>
											</ul>
										</li>
										<li><a href="<?= base_url('customer/offers/cardoffers') ?>">Card Offers</a></li>
										<!-- <li class="menu-item-has-children"><a href="javascript:;">Customers</a>
											<ul class="sub-menu">
												<li><a href="<?= base_url('customer/referral') ?>">My Customers</a></li>
												<li><a href="<?= base_url('customer/referral/history') ?>">My Customers Loan</a></li>
											</ul>
										</li> -->
										<li class="menu-item-has-children"><a href="javascript:;">Documents</a>
											<ul class="sub-menu">
												<li><a href="<?= base_url('customer/profile/documents') ?>">KYC Documents</a></li>
												<li><a href="<?= base_url('customer/profile/payoutdocuments') ?>">Payout Documents</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children"><a href="javascript:;">Profile</a>
											<ul class="sub-menu">
												<li><a href="<?= base_url('customer/profile') ?>">My Profile</a></li>
												<li><a href="<?= base_url('customer/profile/subscription') ?>">Subscription Plan</a></li>
												<li><a href="<?= base_url('customer/support') ?>">Support</a></li>
												<li><a href="<?= base_url('customer/login/logout') ?>">Logout</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="mobile-nav-toggler">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="none">
										<path d="M0 2C0 0.895431 0.895431 0 2 0C3.10457 0 4 0.895431 4 2C4 3.10457 3.10457 4 2 4C0.895431 4 0 3.10457 0 2Z" fill="currentcolor" />
										<path d="M0 9C0 7.89543 0.895431 7 2 7C3.10457 7 4 7.89543 4 9C4 10.1046 3.10457 11 2 11C0.895431 11 0 10.1046 0 9Z" fill="currentcolor" />
										<path d="M0 16C0 14.8954 0.895431 14 2 14C3.10457 14 4 14.8954 4 16C4 17.1046 3.10457 18 2 18C0.895431 18 0 17.1046 0 16Z" fill="currentcolor" />
										<path d="M7 2C7 0.895431 7.89543 0 9 0C10.1046 0 11 0.895431 11 2C11 3.10457 10.1046 4 9 4C7.89543 4 7 3.10457 7 2Z" fill="currentcolor" />
										<path d="M7 9C7 7.89543 7.89543 7 9 7C10.1046 7 11 7.89543 11 9C11 10.1046 10.1046 11 9 11C7.89543 11 7 10.1046 7 9Z" fill="currentcolor" />
										<path d="M7 16C7 14.8954 7.89543 14 9 14C10.1046 14 11 14.8954 11 16C11 17.1046 10.1046 18 9 18C7.89543 18 7 17.1046 7 16Z" fill="currentcolor" />
										<path d="M14 2C14 0.895431 14.8954 0 16 0C17.1046 0 18 0.895431 18 2C18 3.10457 17.1046 4 16 4C14.8954 4 14 3.10457 14 2Z" fill="currentcolor" />
										<path d="M14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9Z" fill="currentcolor" />
										<path d="M14 16C14 14.8954 14.8954 14 16 14C17.1046 14 18 14.8954 18 16C18 17.1046 17.1046 18 16 18C14.8954 18 14 17.1046 14 16Z" fill="currentcolor" />
									</svg>
								</div>
							</nav>
						</div>
						<!-- Mobile Menu  -->
						<div class="tgmobile__menu">
							<nav class="tgmobile__menu-box">
								<div class="close-btn"><i class="fas fa-times"></i></div>
								<div class="nav-logo">
									<a><img src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="Logo"></a>
								</div>

								<div class="tgmobile__menu-outer">
									<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
								</div>
							</nav>
						</div>
						<div class="tgmobile__menu-backdrop"></div>
						<!-- End Mobile Menu -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--=====Header end=======-->
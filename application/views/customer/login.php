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
				echo "Apply for Instant Personal Loan Online approvals | RupayCredit";
			} ?></title>
	<meta name="description" content="<?php if (isset($meta->descriptions)) { echo $meta->descriptions; } ?>" />
	<meta name="keywords" content="<?php if (isset($meta->keywords)) { echo $meta->keywords; } ?>" />
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
</head>

<body>
	<header class="tg-header__style-five transparent-header">
		<div id="sticky-header" class="tg-header__area tg-header__area-five">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="tgmenu__wrap">
							<nav class="tgmenu__nav">
								<div class="logo">
									<a><img src="<?= base_url('assets/img/logo/logo.png'); ?>" alt="Logo"></a>
								</div>
								<div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
									<ul class="navigation">
										<li><a href="#company"></a></li>
									</ul>
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
								<div class="tgmobile__search">
									<form action="#">
										<input type="text" placeholder="Search here...">
										<button><i class="fas fa-search"></i></button>
									</form>
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

	<main class="fix">
		<section class="login__area-one">
			<div class="container">
				<div class="box-form-login">
					<div class="head-login">
						<div class="text-center mb-4">
							<h4>Customer Login Account</h4>
						</div>

						<?= form_open('', array('id' => 'submitForm1', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
							<div class="form-login">
								<div class="form-group">
									<input type="text" name="mobile" class="form-control account" placeholder="Mobile No" id="mobile" required minlength="10" maxlength="10" inputmode="numeric">
									<div class="error-message" id="mobile-message"></div>
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control view-password-pos" placeholder="Password" id="password" required>
									<div class="error-message" id="password-message"></div>
								</div>
								<div class="box-forgot-pass">
									<a href="<?= base_url('customer/login/forgotpassword') ?>">Forgot Password ?</a>
								</div>
								<div class="form-group">
									<button type="submit" id="form-submit1" class="btn btn-login"> Login </button>
								</div>
								<p class="text-center">Don’t have an account? <a href="<?= base_url('onlineprocess/applynow') ?>" class="link-bold">Apply Now</a></p>
							</div>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!--=====Footer Start=====-->

	<footer>
		<div class="footer__area-two footer__area-six">
			<div class="footer-lending">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="copyright-text-two">
								<p class="font-12">CIN NO: <?= COMPANY_CIN; ?></p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="copyright-text-two">
								<p class="footer-text-right font-12"><?= date('Y'); ?> © <?= COMPANY_NAME; ?> All Right
									Reserved</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--=====Footer end=====-->

	<script src="<?= base_url('assets/js/vendor/jquery-3.6.0.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.odometer.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.appear.js'); ?>"></script>
	<script src="<?= base_url('assets/js/gsap.js'); ?>"></script>
	<script src="<?= base_url('assets/js/ScrollTrigger.js'); ?>"></script>
	<script src="<?= base_url('assets/js/SplitText.js'); ?>"></script>
	<script src="<?= base_url('assets/js/gsap-animation.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery.parallaxScroll.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/swiper-bundle.js'); ?>"></script>
	<script src="<?= base_url('assets/js/wow.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/aos.js'); ?>"></script>
	<script src="<?= base_url('assets/js/main.js'); ?>"></script>

	<script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/toastr.min.js') ?>"></script>

	<script type="text/javascript">
		$(function() {
			$.validator.addMethod("customMobile", function(value, element) {
				return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
			}, "Please enter a valid mobile number");
			$('.numeric-input').on('keydown', function(event) {
				if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <= '9'))) {
					event.preventDefault();
				}
			});
			$("#submitForm1").validate({
				rules: {
					mobile: {
						required: true,
						digits: true,
						customMobile: true
					},
					password: {
						required: true
					}
				},
				messages: {
					mobile: {
						required: 'Mobile number field is required'
					},
					password: {
						required: 'Password field is required'
					}
				},
				errorPlacement: function(error, element) {
					var target = "#" + $(element).attr("id") + "-message";
					$(target).html(error);
				},
				submitHandler: function(form) {
					$.ajax({
						url: `<?php echo base_url('customer/login/validateLogin') ?>`,
						type: "POST",
						data: $(form).serialize(),
						dataType: "JSON",
						cache: false,
						processData: false,
						beforeSend: function() {
							$('#form-submit1').html('VERIFYING... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
							$('#form-submit1').attr('disabled', true);
						},
						success: function(response) {
							if (response['success'] == true) {
								toastr.success(response['message']);
								window.location.href = '<?php echo base_url("customer/dashboard"); ?>';
							} else {
								toastr.error(response['message']);
							}
							$('#form-submit1').html('LOGIN');
							$('#form-submit1').attr('disabled', false);
						},
						error: function(jXHR, textStatus, errorThrown) {
							$('#form-submit1').html('LOGIN');
							$('#form-submit1').attr('disabled', false);
							toastr.error(errorThrown, 'ERROR');
						}
					});
				}
			})
		});
	</script>
</body>

</html>
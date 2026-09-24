<!--=====Footer start=======-->

<!-- footer-area -->
<footer>
	<div class="footer__area-two">
		<div class="footer__top-two">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-5 col-md-6">
						<div class="footer-widget">
							<div class="footer__content-two">
								<div class="mb-25">
									<a><img src="<?= base_url('assets/img/logo/w_logo.png');?>" alt=""></a>
								</div>
								<p class="mb-40">Presenting Rupay Credit – the simplest and most effective way to get top-tier financial services from industry experts.
								</p>
							</div>

							<div class="footer-content">

								<div class="footer-social">
									<ul class="list-wrap">
										<?php if (SM_FACEBOOK != '#') { ?>
											<li><a data-bs-toggle="tooltip" title="Facebook" target="_blank" rel="nofollow" href="<?php echo SM_FACEBOOK; ?>"><i class="fab fa-facebook-f"></i></a></li>
										<?php } ?>

										<?php if (SM_INSTAGRAM != '#') { ?>
											<li><a href="<?php echo SM_INSTAGRAM; ?>" title="Instagram" data-bs-toggle="tooltip" target="_blank" rel="nofollow"><i class="fab fa-instagram"></i></a></li>
										<?php } ?>

										<?php if (SM_TWITTER != '#') { ?>
										<li><a href="<?php echo SM_TWITTER; ?>"  title="Twitter" data-bs-toggle="tooltip" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a></li>
										<?php } ?>
										<?php if (SM_PINTEREST != '#') { ?>
										<li><a href="<?php echo SM_PINTEREST; ?>" title="Pinterest"  data-bs-toggle="tooltip" target="_blank" rel="nofollow"><i class="fab fa-pinterest-p"></i></a></li>
										<?php } ?>
										<?php if (SM_YOUTUBE != '#') { ?>
										<li><a  href="<?php echo SM_YOUTUBE; ?>" title="Youtube" data-bs-toggle="tooltip" target="_blank" rel="nofollow"><i class="fab fa-youtube"></i></a></li>
										<?php } ?>
										<?php if (SM_LINKEDIN != '#') { ?>
										<li><a  href="<?php echo SM_LINKEDIN; ?>" title="linked in" data-bs-toggle="tooltip" target="_blank" rel="nofollow"><i class="fab fa-linkedin"></i></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-6">
						<div class="footer-widget">
							<h4 class="fw-title">Information</h4>
							<div class="footer-link-list">
								<ul class="list-wrap">
									<li><a href="javascript:;" onclick="goToMenu('company')">Company</a></li>
									<li><a href="<?= base_url('career') ?>">Career</a></li>
									<li><a href="<?= base_url('important-update') ?>">Important Updates</a></li>
									<li><a href="<?= base_url('faqs') ?>">FAQs</a></li>
									<li><a href="<?= base_url('support/request') ?>">Raise Request</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<div class="footer-widget">
							<h4 class="fw-title">Links</h4>
							<div class="footer-link-list">
								<ul class="list-wrap">
									<li><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
									<li><a href="<?= base_url('terms-conditions') ?>">Terms & Condition</a></li>
									<li><a href="<?= base_url('disclaimer') ?>">Disclaimer</a></li>
									<li><a href="<?= base_url('refund-policy') ?>">Cancellation & Refund Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="footer-widget">
							<h4 class="fw-title">Location</h4>
							<div class="footer__content-two">							
								<div class="footer-info-list footer-info-two">
									<ul class="list-wrap">
										<li>
											<div class="icon">
												<i class="flaticon-phone-call"></i>
											</div>
											<div class="content">
												<p><?php echo COMPANY_MOBILE; ?></p>
											</div>
										</li>
										<li>
											<div class="icon">
												<i class="flaticon-envelope"></i>
											</div>
											<div class="content">
												<p> <?php echo COMPANY_EMAIL; ?></p>
											</div>
										</li>
										<li>
											<div class="icon">
												<i class="flaticon-pin"></i>
											</div>
											<div class="content">
												<p> <?php echo COMPANY_ADDRESS; ?></p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer__bottom-two footer-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="copyright-text-two">
							<!-- <p>Copyright © <a href="index.html">Apexa</a> | All Right Reserved</p> -->
							<p><small>
									<?= date('Y') ?> ©
									<?= COMPANY_NAME; ?> All Rights Reserved.
								</small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>



<script src="<?= base_url('assets/js/vendor/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.odometer.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
<script src="<?= base_url('assets/js/gsap.js') ?>"></script>
<script src="<?= base_url('assets/js/ScrollTrigger.js') ?>"></script>
<script src="<?= base_url('assets/js/SplitText.js') ?>"></script>
<script src="<?= base_url('assets/js/gsap-animation.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.parallaxScroll.min.js') ?>"></script>
<script src="<?= base_url('assets/js/swiper-bundle.js') ?>"></script>
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/js/aos.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
<script src="<?= base_url('assets/js/toastr.min.js') ?>"></script>
<script>
	function rangeSlide(value) {
		document.getElementById('rangeValue').innerHTML = value;
	}
</script>
<!--=====Up arrow end=======-->
</body>

</html>

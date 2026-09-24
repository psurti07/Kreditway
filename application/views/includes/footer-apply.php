<footer class="kg-footer">
	<div class="footer__area-two footer__area-six">
		<div class="footer-lending">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="copyright-text-two">
							<p>CIN NO: <?= COMPANY_CIN; ?></p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="copyright-text-two">
							<p class="footer-text-right"><?= date('Y'); ?> © <?= COMPANY_NAME; ?> All Right Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

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

<script>
	const base_url = '<?= base_url() ?>'
</script>
<script>
	$(document).ready(function () {
		$(document).ready(function () {
			$('#loanamount, #monincome, #monemi, #monthlyincome, #cardamount').on('input', function () {
				var inputVal = $(this).val();
				inputVal = inputVal.replace(/\D/g, '');
				inputVal = inputVal.slice(0, 8);
				$(this).val(inputVal);
			});

			$('#mobileno, #mobile').on('input', function () {
				var inputVal = $(this).val();
				inputVal = inputVal.replace(/\D/g, '');
				inputVal = inputVal.slice(0, 10);
				$(this).val(inputVal);
			});

			$('#cardnumber').on('input', function () {
				var inputVal = $(this).val();
				inputVal = inputVal.replace(/\D/g, '');
				inputVal = inputVal.slice(0, 16);
				$(this).val(inputVal);
			});

		});
	})
</script>
</body>

</html>

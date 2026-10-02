<?php
$this->load->view('includes/header-apply.php');
?>

<main class="fix">
	<!-- banner-area -->
	<section class="services__area-seven services__area-home7 services__bg-seven body-footer-full">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-5">
					<div class="heading2 text-center">
						<h2 class="title mb-3 text-navy">Purchase Plan To View Your
							Pre-Approved Loan Offers</h2>
						<small class="heading-top aos-init offer-subtitle">
							Instant Pre-Approval | Multiple NBFCs Offers | 100% Paperless Process
						</small>
					</div>
				</div>
			</div>
			<div class="row align-items-center offer-card py-0">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="box-form-quote">
						<div class="container">
							<div class="lending-design mb-0">
								<h2 class="title">Standard Subscription Plan</h2>
								<?php
								if ($productdata['inOffer'] == 1) {
									echo '<h3><del class="text-danger">₹ ' . formatePrice($productdata['amount']) . '</del> <span class="price-sub text-success">₹ ' . formatePrice($productdata['offeramount']) . '/-</span></h3>';

									$subtotal = $productdata['offeramount'];
								} else {
									echo '<h3><span class="price-sub text-success">₹' . formatePrice($productdata['amount']) . '/-</span></h3>';
									$subtotal = $productdata['amount'];
								}
								?>
								<div class="about__list-box mt-4">
									<ul class="list-wrap">
										<li class="text-success"><i class="flaticon-arrow-button"></i>
											<strong><?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?> Off</strong>
										</li>
										<li><i class="flaticon-arrow-button"></i><strong>Subtotal : </strong>
											<?php echo formatePriceIndia($subtotal); ?></li>
										<li><i class="flaticon-arrow-button"></i> <strong>GST
												(18%) : </strong>
											<?php $gst = $subtotal * 0.18;
											echo formatePriceIndia($gst); ?></li>
										<li><i class="flaticon-arrow-button"></i><strong>Grand Total : </strong>
											<?php $grandtotal = $subtotal + $gst;
											echo formatePriceIndia($grandtotal); ?></li>
										<li><i class="flaticon-arrow-button"></i><strong>Plan
												Validity : </strong>
											6 months</li>
										<li><i class="flaticon-arrow-button"></i> <strong>Loan
												Process Time :
											</strong> 72 Hours</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-12">
					<div class="testimonial__form lending-design mb-0 border-offer">
						<?php
						if ($this->session->flashdata('danger')): ?>
							<div id="flash-message" class="alert alert-danger alert-dismissible fade show" role="alert">
								<?= $this->session->flashdata('danger'); ?>
								<?= $this->session->unset_userdata('danger'); ?>
							</div>
						<?php endif; ?>
						<?php echo form_open('pay/getspecialoffer', array('id' => 'submitForm1', 'class' => 'main-form lg-mr-15')); ?>
						<div class="form-grp">
							<input id="fullname" type="text" name="fullname" placeholder="Full Name *" data-validation-regex-regex="^[a-zA-Z ]*$" data-validation-regex-message="Enter valid fullname" required>
							<div class="error-message" id="fullname-message"></div>
						</div>
						<div class="form-grp">
							<input id="mobileno" type="text" name="mobileno" placeholder="Mobile Number *" required minlength="10" maxlength="10" inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$" data-validation-regex-message="Enter valid mobile number" />
							<div class="error-message" id="mobileno-message"></div>
						</div>
						<div class="form-grp">
							<input id="emailid" type="email" name="emailid" placeholder="Email Id *" required />
							<div class="error-message" id="emailid-message"></div>
						</div>
						<div class="form-grp mt-3">
							<button type="submit" id="form-submit1" class="btn">Process to
								Pay</button>
						</div>
						<div class="form-grp">
							<label>
								<small>
									By submitting the form &amp; proceeding, you agree to Kreditway's <a href="<?php echo site_url('terms-conditions'); ?>" class="text-color" target="_blank" class="primary-color font-14">Terms of Service </a>and <a href="<?php echo site_url('privacy-policy'); ?>" target="_blank" class="primary-color font-14 text-color"> Privacy Policy </a>of our Company
								</small>
							</label>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner-area-end -->

	<!-- nbfc partners start -->
	<div class="nbfc-space mt-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading2 text-center mb-4">
						<h2 class="title text-navy">Our Top NBFC Partners</h2>
					</div>

					<div class="swiper-container brand-active">
						<div class="swiper-wrapper">
							<?php foreach ($banklist as $row) { ?>
								<div class="swiper-slide">
									<div class="brand-item">
										<img src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>" alt="<?php echo $row->bank_name; ?>">
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- nbfc partners end -->

	<section class="brand__area-five">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12 mb-5">
					<div class="heading2 text-center">
						<h2 class="title text-navy">Great Perks of Personal Subscription Plan</h2>
						<small class="heading-top aos-init offer-subtitle">"Our customer-centric services set us apart."</small>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12">
					<div class="about__list-box">
						<ul class="list-wrap cust-sub mb-2">
							<li><i class="fas fa-check"></i>Loan process with multiple NBFCs </li>
							<li><i class="fas fa-check"></i>No negative impact on CIBIL </li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="about__list-box">
						<ul class="list-wrap cust-sub mb-2">
							<li><i class="fas fa-check"></i>Dedicated Financial Expert</li>
							<li><i class="fas fa-check"></i>100% Paperless Process</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="about__list-box">
						<ul class="list-wrap cust-sub mb-2">
							<li><i class="fas fa-check"></i>Get a personalized portal</li>
							<li><i class="fas fa-check"></i>On-call support </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
$this->load->view('includes/footer-apply.php');
?>
<script type="text/javascript">
	$.validator.addMethod("customMobile", function(value, element) {
		return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
	}, "Please enter a valid mobile number");

	// $(function () {
	// 	$('#submitForm1').on('submit', function (e) {
	// 		$('#form-submit1').attr('disabled', true);
	// 		$('#form-submit1').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
	// 	});
	// });
	$('#submitForm1').validate({
		rules: {
			mobileno: {
				required: true,
				digits: true,
				customMobile: true
			},
			fullname: {
				required: true,
			},
			emailid: {
				required: true,
				email: true,
			},
		},
		messages: {
			mobileno: {
				required: 'Please enter mobile number'
			},
			fullname: {
				required: 'Please enter full name'
			},
			emailid: {
				required: 'Please enter valid email address'
			},

		},
		errorPlacement: function(error, element) {
			var target = "#" + $(element).attr("id") + "-message";
			$(target).html(error);
		},
		submitHandler: function(form) {
			$('#form-submit1').attr('disabled', true);
			$('#form-submit1').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');

			$('#submitForm1')[0].submit();
		}
	})
	setTimeout(function() {
		const msg = document.getElementById('flash-message');
		if (msg) {
			msg.style.transition = "opacity 0.5s ease-out";
			msg.style.opacity = 0;
			setTimeout(() => {
				msg.style.display = "none";
			}, 500); // Wait for fade out to complete before hiding
		}
	}, 5000); // Adjusted comment to match the actual delay
</script>
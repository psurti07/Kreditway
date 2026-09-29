<?php $this->load->view('includes/header-apply.php'); ?>
<main class="fix">
	 <section class="journey_area-seven mb-5">
        <div class="container">
            <div class="row" style="max-width: 900px; margin: auto;">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="mb-30 mt-120 pt-5">
						<h2 class="title">&nbsp;<span class="d-none d-md-block">Experience Digital Personal Loan at its Best!</span></h2>
					</div>
                </div>
            </div>
            <div class="box-counter-home7 mt-3">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12">
						<?php if ($processstep == 'step1'): ?>
							<div class="contact__form-wrap p-4 ms-0">
								<h2 class="title mb-3">Get <span class="text-color">Rs. 10 LAKHS</span> Personal Loan In 3 Easy Steps!</h2>

								<p>Select your required loan amount:</p>
								<?= form_open('', array('id' => 'submitForm1', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
									<div class="form-group mb-3">
										<div class="range mt-5">
										<div class="range__slider digi_range__slider">
											<input type="range" name="loanamount" step="10000" id="loanSlider">
											<div class="range__tooltip" id="rangeTooltip">₹0</div>
										</div>
										<div class="range" style="display: none;">
								<div class="range__value">
									<span class="text-success"></span>
								</div>
							</div>
										<!-- <div class="range__value mt-2">
											<label>Loan Amount : </label>
											<span></span>
										</div> -->
										<!-- <div class="range__slider">
											<input type="range" name="loanamount" step="10000">
										</div> -->
										<div class="range__emi">
											<label>EMI Amount : </label>
											<span class="fs-5"></span>
										</div>
									</div>
									</div>
									<div class="form-grp">
										<input id="mobile" type="text" name="mobile" placeholder="Enter Mobile Number" required
											minlength="10" maxlength="10" inputmode="numeric"
											data-validation-regex-regex="^[6789]\d{9}$"
											data-validation-regex-message="Enter valid mobile number">
										<div class="error-message" id="mobile-message"></div>
									</div>

									<div class="form-grp mb-3">
										<button type="submit" class="btn mt-2" id="form-submit1">Apply Now</button>
									</div>

									<div class="form-group mb-4">
										<label class="custom-control-label" style="display:inline" for="terms"><small>By submitting the form & proceeding, you agree to the <a href="<?php echo site_url('terms-conditions'); ?>" target="_blank">Terms of Use</a> and <a href="<?php echo site_url('privacy-policy'); ?>" target="_blank">Privacy Policy</a> of Kreditway.</small></label>
									</div>
								<?= form_close(); ?>

								<hr/>
								<p class="text-center"><strong>Loan facility provided by our partnered NBFCs</strong></p>
								<div class="brand__area-two pt-2 pb-2 ps-4 pe-4">
									<div class="container">
										<div class="swiper-container brand-active">
											<div class="swiper-wrapper">
												<?php foreach ($banklist as $row) { ?>
													<div class="swiper-slide">
														<div class="brand-item">
															<img src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>"
																alt="<?php echo $row->bank_name; ?>">
														</div>
													</div>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php elseif ($processstep == 'step2'): ?>
							<div class="contact__form-wrap p-0 ms-0">
								<h4>Please enter the received OTP!</h4>

								<div class="about__list-box pt-2 pb-3">
									<ul class="list-wrap">
										<li><i class="flaticon-arrow-button"></i>Mobile No.:
											<?php echo $userdetails['mobile']; ?>
										</li>
									</ul>
								</div>
								<?= form_open('', array('id' => 'submitForm2', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
									<input type="hidden" name="otpmobile" id="otpmobile"
								value="<?php echo $userdetails['mobile']; ?>">
									<input type="hidden" name="loanamount" id="loanamount"
										value="<?php echo $userdetails['loanamount']; ?>">

									<div class="form-grp">
										<input id="otpcode" type="text" name="otpcode" class="text-center otpnumber"
											placeholder="Enter OTP" required maxlength="4" inputmode="numeric">
										<div class="error-message" id="otpcode-message"></div>
										<div class="text-danger s-12 mb-2" id="otpcodeError"></div>
									</div>
									<div class="box-forgot-pass">
										<code id="resend-message1"><span class="text-danger">Didn't receive OTP? <a href="javascript:resendotp()" class="text-dark">Resend OTP</a></span></code><br />
										<code id="resend-message2"></code>
									</div>
									<div class="form-grp mb-5">
										<button type="submit" class="btn" id="form-submit2">Verify OTP</button>
									</div>
								<?= form_close(); ?>
							</div>
						<?php elseif ($processstep == 'step3'): ?>
							<div class="contact__form-wrap p-0 ms-0">
								<h4>Choose Your Profile and Fill the Details</h4>

								<div class="about__list-box pt-2 pb-3">
									<ul class="list-wrap">
										<li><i class="flaticon-arrow-button"></i>Loan Amount:
											<?php echo formatePriceIndia($userdetails['loanamount']); ?>
										</li>
										<li><i class="flaticon-arrow-button"></i>Mobile No.:
											<?php echo $userdetails['mobile']; ?>
										</li>
									</ul>
								</div>
								<?php echo form_open('', array('id' => 'submitForm3', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
									<input type="hidden" name="loanamount" id="loanamount"
										value="<?php echo $userdetails['loanamount']; ?>">
									<input type="hidden" name="referralcode" id="referralcode"
										value="<?php echo $userdetails['referralcode']; ?>">
									<input type="hidden" id="usertype" name="usertype" value="1">
									<input type="hidden" name="usermobile" id="usermobile"
										value="<?php echo $userdetails['mobile']; ?>">

									<div class="form-grp">
										<div class="switch-field">
											<input type="radio" name="usertype" id="radio-one" value="1" checked />
											<label for="radio-one">Salaried</label>

											<input type="radio" name="usertype" id="radio-two" value="2" />
											<label for="radio-two">Self Employed</label>
										</div>
									</div>

									<div class="form-grp">
										<input id="username" type="text" name="username" placeholder="Full Name *" required>
										<div class="error-message" id="username-message"></div>
									</div>

									<div class="form-grp">
										<input id="useremail" type="email" name="useremail" placeholder="Email Id *" required>
										<div class="error-message" id="useremail-message"></div>
									</div>

									<div class="form-grp mb-5">
										<button type="submit" onclick="_tfa.push({notify: 'event', name: 'rupay_lead', id: 1802016});"
											class="btn mt-2" id="form-submit3">Process</button>
									</div>
								<?= form_close(); ?>
							</div>
						<?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </section>

	<?php if ($processstep == 'step1'): ?>
		<!-- features-area -->
		<section class="features__area-two">
			<div class="container">
				<div class="row gutter-24 justify-content-center">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="features__item-two mb-3">
							<div class="features__icon-two">
								<i class="flaticon-user"></i>
							</div>
							<div class="features__content-two">
								<h4 class="title">NBFC Personal Loan Criteria for Salaried</h4>
								<ul class="list-wrap">
									<li><i class="flaticon-arrow-button"></i> Minimum Salary : Rs. 15,000 Monthly</li>
									<li><i class="flaticon-arrow-button"></i> Minimum 1 Year Job Stability</li>
									<li><i class="flaticon-arrow-button"></i> Min. Age : 21 Years</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<div class="features__item-two mb-3">
							<div class="features__icon-two">
								<i class="flaticon-suitcase"></i>
							</div>
							<div class="features__content-two">
								<h4 class="title">NBFC Personal Loan Criteria for Self-Employed</h4>
								<ul class="list-wrap">
									<li><i class="flaticon-arrow-button"></i> Minimum 1 Year Business Stability</li>
									<li><i class="flaticon-arrow-button"></i> Minimum 1 Year IT Return</li>
									<li><i class="flaticon-arrow-button"></i> Min. Age : 21 Years</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- features-area-end -->


		<!-- testimonial start -->
		<section class="services__bg-seven pt-5">
			<div class="container">
				<div class="row">
					<div class="col-12 mb-3 text-center">
						<div class="section-title tg-heading-subheading animation-style3">
							<h2>Our Loan Offers</h2>
						</div>
					</div>
				</div>

				<div class="box-slide-testimonials">
					<div class="swiper-container offer-active-3">
						<div class="swiper-wrapper text-center">
							<?php
							$testimonialimg = array('frame-7396.jpg', 'frame-7397.jpg', 'frame-7399.jpg', 'frame-7400.jpg', 'frame-7401.jpg', 'frame-7403.jpg');
							?>
							<?php foreach ($testimonialimg as $row) { ?>
								<div class="swiper-slide">
									<div class="card-info">
										<div class="card-comment">
											<img src="<?php echo base_url('assets/img/offers/' . $row); ?>" alt="testimonial">

										</div>
									</div>

								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- testimonial end    -->

		<section class="lending-condition">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="mb-0">Loan Processing fee will be charged upto 2%, loan tenure ranging from a minimum of 6 months to a
							maximum of 72 months with Annual 11% minimum interest Rates and maximum of 35%. For Example:
							Considering a personal loan of Rs.1,00,000 availed at 12.5%* interest rate for a tenure of 6*
							years with 2%* processing fee, the APR will be 13.27%*. *T&C Apply. All these numbers are
							tentative/indicative, the final loan specifics may vary depending upon the customer profile and
							NBFCs’ criteria, rules & regulations, and terms & conditions. Company Registered Address : <?php echo COMPANY_ADDRESS; ?></p>
					</div>
				</div>
			</div>
		</section>
		<!-- nbfc partners end -->
	<?php endif; ?>
</main>

<?php $this->load->view('includes/footer-apply.php'); ?>
<script src="<?= base_url('assets/js/loanscript_tooltip.js'); ?>"></script>
<script>
	function resendotp() {
		loanamount = document.getElementById('loanamount').value;
		mobile = document.getElementById('otpmobile').value;

		$.ajax({
			url: '<?php echo base_url("onlineprocess/resendotpCode"); ?>',
			type: "POST",
			data: 'mobile=' + mobile + '&loanamount=' + loanamount,
			dataType: "JSON",
			cache: false,
			processData: false,
			success: function (response) {
				if (response['success'] == true) {
					$('#resend-message2').html(response['message']);
					toastr.success(response['message']);
				} else {
					toastr.error(response['message']);
				}
			},
			error: function (jXHR, textStatus, errorThrown) {
				toastr.error(errorThrown, 'ERROR');
			}
		});
	}
	$(document).ready(function () {
		// usertype selection
		$('.product_filter_lending ul li').on('click', function () {
			var tab_id = $(this).attr('data-tab');
			$('ul.tabs-1 li').removeClass('active');
			$(this).addClass('active');
			$("#" + tab_id).addClass('active');
			$('#usertype').val($(this).data('tab'));
		});

		$.validator.addMethod("customMobile", function (value, element) {
			return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
		}, "Please enter a valid mobile number");

		$.validator.addMethod("customAmount", function (value, element) {
			// Check if the value is a valid number and within the specified range
			return this.optional(element) || (parseFloat(value) >= 10000 && parseFloat(value) <= 10000000);
		}, "Please enter a valid loan amount between 10,000 and 1,00,00,000.");

		$('.numeric-input').on('keydown', function (event) {
			if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <= '9'))) {
				event.preventDefault();
			}
		});
		$('#submitForm1').validate({
			rules: {
				mobile: {
					required: true,
					digits: true,
					customMobile: true
				},
				loanamount: {
					required: true,
					digits: true,
					customAmount: true
				}
			},
			messages: {
				mobile: {
					required: 'Please enter mobile number'
				},
				loanamount: {
					required: "Please enter a loan amount.",
					validAmount: "Please enter a valid loan amount between 10,000 and 1,00,00,000."
				}
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url: `<?php echo base_url('onlineprocess/sendotpCode') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function () {
						$('#form-submit1').html('Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit1').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							if (response['redirect_url'] != "") {
								window.location.href = response['redirect_url'];
							} else {
								window.location = "./applynow/s2/" + response['mobile'];
							}
						} else {
							$('#mobilenoError1').html(response['message']);
							toastr.error(response['message']);
						}

						$('#form-submit1').html('Apply Now');
						$('#form-submit1').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit1').html('Apply Now');
						$('#form-submit1').attr('disabled', false);
					}
				});
			}
		});
		$('#submitForm2').validate({
			rules: {
				otpcode: {
					required: true,
					digits: true
				},
			},
			messages: {
				otpcode: {
					required: 'Enter valid OTP'
				}
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				// alert(target)
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url: `<?php echo base_url('onlineprocess/checkotpCode') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function () {
						$('#form-submit2').html('Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit2').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							window.location = "../../applynow/s3/" + response['mobile'];
						} else {
							$('#otpcodeError').html(response['message']);
							toastr.error(response['message']);
						}

						$('#form-submit2').html('Verify OTP');
						$('#form-submit2').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit2').html('Verify OTP');
						$('#form-submit2').attr('disabled', false);
					}
				});
			}
		});

		$('#submitForm3').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				}
			},
			errorPlacement: function (error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function (form) {
				$.ajax({
					url: `<?php echo base_url('onlineprocess/registeredUser') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function () {
						$('#form-submit3').html('Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit3').attr('disabled', true);
					},
					success: function (response) {
						if (response['success'] == true) {
							window.location.href = response['redirect_url'];
						} else {
							$('#otpcodeError').html(response['message']);
							toastr.error(response['message']);
						}
						$('#form-submit3').html('Process');
						$('#form-submit3').attr('disabled', false);
					},
					error: function (jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit3').html('Process');
						$('#form-submit3').attr('disabled', false);
					}
				});
			}
		});
	});
</script>

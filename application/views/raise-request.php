<?php $this->load->view('includes/header'); ?>
<main class="fix">
	<section class="breadcrumb__area breadcrumb__bg mt-100" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">Raise a Request</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="breadcrumb__shape">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape01.png'); ?>" alt="">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape02.png'); ?>" alt="" class="rightToLeft">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape03.png'); ?>" alt="">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape04.png'); ?>" alt="">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape05.png'); ?>" alt="" class="alltuchtopdown">
		</div>
	</section>
	<section class="team-area pt-120 pb-90">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6 mb-45">
					<div class="testimonial__form mb-0 lending-design sidebar__form">
						<?= form_open('', array('id' => 'submitForm1', 'class' => 'contact-form', 'novalidate' => 'novalidate')); ?>
						<div class="row">
							<div class="col-lg-12">
								<p>I am,</p>
								<div class="form-group create-account mt-4 mb-4">
									<input type="radio" name="usertype" class="inputradio radio-color" id="Customer" value="1">
									<label for="Customer">Customer</label>
									<input id="guest-user" type="radio" name="usertype" class="inputradio radio-color second-radio" value="0" checked>
									<label for="guest-user">Guest User</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-grp">										
									<input id="fullname" name="fullname" type="text" class="name" placeholder="Fullname" required="">
									<div class="error-message" id="fullname-message"></div>
								</div>
							</div>	
							<div class="col-lg-6">
								<div class="form-grp">
									<input id="mobile" type="text" name="mobile" class="numeric-input mobile" placeholder="Mobile" required="" minlength="10" maxlength="10" inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$" data-validation-regex-message="Enter valid mobile number">
									<div class="error-message" id="mobile-message"></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-grp">
									<input id="emailid" name="emailid" type="text" class="name" placeholder="Email" required="">
									<div class="error-message" id="emailid-message"></div>
								</div>
							</div>
							<div class="col-lg-6">	
								<div class="form-grp">
									<input id="cardnumber" type="text" name="cardnumber" class="numeric-input" placeholder="Subscription Number" minlength="16" maxlength="16" inputmode="numeric">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-grp select-grp">
									<select class="cust-selection" id="issuetype" name="issuetype" required="">
										<option value="">Query Related To *</option>
										<option value="Service Problem">Service Problem</option>
										<option value="Payment Issue">Payment Issue</option>
										<option value="Technical Problem">Technical Problem</option>
										<option value="Eligibility or Pre-Approval Query">Eligibility or Pre-Approval Query</option>
										<option value="GST Return Query">GST Return Query</option>
										<option value="Other">Other</option>
									</select>
									<div class="error-message" id="issuetype-message"></div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-grp">
									<textarea id="message" name="message" class="" placeholder="Request Message" style="height: 150px" required="" minlength="50"></textarea>
									<div class="error-message" id="message-message"></div>
								</div>
							</div>
						</div>
						<button type="submit" class="btn mt-4 btn-auto" id="form-submit1">
							Submit
						</button>
						<p class="mb-0 mt-2 font-20 text-dark" id="responsemessage"></p>
						<?php echo form_close(); ?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="block-faqs text-sec-color">
						<div class="accordion" id="accordionFAQ" style="visibility: visible;">
							<?php
							if (count($faqlist)) {
								$cnt = 1;
								foreach ($faqlist as $row) {
									$acc_heading = "headingSimple" . $cnt;
									$acc_collapse = "collapseSimple" . $cnt;
							?>
									<div class="accordion-item">
										<h5 class="accordion-header" id="<?php echo $acc_heading; ?>">
											<button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $acc_collapse; ?>" aria-expanded="false" aria-controls="<?php echo $acc_collapse; ?>">
												<?php echo $row->faq_question; ?>
											</button>
										</h5>
										<div class="accordion-collapse collapse" id="<?php echo $acc_collapse; ?>" aria-labelledby="<?php echo $acc_heading; ?>" data-bs-parent="#accordionFAQ" style="">
											<div class="accordion-body"><?php echo $row->faq_answer; ?> </div>
										</div>
									</div>
							<?php $cnt++;
								}
							} ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php $this->load->view('includes/footer'); ?>
<script>
	$(document).ready(function() {
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
				fullname: {
					required: true,
				},
				emailid: {
					required: true,
					email: true,
				},
				mobile: {
					required: true,
					digits: true,
					customMobile: true
				},
				issuetype: {
					required: true
				},
				message: {
					required: true,
				}
			},
			errorPlacement: function(error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				// alert(target)
				$(target).html(error);
			},
			submitHandler: function(form) {
				$.ajax({
					url: `<?php echo base_url('support/submitrequest') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function() {
						$('#form-submit1').html('SUBMITTING... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit1').attr('disabled', true);
					},
					success: function(response) {
						if (response['success'] == true) {
							toastr.success(response['message']);
						} else {
							toastr.error(response['message']);
						}

						$('#responsemessage').html(response['message']);
						document.getElementById("submitForm1").reset();
						setTimeout(function() {
							location.reload();
						}, 10000);
					},
					error: function(jXHR, textStatus, errorThrown) {
						$('#form-submit1').html('SUBMIT REQUEST');
						$('#form-submit1').attr('disabled', false);
						toastr.error(errorThrown, 'ERROR');
					}
				});
			}
		})
	})
</script>
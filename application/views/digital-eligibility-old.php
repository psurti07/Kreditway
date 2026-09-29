<?php $this->load->view('includes/header-apply'); ?>
<!-- main-area -->
<main class="fix">	
	<section class="services__area-seven services__area-home7 services__bg-seven body-footer-full">
		<div class="container">
			<div class="row mb-25">
				<div class="col-lg-12 col-md-12 col-12">
					<h2 class="title"><?= $userdetails['loanname']; ?></h2>
					<p class="font-16">Just a few more details to get pre-approved loan offer from our Partnered NBFCs</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<div class="project__details-info">
						<h4 class="title">User Details</h4>
						<ul class="list-wrap">
							<li><span>Loan :</span> <?= $userdetails['loanname'] ?></li>
							<li><span>Loan Amount :</span> &#8377;<?= formatePriceIndia($userdetails['loanamount']) ?></li>
							<li><span>Fullname :</span> <?= $userdetails['fullname'] ?></li>
							<li><span>Mobile :</span> <?= $userdetails['mobile'] ?></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-8">
					<div class="testimonial__form lending-design">
						<?php echo form_open('onlineprocess/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
						<input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>" class="form-control" required>
						<input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>" class="form-control" required>
						<input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>" class="form-control" required>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-grp select-grp">
									<select class="" id="cibilscore" name="cibilscore" required="">
										<option value="">Cibil Score *</option>
										<option value="Below 650">Below 650</option>
										<option value="650 - 700">650 - 700</option>
										<option value="700 - 750">700 - 750</option>
										<option value="750 - 800">750 - 800</option>
										<option value="800 - 850">800 - 850</option>
										<option value="850 - 900">850 - 900</option>
									</select>
								</div>
								<div class="error-message error-eligibility" id="cibilscore-message"></div>
							</div>
							<div class="col-lg-6">
								<div class="form-grp">
									<input id="monemi" type="text" name="monemi" placeholder="Current Monthly EMI *" required inputmode="numeric">
								</div>
								<div class="error-message error-eligibility" id="monemi-message"></div>
							</div>
							<div class="col-lg-6">
								<div class="form-grp">
									<input id="city" type="text" name="city" placeholder="City *" required>
								</div>
								<div class="error-message error-eligibility" id="city-message"></div>
							</div>
							<div class="col-lg-6">
								<div class="form-grp">
									<input id="monincome" type="text" name="monincome" placeholder="Monthly Income *" required inputmode="numeric">
								</div>
								<div class="error-message error-eligibility" id="monincome-message"></div>
							</div>
							<div class="col-lg-6">
								<div class="form-grp select-grp">
									<select class="" id="loanpurpose" name="loanpurpose" required>
										<option selected value="">Select Loan Purpose *</option>
										<?php if ($userdetails['loantype'] == 12) { ?>
											<option value="Business Expansion">Business Expansion</option>
											<option value="Maintain Cash Flow">Maintain Cash Flow</option>
											<option value="Supplier Payments">Supplier Payments</option>
											<option value="Setup Manufacturing Unit">Setup Manufacturing Unit</option>
											<option value="Hiring Budget">Hiring Budget</option>
											<option value="Other">Other</option>
										<?php } else { ?>
											<option value="Personal Use">Personal Use</option>
											<option value="Property Renovation">Property Renovation</option>
											<option value="Marriage Purpose">Marriage Purpose</option>
											<option value="Education Purpose">Education Purpose</option>
											<option value="Medical Emergency">Medical Emergency</option>
											<option value="Other">Other</option>
										<?php } ?>
									</select>
								</div>
								<div class="error-message error-eligibility" id="loanpurpose-message"></div>
							</div>
							<div class="col-lg-6">
								<div class="form-grp select-grp">
									<select id="state" name="state" required>
										<option value="">Select State *</option>
										<?php echo getStateOption(); ?>
									</select>
								</div>
								<div class="error-message error-eligibility" id="state-message"></div>
							</div>
							<div class="col-lg-12">
								<button type="submit" class="btn mt-4" id="form-submit1">
									Check Eligibility
								</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>	
</main>
<!-- main-area-end -->

<?php $this->load->view('includes/footer-apply'); ?>

<script>
	$(document).ready(() => {
		$('#submitForm1').validate({
			rules: {
				cibilscore: {
					required: true
				},
				monincome: {
					required: true,
					digits: true
				},
				monemi: {
					required: true,
					digits: true
				},
				loanpurpose: {
					required: true
				},
				city: {
					required: true
				},
				state: {
					required: true
				}
			},
			errorPlacement: function(error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error)
			},
			submitHandler: function(form) {
				$.ajax({
					url: `<?php echo base_url('onlineprocess/userApply') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function() {
						$('#form-submit1').html('Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit1').attr('disabled', true);
					},
					success: function(response) {
						if (response.success == true) {
							window.location.href = `${base_url + response.redirect_url}`;
						} else {
							toastr.error(response['message']);
						}

						$('#form-submit1').html('Check Eligibility');
						$('#form-submit1').attr('disabled', false);
					},
					error: function(jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit1').html('Check Eligibility');
						$('#form-submit1').attr('disabled', false);
					}
				})
			}
		})
	})
</script>
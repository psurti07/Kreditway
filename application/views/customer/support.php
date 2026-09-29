<?php $this->load->view('customer/includes/header-apply'); ?>
<main class="fix">
	<!-- breadcrumb-area -->
	<section class="breadcrumb__area breadcrumb__bg" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">Support</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">Profile</li>
								<li class="breadcrumb-item active" aria-current="page">Support</li>
							</ol>
						</nav>
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
	<!-- breadcrumb-area-end -->
	<!-- team-area -->
	<section class="team-area pt-120 pb-90">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				
				<div class="col-lg-3 col-sm-4">
					<div class="choose__box text-center">
						<div class="icon">
							<i class="flaticon-phone-call"></i>
						</div>
						<div class="content">
							<h4 class="title">Mobile No.</h4>
							<p><?= COMPANY_MOBILE ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4">
					<div class="choose__box text-center">
						<div class="icon">
							<i class="flaticon-mail"></i>
						</div>
						<div class="content">
							<h4 class="title">Email</h4>
							<p><?= COMPANY_EMAIL ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-4">
					<div class="choose__box text-center last">
						<div class="icon">
							<i class="fas fa-certificate"></i>
						</div>
						<div class="content">
							<h4 class="title">CIN No.</h4>
							<p><?= COMPANY_CIN ?></p>
						</div>
					</div>
				</div>				
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-6 mb-45">
					<div class="sidebar__widget">
						<h4 class="sidebar__widget-title">Profile Details</h4>
						<div class="testimonial__form mb-0 lending-design sidebar__form">
							<form id='submitForm' class='' method="post">
								<div class="row ">
									<input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>" required>
									<div class="col-lg-12">
										<div class="form-grp select-grp">
											<select class="cust-selection" id="issuetype" name="issuetype" required>
												<option value="">Query Related To</option>
												<option value="Service Problem">Service Problem</option>
												<option value="Payment Issue">Payment Issue</option>
												<option value="Technical Problem">Technical Problem</option>
												<option value="Eligibility or Pre-Approval Query">Eligibility or Pre-Approval Query</option>
												<option value="GST Return Query">GST Return Query</option>
												<option value="Other">Other</option>
											</select>
										</div>
										<div class="error-message error-eligibility" id="issuetype-message"></div>
									</div>
									<div class="col-lg-12">
										<div class="form-grp ">
											<textarea id="message" name="message" class="form-control" required placeholder="Request message in minimum 50 characters" style="height: 100px"></textarea>
										</div>
										<div class="error-message" id="message-message"></div>
									</div>
								</div>
								<button type="submit" id="form-submit" class="btn mt-4 btn-auto">Submit Request</button>
							</form>
						</div>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="sidebar__widget">
						<h5><?= COMPANY_NAME ?></h5>						
						<div class="sidebar__post-list">
							<div class="about__list-box mt-4">
								<ul class="list-wrap cust-sub">																		
									<li><i class="fa fa-map-marked"></i>&nbsp; <?= COMPANY_ADDRESS ?></li>									
									<li><i class="fa fa-clock"></i> &nbsp;<?= COMPANY_TIMING ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- team-area-end -->
</main>

<?php $this->load->view('customer/includes/footer-apply'); ?>
<script>
	$(document).ready(function() {
		$('#submitForm').validate({
			rules: {
				issuetype: {
					required: true
				},
				message: {
					required: true
				}
			},
			errorPlacement: function(error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function(form) {
				$.ajax({
					url: `<?php echo base_url('customer/support/submitrequest') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function() {
						$('#form-submit').html('SUBMITTING... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#form-submit').attr('disabled', true);
					},
					success: function(response) {

						if (response['success'] == true) {
							toastr.success(response['message']);
							setTimeout(function() {
								location.reload();
							}, 2000);
						} else {
							toastr.error(response['message']);
						}
						$('#form-submit').html('Submit Request');
						$('#form-submit').attr('disabled', false);
					},
					error: function(jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit').html('Submit Request');
						$('#form-submit').attr('disabled', false);
					}
				});
			}
		})
	})
</script>
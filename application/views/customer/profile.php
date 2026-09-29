<?php $this->load->view('customer/includes/header-apply'); ?>
<main class="fix">
	<!-- breadcrumb-area -->
	<section class="breadcrumb__area breadcrumb__bg" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">My Profile</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">Profile</li>
								<li class="breadcrumb-item active" aria-current="page">My Profile</li>
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
			<div class="row justify-content-center">
				<div class="col-lg-6 mb-45">
					<div class="sidebar__widget">
						<h4 class="sidebar__widget-title">Profile Details</h4>
						<p><span class="f-700">Registration On -</span> <?php echo displayDate($profiledata->rec_date); ?></p>
						<p><span class="f-700">Mobile No - </span><?php echo $profiledata->mobile; ?></p>
						<div class="testimonial__form mb-0 lending-design text-center sidebar__form p-4">
							<form method='post' id='contactForm' class='mt-sm-0 contact-form'>
								<input type="hidden" name="customerid" id="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-grp">
											<input id="fullname" type="text" name="fullname" placeholder="Name *" required="" value="<?php echo $profiledata->fullname; ?>">
											<div class="error-message text-start" id="fullname-message"></div>
										</div>
										<div class="form-grp">
											<input id="city" type="text" name="city" placeholder="City *" required="" aria-invalid="false" value="<?php echo $profiledata->city; ?>">
											<div class="error-message text-start" id="city-message"></div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-grp">
											<input id="emailid" type="email" name="emailid" placeholder="Email Id *" value="<?php echo $profiledata->email; ?>">
											<div class="error-message text-start" id="emailid-message"></div>
										</div>
										<div class="form-grp select-grp">											
											<select name="state" aria-required="true" id="state" class="cust-selection" required>
												<option value="">State</option>
												<?php echo getStateOption($profiledata->state); ?>
											</select>
											<div class="error-message text-start" id="state-message"></div>
										</div>
									</div>
								</div>								
								<button type="submit" id="form-submit" class="btn mt-4 btn-auto">Save</button>							
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="sidebar__widget">
						<h4 class="sidebar__widget-title">Change Password</h4>
						<div class="testimonial__form mb-0 lending-design sidebar__form">
							<form method='post' id='submitForm' class=''>
								<input type="hidden" name="customerid" id="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-grp">
											<input id="password" type="password" name="password"  placeholder="New Password *" value="" required="">
											<div class="error-message" id="password-message"></div>
										</div>
										<div class="form-grp">
											<input id="retypepassword" type="password" name="retypepassword" placeholder="Retype Password *" value="" required="">
											<div class="error-message" id="retypepassword-message"></div>
										</div>
									</div>
								</div>
								<button type="submit" id="form-submit1" class="btn mt-4 btn-auto">CHANGE</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- team-area-end -->
</main>
<!-- main-area-end -->

<?php $this->load->view('customer/includes/footer-apply'); ?>
<script>
	$(document).ready(function() {
		$("#contactForm").validate({
			rules: {
				fullname: {
					required: true
				},
				emailid: {
					required: true,
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
				$(target).html(error);
			},
			submitHandler: function(form) {
				$.ajax({
					url: `<?php echo base_url('customer/profile/changeprofile') ?>`,
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
						$('#form-submit').html('CHANGE');
						$('#form-submit').attr('disabled', false);
					},
					error: function(jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit').html('CHANGE');
						$('#form-submit').attr('disabled', false);
					}
				})
			}
		})
		$("#submitForm").validate({
			rules: {
				password: {
					required: true
				},
				retypepassword: {
					required: true,
					equalTo: '#password'
				}
			},
			errorPlacement: function(error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				$(target).html(error);
			},
			submitHandler: function(form) {
				$.ajax({
					url: `<?php echo base_url('customer/profile/changepassword') ?>`,
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
							setTimeout(function() {
								location.reload();
							}, 2000);
						} else {
							toastr.error(response['message']);
						}
						$('#form-submit1').html('CHANGE');
						$('#form-submit1').attr('disabled', false);
					},
					error: function(jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#form-submit1').html('CHANGE');
						$('#form-submit1').attr('disabled', false);
					}
				});
			}
		})
	});
</script>
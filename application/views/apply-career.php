<?php $this->load->view('includes/header'); ?>
<main class="fix">
	<section class="breadcrumb__area breadcrumb__bg mt-100" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">Job Description</h2>
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

	<section class="blog__post-area-five" style="padding:50px 0;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="section-title mb-50 tg-heading-subheading animation-style3">
						<!-- <h2 class="title tg-element-title" style="perspective: 400px;">
							<p><i class="fa fa-bookmark"></i> <?php echo $jobdetails->slug; ?> <i class="uil uil-clock me-1"></i> Full time</p>
							<h2><?php echo $jobdetails->title; ?></h2>
						</h2> -->
						<!-- <div class="about__phone text-center justify-content-center">
							<div class="icon">
								<i class="fa fa-bookmark"></i>
							</div>
							<div class="content">
								<a><?php echo $jobdetails->title; ?></a><br/>
								<?php echo $jobdetails->slug; ?> - <i class="fa fa-clock"></i> Full time
							</div>
						</div> -->
						<div class="counter-item justify-content-center">
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="content">
                                <h2 class="count font-25"><?php echo $jobdetails->title; ?></h2>
                                <p class="font-14"><?php echo $jobdetails->slug; ?> - <i class="fa fa-clock"></i> Full time <br> </p>
                            </div>
                        </div>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-5">
					<div class="project__details-info">
						<h4 class="title">Job Description</h4>
						<div class="row">
							<div class="font-white apply-career">
								<?php echo $jobdetails->descriptions; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="testimonial__form lending-design">
						<h2 class="mb-30">Apply Now</h2>
						<form action="" id="submitForm2" class="" enctype="multipart/form-data" novalidate="novalidate" method="post" accept-charset="utf-8">
							<input type="hidden" name="id" value="<?php echo $jobdetails->id; ?>" class="form-control" required>
							<input type="hidden" name="slug" value="<?php echo $jobdetails->slug; ?>" class="form-control" required>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-grp">
										<input id="firstname" type="text" name="firstname" placeholder="First Name *" required="">
										<div class=" error-message" id="firstname-message">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-grp">
										<input id="lastname" type="text" name="lastname" placeholder="Last Name *" required="">
										<div class=" error-message" id="lastname-message">
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-grp">
										<input id="mobile" type="text" name="mobile" class="numeric-input" placeholder="Mobile *" required="" minlength="10" maxlength="10" inputmode="numeric">
										<div class="error-message" id="mobile-message"></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-grp">
										<input id="emailid" type="email" name="emailid" placeholder="Email *" required="">
										<div class="error-message" id="emailid-message"></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-grp">
										<input id="city" type="text" name="city" placeholder="City" required="">
										<div class="error-message" id="city-message"></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-grp">
										<input id="qualifications" type="text" name="qualifications" placeholder="Qualifications *" required="">
										<div class="error-message" id="qualifications-message"></div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-grp">
										<textarea id="experience" name="experience" class="cust-text-area" placeholder="Your Experience" style="height: 100px" required=""></textarea>
										<div class="error-message" id="experience-message"></div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-grp">
										<textarea id="keyskills" name="keyskills" class="cust-text-area" placeholder="Your Key Skills" style="height: 100px" required=""></textarea>
										<div class="error-message" id="keyskills-message"></div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-grp">
										<input id="resume" type="file" name="resume" class="form-control file-career" placeholder="Upload Resume *" accept=".pdf,.doc,.docx," required="">
										<div class="error-message" id="resume-message"></div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-grp">
										<label for="iagree" class="font-12">By submitting the form &amp; proceeding, you agree to the <a href="<?= base_url('terms-conditions') ?>" target="_blank" class="text-dark">Terms of Use</a> and <a href="<?= base_url('privacy-policy') ?>" target="_blank" class="text-dark">Privacy Policy</a> of RupayCredit.com</label>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-grp">
										<button class="btn mt-4" id="submit-btn2">APPLY NOW</button>
										<div id="applymessage" class="mt-3 font-14 text-success"></div>
									</div>
								</div>
							</div>

						</form>
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
		$("#submitForm2").validate({
			rules: {
				firstname: {
					required: true
				},
				lastname: {
					required: true
				},
				emailid: {
					required: true,
					email: true
				},
				mobile: {
					required: true,
					digits: true,
					customMobile: true
				},
				city: {
					required: true
				},
				qualifications: {
					required: true
				},
				experience: {
					required: true
				},
				keyskills: {
					required: true
				},
				resume: {
					required: true
				},
			},
			errorPlacement: function(error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				// alert(target)
				$(target).html(error);
			},
			submitHandler: function(form) {
				var formData = new FormData($(form)[0]);
				$.ajax({
					url: `<?php echo base_url('apply/careerSubmission') ?>`,
					type: "POST",
					data: formData,
					async: true,
					dataType: "JSON",
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {
						$('#submit-btn2').html('Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#submit-btn2').attr('disabled', true);
					},
					success: function(response) {
						if (response['success'] == true) {
							document.getElementById("submitForm2").reset();
							toastr.success(response['message']);
						} else {
							toastr.error(response['message']);
						}
						document.getElementById("applymessage").innerHTML = response['message'];
						$('#submit-btn2').html('APPLY NOW');
						$('#submit-btn2').attr('disabled', false);
					},
					error: function(jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#submit-btn2').html('APPLY NOW');
						$('#submit-btn2').attr('disabled', false);
					}
				});
			}
		})
	})
</script>
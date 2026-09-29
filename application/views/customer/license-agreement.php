<?php $this->load->view('customer/includes/header-apply'); ?>
<!-- main-area -->
<main class="fix">
	<!-- breadcrumb-area -->
	<section class="breadcrumb__area breadcrumb__bg" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">License Agreement</h2>
						<p>These are our updated Terms & Conditions, please read and understand them carefully and accept to use the portal.</p>					
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
	<section class="team-area pt-90">
		<div class="container">
			<div class="row mb-4">
				<div class="col-lg-12">
					<div class="sidebar__widget">

						<?php echo form_open('customer/dashboard/acceptlicence', array('id' => 'submitForm1', 'class' => ''));
						//echo $contentdetails->option_value;
						?>
						<h4><?= $contentdetails->option_value; ?></h4>
						<input type="hidden" name="customerid" id="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>

						<p class="mt-5">If you accept the terms of the agreement, click "I Agree" to continue.</p>

						<div class="form-group form-check mb-4">
							<input class="form-check-input" type="checkbox" value="1" name="agree" id="agree" >
							<label class="form-check-label" for="iagree">I accept the terms in the License
								Agreement.</label>
							<div class="error-message" id="agree-message"></div>
						</div>

						<button type="submit" id="submit-btn2" class="btn theme-btn-11">I Agree</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php $this->load->view('customer/includes/footer-apply'); ?>

<script>
	$(document).ready(function() {
		$('#submitForm1').validate({
			rules: {
				agree: {
					required: true
				}
			},
			messages: {
				agree: {
					required: 'You must agree before submitting.'
				}

			},
			errorPlacement: function(error, element) {
				var target = "#" + $(element).attr("id") + "-message";
				// alert(target)
				$(target).html(error);
			},
			submitHandler: function(form) {
				$.ajax({
					url: `<?php echo base_url('customer/dashboard/acceptlicence') ?>`,
					type: "POST",
					data: $(form).serialize(),
					dataType: "JSON",
					cache: false,
					processData: false,
					beforeSend: function() {
						$('#submit-btn2').html('Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>');
						$('#submit-btn2').attr('disabled', true);
					},
					success: function(response) {
						if (response['success'] == true) {
							if (response['redirect_url'] != "") {
								window.location.href = `${base_url}` + response['redirect_url'];
							} else {
								window.location.reload();
							}
						} else {
							$('#mobilenoError1').html(response['message']);
							toastr.error(response['message']);
						}

						$('#submit-btn2').html('I Agree');
						$('#submit-btn2').attr('disabled', false);
					},
					error: function(jXHR, textStatus, errorThrown) {
						toastr.error(errorThrown, 'ERROR');
						$('#submit-btn2').html('I Agree');
						$('#submit-btn2').attr('disabled', false);
					}
				});
			}
		});
	});
</script>
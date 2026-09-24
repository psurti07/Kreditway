<?php
$this->load->view('includes/header-apply.php');
?>

<main class="fix">
	<section class="services__area-seven services__area-home7 services__bg-seven body-footer-full">
		<div class="container">
			<div class="services__details-list-two">
				<div class="row gutter-24">
					<div class="col-md-12">
						<?php if ($status == "true") { ?>
							<div class="services__details-list-box-two">
								<div class="icon mb-3" style="background-color:green;">
									<span class="fa-stack fa-1x">
										<i class="fa fa-circle-o fa-stack-2x"></i>
										<strong class="fas fa-check"></strong>
									</span>
								</div>
								<div class="content">
									<h2 class="text-success mb-2">Congratulations!</h2>
									<p class="mb-1">Your loan application has been successfully submitted. Our Customer
										Executive will call you shortly.</p>
									<hr />
									<p><small><strong>In case you've any query or issue, you can raise a request here: <a
													href="<?php echo site_url('support/request'); ?>"
													class="hover text-color">Click Here</a></strong></small></p>
									<a class="btn mt-2" href="<?php echo site_url(); ?>">Go to Homepage</a>
								</div>
							<?php } ?>
							<!-- END : SUCCESS -->
							<!-- START : FAIL -->
							<?php if ($status == "false") { ?>
								<div class="services__details-list-box-two">
									<div class="icon mb-2" style="background-color:#dc3545;">
										<span class="fa-stack fa-1x">
											<i class="fa fa-circle-o fa-stack-2x"></i>
											<strong class="fas fa-times"></strong>
										</span>
									</div>
									<div class="content">
										<h2 class="text-color mb-2">Payment Unsuccessful</h2>
										<p class="mb-1">Your payment process has failed. Please try again. <br />If you have
											any questions you can contact on our customer care number: {#mobileno}.</p>
										<p class="my-2"><small><strong>In case you've any query or issue, you can raise a
													request here: <a href="<?php echo site_url('support/request'); ?>"
														class="hover text-color">Click Here</a></strong></small></p>
										<hr class="my-2" />
										<a href="<?php echo site_url('cardoffer'); ?>" class="btn text-white p-3">Try
											Another Method</a>
									</div>
								</div>
							<?php } ?>
							<!-- END : FAIL -->
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
$this->load->view('includes/footer-apply.php');
?>
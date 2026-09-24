<?php $this->load->view('includes/header-apply.php'); ?>

<main class="fix">
	<section class="services__area-seven services__area-home7 services__bg-seven body-footer-full">
		<div class="container">
			<div class="services__details-list-two">
				<div class="row gutter-24">
					<div class="col-md-12">
						<?php if ($responsedata['status'] == "true") { ?>
							<div class="services__details-list-box-two">
								<div class="icon mb-3" style="background-color:green;">
									<span class="fa-stack fa-1x">
										<i class="fa fa-circle-o fa-stack-2x"></i>
										<strong class="fas fa-check"></strong>
									</span>
								</div>
								<div class="content">
									<h2 class="text-success mb-2">Congratulations!</h2>
									<p class="mb-3">Your Loan Application Has Been Submitted Successfully.</p>
									
									<div class="card background-gray text-center">
										<div class="card-body">
											<h6 class="card-text text-warning">Your Loan Details</h6>
											<p class="card-text"><strong>Applicant Name:</strong>
												<?php echo $responsedata['username'] ?></p>
											<p class="card-text"><strong>Pre-Approved Amount:</strong> Rs.
												<?php echo formatePriceIndia($responsedata['preamount']) ?>/-
											</p>
										</div>
									</div>

									<p class="text-muted p-3">Please check your email/WhatsApp/SMS to get your customer portal login credentials.</p>

									<a href="<?php echo site_url('customer/login'); ?>" class="btn">
										&nbsp;Upload Document</a>
								</div>
							</div>
						<?php } ?>

							<?php if ($responsedata['status'] == "false") { ?>
								<div class="services__details-list-box-two">
									<div class="icon mb-3" style="background-color:#dc3545;">
										<span class="fa-stack fa-1x">
											<i class="fa fa-circle-o fa-stack-2x"></i>
											<strong class="fas fa-times"></strong>
										</span>
									</div>
									<div class="content">
										<h2 class="text-danger mb-2">Payment Unsuccessful</h2>
										<p class="mb-1">Sorry, your payment for the Subscription Plan was not successful.
										</p>
										<p>We request you to try another payment method.</p>
										<hr />
										<a href="<?php echo site_url('bumperoffer'); ?>" class="btn text-white p-3">Try
											Another Method</a>
									</div>
								</div>
								
							</div>
						<?php } ?>
					</div>

				</div>
			</div>
		</div>
		</div>
	</section>
</main>

<?php $this->load->view('includes/footer-apply.php'); ?>

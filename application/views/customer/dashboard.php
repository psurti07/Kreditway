<?php $this->load->view('customer/includes/header-apply');
if ($profiledata->cardtype == 12) {
	$loantype = "bl";
} else {
	$loantype = "pl";
}
?>

<!-- main-area -->
<main class="fix">
	<!-- breadcrumb-area -->
	<section class="breadcrumb__area breadcrumb__bg" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">Dashboard</h2>					
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
	<section class="team-area pb-50 body-footer-full">
		<div class="container">
			<div class="services__details-list-two">
				<div class="row mb-4">
					<div class="col-lg-12">
						<?php if ($kycstatus == 0) {  ?>
							<div class="alert alert-danger alert-icon" role="alert">
								<i class="fa fa-times-circle"></i>
								Your documents need to upload for KYC and verify your account.
								<a href="<?php echo site_url('customer/profile/documents'); ?>" class="alert-link hover">Upload Now</a>.
							</div>
						<?php } ?>

						<?php if ($reapplystatus >= 90) { ?>
							<div class="alert alert-info alert-icon" role="alert">
								<i class="fa fa-times-hexagon"></i>
								As it has been 6 months since your last loan application,
								<strong>you're eligible to reapply</strong> for a loan.
								<a href="<?php echo site_url('customer/offers/preapproved'); ?>" class="alert-link hover">Apply Now</a>.
							</div>
						<?php } ?>

						<?php if ($accountmsg->option_value != "" && strlen($accountmsg->option_value) > 0) {  ?>
							<div class="alert alert-info alert-icon" role="alert">
								<span class="badge bg-primary text-dark">Important Update</span>
								<?php echo $accountmsg->option_value; ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row gutter-24 mb-4 justify-content-center">
					<div class="col-md-4">
						<div class="services__details-list-box-two">
							<div class="icon">								
								<span class="fa-stack fa-1x">
									<i class="fa fa-circle-o fa-stack-2x"></i>
									<strong class="fa-stack-1x cust-loanno"><?php echo $statestics['personalloan']; ?></strong>
								</span>
							</div>
							<div class="content">
								<h4 class="title">Personal Loan Applications</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="services__details-list-box-two">
							<div class="icon">
								<span class="fa-stack fa-1x">
									<i class="fa fa-circle-o fa-stack-2x"></i>
									<strong class="fa-stack-1x cust-loanno"><?php echo $statestics['businessloan']; ?></strong>
								</span>
							</div>
							<div class="content">
								<h4 class="title">Business Loan Applications</h4>
							</div>
						</div>
					</div>

					<?php
					$hidedata = 1; // 0 = show, 1 = Hide
					if ($hidedata == 0) {
					?>
						<div class="col-md-4">
							<div class="services__details-list-box-two">
								<div class="icon">
									<span class="fa-stack fa-1x">
										<i class="fa fa-circle-o fa-stack-2x"></i>
										<strong class="fa-stack-1x cust-loanno"><?php echo $statestics['referalusers']; ?></strong>
									</span>									
								</div>
								<div class="content">
									<h4 class="title">Total Referral Customers</h4>
								</div>
							</div>
						</div>
					<?php } ?>

				</div>
				<?php
				$hidedata = 1; // 0 = show, 1 = Hide
				if ($hidedata == 0) {
				?>
					<div class="row">
						<div class="col-lg-12">
							<div class="single-price">
								<div class="price-heading">
									<h4>Refer and Earn up to Rs 1 Lac per month</h4>
									<input type="text" name="referrallink" class="form-control pt-1" value="<?php echo base_url('onlineprocess/referral/' . $profiledata->refcode); ?>" readonly>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- team-area-end -->
</main>
<!-- main-area-end -->

<?php $this->load->view('customer/includes/footer-apply'); ?>
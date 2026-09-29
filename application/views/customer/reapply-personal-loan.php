<?php $this->load->view('customer/includes/header-apply'); ?>
<main class="fix">
	<section class="breadcrumb__area breadcrumb__bg" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">Reapply Personal Loan</h2>
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
	<div class="team-area pt-50 pb-50 body-footer" style="background-image: url(<?= base_url('assets/img/bg/inner_services_bg.jpg'); ?>)">
		<div class="container">
			<div class="row text-center">
				<?php if (count($directlinks)) {
					foreach ($directlinks as $row) { ?>
						<div class="col-lg-4 col-md-6">
							<div class="services__item-three text-center">
								<img src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>" alt="">
								<div class="services__content-five">
									<a href="<?php echo $row->applyurl; ?>" class="btn mt-2" target="_blank">Apply Now</a>
								</div>
							</div>
						</div>
				<?php }
				} ?>
			</div>
		</div>
	</div>
</main>


<?php $this->load->view('customer/includes/footer-apply'); ?>
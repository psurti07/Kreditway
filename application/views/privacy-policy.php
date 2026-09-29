<?php $this->load->view('includes/header'); ?>
<main class="fix">
	<section class="breadcrumb__area breadcrumb__bg mt-100" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg');?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">Privacy Policy</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="breadcrumb__shape">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape01.png');?>" alt="">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape02.png');?>" alt="" class="rightToLeft">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape03.png');?>" alt="">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape04.png');?>" alt="">
			<img src="<?= base_url('assets/img/images/breadcrumb_shape05.png');?>" alt="" class="alltuchtopdown">
		</div>
	</section>
	<section class="team-area pt-80 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="policy">
						 	<?= $contentdetails->option_value; ?>
						</div>
					</div>
				</div>
			</div>
	</section>
</main>
<?php $this->load->view('includes/footer'); ?>
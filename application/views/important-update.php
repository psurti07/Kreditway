<?php $this->load->view('includes/header'); ?>
<main class="fix">
	<section class="breadcrumb__area breadcrumb__bg mt-100" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">Important Update</h2>
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
	<section class="blog__post-area-five">
		<div class="container">
			<div class="row gutter-24 justify-content-center">
				<div class="col-lg-12 col-md-12">
					<?php					
					if (count($noteslist)) {
						foreach ($noteslist as $row) {
					?>
							<div class="blog__post-four shine-animate-item">
								<div class="blog__post-content-four">									
									<h2 class="title"><a><?php echo $row->tags; ?></a></h2>
									<div class="blog-post-meta blog-post-meta-two">
										<ul class="list-wrap">
											<li><i class="fas fa-calendar-alt"></i><?php echo displayDate($row->rec_date); ?></li>
										</ul>
									</div>
									<hr style="border-bottom:1px solid var(--tg-theme-primary);"/>
									<p><?php
										echo $row->descriptions;
										?></p>
								</div>
							</div>
					<?php }
					} else {?>

							<div class="blog__post-four shine-animate-item">
								<div class="p-5 text-center">
									<p><strong>No update as of now!</strong></p>
								</div>
							</div>	
					<?php } ?>
				</div>
			</div>
		</div>		
	</section>
</main>


<?php $this->load->view('includes/footer'); ?>
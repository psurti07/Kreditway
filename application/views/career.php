<?php $this->load->view('includes/header.php'); ?>
<main class="fix">
	<section class="breadcrumb__area breadcrumb__bg mt-100" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">Rewarding & Progressive Career</h2>
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
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
						<h2 class="title tg-element-title" style="perspective: 400px;">
							Current Job Openings !
						</h2>
					</div>
				</div>
			</div>
			<div class="row gutter-24 justify-content-center">
				<div class="col-lg-12 col-md-12">

					<div class="blog__post-four shine-animate-item">
						<div class="blog__post-content-four">
							<!-- <a href="blog.html" class="blog__post-tag-three">Business</a> -->
							<h2 class="title"><a></a></h2>
							<div class="blog-post-meta blog-post-meta-two">
								<div class="cart-items">
									<div class="table-responsive">
										<table class="table table-striped table-bordered">
											<tbody>
												<tr class="cart-head career text-center">
													<th class="table-product">Job Title</th>
													<th class="table-price">Job Time</th>
													<th class="table-quantity">Job Code</th>
													<th class="table-subtotal">Apply</th>
												</tr>
												<?php if (count($openinglist)) {
													$cnt = 1;
													foreach ($openinglist as $row) { ?>
														<tr class="cart-product-list">
															<td width="40%">

																<?php echo $row->title; ?>

															</td>
															<td class="cart-price" width="20%">Full time</td>
															<td width="20%">

																<?php echo $row->slug; ?>

															</td>
															<td class="cart-price" width="20%"><a href="<?php echo site_url('apply/career/' . $row->slug); ?>" class="btn btn-success btn-sm">Apply Now</a></td>
														</tr>
													<?php $cnt++;
													}
												} else { ?>
													<tr class="cart-product-list">
														<td colspan="4">
															<strong>
																Unfortunately, we currently have no openings. </br>
																Please send your updated CV to: <a href='mailto:info@kreditwayom'>info@kreditwayom</a>. We will contact you if your qualifications match any of our future needs.
															</strong>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
</main>

<?php $this->load->view('includes/footer.php'); ?>
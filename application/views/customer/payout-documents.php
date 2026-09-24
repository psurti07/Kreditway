<?php $this->load->view('customer/includes/header-apply');
$isall = 0;
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
						<h2 class="title">Payout Documents</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">Documents</li>
								<li class="breadcrumb-item active" aria-current="page">Payout Documents</li>
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
				<div class="col-lg-4 col-sm-5 mb-45">
					<div class="sidebar__widget">
						<h4 class="sidebar__widget-title">Document List</h4>
						<div class="sidebar__post-list">
							<div class="sidebar__post-item">
								<div class="cust-sidebar">
									<p>
										<?php echo $docflags['gstdoc'] == 1 ? '<i class="fa fa-check-circle add-icon"></i>' : '<i class="fa fa-times-circle cancel-icon"></i>' ?>										
										GST Documents
									</p>
								</div>
							</div>
						</div>
						<div class="sidebar__post-list">
							<div class="sidebar__post-item">
								<div class="cust-sidebar">
									<p>
										<?php echo $docflags['aadharcard'] == 1 ? '<i class="fa fa-check-circle add-icon"></i>' : '<i class="fa fa-times-circle cancel-icon"></i>' ?>
										Aadhaar Card
									</p>
								</div>
							</div>
						</div>
						<div class="sidebar__post-list">
							<div class="sidebar__post-item">
								<div class="cust-sidebar">
									<p>
										<?php echo $docflags['pancard'] == 1 ? '<i class="fa fa-check-circle add-icon"></i>' : '<i class="fa fa-times-circle cancel-icon"></i>' ?>
										PAN Card
									</p>
								</div>
							</div>
						</div>
						<div class="sidebar__post-list">
							<div class="sidebar__post-item">
								<div class="cust-sidebar">
									<p>
										<?php echo $docflags['cancelcheque'] == 1 ? '<i class="fa fa-check-circle add-icon"></i>' : '<i class="fa fa-times-circle cancel-icon"></i>' ?>
										Cancel Cheque
									</p>
								</div>
							</div>
						</div>
						<div class="sidebar__post-list">
							<div class="sidebar__post-item">
								<p class="text-danger mt-4">Note : All of the above documents are mandatory.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-sm-7">
					<!-- GST Number start -->
					<?php if ($docflags['gstdoc'] == 0) { ?>
						<div class="sidebar__widget">
							<h4 class="sidebar__widget-title">GST Document *</h4>
							<div class="sidebar__post-list">
								<div class="testimonial__form footer__newsletter-inner cust-form">
									<form id="submitForm11" class="p-3" enctype="multipart/form-data" method="post" accept-charset="utf-8">
										<input type="hidden" name="doc" value="gstdoc" required>
										<input type="hidden" name="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
										<div class="form-grp">
											<input id="user_gstdoc_number" type="text" name="userfile_number" placeholder="GST Number *" value="<?php echo ($docflags['gstdoc_number'] != 0) ? $docflags['gstdoc_number'] : ''; ?>" required>
											<div class="error-message" id="user_gstdoc_number-message"></div>
										</div>
										<input type="file" name="userfile" id="user_gstdoc" class="cust-file-upload" aria-required="true" required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
										<button type="submit" class="btn cust-upload-btn">UPLOAD</button>
										<div class="error-message" id="user_gstdoc-message"></div>
									</form>
								</div>
							</div>
						</div>
					<?php $isall += 1;
					} ?>
					<!-- GST Number end -->
					<!-- Aadhaar card start -->
					<?php if ($docflags['aadharcard'] == 0) { ?>
						<div class="sidebar__widget">
							<h4 class="sidebar__widget-title">Aadhaar Card *</h4>
							<div class="sidebar__post-list">
								<div class="testimonial__form footer__newsletter-inner cust-form">
									<form action="<?= base_url('customer/profile/uploadpayoutdocument'); ?>" id="submitForm12" class="p-3" enctype="multipart/form-data" novalidate="novalidate" method="post" accept-charset="utf-8">
										<input type="hidden" name="doc" value="aadharcard" required>
										<input type="hidden" name="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
										<div class="form-grp">
											<input id="user_aadharcard_number" type="text" name="userfile_number" class="numeric-input" placeholder="Aadhar Card Number *" value="<?php echo ($docflags['aadharcard_number'] != 0) ? $docflags['aadharcard_number'] : ''; ?>" required maxlength="12" minlength="12">
											<div class="error-message" id="user_aadharcard_number-message"></div>
										</div>
										<input type="file" name="userfile" id="user_aadharcard" class="cust-file-upload" aria-required="true" required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
										<button type="submit" class="btn cust-upload-btn">UPLOAD</button>
										<div class="error-message" id="user_aadharcard-message"></div>
									</form>
								</div>
							</div>
						</div>
					<?php $isall += 1;
					} ?>
					<!-- Aadhaar card end -->
					<!-- Pan card start -->
					<?php if ($docflags['pancard'] == 0) { ?>
						<div class="sidebar__widget">
							<h4 class="sidebar__widget-title">PAN Card *</h4>
							<div class="sidebar__post-list">
								<div class="testimonial__form footer__newsletter-inner cust-form">
									<form action="<?= base_url('customer/profile/uploadpayoutdocument'); ?>" id="submitForm13" class="p-3" enctype="multipart/form-data" novalidate="novalidate" method="post" accept-charset="utf-8">
										<input type="hidden" name="doc" value="pancard" required>
										<input type="hidden" name="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
										<div class="form-grp">
											<input id="user_pancard_number" type="text" name="userfile_number" placeholder="PAN Card Number *" value="<?php echo ($docflags['pancard_number'] != 0) ? $docflags['pancard_number'] : ''; ?>" required>
											<div class="error-message" id="user_pancard_number-message"></div>
										</div>
										<input type="file" name="userfile" id="user_pancard" class="cust-file-upload" aria-required="true" required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
										<button type="submit" class="btn cust-upload-btn">UPLOAD</button>
										<div class="error-message" id="user_pancard-message"></div>
									</form>
								</div>
							</div>
						</div>
					<?php $isall += 1;
					} ?>
					<!-- Pan card end -->
					<!-- Cancel Cheque start -->
					<?php if ($docflags['cancelcheque'] == 0) { ?>
						<div class="sidebar__widget">
							<h4 class="sidebar__widget-title">Cancel Cheque *</h4>
							<div class="sidebar__post-list">
								<div class="sidebar__post-item footer__newsletter-inner">
									<form action="<?= base_url('customer/profile/uploadpayoutdocument'); ?>" id="submitForm15" class="" enctype="multipart/form-data" novalidate="novalidate" method="post" accept-charset="utf-8">
										<input type="hidden" name="doc" value="cancelcheque" required>
										<input type="hidden" name="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
										<input type="file" name="userfile" id="user_cheque" class="cust-file-upload" aria-required="true" required accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.pdf">
										<button type="submit" class="btn btn-secondary">UPLOAD</button>
										<div class="error-message" id="user_cheque-message"></div>
									</form>
								</div>
							</div>
						</div>
					<?php $isall += 1;
					} ?>
					<!-- Cancel Cheque end -->
					<?php if ($isall == 0 && $docflags['isVerified'] == 0) { ?>
						<div class="sidebar__widget">
							<h4 class="sidebar__widget-title">Upload Successful</h4>
							<div class="sidebar__post-list">
								<div class="sidebar__post-item footer__newsletter-inner">
									<p class="mb-0">Your documents are successfully submitted. Our Company Executive will verify the documents and contact you shortly.</p>
								</div>
							</div>
						</div>
					<?php } else if ($isall == 0 && $docflags['isVerified'] == 1) { ?>
						<div class="sidebar__widget">
							<h4 class="sidebar__widget-title">Verification Successful</h4>
							<div class="sidebar__post-list">
								<div class="sidebar__post-item footer__newsletter-inner">
									<p class="mb-0">Dear Customer, your documents are successfully verified. Our Company Executive will contact you soon for your loan process.</p>
								</div>
							</div>
						</div>
					<?php } ?>
					<?php if ($docflags['gstdoc_number'] != '' || $docflags['aadharcard_number'] != '' || $docflags['pancard_number'] != '') { ?>						
						<div class="row">
							<?php if ($docflags['gstdoc_number'] != '') { ?>
								<div class="col-lg-4">
									<div class="services__details-list-box">
										<div class="icon payload-icon">
											<i class="fas fa-arrow-circle-right"></i>
										</div>
										<div class="content">
											<h4 class="title font-16">GST Number :</h4>
											<p class="font-14"><?=$docflags['gstdoc_number']?></p>
										</div>
									</div>
								</div>
							<?php } ?>
							<?php if ($docflags['aadharcard_number'] != '') { ?>
								<div class="col-lg-4">
									<div class="services__details-list-box">
										<div class="icon payload-icon">
											<i class="fas fa-arrow-circle-right"></i>
										</div>
										<div class="content">
											<h4 class="title font-16">Aadhar Card Number :</h4>
											<p class="font-14"> <?= $docflags['aadharcard_number']?></p>
										</div>
									</div>
								</div>
							<?php } ?>
							<?php if ($docflags['pancard_number'] != '') { ?>
								<div class="col-lg-4">
									<div class="services__details-list-box">
										<div class="icon payload-icon">
											<i class="fas fa-arrow-circle-right"></i>
										</div>
										<div class="content">
											<h4 class="title font-16">PAN Card Number :</h4>
											<p class="font-14"> <?= $docflags['pancard_number'] ?></p>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
	
					<div class="sidebar__widget">
						<h4 class="sidebar__widget-title">Message</h4>
						<div class="sidebar__post-list">
							<div class="sidebar__form cust-form">
								<form id='submitForm21' method="post">
									<input type="hidden" name="customerid" value="<?php echo stringCrypt($profiledata->id, 'encrypt'); ?>" required>
									<div class="form-grp">
										<textarea name="remarks" id="remarks" placeholder="Type Your Message"><?php echo $docflags['remarks']; ?></textarea>
										<div class="error-message" id="remarks-message"></div>
									</div>
									<button type="submit" id="form-submit1" class="btn btn-auto">Submit</button>
								</form>
							</div>
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
<script type="text/javascript" src="<?= base_url('assets/js/payoutdoc-validate.js') ?>"></script>
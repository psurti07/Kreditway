<?php
$this->load->view('includes/header-apply.php');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
$amtpay = $productdata['payamount'];
?>

<main class="fix">

<section class="banner__bg-four bg-theme-1">
        <div class="container">
            <div class="loan-offer-card how-we-help-block">
                <div class="row align-items-center mb-30">
                    <div class="col-12 col-md-8 col-lg-8">

                        <div class="subhead mb-0 p-5 pb-0">
							<span
                                class="badge badge-blue rounded-pill text-white text-uppercase text-main-top text-wrap text-start">
                                <i class="fa fa-suitcase"></i> <?php echo $userdetails['loanname']; ?>
                            </span>
                            <h3 class="text-white fs-30">Great news, <?php echo $userdetails['fullname']; ?>! 🎉</h3>
                            <p class="text-white">Your <strong class="text-success">Rs.
                                    <?php echo $eligibilityamtindia; ?> </strong> pre-approved loan is waiting.
                                Purchase
                                a subscription to proceed.</p>
                            <span class="badge bg-pale-primary rounded-pill text-main-top-wrap">
                                <i class="fa fa-clock"></i> Valid till 12 AM tonight
                            </span>
                        </div>


                    </div>
                    <div class="col-12 col-md-4 col-lg-4">
                        <img src="<?php echo base_url('assets/img/sub_image.png'); ?>" alt="image" class="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 mb-15 mb-md-30">
                    <div class="block-holder form-condidates bg-white shadow p-0 border">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 p-0">
                                <div class="subscription-card bg-transparent">
                                    <?php echo form_open('onlineprocess/checkoutDigital', array('id' => 'submitForm3', 'class' => '', 'novalidate' => 'novalidate')); ?>
                                    <input type="hidden" name="loantype" id="loantype"
                                        value="<?php echo $userdetails['loantype']; ?>" class="form-control" required>
                                    <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="fullname" id="fullname"
                                        value="<?php echo $userdetails['fullname']; ?>" class="form-control" required>
                                    <input type="hidden" name="mobile" id="mobile"
                                        value="<?php echo $userdetails['mobile']; ?>" class="form-control" required>
                                    <input type="hidden" name="email" id="email"
                                        value="<?php echo $userdetails['email']; ?>" class="form-control" required>
                                    <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                        class="form-control" required>


                                    <div class="box-inner p-4">
                                        <div class="d-flex align-items-start justify-content-between mb-0">
											<div class="sale-off me-0 ms-auto">
                                               <?php if ($productdata['inOffer'] == 1) { ?>
                                                <p class="text-white mb-0 text-center" style="font-size:13px">
													<i class="fa fa-tag"></i>
                                                    <?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?>
                                                    OFF</p>
                                                <?php } ?>

                                            </div>
                                        </div>
										<div class="ms-0 mb-3 subscription-section">
											<h5 class="mb-1 text-dark-orange text-uppercase">Premium Subscription
											</h5>
											<h4 class="mb-0 card-content fs-20 fw-bold">Limited-time offer
											</h4>
										</div>

                                        <?php
                        if ($productdata['inOffer'] == 1) {
                          echo '<div class="d-flex"><h5><del class="text-danger pe-10">&#8377; ' . formatePrice($productdata['amount']) . '</del></h5>';
                          echo '<h2><span class="text-success fs-1"><strong> &#8377; ' . formatePrice($productdata['offeramount']) . '/-</strong> </span></h2> </div>';
                          $subtotal = $productdata['offeramount'];
                        } else {
                          echo '<h5 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '</h5>';
                          $subtotal = $productdata['amount'];
                        }
                        ?>
                                        <p class="mb-0"><small>One-time fee, GST extra</small></p>
                                        <ul class="list-unstyled features-list pt-20">

                                            <li class="d-flex justify-content-between mb-10"><span>Amount </span><span
                                                    class="fw-bold"><?php echo formatePriceIndia($subtotal); ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between mb-10 border-bottom pb-10">
                                                <span>GST (18%) :</span> <span class="fw-bold"><?php $gst = $subtotal * 0.18;
                          echo formatePriceIndia($gst); ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between mb-10"><span class="fw-bold">Grand
                                                    Total : </span><span class="fw-bold"><?php $grandtotal = $subtotal + $gst;
                          echo formatePriceIndia($grandtotal); ?></span></li>
                                        </ul>
                                        <button type="submit" class="btn btn-green btn-sm w-100" id="formsubmit3"><span
                                                class="btn-text">Buy Now <i
                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                        <p class="fw-normal mt-15 mb-0 text-center" style="font-size:12px">Secured by 256-bit SSL· UPI / Cards / Net Banking</p>
                                    </div>

                                    <?php echo form_close(); ?>
                                </div>

                            </div>
                            <div class="col-12 col-md-6 col-lg-6 p-30 pt-md-30 pt-0 border-start">
                                <div class="box-inner p-4 border-bottom">
                                    <h6 class="fs-6 mb-20 text-dark"> Subscription Benefits</h6>
									<ul class="list-wrap">
										<li style="color: #1B2B5E;"><i class="flaticon-arrow-button"></i>Loan Process in Multiple NBFCs
										</li>
										<li style="color: #1B2B5E;"><i class="flaticon-arrow-button"></i>100% Online Financial
                                                Consultation
										</li>
										<li style="color: #1B2B5E;"><i class="flaticon-arrow-button"></i>Access Personalized
                                                Tracking Portal
										</li>
										<li style="color: #1B2B5E;"><i class="flaticon-arrow-button"></i>Dedicated Loan Expert
                                                Assigned
										</li>
										<li style="color: #1B2B5E;"><i class="flaticon-arrow-button"></i>Subscription Validity: 9
                                                Months
										</li>
										<li style="color: #1B2B5E;"><i class="flaticon-arrow-button"></i>Loan Processing Time: 48
                                                Hours
										</li>
										
									</ul>
                                    
                                </div>
                                <div class="section-theme-6 pt-20 pb-0">
                                    <div class="counters-block pb-0">
                                        <div class="row justify-content-center justify-content-md-between gx-10">
                                            <div class="col-lg-6 col-6">
                                                <div class="counter-box d-block text-center mb-0">
                                                    <div class="icon-wrap mb-10 justify-content-center">
                                                        <i class="fa-regular fa-user text-success"></i>
                                                    </div>
                                                    <div class="counter-stats">
                                                        <strong class="numbers h4 mb-5 text-black">
                                                            <span data-purecounter-duration="1"
                                                                data-purecounter-start="0" data-purecounter-end="10"
                                                                data-purecounter-once="true"
                                                                class="purecounter">10</span>k+
                                                        </strong>
                                                        <span class="subtext text-uppercase">Satisfied
                                                            Customers</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-6">
                                                <div class="counter-box d-block text-center mb-0">
                                                    <div class="icon-wrap mb-10 justify-content-center">
                                                        <i class="fa-solid fa-wallet text-success"></i>
                                                    </div>

                                                    <div class="counter-stats">
                                                        <strong class="numbers h4 mb-5 text-black">
                                                            <span data-purecounter-duration="1"
                                                                data-purecounter-start="0" data-purecounter-end="12"
                                                                data-purecounter-once="true"
                                                                class="purecounter">₹12</span>cr+
                                                        </strong>
                                                        <span class="subtext text-uppercase">Loan Disbursed</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-15 mb-md-30">
                     <div class="card card-left landing-form-right shadow-none">
                    <div class="card-body">
                        <span class="text-uppercase fw-bold sub-title mb-3 d-block">Desired Loan Amount</span>
                        <div class="range__value text-start mb-4 border-bottom">
                            <span class="fs-40 bg-light ps-0 text-navy">₹<?= formatePriceIndia($userdetails['loanamount']) ?></span>
                            <p class="fs-12 lh-normal mb-3">Tenure: up to 60 months · ROI from 11%*</p>
                        </div>
                        <h6 class="text-uppercase fw-bold text-navy">Customer details</h6>
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle user-details-table mb-0">
                                <tbody>
                                    <tr>
                                        <td class="icon-col ps-0 pt-0 pb-3">
                                            <div class="icon-col-image">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </td>
                                        <td class="pt-0 pb-3 text-left">
                                            <small class="text-uppercase d-block">Name</small>
                                            <strong><?php echo $userdetails['fullname']; ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="icon-col ps-0 pt-0 pb-3">
                                            <div class="icon-col-image">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                        </td>
                                        <td class="pt-0 pb-3 text-left">
                                            <small class="text-uppercase d-block">Mobile</small>
                                            <strong><?php echo $userdetails['mobile']; ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="icon-col ps-0 pt-0 pb-3">
                                            <div class="icon-col-image">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </td>
                                        <td class="pt-0 pb-3 text-left">
                                            <small class="text-uppercase d-block">Email</small>
                                            <strong><?php echo $userdetails['email']; ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="icon-col ps-0 pt-0 pb-3">
                                            <div class="icon-col-image">
                                               <i class="fa fa-file"></i>
                                            </div>
                                        </td>
                                        <td class="pt-0 pb-3 text-left">
                                            <small class="text-uppercase d-block">Loan Type</small>
                                            <strong><?php echo $userdetails['loanname']; ?></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card otp-velidation-text-wrap rounded-4 bg-light-success">
                            <div class="card-body py-3 px-3 ">
                                <div class="d-flex align-items-start">
                                    <img src="<?= base_url('assets/img/new-image/otp-img.png') ?>" class="img-fluid"
                                        alt="" />
                                    <div>
                                        <p class="mb-0 fw-light ms-2">Your data is 256-bit encrypted and never shared
                                            without your consent.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
    </section>
	<!-- banner-area -->
	<section class="services__area-seven services__area-home7 services__bg-seven body-footer-full">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 process-panel">
					<h2 class="title"><?= $userdetails['loanname']; ?></h2>
					<p class="font-14"><i class="fa fa-user"></i> Great news, <span class="text-success font-14"><strong><u><?= $userdetails['fullname'] ?>!</u></strong></span></p>
					<p class="font-14">Your <span class="underline-2 text-success"><strong> Rs. <?php echo $eligibilityamtindia; ?></strong></span> Pre-Approved Loan is waiting. Purchase a subscription to process <span class='underline-2 success text-danger'>- Valid Till 12 AM.</span></p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 order-2 order-md-1 d-none d-md-block">
					<div class="project__details-info">
						<h4 class="title">User Details</h4>
						<ul class="list-wrap">
							<li><span>Loan :</span> <?= $userdetails['loanname'] ?></li>
							<li><span>Amount :</span> &#8377;<?= formatePriceIndia($userdetails['loanamount']) ?></li>
							<li><span>Fullname :</span> <?= $userdetails['fullname'] ?></li>
							<li><span>Mobile :</span> <?= $userdetails['mobile'] ?></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 order-1 order-md-2">
					<div class="project__details-info mb-4 lending-design">
						<?php echo form_open('onlineprocess/checkoutDigital', array('id' => 'submitForm3', 'class' => '', 'novalidate' => 'novalidate')); ?>
						<div class="row">
							<input type="hidden" name="loantype" id="loantype"
								value="<?php echo $userdetails['loantype']; ?>" class="form-control" required>
							<input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
								class="form-control" required>
							<input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
								class="form-control" required>
							<input type="hidden" name="fullname" id="fullname"
								value="<?php echo $userdetails['fullname']; ?>" class="form-control" required>
							<input type="hidden" name="mobile" id="mobile" value="<?php echo $userdetails['mobile']; ?>"
								class="form-control" required>
							<input type="hidden" name="email" id="email" value="<?php echo $userdetails['email']; ?>"
								class="form-control" required>
							<input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
								class="form-control" required>
							<input type="hidden" name="paymentid" id="paymentid" value="" class="form-control">
							<input type="hidden" name="orderAmount" id="orderAmount" value="<?php echo $amtpay; ?>"
								class="form-control" required>

							<div class="services__content-four">
								<h2 class="title">Subscription Plan:</h2>

								<?php
									if ($productdata['inOffer'] == 1) {
										echo ' <span class="text-danger s-20 price-cancel">&#8377;'.formatePrice($productdata['amount']).'</span>  <span class="text-success price-sub ">&#8377;'.formatePrice($productdata['offeramount']).'/- Only</span>';
										$subtotal = $productdata['offeramount'];
									}
									else {
										echo '<span class="text-success price-sub">&#8377; '.formatePrice($productdata['amount']).'</span>';
										$subtotal = $productdata['offeramount'];
									}
									?>

								<div class="about__list-box mt-4">
									<ul class="list-wrap cust-sub">
										<?php if ($productdata['inOffer'] == 1) { ?>
										<li><i
												class="fas fa-check"></i><?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?>
											OFF</li>
										<?php } ?>

										<li><i class="fas fa-check"></i>Subtotal:
											<?php echo formatePriceIndia($subtotal); ?></li>
										<li><i class="fas fa-check"></i>GST (18%): <?php $gst = $subtotal * 0.18;
													echo formatePriceIndia($gst); ?></li>
										<li><i class="fas fa-check"></i>Grand Total: <?php $grandtotal = $subtotal + $gst;
													echo formatePriceIndia($grandtotal); ?></li>
									</ul>
								</div>

							</div>
							<div class="col-lg-2">
								<button type="submit" class="btn" id="form-submit3">Subscribe Now</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 order-3 order-md-3">
					<div class="project__details-info lending-design">
						<div class="row">
							<div class="services__content-four">
								<h2 class="title">Plan Benefits:</h2>
								<div class="about__list-box">
									<ul class="list-wrap cust-sub">
										<li><i class="fas fa-check"></i>100% Online Process</li>
										<li><i class="fas fa-check"></i>Get Personalized Tracking Portal</li>
										<li><i class="fas fa-check"></i>On-Call Expert Consultation</li>
										<li><i class="fas fa-check"></i>Dedicated Loan Expert Assigned</li>
										<li><i class="fas fa-check"></i>CIBIL Remains Unaffected</li>
										<li><i class="fas fa-check"></i>Plan Validity: 6 months</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner-area-end -->

	<?php
		$banks = [
			[
				'img' => '039.png',
				'alt' => 'IIFL Logo',
				'loan' => 'Up to 5 lakh',
				'roi' => '12.75% to 44%',
				'tenure' => 'Up to 42 Months'
			],
			[
				'img' => '015.png',
				'alt' => 'Faircent Logo',
				'loan' => 'Rs. 20L',
				'roi' => '12% to 28%',
				'tenure' => '6 to 36 Months'
			],
			[
				'img' => '027.jpeg',
				'alt' => 'L&T Logo',
				'loan' => 'Up to 30 Lakh',
				'roi' => '11%',
				'tenure' => 'Up to 72 months'
			],
			[
				'img' => '006.png',
				'alt' => 'Tata Capital Logo',
				'loan' => 'Up to 35 Lakh',
				'roi' => '11.50%',
				'tenure' => 'Up to 72 months'
			],
			[
				'img' => '040.png',
				'alt' => 'Piramal Logo',
				'loan' => '50,000 to 25 Lakh',
				'roi' => '12.9%',
				'tenure' => '9 to 60 months'
			],
			[
				'img' => '038.png',
				'alt' => 'Finnable Logo',
				'loan' => '10 lakh',
				'roi' => '16% to 35.99%',
				'tenure' => '6 to 60 Months'
			],
			[
				'img' => '023.png',
				'alt' => 'Lending Kart Logo',
				'loan' => '50,000 to 2CR',
				'roi' => '12% to 27%',
				'tenure' => '12 to 36 Months'
			],
			[
				'img' => '043.jpeg',
				'alt' => 'Kreditbee Logo',
				'loan' => '1000 to 10 lakh',
				'roi' => '12% to 28.5%',
				'tenure' => '6 to 60 Months'
			]
		];
		?>

	<section class="features__area-two">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="section-title text-center mb-20">
						<h2 class="title">Best Personal Loan Offers <span class="text-success">from Top Banks</span>
						</h2>
					</div>
				</div>
			</div>
			<div class="row">    
                <div class="col-lg-12 col-md-12 col-12 p-2">
                    <div class="swiper-container roi-package-active">
                        <div class="swiper-wrapper">
                            <?php foreach ($banks as $bank) { ?>
                            <div class="swiper-slide">
                                <div class="features__item-two kg-feature_icon-two p-4">
                                    <div class="features__icon-two bg-white">
                                        <img src="<?php echo base_url('assets/img/banks/'.$bank['img']); ?>"
                                            alt="<?php echo $bank['alt']; ?>" class="img-fluid">
                                    </div>
                                    <div class="features__content-two">
                                        <h6>Loan Amount*</h6>
                                        <p><?php echo $bank['loan']; ?></p>
                                    </div>

                                    <div class="features__content-two">
                                        <h6>Rate of Interest*</h6>
                                        <p><?php echo $bank['roi']; ?></p>
                                    </div>

                                    <div class="features__content-two">
                                        <h6>Loan Tenure*</h6>
                                        <p><?php echo $bank['tenure']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <p class="text-center mt-20"><small>Disclaimer: The interest rate charges are subject to constant change as they are affected by several factors. Please check the prevailing interest rate with your lender before applying.</small></p>
                </div>
            </div>
			
		</div>
	</section>

	<!-- testimonial start -->
	<section class="testimonials__area-home8 mb-85 d-none">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-7 col-md-6 mb-50">
					<div class="section-title tg-heading-subheading">
						<h2 class="title tg-element-title">Testimonials
						</h2>
						<p>Here’s Why Our Clients Love Us</p>
					</div>
				</div>
				<div class="col-xl-5 col-md-6 mb-50">
					<div class="box-button-slider-right text-end">
						<div class="testimonial__nav-four">
							<div class="testimonial-two-button-prev button-swiper-testimonial-prev"><i
									class="flaticon-right-arrow"></i></div>
							<div class="testimonial-two-button-next button-swiper-testimonial-next"><i
									class="flaticon-right-arrow"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-slide-testimonials">
				<div class="swiper-container testiminials-active-2">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="card-testimonials">
								<!-- <div class="card-image">
                                        <img src="assets/img/home8/author.png" alt="" />
                                    </div> -->
								<div class="card-info">
									<p class="card-position">Bhavesh Solanki
									</p>
									<div class="rates-review">
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star-grey.svg');?>" />
									</div>
									<div class="card-comment">
										<p>“ Great!! The online process of applying for a loan with Kreditway is very
											easy and trouble-free. I faced no issues in my process and got the loan in
											no time. Thank you very much for your support, folks. I definitely recommend
											it!!
											”</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card-testimonials">
								<div class="card-info">
									<p class="card-position">Karthika Manikandan</p>
									<div class="rates-review">
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star-grey.svg');?>" />
									</div>
									<div class="card-comment">
										<p>“ Everything was so timely. The team members are very polite and helpful. The
											way they handled my process is commendable. I strongly recommend it to
											everyone who is looking for a loan without facing any issues.
											”</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card-testimonials">
								<div class="card-info">
									<p class="card-position">Manish Pandey</p>
									<div class="rates-review">
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star-grey.svg');?>" />
									</div>
									<div class="card-comment">
										<p>“ Throughout the process, I was given step-by-step instructions to ensure
											that everything went smoothly. I am very pleased with Kreditway and would
											gladly recommend it to my friends and family if they need a loan.
											”</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card-testimonials">
								<div class="card-info">
									<p class="card-position">Vikram Singh
									</p>
									<div class="rates-review">
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star.svg');?>" />
										<img src="<?= base_url('assets/img/home8/star-grey.svg');?>" />
									</div>
									<div class="card-comment">
										<p>“ I had an amazing experience with Kreditway. I would like to thank the
											entire team. They are very professional, explained everything clearly, and
											handled my loan process like a pro. From the beginning to disbursal,
											everything went very smoothly.

											”</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- testimonial end    -->
</main>


<?php $this->load->view('includes/footer-apply'); ?>

<script type="text/javascript">
	$(document).ready(function () {
		var windowWidth = $(window).width();
		if (windowWidth <= 1024) { //for iPad & smaller devices
			$('#userCollapse').removeClass('show');
		}
	});

	$(function () {
		$('#submitForm3').on('submit', function (e) {
			$('#form-submit3').html(
				'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
				);
		});
	});

</script>

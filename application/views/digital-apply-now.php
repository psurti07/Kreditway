<?php $this->load->view('includes/header-apply.php'); ?>
<main class="fix">


  <section class="banner__bg-four bg-theme-1">
        <div class="container">

            <div class="">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6 col-md-6 d-none d-md-block">
                         <div class="banner__content-four">
                             <span
                                class="text-dark rounded-pill text-main-top-main text-wrap text-start border pill-box" style="">
                                <img src="<?= base_url('assets/img/new-image/register.png') ?>" class="svg-inject me-1"
                                    alt="" />
                                8+ NBFC Partners
                            </span>
                            <span
                                class="text-dark rounded-pill text-main-top-main text-wrap text-start border pill-box">
                                <img src="<?= base_url('assets/img/new-image/register.png') ?>" class="svg-inject me-1"
                                    alt="" />
                                100% Digital Process
                            </span>
                            <span
                                class="text-dark rounded-pill text-main-top-main text-wrap text-start border pill-box">
                                <img src="<?= base_url('assets/img/new-image/register.png') ?>" class="svg-inject me-1"
                                    alt="" />
                                Loan approval in 24-48 hrs
                            </span>
                            <h1 class="title">Empowering Your Goals with Smart <span>Financial Solutions</span></h1>
                            <p class="">Loan approval and disbursement help you reach your financial goals. Get instant
                                loans at competitive rates with minimal documentation.
                            </p>
                            <div class="row g-3">
                        <?php $testimonial = array('1.png','2.png','3.png','4.png','5.png','6.png','7.png','8.jpeg') ?>
                        <div class="swiper-container clients mb-0" data-margin="10" data-dots="false"
                            data-autoplay="true" data-swiper-autoplay="500" data-items-xxl="2" data-items-xl="2"
                            data-items-lg="2" data-items-md="2" data-items-xs="1">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach($testimonial as $img){ ?>
                                    <div class="swiper-slide item col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                        <div class="card h-100" style="min-height:auto !important">
                                            <div class="card-body p-2">
                                                <div class="icon mb-0">
                                                    <div
                                                        class="blockquote-details border-top-0 mt-0 pt-0 align-items-start">
                                                        <img src="<?= base_url('assets/img/customers/'.$img) ?>"
                                                            class="img-fluid" alt="" />

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <?php if ($processstep == 'step1'): ?>
                            <div class="contact__form-wrap p-5 ms-0 bg-white">
                                <p class="text-uppercase fw-bold text-center mb-0 sub-title-lending">Start Your Loan</p>
                                <h3 class="title mb-3 text-center">Get Instant Credit up to <span class="text-color">₹10 Lakhs </span> in minutes</h2>

                                    <?= form_open('', array('id' => 'submitForm1', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
                                    <div class="form-group my-4"
                                        style="">
                                        
                                        <div class="range d-flex justify-content-center mb-3" style="display: inline-block;">
                                            <div class="range__value pt-0">
                                                <span class="text-color fs-1"></span>
                                            </div>
                                            
                                        </div>
                                        <div class="d-flex justify-content-between required-amount">
                                        <h6 class="text-uppercase fs-12 mb-0">Enter Required Amount</h6>
                                        <h6 class="text-uppercase fs-12 mb-0">₹1L – ₹10L</h6>
                                    </div>

                                        <div class="range">
                                            <div class="range__slider digi_range__slider">
                                                <input type="range" name="loanamount" step="10000" id="loanSlider">
                                                <div class="range__tooltip d-none" id="rangeTooltip">>₹0</div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between required-price">
                                        <h6 class="text-uppercase fs-11 mb-0">₹1,00,000</h6>
                                        <h6 class="text-uppercase fs-11 mb-0">₹10,00,000</h6>
                                    </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text">+91</span>
                                            <input class="form-control" id="mobile" type="text" name="mobile"
                                                placeholder="Enter Mobile Number" required minlength="10" maxlength="10"
                                                inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
                                                data-validation-regex-message="Enter valid mobile number">
                                        </div>
                                        <div class="error-message" id="mobile-message"></div>
                                    </div>

                                    <div class="form-grp mb-3 d-md-block">
                                        <button type="submit" class="btn btn-block mt-3" id="form-submit1">Apply
                                            Now</button>
                                    </div>

                                    <div class="form-group  s-12 mb-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="terms" id="terms" class="custom-control-input"
                                                value="1" checked required>
                                            <label class="custom-control-label text-dark" style="display:unset;"
                                                for="terms"><small>By
                                                    submitting the form & proceeding, you agree to the <a class="text-dark"
                                                        href="<?php echo site_url('terms-conditions'); ?>"
                                                        target="_blank">Terms
                                                        of Use</a> and <a class="text-dark"
                                                        href="<?php echo site_url('privacy-policy'); ?>"
                                                        target="_blank">Privacy Policy</a> of Kreditway.</small></label>
                                            <div class="help-block font-small-3"></div>
                                        </div>
                                    </div>

                                    <div class="form-group s-12 mb-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="promotion" id="promotion"
                                                class="custom-control-input" value="1" checked required>
                                            <label class="custom-control-label" style="display:unset;"
                                                for="promotion"><small>I agree to
                                                    receive promotional & informational communications from Kreditway
                                                    through Emails, calls
                                                    or SMS,RCS Services.</small></label>
                                            <div class="help-block font-small-3"></div>
                                        </div>
                                    </div>

                                    <p class="mb-0" style="font-size: smaller;">Loan facility provided by our partnered
                                        NBFCs</p>
                                    <div class="brand__area-two pt-2 pb-2 ps-4 pe-4">
                                        <div class="container">
                                            <div class="swiper-container partner-active">
                                                <div class="swiper-wrapper">
                                                    <?php foreach ($banklist as $row) { ?>
                                                        <div class="swiper-slide">
                                                            <div class="brand-item">
                                                                <img src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>"
                                                                    alt="<?php echo $row->bank_name; ?>">
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?= form_close(); ?>
                            </div>
                        <?php elseif ($processstep == 'step2'): ?>
                            <div class="contact__form-wrap p-5 ms-0 bg-white otp-velidation-form">
                                
                                <?= form_open('', array('id' => 'submitForm2', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
                                <input type="hidden" name="otpmobile" id="otpmobile"
                                    value="<?php echo $userdetails['mobile']; ?>">
                                <input type="hidden" name="loanamount" id="loanamount"
                                    value="<?php echo $userdetails['loanamount']; ?>">

                                <div class="form-grp w-0">
                                    <!--<input id="otpcode" type="text" name="otpcode" class="text-center otpnumber"
                                        placeholder="Enter OTP" required maxlength="4" inputmode="numeric">-->
                                    <div class="input-field text-center">
                                        <span> <img src="<?= base_url('assets/img/images/Iconcircle.png') ?>" class="me-1"
                                    alt="" /></spna>
                                        <h3 class="mb-0 text-center text-navy fw-bold mb-4">Verify your mobile</h3>
                                            <h6 class="fw-light mb-4">We've sent a 6-digit OTP to <strong class="text-navy">
                                                    <?php echo $userdetails['mobile']; ?> </strong>
                                            </h6>
                                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                            id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                            id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                            id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                        <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                            id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">

                                    <div class="error-message" id="otpcode-message"></div>
                                    <div class="text-danger s-12 mb-2" id="otpcodeError"></div>
                                    </div>
                                </div>
                                <!-- <div class="box-forgot-pass"> -->
                                <div class="p-countdown mb-2">
                                    <div class="p-countdown-count" id="counttime">
                                        <code>New OTP code will generate in <span id="timer">30</span> Sec</code>
                                    </div>
                                    <div id="resendBtn" class="d-none">
                                        <code>Didn’t receive OTP? <a href="javascript:resendotp()">Resend OTP</a></code>
                                    </div>
                                    <code id="resend-message2"></code>
                                    <div class="custom-error" id="otpcodeError"></div>
                                </div>
                                <!-- </div> -->
                                <div class="form-grp mb-5">
                                    <button type="submit" class="btn btn-block" id="form-submit2">Verify OTP</button>
                                </div>
                                <hr>
                                 <div class="form-grp mb-5">
                                    <p><small>Kreditway will never call you for your OTP. If you get OTP on a password — <span style="color:#FE7E03"> do not share it with anyone. </span></small></p>
                                </div>

                                <?= form_close(); ?>
                            </div>
                        <?php elseif ($processstep == 'step3'): ?>
                            <div class="contact__form-wrap p-5 ms-0 bg-white">
                                <p class="text-uppercase fw-bold text-center mb-0 sub-title-lending">Tell us about you</p>
                                <h3 class="title mb-3">Select your profile & enter details</h2>
                                <p>This helps us tailor the best NBFC offers for you.</p>

                                <!--<div class="about__list-box pt-2 pb-3">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-arrow-button"></i>Loan Amount:
                                            <?php echo formatePriceIndia($userdetails['loanamount']); ?>
                                        </li>
                                        <li><i class="flaticon-arrow-button"></i>Mobile No.:
                                            <?php echo $userdetails['mobile']; ?>
                                        </li>
                                    </ul>
                                </div>-->
                                <?php echo form_open('', array('id' => 'submitForm3', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
                                <input type="hidden" name="loanamount" id="loanamount"
                                    value="<?php echo $userdetails['loanamount']; ?>">
                                <input type="hidden" name="referralcode" id="referralcode"
                                    value="<?php echo $userdetails['referralcode']; ?>">
                                <input type="hidden" id="usertype" name="usertype" value="1">
                                <input type="hidden" name="usermobile" id="usermobile"
                                    value="<?php echo $userdetails['mobile']; ?>">

                                <div class="row form-grp mb-3">
                                    <div class="title mt-6">

                                        <h6 class="text-uppercase fs-12 mb-2">Employment type</h6>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt-0 state-card mb-sm-0 mb-2">

                                        <fieldset class="picker1">
                                            <label for="plan-1">
                                                <input type="radio" name="usertype" id="plan-1" value="1" class="d-none" checked="" data-gtm-form-interact-field-id="1">
                                                <span class="p-3">
                                                    <div class="subscription-price pb-0 pt-0">
                                                        <div class="d-flex align-items-start">
                                                            <div class="icon staticts-card-btn btn btn-block pe-none bg-dark-orange" style="width:17%">
                                                                <i class="fa fa-suitcase"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0 fs-17 lh-xs text-navy fw-bold">Salaried
                                                                </h5>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="round-radiobox"></div>

                                                </span>
                                            </label>
                                        </fieldset>


                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt-0 state-card">
                                        <fieldset class="picker1">
                                            <label for="plan-2">
                                                <input type="radio" name="usertype" id="plan-2" value="2" class="d-none" data-gtm-form-interact-field-id="2">
                                                <span class="p-3">
                                                    <div class="subscription-price pb-0 pt-0">
                                                        <div class="d-flex align-items-start">
                                                            <div class="icon staticts-card-btn btn btn-block pe-none" style="width:17%">
                                                                <i class="fa fa-flag"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0 fs-17 lh-xs text-navy fw-bold">
                                                                    Self-Emp.
                                                                </h5>
                                                              
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="round-radiobox"></div>

                                                </span>
                                            </label>
                                        </fieldset>
                                    </div>

                                </div>
                               <div class="form-group form-floating mb-2">

                                        <label for="username"
                                            class="position-static ps-0 text-uppercase fw-bold pt-0 p-0">Full name</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text text-dark fw-bold" id="basic-addon1"> <i class="fa fa-user"></i></span>
                                            <input id="username" type="text" name="username" class="form-control"
                                                placeholder="Full Name *" required
                                                data-validation-regex-regex="^[a-zA-Z ]*$"
                                                style="border: 1px solid #E2E8F0;">
                                        </div>
                                        <div class="error-message" id="username-message"></div>
                                    </div>

                                    <div class="form-group form-floating mb-2">

                                        <label for="useremail"
                                            class="position-static ps-0 text-uppercase fw-bold pt-0 p-0">Email
                                            address</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text text-dark fw-bold" id="basic-addon1"> <i class="fa fa-envelope"></i></span>
                                            <input id="email" type="text" name="useremail" class="form-control"
                                                placeholder="Your Email *" required style="border: 1px solid #E2E8F0;">
                                        </div>
                                        <div class="error-message" id="useremail-message"></div>
                                    </div>
                            
                                <div class="form-grp mb-5">
                                    <button type="submit"
                                        onclick="_tfa.push({notify: 'event', name: 'rupay_lead', id: 1802016});"
                                        class="btn btn-block mt-2" id="form-submit3">Process</button>
                                </div>
                                <?= form_close(); ?>
                            </div>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </section>
<!-- features-area -->
        <section class="features__area-two">
            <div class="container">
                <div class="row gutter-24 justify-content-center">
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="features__item-two mb-3">
                            <div class="features__icon-two">
                                <i class="fa fa-shield-alt"></i>
                            </div>
                            <div class="features__content-two">
                                <h4 class="title">Best Privacy</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="features__item-two mb-3">
                            <div class="features__icon-two">
                                <i class="fa fa-chart-line"></i>
                            </div>
                            <div class="features__content-two">
                                <h4 class="title">Profit Oriented</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="features__item-two mb-3">
                            <div class="features__icon-two">
                                <i class="fa fa-wallet"></i>
                            </div>
                            <div class="features__content-two">
                                <h4 class="title">E-wallet</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="features__item-two mb-3">
                            <div class="features__icon-two">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <div class="features__content-two">
                                <h4 class="title">Fast Card</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="features__item-two mb-3">
                            <div class="features__icon-two">
                                <i class="fa fa-user-clock"></i>
                            </div>
                            <div class="features__content-two">
                                <h4 class="title">No Wait Time</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <div class="features__item-two mb-3">
                            <div class="features__icon-two">
                                <i class="fa fa-suitcase"></i>
                            </div>
                            <div class="features__content-two">
                                <h4 class="title">Collateral-free</h4>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

        <section class="services-area banner__bg-four bg-theme-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about__content-seven">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">The Advantage</span>
                            <h2 class="title">
                                Why KreditWay — The Difference We Bring</span>
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
            <div class="services__item-wrap-two">
                <div class="row justify-content-center gutter-24">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-five">
                            <div class="services__icon-five">
                                <i class="flaticon-profit"></i>

                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a>Leading Software
                                    </a></h2>
                                <p>A private limited company with a vision to help people achieve financial dreams.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-five">
                            <div class="services__icon-five">
                                <i class="flaticon-light-bulb"></i>

                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a>100% Digital Process
                                    </a></h2>
                                <p>A platform where people can apply hassle free and get their loan approved digitally.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-five">
                            <div class="services__icon-five">
                                <i class="flaticon-startup"></i>

                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a>Self-Apply Feature
                                    </a></h2>
                                <p>Empowering borrowers with a simple self-serve flow to submit credentials and choose rates instantly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-five" style="background: #002254;">

                            <div class="services__content-five">
                                <h1 class="" style="color:#FB710F">4.5k+</h1>
                                <p class="text-white">Satisfied Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

     <section class="testimonials__area-home8 section-padding" id="testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-6 mb-50">
                    <div class="section-title tg-heading-subheading animation-style3">
                        <span class="sub-title">Testimonials</span>
                        <h2 class="title">Hear from Our Customers</h2>
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
                            <div class="card-testimonials bg-theme-1">
                                <!-- <div class="card-image">
                                        <img src="assets/img/home8/author.png" alt="" />
                                    </div> -->
                                <div class="card-info">
                                    <p class="card-position">Bhavesh Solanki
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“ Great!! The online process of applying for a loan with Rupay Credit is very
                                            easy and trouble-free. I faced no issues in my process and got the loan in
                                            no time. Thank you very much for your support, folks. I definitely recommend
                                            it!!
                                            ”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials bg-theme-1">
                                <div class="card-info">
                                    <p class="card-position">Karthika Manikandan</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
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
                            <div class="card-testimonials bg-theme-1">
                                <div class="card-info">
                                    <p class="card-position">Manish Pandey</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“ Throughout the process, I was given step-by-step instructions to ensure
                                            that everything went smoothly. I am very pleased with Rupay Credit and would
                                            gladly recommend it to my friends and family if they need a loan.
                                            ”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials bg-theme-1">
                                <div class="card-info">
                                    <p class="card-position">Vikram Singh
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“ I had an amazing experience with Rupay Credit. I would like to thank the
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

        <section class="lending-condition">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0">
                        <p class="mb-0"><strong>Disclaimer: </strong><?php echo COMPANY_NAME; ?> is not a lender or
                            financial
                            institution. We do not provide loans or make credit decisions. All loan approvals, interest
                            rates, fees,
                            and disbursal are handled by third-party lenders/NBFCs. We do not guarantee loan approval,
                            disbursal, or
                            specific loan terms. The amount paid is only for the service charge. We are not lenders and do
                            not
                            guarantee any loan approval. Loan approval, disbursement/sanction is entirely dependent on NBFC
                            criteria.</p>

                        <p class="mb-0"><strong>Important Note: </strong>We ask our customers to make payments ONLY on our
                            website
                            <a class="text-dark" href="<?php echo COMPANY_SITE; ?>">kreditway.com</a> and NOT through any
                            other
                            source, directly or indirectly.
                        </p>

                        <p class="mb-0"><strong>Pre-application NOTE: </strong>Users are advised to read our terms and
                            conditions
                            and policies before proceeding/applying/registration.
                        </p>

                        <p class="mb-0"><strong>Registered Office Address : </strong><?php echo COMPANY_ADDRESS; ?></p>

                        <p class="mb-0"><strong>Mobile : </strong><?php echo COMPANY_MOBILE; ?> | <strong>Email :
                            </strong><?php echo COMPANY_EMAIL; ?></p>
                    </div>
                </div>
            </div>
        </section>
</main>

<?php $this->load->view('includes/footer-apply.php'); ?>
<!-- <script src="<?= base_url('assets/js/loanscript.js'); ?>"></script> -->
<script src="<?= base_url('assets/js/loanscript_tooltip.js'); ?>"></script>


<script>
    function resendotp() {
        loanamount = document.getElementById('loanamount').value;
        mobile = document.getElementById('otpmobile').value;

        $.ajax({
            url: '<?php echo base_url("onlineprocess/resendotpCode"); ?>',
            type: "POST",
            data: 'mobile=' + mobile + '&loanamount=' + loanamount,
            dataType: "JSON",
            cache: false,
            processData: false,
            success: function(response) {
                if (response['success'] == true) {
                    $('#resend-message2').html(response['message']);
                    toastr.success(response['message']);
                } else {
                    toastr.error(response['message']);
                }
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
            }
        });
    }
    $(document).ready(function() {
        // usertype selection
        $('.product_filter_lending ul li').on('click', function() {
            var tab_id = $(this).attr('data-tab');
            $('ul.tabs-1 li').removeClass('active');
            $(this).addClass('active');
            $("#" + tab_id).addClass('active');
            $('#usertype').val($(this).data('tab'));
        });

        $.validator.addMethod("customMobile", function(value, element) {
            return /^[6-9]\d{9}$/.test(value); // Regex pattern for [6-9]{1}[0-9]{9}
        }, "Please enter a valid mobile number");

        $.validator.addMethod("customAmount", function(value, element) {
            // Check if the value is a valid number and within the specified range
            return this.optional(element) || (parseFloat(value) >= 10000 && parseFloat(value) <= 10000000);
        }, "Please enter a valid loan amount between 10,000 and 1,00,00,000.");

        $('.numeric-input').on('keydown', function(event) {
            if (!(event.key === 'Backspace' || event.key === 'Delete' || (event.key >= '0' && event.key <=
                    '9'))) {
                event.preventDefault();
            }
        });
        $('#submitForm1').validate({
            rules: {
                mobile: {
                    required: true,
                    digits: true,
                    customMobile: true
                },
                loanamount: {
                    required: true,
                    digits: true,
                    customAmount: true
                }
            },
            messages: {
                mobile: {
                    required: 'Please enter mobile number'
                },
                loanamount: {
                    required: "Please enter a loan amount.",
                    validAmount: "Please enter a valid loan amount between 10,000 and 1,00,00,000."
                }
            },
            errorPlacement: function(error, element) {
                var target = "#" + $(element).attr("id") + "-message";
                $(target).html(error);
            },
            submitHandler: function(form) {
                $.ajax({
                    url: `<?php echo base_url('onlineprocess/sendotpCode') ?>`,
                    type: "POST",
                    data: $(form).serialize(),
                    dataType: "JSON",
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $('#form-submit1').html(
                            'Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                        );
                        $('#form-submit1').attr('disabled', true);
                    },
                    success: function(response) {
                        if (response['success'] == true) {
                            if (response['redirect_url'] != "") {
                                window.location.href = response['redirect_url'];
                            } else {
                                window.location = "./applynow/s2/" + response['mobile'];
                            }
                        } else {
                            $('#mobilenoError1').html(response['message']);
                            toastr.error(response['message']);
                        }

                        $('#form-submit1').html('Apply Now');
                        $('#form-submit1').attr('disabled', false);
                    },
                    error: function(jXHR, textStatus, errorThrown) {
                        toastr.error(errorThrown, 'ERROR');
                        $('#form-submit1').html('Apply Now');
                        $('#form-submit1').attr('disabled', false);
                    }
                });
            }
        });
        $('#submitForm2').validate({
            rules: {
                otpcode: {
                    required: true,
                    digits: true
                },
            },
            messages: {
                otpcode: {
                    required: 'Enter valid OTP'
                }
            },
            errorPlacement: function(error, element) {
                var target = "#" + $(element).attr("id") + "-message";
                // alert(target)
                $(target).html(error);
            },
            submitHandler: function(form) {
                $.ajax({
                    url: `<?php echo base_url('onlineprocess/checkotpCode') ?>`,
                    type: "POST",
                    data: $(form).serialize(),
                    dataType: "JSON",
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $('#form-submit2').html(
                            'Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                        );
                        $('#form-submit2').attr('disabled', true);
                    },
                    success: function(response) {
                        if (response['success'] == true) {
                            window.location = "../../applynow/s3/" + response['mobile'];
                        } else {
                            $('#otpcodeError').html(response['message']);
                            toastr.error(response['message']);
                        }

                        $('#form-submit2').html('Verify OTP');
                        $('#form-submit2').attr('disabled', false);
                    },
                    error: function(jXHR, textStatus, errorThrown) {
                        toastr.error(errorThrown, 'ERROR');
                        $('#form-submit2').html('Verify OTP');
                        $('#form-submit2').attr('disabled', false);
                    }
                });
            }
        });

        $('#submitForm3').validate({
            rules: {
                username: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                }
            },
            errorPlacement: function(error, element) {
                var target = "#" + $(element).attr("id") + "-message";
                $(target).html(error);
            },
            submitHandler: function(form) {
                $.ajax({
                    url: `<?php echo base_url('onlineprocess/registeredUser') ?>`,
                    type: "POST",
                    data: $(form).serialize(),
                    dataType: "JSON",
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $('#form-submit3').html(
                            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                        );
                        $('#form-submit3').attr('disabled', true);
                    },
                    success: function(response) {
                        if (response['success'] == true) {
                            window.location.href = response['redirect_url'];
                        } else {
                            $('#otpcodeError').html(response['message']);
                            toastr.error(response['message']);
                        }
                        $('#form-submit3').html('Process');
                        $('#form-submit3').attr('disabled', false);
                    },
                    error: function(jXHR, textStatus, errorThrown) {
                        toastr.error(errorThrown, 'ERROR');
                        $('#form-submit3').html('Process');
                        $('#form-submit3').attr('disabled', false);
                    }
                });
            }
        });
    });
</script>

<script>
    let resendBtn = document.getElementById('resendBtn');
    let counttime = document.getElementById('counttime');
    let timerDisplay = document.getElementById('timer');
    let countdown = 30;

    let interval = setInterval(() => {
        countdown--;
        timerDisplay.textContent = countdown;

        if (countdown <= 0) {
            clearInterval(interval);
            resendBtn.classList.remove('d-none');
            counttime.classList.add('d-none');
            timerDisplay.textContent = '';
        }
    }, 1000);

    resendBtn.addEventListener('click', function() {
        resendBtn.classList.add('d-none');
        counttime.classList.remove('d-none');
        countdown = 30;
        timerDisplay.textContent = countdown;

        interval = setInterval(() => {
            countdown--;
            timerDisplay.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(interval);
                resendBtn.classList.remove('d-none');
                counttime.classList.add('d-none');
                timerDisplay.textContent = '';
            }
        }, 1000);


    });
    
$('.otp-input').on('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
    if (this.value.length === 1) {
        $(this).next('.otp-input').focus();
    }
});
$('.otp-input').on('keydown', function(e) {
    if (e.key === "Backspace" && this.value === '') {
        $(this).prev('.otp-input').focus();
    }
});
</script>
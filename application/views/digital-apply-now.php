<?php $this->load->view('includes/header-apply.php'); ?>
<main class="fix">


    <section class="banner__bg-four bg-theme-1 border-bottom">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6 col-md-6 order-md-1 order-1">
                    <div class="banner__content-four pe-lg-5 pe-0 mb-3">
                        <span
                            class="text-dark rounded-pill text-main-top-main text-wrap text-start border pill-box mb-lg-0 mb-2"
                            style="">
                            <img src="<?= base_url('assets/img/new-image/register.png') ?>" class="svg-inject me-1"
                                alt="" />
                            Multiple Lending Partners
                        </span>
                        <span
                            class="text-dark rounded-pill text-main-top-main text-wrap text-start border pill-box mb-lg-0 mb-2">
                            <img src="<?= base_url('assets/img/new-image/register.png') ?>" class="svg-inject me-1"
                                alt="" />
                            Digital Application Process
                        </span>
                        <span
                            class="text-dark rounded-pill text-main-top-main text-wrap text-start border pill-box mb-lg-0 mb-2">
                            <img src="<?= base_url('assets/img/new-image/register.png') ?>" class="svg-inject me-1"
                                alt="" />
                            Eligibility-Based Options
                        </span>
                        <h1 class="title">Smart Financial Solutions for <span>Your Needs</span></h1>
                        <p class="">Explore personal loan options with a simple digital application process and clear guidance at every step.
                        </p>
                  
                        <div class="brand-area p-0 border-bottom-0">
                            <div class="container">
                                <div class="swiper-container brand-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="brand-item">
                                                <img src="<?= base_url('assets/img/slider/customer-1.png') ?>"
                                                    class="svg-inject me-1" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item">
                                                <img src="<?= base_url('assets/img/slider/customer-2.png') ?>"
                                                    class="svg-inject me-1" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item">
                                                <img src="<?= base_url('assets/img/slider/customer-1.png') ?>"
                                                    class="svg-inject me-1" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item">
                                                <img src="<?= base_url('assets/img/slider/customer-2.png') ?>"
                                                    class="svg-inject me-1" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item">
                                                <img src="<?= base_url('assets/img/slider/customer-1.png') ?>"
                                                    class="svg-inject me-1" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item">
                                                <img src="<?= base_url('assets/img/slider/customer-2.png') ?>"
                                                    class="svg-inject me-1" alt="" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item">
                                                <img src="<?= base_url('assets/img/slider/customer-1.png') ?>"
                                                    class="svg-inject me-1" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 order-md-2 order-2">
                    <?php if ($processstep == 'step1'): ?>
                    <div class="contact__form-wrap p-4 ms-0 bg-white">
                        <p class="text-uppercase fw-bold text-center mb-2 sub-title-lending">START YOUR LOAN</p>
                        <h3 class="title mb-3 text-center">Explore Personal Loan Options up to <span class="text-color">₹10
                                Lakhs </span></h2>

                            <?= form_open('', array('id' => 'submitForm1', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
                            <div class="form-group my-4" style="">

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
                                <div class="form-group form-floating mb-4">
                                    <label for="mobile"
                                        class="position-static ps-0 text-uppercase fw-bold pt-0 pb-0">Mobile
                                        Number</label>
                                    <div class="input-group input-group-md">
                                        <span class="input-group-text">+91</span>
                                        <input class="form-control" id="mobile" type="text" name="mobile"
                                            placeholder="Enter Mobile Number" required minlength="10" maxlength="10"
                                            inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
                                            data-validation-regex-message="Enter valid mobile number">
                                    </div>
                                    <div class="error-message" id="mobile-message"></div>
                                </div>
                            </div>

                            <div class="form-grp mb-3 d-md-block">
                                <button type="submit" class="btn btn-block" id="form-submit1">Apply
                                    Now <i class="fas fa-arrow-right ms-2"></i></button>
                            </div>

                            <div class="form-group  s-12 mb-2">
                                <div class="custom-control custom-checkbox d-flex align-items-start">
                                    <input type="checkbox" name="terms" id="terms" class="custom-control-input mt-1"
                                        value="1" checked required>
                                    <label class="custom-control-label text-dark fa-sm" style="display:unset;"
                                        for="terms"><small class="ms-2 d-inline-block">By
                                            submitting the form & proceeding, you agree to the <a class="text-dark"
                                                href="<?php echo site_url('terms-conditions'); ?>" target="_blank">Terms
                                                of Use</a> and <a class="text-dark"
                                                href="<?php echo site_url('privacy-policy'); ?>" target="_blank">Privacy
                                                Policy</a> of Kreditway.</small></label>
                                    <div class="help-block font-small-3"></div>
                                </div>
                            </div>

                            <div class="form-group s-12 mb-2">
                                <div class="custom-control custom-checkbox d-flex align-items-start">
                                    <input type="checkbox" name="promotion" id="promotion"
                                        class="custom-control-input mt-1" value="1" checked required>
                                    <label class="custom-control-label fa-sm" style="display:unset;"
                                        for="promotion"><small class="ms-2 d-inline-block">I agree to
                                            receive promotional & informational communications from Kreditway
                                            through Emails, calls
                                            or SMS,RCS Services.</small></label>
                                    <div class="help-block font-small-3"></div>
                                </div>
                            </div>


                            <div class="brand__area-two p-0">
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
                    <div class="contact__form-wrap p-4 ms-0 bg-white otp-velidation-form">

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
                                    <h6 class="fw-light mb-4">We've sent a 4-digit OTP to <strong class="text-navy">
                                            <?php echo $userdetails['mobile']; ?> </strong>
                                    </h6>
                                    <div class="form-group form-floating mb-4">
                                        <label for="mobile"
                                            class="position-static ps-0 text-uppercase fw-bold pt-0 pb-0">Enter
                                            OTP</label>
                                        <div class="input-field input-field text-center">
                                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                            <input type="text" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                        </div>
                                    </div>

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
                        <div class="form-grp mb-0">
                            <button type="submit" class="btn btn-block" id="form-submit2">Verify OTP <i
                                    class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                        <hr class="my-3">
                        <div class="form-grp mb-0">
                            <p class="mb-0 fa-xs text-center"><small>Kreditway will never call you for your OTP. If
                                    you get OTP on a password —
                                    <span style="color:#FE7E03"> do not share it with anyone. </span></small></p>
                        </div>

                        <?= form_close(); ?>
                    </div>
                    <?php elseif ($processstep == 'step3'): ?>
                    <div class="contact__form-wrap p-4 ms-0 bg-white">
                        <p class="text-uppercase fw-bold text-center mb-0 sub-title-lending">Tell us about you</p>
                        <h3 class="title mb-0 text-center">Select your profile & enter details</h2>
                            <p class="text-center">This helps us tailor the best NBFC offers for you.</p>

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
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-0 state-card mb-sm-0 mb-2">

                                    <fieldset class="picker1 border rounded-4">
                                        <label for="plan-1">
                                            <input type="radio" name="usertype" id="plan-1" value="1" class="d-none"
                                                checked="" data-gtm-form-interact-field-id="1">
                                            <span class="p-3">
                                                <div class="subscription-price pb-0 pt-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon staticts-card-btn btn btn-block pe-none bg-dark-orange"
                                                            style="width:17%">
                                                            <i class="fa fa-suitcase"></i>
                                                        </div>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0 fs-6 lh-xs text-navy fw-bold">Salaried
                                                            </h5>
                                                            <p class="fs-6 mb-0">Earn a monthly salary</p>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="round-radiobox"></div>

                                            </span>
                                        </label>
                                    </fieldset>


                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-0 state-card">
                                    <fieldset class="picker1 border rounded-4">
                                        <label for="plan-2">
                                            <input type="radio" name="usertype" id="plan-2" value="2" class="d-none"
                                                data-gtm-form-interact-field-id="2">
                                            <span class="p-3">
                                                <div class="subscription-price pb-0 pt-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="icon staticts-card-btn btn btn-block pe-none"
                                                            style="width:17%">
                                                            <i class="fa fa-flag"></i>
                                                        </div>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0 fs-6 lh-xs text-navy fw-bold">
                                                                Self-Emp.
                                                            </h5>

                                                            <p class="fs-6 mb-0">Run your own business</p>
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

                                <label for="username" class="position-static ps-0 text-uppercase fw-bold pt-0 p-0">Full
                                    name</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text text-dark fw-bold" id="basic-addon1"> <i
                                            class="fa fa-user"></i></span>
                                    <input id="username" type="text" name="username" class="form-control"
                                        placeholder="Full Name *" required data-validation-regex-regex="^[a-zA-Z ]*$"
                                        style="border: 1px solid #E2E8F0;">
                                </div>
                                <div class="error-message" id="username-message"></div>
                            </div>

                            <div class="form-group form-floating mb-2">

                                <label for="useremail"
                                    class="position-static ps-0 text-uppercase fw-bold pt-0 p-0">Email
                                    address</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text text-dark fw-bold" id="basic-addon1"> <i
                                            class="fa fa-envelope"></i></span>
                                    <input id="email" type="text" name="useremail" class="form-control"
                                        placeholder="Your Email *" required style="border: 1px solid #E2E8F0;">
                                </div>
                                <div class="error-message" id="useremail-message"></div>
                            </div>

                            <div class="form-grp mb-0">
                                <button type="submit"
                                    onclick="_tfa.push({notify: 'event', name: 'rupay_lead', id: 1802016});"
                                    class="btn btn-block mt-2" id="form-submit3">Process <i
                                        class="fas fa-arrow-right ms-2"></i></button>
                            </div>
                            <?= form_close(); ?>
                    </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </section>
    <!-- features-area -->
    <section class="features__area-two py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about__content-seven">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">

                            <h2 class="title">
                                Reliable & Compliant Financial Operations
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutter- justify-content-center">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="features__item-two mb-3 py-0">
                        <div class="features__item-two py-0">
                            <i class="fa fa-shield-alt text-orange lh-base"></i>
                        </div>
                        <div class="features__content-two">
                            <h4 class="title mb-0 text-navy">Best Privacy</h4>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="features__item-two mb-3 py-0">
                        <div class="features__item-two py-0">
                            <i class="fa fa-chart-line text-orange lh-base"></i>
                        </div>
                        <div class="features__content-two">
                            <h4 class="title text-navy mb-0">Profit Oriented</h4>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="features__item-two mb-3 py-0">
                        <div class="features__item-two py-0">
                            <i class="fa fa-wallet text-orange lh-base"></i>
                        </div>
                        <div class="features__content-two">
                            <h4 class="title text-navy mb-0">E-wallet</h4>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="features__item-two mb-3 py-0">
                        <div class="features__item-two py-0">
                            <i class="fa fa-credit-card text-orange lh-base"></i>
                        </div>
                        <div class="features__content-two">
                            <h4 class="title text-navy mb-0">Fast Card</h4>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="features__item-two mb-3 py-0">
                        <div class="features__item-two py-0">
                            <i class="fa fa-user-clock text-orange lh-base"></i>
                        </div>
                        <div class="features__content-two">
                            <h4 class="title text-navy mb-0">No Wait Time</h4>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="features__item-two mb-3 py-0">
                        <div class="features__item-two py-0">
                            <i class="fa fa-suitcase text-orange lh-base"></i>
                        </div>
                        <div class="features__content-two">
                            <h4 class="title text-navy mb-0">Collateral-free</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    <section class="services-area banner__bg-four bg-theme-1 border-top section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 m-auto">
                    <div class="about__content-seven">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">The Advantage</span>
                            <h2 class="title">
                                Why KreditWay — The Difference We Bring
                            </h2>

                        </div>
                    </div>
                </div>
            </div>
            <div class="services__item-wrap-two">
                <div class="row justify-content-center g-3">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-five text-start h-100">
                            <div class="services__icon-five rounded-3 bg-soft-pink p-2">
                                <i class="flaticon-profit fs-4"></i>

                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a>Leading Software
                                    </a></h2>
                                <p>A private limited company with a vision to help people achieve financial dreams.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-five text-start h-100">
                            <div class="services__icon-five rounded-3 bg-soft-pink p-2">
                                <i class="flaticon-light-bulb fs-4"></i>

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
                        <div class="services__item-five text-start h-100">
                            <div class="services__icon-five rounded-3 bg-soft-pink p-2">
                                <i class="flaticon-startup fs-4"></i>

                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a>Self-Apply Feature
                                    </a></h2>
                                <p>Empowering borrowers with a simple self-serve flow to submit credentials and choose
                                    rates instantly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-five d-flex align-items-center justify-content-center h-100"
                            style="background: #002254;">

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

   <section class="testimonials__area-home8 bg-theme-1 section-padding" id="testimonials">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about__content-seven">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">CUSTOMER STORIES</span>
                            <h2 class="title">What Our Customers Say</h2>
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
                                    <p class="card-position mb-0">Devansh Patel
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The application process was simple and easy to understand. I was able to complete the required steps without confusion.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials">
                                <div class="card-info">
                                    <p class="card-position mb-0">Ishita Menon</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“I liked how straightforward the process was. The instructions helped me submit my details smoothly.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials">
                                <div class="card-info">
                                    <p class="card-position mb-0">Harsh Vardhan</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The platform made it easy to explore available loan options and understand the application requirements.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials">
                                <div class="card-info">
                                    <p class="card-position mb-0">Priya Nair
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“My experience was convenient. The process was digital and the steps were clearly explained.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials">
                                <div class="card-info">
                                    <p class="card-position mb-0">Kunal Desai
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“I received useful guidance regarding documentation and the overall application process.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials">
                                <div class="card-info">
                                    <p class="card-position mb-0">Sneha Joshi
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The website was easy to use, and I could check relevant loan information before proceeding.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials">
                                <div class="card-info">
                                    <p class="card-position mb-0">Arjun Malhotra
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The application journey felt organised and simple. I appreciated the clear information provided at each step.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials">
                                <div class="card-info">
                                    <p class="card-position mb-0">Tanvi Bhatia
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“It was convenient to submit my application online and understand the available options.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials">
                                <div class="card-info">
                                    <p class="card-position mb-0">Rahul Bansal
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The process was user-friendly, and the information helped me make a more informed decision.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card-testimonials">
                                <div class="card-info">
                                    <p class="card-position mb-0">Aarohi Chawla
                                    </p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/img/home8/star-grey.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“I had a smooth experience while exploring personal loan options. The steps were simple and clearly presented.”</p>
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
                    <p class="mb-0 text-white"><strong>Disclaimer: </strong><?php echo COMPANY_NAME; ?> is not a lender or financial institution. We do not provide loans or make credit decisions. All loan approvals, interest rates, fees, and disbursal are handled by third-party lenders/NBFCs. We do not guarantee loan approval, disbursal, or specific loan terms. The amount paid is only for the service charge. We are not lenders and do not guarantee any loan approval. Loan approval, disbursement/sanction is entirely dependent on NBFC criteria.</p>

                    <p class="mb-0 text-white"><strong>Important Note: </strong>We ask our customers to make payments ONLY on our website
                        <a class="text-light" href="<?php echo COMPANY_SITE; ?>">kreditway.com</a> and NOT through any other source, directly or indirectly.
                    </p>

                    <p class="mb-0 text-white"><strong>Pre-application Note: </strong>Users are advised to read our terms and conditions and policies before proceeding/applying/registration.
                    </p>

                    <p class="mb-0 text-white"><strong>Registered Office Address : </strong><?php echo COMPANY_ADDRESS; ?></p>

                    <p class="mb-0 text-white"><strong>Mobile : </strong><?php echo COMPANY_MOBILE; ?> | <strong>Email :
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
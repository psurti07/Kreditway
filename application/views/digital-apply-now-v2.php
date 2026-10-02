<?php $this->load->view('includes/header-apply.php'); ?>
<main class="fix">
    <section class="journey_area-one mb-5">
        <div class="container">

            <div class="box-counter-home7 border">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <?php if ($processstep == 'step1'): ?>
                            <div class="contact__form-wrap p-2 ms-0">
                                <h3 class="title mb-3">Get <span class="text-color">₹ 5,00,000</span> personal loan in
                                    minutes</h2>

                                    <?= form_open('', array('id' => 'submitForm1', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
                                    <div class="form-group my-4"
                                        style="border: 1px solid rgb(33, 37, 41); padding: 10px; border-radius: 10px;">
                                        <label class="d-flex justify-content-center">Loan Amount</label>
                                        <div class="range d-flex justify-content-center" style="display: inline-block;">
                                            <div class="range__value pt-0">
                                                <span class="text-color fs-1"></span>
                                            </div>
                                        </div>

                                        <div class="range">
                                            <div class="range__slider digi_range__slider">
                                                <input type="range" name="loanamount" step="10000" id="loanSlider">
                                                <div class="range__tooltip d-none" id="rangeTooltip">>₹0</div>
                                            </div>
                                            <div class="range__emi">
                                                EMI Amount :
                                                <span></span>
                                            </div>
                                            <p class="mb-0"><small>Estimated EMI based on interest rate of 11.5% and tenure
                                                    of 72 months.</small></p>
                                            <!-- <div class="range__value">
												<label>Loan Amount : </label>
												<span></span>
											</div> -->
                                            <!--<div class="range__emi">
											<label>EMI Amount : </label>
											<span></span>
										</div>-->
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text border-dark"><img
                                                    src="<?php echo base_url('assets/img/slider/flag.svg'); ?>"
                                                    class="flag me-2">+91</span>
                                            <input class="form-control border-dark" id="mobile" type="text" name="mobile"
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
                            <div class="contact__form-wrap p-0 ms-0">
                                <h4>Please enter the received OTP!</h4>

                                <div class="about__list-box pt-2 pb-3">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-arrow-button"></i>Mobile No.:
                                            <?php echo $userdetails['mobile']; ?>
                                        </li>
                                    </ul>
                                </div>
                                <?= form_open('', array('id' => 'submitForm2', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
                                <input type="hidden" name="otpmobile" id="otpmobile"
                                    value="<?php echo $userdetails['mobile']; ?>">
                                <input type="hidden" name="loanamount" id="loanamount"
                                    value="<?php echo $userdetails['loanamount']; ?>">

                                <div class="form-grp">
                                    <input id="otpcode" type="text" name="otpcode" class="text-center otpnumber"
                                        placeholder="Enter OTP" required maxlength="4" inputmode="numeric">
                                    <div class="error-message" id="otpcode-message"></div>
                                    <div class="text-danger s-12 mb-2" id="otpcodeError"></div>
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
                                <?= form_close(); ?>
                            </div>
                        <?php elseif ($processstep == 'step3'): ?>
                            <div class="contact__form-wrap p-0 ms-0">
                                <h4>Choose Your Profile and Fill the Details</h4>

                                <div class="about__list-box pt-2 pb-3">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-arrow-button"></i>Loan Amount:
                                            <?php echo formatePriceIndia($userdetails['loanamount']); ?>
                                        </li>
                                        <li><i class="flaticon-arrow-button"></i>Mobile No.:
                                            <?php echo $userdetails['mobile']; ?>
                                        </li>
                                    </ul>
                                </div>
                                <?php echo form_open('', array('id' => 'submitForm3', 'class' => 'text-start ', 'novalidate' => 'novalidate')); ?>
                                <input type="hidden" name="loanamount" id="loanamount"
                                    value="<?php echo $userdetails['loanamount']; ?>">
                                <input type="hidden" name="referralcode" id="referralcode"
                                    value="<?php echo $userdetails['referralcode']; ?>">
                                <input type="hidden" id="usertype" name="usertype" value="1">
                                <input type="hidden" name="usermobile" id="usermobile"
                                    value="<?php echo $userdetails['mobile']; ?>">

                                <div class="form-grp">
                                    <div class="switch-field">
                                        <input type="radio" name="usertype" id="radio-one" value="1" checked />
                                        <label for="radio-one">Salaried</label>

                                        <input type="radio" name="usertype" id="radio-two" value="2" />
                                        <label for="radio-two">Self Employed</label>
                                    </div>
                                </div>

                                <div class="form-grp">
                                    <input id="username" type="text" name="username" placeholder="Full Name *" required>
                                    <div class="error-message" id="username-message"></div>
                                </div>

                                <div class="form-grp">
                                    <input id="useremail" type="email" name="useremail" placeholder="Email Id *" required>
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

                    <div class="col-lg-6 col-md-6 d-none d-md-block">
                        <img src="<?php echo base_url('assets/img/banner/lending_img.png'); ?>" alt=""
                            class="img-fluid">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php if ($processstep == 'step1'): ?>

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
                                                <img src="<?php echo base_url('assets/img/banks/' . $bank['img']); ?>"
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

                        <p class="text-center mt-20"><small>Disclaimer: The interest rate charges are subject to constant
                                change as
                                they are affected by several factors. Please check the prevailing interest rate with your
                                lender
                                before applying.</small></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- features-area -->
        <section class="features__area-two">
            <div class="container">
                <div class="row gutter-24 justify-content-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="features__item-two mb-3">
                            <div class="features__icon-two">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="features__content-two">
                                <h4 class="title">NBFC Loan Criteria for Salaried</h4>
                                <ul class="list-wrap">
                                    <li><i class="flaticon-arrow-button"></i> Minimum Salary : Rs. 15,000 Monthly</li>
                                    <li><i class="flaticon-arrow-button"></i> Minimum 1 Year Job Stability</li>
                                    <li><i class="flaticon-arrow-button"></i> Min. Age : 21 Years</li>
                                    <li><i class="flaticon-arrow-button"></i> Tenure: 6 to 72 Months</li>
                                    <li><i class="flaticon-arrow-button"></i> Annual Percentage Rate (APR)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="features__item-two mb-3">
                            <div class="features__icon-two">
                                <i class="flaticon-suitcase"></i>
                            </div>
                            <div class="features__content-two">
                                <h4 class="title">NBFC Loan Criteria for Self-Employed</h4>
                                <ul class="list-wrap">
                                    <li><i class="flaticon-arrow-button"></i> Minimum 1 Year Business Stability</li>
                                    <li><i class="flaticon-arrow-button"></i> Minimum 1 Year IT Return</li>
                                    <li><i class="flaticon-arrow-button"></i> Min. Age : 21 Years</li>
                                    <li><i class="flaticon-arrow-button"></i> Tenure: 6 to 72 Months</li>
                                    <li><i class="flaticon-arrow-button"></i> Annual Percentage Rate (APR)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->

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

                        <p class="mb-0"><strong>Pre-application Note: </strong>Users are advised to read our terms and
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
        <!-- nbfc partners end -->
    <?php endif; ?>
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
</script>
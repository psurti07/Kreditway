<?php $this->load->view('includes/header-apply');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>
<!-- main-area -->
<main class="fix">
    <!-- banner-area -->
    <section class="banner__bg-four bg-theme-1 subscription-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 process-panel">
                    <h2 class="title text-navy">You're Eligible For Loan Offers.</h2>
                    <p class="font-14">Pre-Approved Offer : Congratulations! You’re Eligible For <span
                            class="fw-bold text-success">Rs. <?php echo $eligibilityamtindia; ?></span> Pre-Approval
                        Offered By Our Partnered NBFCs.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-7 me-auto">
                    <div class="testimonial__form lending-design text-center shadow rounded-4 border mb-4">
                        <?php echo form_open('onlineprocess/getpreApproval', array('id' => 'submitForm2', 'class' => '', 'novalidate' => 'novalidate')); ?>
                        <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                            class="form-control" required>
                        <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                            class="form-control" required>
                        <input type="hidden" name="mobile" value="<?php echo $userdetails['mobile']; ?>"
                            class="form-control" required>
                        <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                            class="form-control" required>
                        <input type="hidden" name="tenure" id="tenure" value="36" class="form-control" required>
                        <input type="hidden" name="eligibilityamt" value="<?php echo $eligibilityamt; ?>"
                            class="form-control" required>

                        <div class="d-flex align-items-start staticts-left-card mb-4">
                            <div>
                                <div
                                    class="icon staticts-loan-details staticts-loan-details-01 btnicon  pe-none bg-dark-orange">
                                    <i class="fa fa-suitcase text-light"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0 mt-0 fs-2 text-left">
                                    <span class="text-navy">EMI Options
                                </h4>
                                <p class="mb-0 card-content fs-14 fw-light text-start">Selecting the Right EMI Options
                                    for Your
                                    Financial Goals
                                </p>
                            </div>
                        </div>

                        <div class="row gx-2">
                            <div class="col-md-6 col-lg-4 col-sm-6 col-6 p-1">
                                <fieldset class="picker1 border rounded-4">
                                    <label for="plan-1">
                                        <input type="radio" name="tenure" id="plan-1" value="12" class="d-none" checked>
                                        <span class="p-3 text-start border ">
                                            <div class="subscription-price pb-0 pt-0">
                                                <span
                                                    class="sub-offer-value text-orange text-uppercase lh-normal fa-sm fw-bold">12
                                                    months</span>
                                            </div>
                                            <h4 class="mb-2 offer-price">
                                                ₹<?php echo calPMT($userdetails['apr'], 1, $eligibilityamt); ?></h4>
                                            <div class="round-radiobox"></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0 fw-light"><small>per month</small></p>
                                                <div class="calender-image">
                                                    <i class="far fa-calendar-alt fs-3 text-secondary"></i>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-6 col-6 p-1">
                                <fieldset class="picker1 border rounded-4">
                                    <label for="plan-2">
                                        <input type="radio" name="tenure" id="plan-2" value="24" class="d-none">
                                        <span class="p-3 text-start border">
                                            <div class="subscription-price pb-0 pt-0">
                                                <span
                                                    class="sub-offer-value text-orange text-uppercase lh-normal fa-sm fw-bold">24
                                                    months</span>
                                            </div>

                                            <h4 class="mb-2 offer-price">₹
                                                <?php echo calPMT($userdetails['apr'], 2, $eligibilityamt); ?></h4>
                                            <div class="round-radiobox"></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0 fw-light"><small>per month</small></p>
                                                <div class="calender-image">
                                                    <i class="far fa-calendar-alt fs-3 text-secondary"></i>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-6 col-6 p-1">
                                <fieldset class="picker1 border rounded-4">
                                    <label for="plan-3">
                                        <input type="radio" name="tenure" id="plan-3" value="36" class="d-none">
                                        <span class="p-3 text-start border">
                                            <div class="subscription-price pb-0 pt-0">
                                                <span
                                                    class="sub-offer-value text-orange text-uppercase lh-normal fa-sm fw-bold">36
                                                    months</span>
                                            </div>
                                            <h4 class="mb-2 offer-price">₹
                                                <?php echo calPMT($userdetails['apr'], 3, $eligibilityamt); ?></h4>

                                            <div class="round-radiobox"></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0 fw-light"><small>per month</small>
                                                </p>
                                                <div class="calender-image">
                                                    <i class="far fa-calendar-alt fs-3 text-secondary"></i>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-6 col-6 p-1">
                                <fieldset class="picker1 border rounded-4">
                                    <label for="plan-4">
                                        <input type="radio" name="tenure" id="plan-4" value="48" class="d-none">
                                        <span class="p-3 text-start border">
                                            <div class="subscription-price pb-0 pt-0">
                                                <span
                                                    class="sub-offer-value text-orange text-uppercase lh-normal fa-sm fw-bold">48
                                                    months</span>
                                            </div>
                                            <h4 class="mb-2 offer-price">₹
                                                <?php echo calPMT($userdetails['apr'], 4, $eligibilityamt); ?></h4>

                                            <div class="round-radiobox"></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0 fw-light"><small>per month</small></p>
                                                <div class="calender-image">
                                                    <i class="far fa-calendar-alt fs-3 text-secondary"></i>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-6 col-6 p-1">
                                <fieldset class="picker1 border rounded-4">
                                    <label for="plan-5">
                                        <input type="radio" name="tenure" id="plan-5" value="60" class="d-none">
                                        <span class="p-3 text-start border">
                                            <div class="subscription-price pb-0 pt-0">
                                                <span
                                                    class="sub-offer-value text-orange text-uppercase lh-normal fa-sm fw-bold">60
                                                    months</span>
                                            </div>
                                            <h4 class="mb-2 offer-price">₹
                                                <?php echo calPMT($userdetails['apr'], 5, $eligibilityamt); ?></h4>

                                            <div class="round-radiobox"></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0 fw-light"><small>per month</small></p>
                                                <div class="calender-image">
                                                    <i class="far fa-calendar-alt fs-3 text-secondary"></i>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-6 col-6 p-1">
                                <fieldset class="picker1 border rounded-4">
                                    <label for="plan-6">
                                        <input type="radio" name="tenure" id="plan-6" value="72" class="d-none">
                                        <span class="p-3 text-start border">
                                            <div class="subscription-price pb-0 pt-0">
                                                <span
                                                    class="sub-offer-value text-orange text-uppercase lh-normal fa-sm fw-bold">72
                                                    months</span>
                                            </div>

                                            <h4 class="mb-2 offer-price">₹
                                                <?php echo calPMT($userdetails['apr'], 6, $eligibilityamt); ?></h4>
                                            <div class="round-radiobox"></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <p class="mb-0 fw-light"><small>per month</small></p>
                                                <div class="calender-image">
                                                    <i class="far fa-calendar-alt fs-3 text-secondary"></i>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 p-0">
                                <div class="card otp-velidation-text rounded-4 bg-light mt-2">
                                    <div class="card-body p-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                                <div class="d-flex align-items-start mb-md-0 mb-3">
                                                    <i class="fas fa-bullseye me-2 text-orange lh-base"></i>
                                                    <div>

                                                        <p class="text-start fa-xs mb-0">How is pre-approved loan offer
                                                            calculated? <a class="text-primary" data-bs-target="#modal"
                                                                data-bs-toggle="modal" href="#">Know
                                                                Here</a></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-12 col-sm-12 col-12 text-end">


                                                <button type="submit"
                                                    class="btn btn-dark-orange btn-send text-uppercase w-100"
                                                    id="form-submit2">
                                                    Get Offer<i class="fas fa-arrow-right ms-2"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="landing-form-right mb-0 border rounded-4 bg-white shadow">
                        <div class="card-body p-4">
                            <span class="text-uppercase fw-bold sub-title mb-0 d-block">Desired Loan Amount</span>
                            <div class="range__value text-start mb-3 border-bottom">
                                <span
                                    class="fs-40 bg-light ps-0 text-navy">₹<?= formatePriceIndia($userdetails['loanamount']) ?></span>
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
                                        <i class="fas fa-shield-alt text-success mt-1"></i>
                                        <div>
                                            <p class="mb-0 fw-light ms-2 text-success fa-xs">Your data is 256-bit
                                                encrypted and never
                                                shared
                                                without your consent.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->
</main>

<!-- services-area -->
<section class="services__area-seven services__bg-seven"
    data-background="<?= base_url('assets/img/bg/h5_services_bg.jpg');?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center mb-50">
                    <h2 class="text-navy">Your Pre-Approved Loan Offers From Partnered NBFCs</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gutter-24 mb-3">
            <?php
			$cnt = 1;
			foreach ($roipackages as $row) {
			?>
            <div class="col-lg-3 col-md-6">
                <div class="services__item-five mb-3">
                    <div class="services__content-five">
                        <img src="<?php echo base_url('assets/img/banks/' . $row->bank_image); ?>" class="mb-2"
                            alt="NBFCs offers" />
                        <h2 class="title"><?php echo $row->bank_name; ?></h2>
                        <p class="mb-0">Rs. <?php echo formatePriceIndia($eligibilityamt); ?><br />
                            EMI : Rs. <?php echo calPMT($row->roi, $row->termsyears, $eligibilityamt); ?><br />
                            ROI : <?php echo $row->roi . "%"; ?><br />
                            Terms : <?php echo $row->termsmonths . " months"; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
				$cnt++;
			} ?>

        </div>
        <div class="col-lg-10 m-auto">
            <div class="text-center">
                <p class="p-t-10 mb-0"><small>Disclaimer - The above data is tentative and purely on the information provided by you. Final EMI, loan sanction, loan approval, and loan amount depend on customer profile and NBFCs criteria and rules & regulations.</small></p>
            </div>
        </div>

    </div>
</section>

<div class="modal fade" id="modal" role="modal" aria-labelledby="modal-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-label">How is pre-approved loan offer calculated?</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-justify">
                        <p>The Pre-Approved Loan Offer and the amount mentioned in it are solely shown based on the
                            software calculation done on Monthly Income and Current Monthly EMI entered by you. This
                            'Pre-Approved Loan Offer' is tentative and not the final loan approval – as the final loan
                            approval is given by the bank only, based on the bank's rules and regulations and the
                            customer profile.</p>

                        <p><strong>Reference Calculation:</strong>
                            <br />Consider a person who has entered the following details –
                            <br />Monthly Income: Rs.1,00,000
                            <br />Current Monthly EMI: Rs.30,000
                        </p>

                        <p>Based on these details, the person is left with Rs.70,000 in hand (deducting current EMI)
                            every month. So, according to the general rules of the banks, the EMI of 50% of the in-hand
                            amount can be approved - in this example, it's 35,000. And based on the EMI and rate of
                            interest (12.5% tentatively), the eligible amount is shown in the Pre-Approved Loan Offer -
                            considering the mentioned calculation.</p>

                        <p>Note: Pre-approved loan offer is tentative. It should not be considered as the final loan
                            approval. The final loan approval is given by the bank only, according to their rules and
                            criteria and the customer profile.</p>

                        <p class="m-b-0">Note: As per the details/information entered by the user, even if the actual
                            pre-approved amount is lesser than 2 Lakhs, the pre-approved amount shown on the website
                            will be Rs.2 Lakhs (minimum). And, even if the actual pre-approved amount is more than 8.5
                            Lakhs, the pre-approved amount shown on the website will be Rs.8.5 Lakhs (maximum). The
                            pre-approved amount/pre-approved loan offers are tentative – the final loan approval, loan
                            sanction, and disbursement depend on the customer profile and the NBFCs’ rules and
                            regulations.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-b" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- services-area-end -->
<?php $this->load->view('includes/footer-apply'); ?>
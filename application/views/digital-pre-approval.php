<?php $this->load->view('includes/header-apply');
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>
<!-- main-area -->
<main class="fix">
    <!-- banner-area -->
    <section class="banner__bg-four bg-theme-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 process-panel">
                    <h2 class="title">You're Eligible For Loan Offers.</h2>
                    <p class="font-14">Pre-Approved Offer : Congratulations! You’re Eligible For <span
                            class="fw-bold text-success">Rs. <?php echo $eligibilityamtindia; ?></span> Pre-Approval
                        Offered By Our Partnered NBFCs.</p>
                </div>
            </div>

            <div class="row">
               
                <div class="col-lg-8 col-md-8 col-12 order-1 order-md-1">
                    <div class="testimonial__form lending-design text-center" style="border:none">
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

                        <div class="d-flex align-items-center staticts-left-card mb-4">
                            <div
                                class="icon staticts-loan-details staticts-loan-details-01 btnicon  pe-none bg-dark-orange">
                                <i class="fa fa-suitcase text-light"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0 mt-0 fs-2 text-left">
                                    <span class="text-navy">EMI Options
                                </h4>
                                <p class="mb-0 card-content fs-14 fw-light">Selecting the Right EMI Options for Your Financial Goals
                                </p>
                            </div>
                        </div>

                        <div class="row gy-2">
                            <div class="col-lg-4 col-md-4 col-6 p-1">
                                <fieldset class="picker1">
                                    <label class="card" for="plan-1">
                                        <span class="plan-details">
                                            <span class="plan-type">12 months</span>
                                            <p class="mb-0 font-16"><small>Monthly EMI</small><br />Rs.
                                                <?php echo calPMT($userdetails['apr'], 1, $eligibilityamt); ?></p>
                                        </span>
                                        <input type="radio" name="tenure" id="plan-1" value="12" class="radio" checked>
                                    </label>
                                </fieldset>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 p-1">
                                <fieldset class="picker1">
                                    <label class="card" for="plan-2">
                                        <input type="radio" name="tenure" id="plan-2" value="24" class="radio">
                                        <span class="plan-details">
                                            <span class="plan-type">24 months</span>
                                            <p class="mb-0 font-16"><small>Monthly EMI</small><br />Rs.
                                                <?php echo calPMT($userdetails['apr'], 2, $eligibilityamt); ?></p>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 p-1">
                                <fieldset class="picker1">
                                    <label class="card" for="plan-3">
                                        <input type="radio" name="tenure" id="plan-3" value="36" class="radio">
                                        <span class="plan-details">
                                            <span class="plan-type">36 months</span>
                                            <p class="mb-0 font-16"><small>Monthly EMI</small><br />Rs.
                                                <?php echo calPMT($userdetails['apr'], 3, $eligibilityamt); ?></p>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 p-1">
                                <fieldset class="picker1">
                                    <label class="card" for="plan-4">
                                        <input type="radio" name="tenure" id="plan-4" value="48" class="radio">
                                        <span class="plan-details">
                                            <span class="plan-type">48 months</span>
                                            <p class="mb-0 font-16"><small>Monthly EMI</small><br />Rs.
                                                <?php echo calPMT($userdetails['apr'], 4, $eligibilityamt); ?></p>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 p-1">
                                <fieldset class="picker1">
                                    <label class="card" for="plan-5">
                                        <input type="radio" name="tenure" id="plan-5" value="60" class="radio">
                                        <span class="plan-details">
                                            <span class="plan-type">60 months</span>
                                            <p class="mb-0 font-16"><small>Monthly EMI</small><br />Rs.
                                                <?php echo calPMT($userdetails['apr'], 5, $eligibilityamt); ?></p>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 p-1">
                                <fieldset class="picker1">
                                    <label class="card" for="plan-6">
                                        <input type="radio" name="tenure" id="plan-6" value="72" class="radio">
                                        <span class="plan-details">
                                            <span class="plan-type">72 months</span>
                                            <p class="mb-0 font-16"><small>Monthly EMI</small><br />Rs.
                                                <?php echo calPMT($userdetails['apr'], 6, $eligibilityamt); ?></p>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12 text-center">
                                <button type="submit" class="btn mt-2" id="form-submit2">
                                    Get Offer
                                </button>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12 text-center">
                                <hr />
                                <p><small>How is pre-approved loan offer calculated? <a class="text-primary"
                                            data-bs-target="#modal" data-bs-toggle="modal" href="#">Know
                                            Here</a></small></p>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5  mb-lg-0 mb-5 order-2 order-md-2">
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
                    <h2>Your Pre-Approved Loan Offers From Partnered NBFCs</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gutter-24">
            <?php
			$cnt = 1;
			foreach ($roipackages as $row) {
			?>
            <div class="col-lg-3 col-md-6">
                <div class="services__item-five">
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
        <div class="text-center">
            <p class="p-t-10"><small>Disclaimer - The above data is tentative and purely on the information provided by
                    you. Final EMI, loan sanction, loan approval, and loan amount depend on customer profile and NBFCs
                    criteria and rules & regulations.</small></p>
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
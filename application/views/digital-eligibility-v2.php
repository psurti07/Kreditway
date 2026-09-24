<?php $this->load->view('includes/header-apply'); ?>
<!-- main-area -->
<main class="fix">
    <section class="banner__bg-four bg-theme-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 me-auto">
                <div class="card landing-form-right mb-5 border-0" style="border-radius:25px;">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center staticts-left-card mb-4">
                            <div
                                class="icon staticts-loan-details staticts-loan-details-01 btnicon  pe-none bg-dark-orange">
                                <i class="fa fa-suitcase text-light"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0 mt-0 fs-30">
                                    <span class="text-navy fs-30"><?php echo $userdetails['loanname']; ?>
                                </h4>
                                <p class="mb-0 card-content fs-14 fw-light">Get pre-approved offers instantly — just fill in your
                                    details.
                                </p>
                            </div>
                        </div>


                        <?php echo form_open('onlineprocess/userApply', array('id'=>'submitForm1', 'class'=>'', 'novalidate'=>'novalidate')); ?>

                        <div class="row gx-4">
                            <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                class="form-control" required>

                            <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                class="form-control" required>

                            <input type="hidden" name="email" value="<?php echo $userdetails['email']; ?>"
                                class="form-control" required>

                            <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                class="form-control" required>


                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group form-floating mb-3">
                                    <label for="cibilscore"
                                        class="position-static ps-0 text-uppercase fw-bold pt-0">CIBIL Score</label>
                                    <select class="form-select" id="cibilscore" name="cibilscore" required
                                        style="border: 1px solid #E2E8F0;">
                                        <option value="">CIBIL Score *</option>
                                        <option value="Below 650">Below 650</option>
                                        <option value="650 - 700">650 - 700</option>
                                        <option value="700 - 750">700 - 750</option>
                                        <option value="750 - 800">750 - 800</option>
                                        <option value="800 - 850">800 - 850</option>
                                        <option value="850 - 900">850 - 900</option>
                                    </select>
                                    <div class="help-block font-small-3"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group form-floating mb-3">
                                    <label for="monincome"
                                        class="position-static ps-0 text-uppercase fw-bold pt-0">Monthly Income
                                        (₹)</label>
                                    <input id="monincome" type="text" name="monincome" class="form-control pt-0 pb-0"
                                        placeholder="Monthly Income *" required inputmode="numeric"
                                        style="border: 1px solid #E2E8F0;">
                                    <div class="help-block font-small-3"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group form-floating mb-3">
                                    <label for="monemi" class="position-static ps-0 text-uppercase fw-bold pt-0">Current
                                        Monthly EMI (₹)</label>
                                    <input id="monemi" type="text" name="monemi" class="form-control pt-0 pb-0"
                                        placeholder="Current Monthly EMI *" required inputmode="numeric"
                                        style="border: 1px solid #E2E8F0;">
                                    <div class="help-block font-small-3"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group form-floating mb-3">
                                    <label for="loanpurpose"
                                        class="position-static ps-0 text-uppercase fw-bold pt-0">Loan Purpose</label>
                                    <select class="form-select" id="loanpurpose" name="loanpurpose" required
                                        style="border: 1px solid #E2E8F0;">
                                        <option selected value="">Select Loan Purpose *</option>
                                        <?php if($userdetails['loantype'] == 2) { ?>
                                        <option value="Business Expansion">Business Expansion</option>
                                        <option value="Maintain Cash Flow">Maintain Cash Flow</option>
                                        <option value="Supplier Payments">Supplier Payments</option>
                                        <option value="Setup Manufacturing Unit">Setup Manufacturing Unit</option>
                                        <option value="Hiring Budget">Hiring Budget</option>
                                        <option value="Other">Other</option>
                                        <?php } else { ?>
                                        <option value="Personal Use">Personal Use</option>
                                        <option value="Property Renovation">Property Renovation</option>
                                        <option value="Marriage Purpose">Marriage Purpose</option>
                                        <option value="Education Purpose">Education Purpose</option>
                                        <option value="Medical Emergency">Medical Emergency</option>
                                        <option value="Other">Other</option>
                                        <?php } ?>
                                    </select>
                                    <div class="help-block font-small-3"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group form-floating mb-3">
                                    <label for="city"
                                        class="position-static ps-0 text-uppercase fw-bold pt-0">City</label>
                                    <input id="city" type="text" name="city" class="form-control pt-0 pb-0"
                                        placeholder="City *" required
                                        style="background-color: #ffffff;border: 1px solid #E2E8F0;">

                                    <div class="help-block font-small-3"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group form-floating mb-3">
                                    <label for="state"
                                        class="position-static ps-0 text-uppercase fw-bold pt-0">State</label>
                                    <input id="state" type="text" name="state" class="form-control pt-0 pb-0"
                                        placeholder="State *" required
                                        style="background-color: #ffffff;border: 1px solid #E2E8F0;">

                                    <div class="help-block font-small-3"></div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="card otp-velidation-text rounded-4">
                                    <div class="card-body p-3">
                                        <div class="row align-items-center">
                                            <div class="col-lg-7 col-md-6 col-sm-6 col-12">
                                                <div class="d-flex align-items-center mb-md-0 mb-3">
                                                    <img src="<?= base_url('assets/img/new-image/score.png') ?>"
                                                        class="img-fluid" alt="" />
                                                    <div>
                                                        <p class="mb-0 fw-light fs-14">Soft check only — won't impact
                                                            your credit
                                                            score. </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-6 col-sm-6 col-12 text-end">

                                                <button type="submit" id="form-submit1"
                                                    class="btn btn-dark-orange btn-send text-uppercase w-100">Check Your
                                                    Eligibility <img
                                                        src="<?= base_url('assets/img/new-image/right-arrow.png') ?>"
                                                        class="svg-inject ms-2" alt="" /></button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>


                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <div class="col-lg-4 col-md-5  mb-lg-0 mb-5">
                <div class="card card-left landing-form-right shadow-none">
                    <div class="card-body">
                        <span class="text-uppercase fw-bold sub-title mb-3 d-block">Desired Loan Amount</span>
                        <div class="range__value text-start mb-4 border-bottom">
                            <span class="fs-40 bg-light ps-0 text-navy">₹<?php echo formatePriceIndia($userdetails['loanamount']); ?></span>
                            <p class="fs-12 lh-normal mb-3">Tenure: up to 60 months · ROI from 11%*</p>
                        </div>
                        <h6 class="text-uppercase fs-12 fw-bold text-navy">Customer details</h6>
                        <div class="table-responsive">
                            <table class="table table-borderless align-middle user-details-table mb-0">
                                <tbody>
                                    <tr>
                                        <td class="icon-col ps-0 pt-0 pb-3">
                                            <div class="text-center icon-col-image">
                                                <img src="<?= base_url('assets/img/new-image/user.png') ?>"
                                                    class="img-fluid" alt="" />
                                            </div>
                                        </td>
                                        <td class="pt-0 pb-3">
                                            <small class="text-uppercase d-block">Name</small>
                                            <strong><?php echo $userdetails['fullname']; ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="icon-col ps-0 pt-0 pb-3">
                                            <div class="text-center icon-col-image">
                                                <img src="<?= base_url('assets/img/new-image/call.png') ?>"
                                                    class="img-fluid" alt="" />
                                            </div>
                                        </td>
                                        <td class="pt-0 pb-3">
                                            <small class="text-uppercase d-block">Mobile</small>
                                            <strong><?php echo $userdetails['mobile']; ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="icon-col ps-0 pt-0 pb-3">
                                            <div class="text-center icon-col-image">
                                                <img src="<?= base_url('assets/img/new-image/envelope.png') ?>"
                                                    class="img-fluid" alt="" />
                                            </div>
                                        </td>
                                        <td class="pt-0 pb-3">
                                            <small class="text-uppercase d-block">Email</small>
                                            <strong><?php echo $userdetails['email']; ?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="icon-col ps-0 pt-0 pb-3">
                                            <div class="text-center icon-col-image">
                                                <img src="<?= base_url('assets/img/new-image/document-file.png') ?>"
                                                    class="img-fluid" alt="" />
                                            </div>
                                        </td>
                                        <td class="pt-0 pb-3">
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
            <div class="row">
                <div class="col-lg-12 process-panel">
                    <h2 class="title"><?= $userdetails['loanname']; ?></h2>
                    <p class="font-14">Just a few more details to get pre-approved loan offer from our Partnered NBFCs
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 order-2 order-md-1">
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

                <div class="col-lg-8 col-md-8 col-12 order-1 order-md-2">
                    <div class="testimonial__form lending-design">
                        <?php echo form_open('onlineprocess/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
                        <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                            class="form-control" required>
                        <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                            class="form-control" required>
                        <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                            class="form-control" required>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-grp select-grp">
                                    <select class="" id="cibilscore" name="cibilscore" required="">
                                        <option value="">Cibil Score *</option>
                                        <option value="Below 650">Below 650</option>
                                        <option value="650 - 700">650 - 700</option>
                                        <option value="700 - 750">700 - 750</option>
                                        <option value="750 - 800">750 - 800</option>
                                        <option value="800 - 850">800 - 850</option>
                                        <option value="850 - 900">850 - 900</option>
                                    </select>
                                </div>
                                <div class="error-message error-eligibility" id="cibilscore-message"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-grp">
                                    <input id="monemi" type="text" name="monemi" placeholder="Current Monthly EMI *"
                                        required inputmode="numeric">
                                </div>
                                <div class="error-message error-eligibility" id="monemi-message"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-grp">
                                    <input id="monincome" type="text" name="monincome" placeholder="Monthly Income *"
                                        required inputmode="numeric">
                                </div>
                                <div class="error-message error-eligibility" id="monincome-message"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-grp select-grp">
                                    <select class="" id="loanpurpose" name="loanpurpose" required>
                                        <option selected value="">Select Loan Purpose *</option>
                                        <?php if ($userdetails['loantype'] == 12) { ?>
                                        <option value="Business Expansion">Business Expansion</option>
                                        <option value="Maintain Cash Flow">Maintain Cash Flow</option>
                                        <option value="Supplier Payments">Supplier Payments</option>
                                        <option value="Setup Manufacturing Unit">Setup Manufacturing Unit</option>
                                        <option value="Hiring Budget">Hiring Budget</option>
                                        <option value="Other">Other</option>
                                        <?php } else { ?>
                                        <option value="Personal Use">Personal Use</option>
                                        <option value="Property Renovation">Property Renovation</option>
                                        <option value="Marriage Purpose">Marriage Purpose</option>
                                        <option value="Education Purpose">Education Purpose</option>
                                        <option value="Medical Emergency">Medical Emergency</option>
                                        <option value="Other">Other</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="error-message error-eligibility" id="loanpurpose-message"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-grp">
                                    <input type="text" name="pincode" id="pincode" maxlength="6" minlength="6"
                                        inputmode="numeric" class="form-control mb-2" placeholder="Pincode*" required>
                                </div>
                                <div class="error-message error-eligibility" id="pincode-message"></div>
                                <span class="pincode error text-danger text-start"></span>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-grp">
                                    <input type="text" name="city" id="city" class="form-control mb-2"
                                        placeholder="City*" required>
                                </div>
                                <div class="error-message error-eligibility" id="city-message"></div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-grp select-grp">
                                    <input type="text" name="state" id="state" class="form-control mb-2"
                                        placeholder="State*" required>
                                </div>
                                <div class="error-message error-eligibility" id="state-message"></div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-12 text-center">
                                <button type="submit" class="btn mt-2" id="form-submit1">
                                    Check Eligibility
                                </button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
<!-- main-area-end -->

<?php $this->load->view('includes/footer-apply'); ?>

<script>
$(document).ready(() => {
    $('#submitForm1').validate({
        rules: {
            cibilscore: {
                required: true
            },
            monincome: {
                required: true,
                digits: true
            },
            monemi: {
                required: true,
                digits: true
            },
            loanpurpose: {
                required: true
            },
            city: {
                required: true
            },
            state: {
                required: true
            }
        },
        errorPlacement: function(error, element) {
            var target = "#" + $(element).attr("id") + "-message";
            $(target).html(error)
        },
        submitHandler: function(form) {
            $.ajax({
                url: `<?php echo base_url('onlineprocess/userApply') ?>`,
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
                    if (response.success == true) {
                        window.location.href = `${base_url + response.redirect_url}`;
                    } else {
                        toastr.error(response['message']);
                    }

                    $('#form-submit1').html('Check Eligibility');
                    $('#form-submit1').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#form-submit1').html('Check Eligibility');
                    $('#form-submit1').attr('disabled', false);
                }
            })
        }
    })
})
</script>

<script>
$('#pincode').on('input', function() {

    var pincode = $(this).val();

    if (pincode.length === 6) {

        $.ajax({
            url: "<?= base_url('onlineprocess/geoLocation') ?>",
            type: "POST",
            data: {
                pincode: pincode
            },
            dataType: "json",

            success: function(response) {

                if (response.status === 'success') {
                    $('#city').val(response.city);
                    $('#state').val(response.state);
                    $('.pincode').text('');
                } else {
                    $('#city').val('');
                    $('#state').val('');
                    $('.pincode').text('Enter valid pincode.');
                }
            },

            error: function() {
                $('.pincode').text('Enter valid pincode.');
            }
        });

    } else {
        $('#city').val('');
        $('#state').val('');
    }
});
</script>
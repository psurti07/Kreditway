<?php $this->load->view('includes/header-apply.php'); ?>

<main class="fix">
    <section class="services__area-seven services__area-home7 services__bg-seven body-footer-full">
        <div class="container">
            <div class="services__details-list-two mt-5">
                <div class="row gutter-24">
                    <div class="col-lg-8 col-md-12 col-12 m-auto">
                        <?php if ($responsedata['status'] == "true") { ?>
                        <div class="services__details-list-box-two p-4 border mb-0">
                            <div class="icon mb-3">
                                <span class="fa-stack fa-1x bg-success rounded-pill">
                                    <i class="fa fa-circle-o fa-stack-2x"></i>
                                    <strong class="fas fa-check"></strong>
                                </span>
                            </div>
                            <div class="content">
                                <h2 class="text-success mb-2">Congratulations!</h2>
                                <p class="mb-3">Your payment has been successfully processed. You can now access your
                                    pre-approved offers.</p>
                                <p>आपका भुगतान सफलतापूर्वक संसाधित हो गया है, अब आप अपने पूर्व-स्वीकृत (प्री-अप्रूव्ड)
                                    ऑफ़र देख सकते हैं।</p>
                                <hr />
                                <a href="<?php echo site_url('customer'); ?>"
                                    class="btn btn-orange m-t-10 text-uppercase me-3 mb-lg-0 mb-3"><i
                                        class="fas fa-cloud-upload-alt">
                                    </i>
                                    &nbsp;Login Now</a>


                            </div>
                        </div>
                        <?php } ?>

                        <?php if ($responsedata['status'] == "false") { ?>
                        <div class="services__details-list-box-two p-4 border">
                            <div class="icon mb-3">
                                <span class="fa-stack fa-1x bg-danger rounded-pill">
                                    <i class="fa fa-circle-o fa-stack-2x"></i>
                                    <strong class="fas fa-times"></strong>
                                </span>
                            </div>
                            <div class="content">
                                <h3 class="text-danger mb-2">Payment Unsuccessful</h3>
                                <p class="mb-1">We're sorry, but your payment could not be processed. Please try again
                                    or contact our support team for assistance.
                                </p>
                                <p>हमें खेद है, लेकिन आपका भुगतान संसाधित नहीं किया जा सका कृपया पुनः प्रयास करें या
                                    सहायता के लिए हमारी सहायता टीम से संपर्क करें।</p>
                                <hr />
                                <p class="mb-3">Common Reasons for Payment Failure:</p>
                                
                                <a href="<?php echo site_url('bumperoffer'); ?>" class="btn text-white p-3">TRY ANOTHER
                                    PAYMENT METHOD</a>
                            </div>
                        </div>

                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>
</main>

<?php $this->load->view('includes/footer-apply.php'); ?>
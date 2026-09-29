<?php $this->load->view('customer/includes/header-apply.php'); ?>

<main class="fix">
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb__content">
                        <h2 class="title">Subscription</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Profile</li>
                                <li class="breadcrumb-item active" aria-current="page">Subscription</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape">
            <img src="<?= base_url('assets/img/images/breadcrumb_shape01.png');?>" alt="">
            <img src="<?= base_url('assets/img/images/breadcrumb_shape02.png');?>" alt="" class="rightToLeft">
            <img src="<?= base_url('assets/img/images/breadcrumb_shape03.png');?>" alt="">
            <img src="<?= base_url('assets/img/images/breadcrumb_shape04.png');?>" alt="">
            <img src="<?= base_url('assets/img/images/breadcrumb_shape05.png');?>" alt="" class="alltuchtopdown">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- team-area -->
    <section class="team-area pt-120 pb-90 body-footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-45">
                    <div class="sidebar__widget">
                        <h4 class="sidebar__widget-title">Subscription Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="services__details-list-box">
                                    <div class="icon payload-icon">
                                        <i class="flaticon-time"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title font-16">Registration Date :</h4>
                                        <p class="font-14"><?php echo displayDate($plandata->registration_date); ?></p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="services__details-list-box">
                                    <div class="icon payload-icon">
                                        <i class="flaticon-time "></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title font-16">Expiry Date :</h4>
                                        <p class="font-14"><?php echo displayDate($plandata->expiry_date); ?></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="services__details-list-box">
                                    <div class="icon payload-icon">
                                        <i class="flaticon-finance"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title font-16">Plan :</h4>
                                        <p class="font-14"><?php echo ($plandata->cardtype == 12) ? 'Business Subscription Plan' : 'Personal Subscription Plan'; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="services__details-list-box">
                                    <div class="icon payload-icon">
                                        <i class="flaticon-arrow-button"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title font-16">Subscription Id :</h4>
                                        <p class="font-14"><?php echo $plandata->card_number; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="<?php echo base_url('customer/profile/invoice/' . stringCrypt($plandata->id, 'encrypt')); ?>" class="btn btn-auto mt-4" target="_blank">Download Invoice</a>                               
                            </div>
                        </div>              
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar__widget">
                        <h2 class="sidebar__widget-title">Plan Benefits</h2>
                        <div class="sidebar__post-list">
                            <div class="about__list-box mt-2">
                                <ul class="list-wrap cust-sub">
                                    <li><i class="fas fa-check"></i> 100% Online Process</li>
                                    <li><i class="fas fa-check"></i> Get Personalized Tracking Portal</li>
                                    <li><i class="fas fa-check"></i> On-Call Expert Consultation</li>
                                    <li><i class="fas fa-check"></i> Dedicated Loan Expert Assigned</li>
                                    <li><i class="fas fa-check"></i>CIBIL Remains Unaffected</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->
</main>


<?php $this->load->view('customer/includes/footer-apply.php'); ?>
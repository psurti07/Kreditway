<?php $this->load->view('includes/header.php'); ?>
<main class="fix">
  <section class="breadcrumb__area breadcrumb__bg mt-100" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="breadcrumb__content">
            <h2 class="title">Some Common FAQs</h2>
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
  <section class="team-area pt-90 pb-90">
    <div class="container">
      <div class="services__details-list-two">
        <div class="row gutter-24 justify-content-center">
          <div class="col-lg-8">
            <div class="block-faqs">
              <div class="accordion" id="accordionFAQ" style="visibility: visible;">
                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingOne">
                    <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      For what purposes can I use the personal loan?
                    </button>
                  </h5>
                  <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ" style="">
                    <div class="accordion-body">A personal loan can be used for any personal reason, like consolidating high-interest debts, paying unexpected expenses, funding a dream vacation, pursuing higher educations, renovating home, etc.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingTwo">
                    <button class="accordion-button text-heading-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      What documents are required to apply for a personal loan?
                    </button>
                  </h5>
                  <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ" style="">
                    <div class="accordion-body">
                      The documents that are required to apply for a personal loan are:
                      <ul>
                        <li>PAN Card </li>
                        <li>Aadhaar Card </li>
                        <li>Address Proof - like rent agreement or utility bill </li>
                        <li>Bank Statements- should reflect your monthly salary</li>
                        <li>Income Proof - Form 16 or payslips </li>
                      </ul>
                      Please note that a lender may ask for additional documents based on their policies and your profile.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingThree">
                    <button class="accordion-button text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How much CIBIL is required to apply for a personal loan?
                    </button>
                  </h5>
                  <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ" style="">
                    <div class="accordion-body">A CIBIL score of 650 or more is considered ideal for applying for a personal loan. </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingFour">
                    <button class="accordion-button text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                      What are the eligibility criteria for applying a personal loan?
                    </button>
                  </h5>
                  <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ" style="">
                    <div class="accordion-body">
                      The eligibility criteria for applying for a personal loan are the following:
                      <ul>
                        <li>The applicant’s age should be more than 21 years.</li>
                        <li>The Applicant should earn at least Rs.15,000/- per month. </li>
                        <li>The job stability should be at least 1 year. </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingFive">
                    <button class="accordion-button text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Can I get tax benefits on a personal loan?
                    </button>
                  </h5>
                  <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                      Only when you utilize the funds for certain reasons, like investing in a business or renovating a home. For more details on tax benefits, contact your CA or tax advisor.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h5 class="accordion-header" id="headingSix">
                    <button class="accordion-button text-heading-5 type=" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      Is it possible to apply for a personal loan without visiting anywhere?
                    </button>
                  </h5>
                  <div class="accordion-collapse collapse" id="collapseSix" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                    <div class="accordion-body">
                      You can apply for a personal loan with a 100% online process through our subscription.
                      <a href="<?= base_url('onlineprocess/applynow') ?>" class="a-text">Apply Now</a>
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
</main>
<?php $this->load->view('includes/footer.php'); ?>
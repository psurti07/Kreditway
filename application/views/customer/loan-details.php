<?php $this->load->view('customer/includes/header-apply'); ?>
<main class="fix">
	<!-- breadcrumb-area -->
	<section class="breadcrumb__area breadcrumb__bg" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">My Loan Applications Details</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">My Loan</li>
								<li class="breadcrumb-item active" aria-current="page">My Loan Applications History</li>
							</ol>
						</nav>
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

	<div class="team-area pt-50 pb-50 body-footer">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<?php
					switch ($appdetails->status) {
						case "5":
							echo '<div role="alert" class="alert alert-info"> Your application is reopen again for process. Please contact customer care for more details.</div>';
							break;

						case "4":
							echo '<div role="alert" class="alert alert-warning"> Your application is under query processing. Please contact customer care for more details.</div>';
							break;

						case "3":
							echo '<div role="alert" class="alert alert-danger"> Your application has been completely rejected. Please contact customer care for more details.</div>';
							break;

						case "2":
							echo '<div role="alert" class="alert alert-success"> Your application has been approved. Please contact customer care for more details.</div>';
							break;

						default:
							break;
					}
					?>
				</div>
				<div class="col-lg-4">		

					<div class="about__content-inner about__content-inner-two">
						<div class="experience__box-three">
							<div class="title">
								<span><?php echo $appdetails->loantenure; ?></span><p class="text-success text-center fs-5">Loan Tenure</p>
							</div>
							
						</div>
						
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about__list-box about__list-box-two">		
						<ul class="list-wrap">
								<li><i class="fa fa-calendar font-14"></i>Loan Date :&nbsp;<strong><?php echo displayDate($appdetails->rec_date); ?></strong> </li>
								<li><i class="fa fa-random font-14"></i>Loan Type :&nbsp;<strong><?php
																							if ($appdetails->loantype == 11) {
																								echo 'Personal Loan';
																							} else if ($appdetails->loantype == 12) {
																								echo 'Business Loan';
																							}
																							?></strong></li>
								<li><i class="fa fa-money-bill font-14"></i>Loan Amount :&nbsp;<strong><?php echo formatePriceIndia($appdetails->loanamount); ?></strong></li>
								<li><i class="flaticon-arrow-button"></i>Loan Purpose :&nbsp;<strong><?php echo $appdetails->loanpurpose; ?></strong></li>
							</ul>
					</div>
				</div>
																					
				<div class="col-lg-4">
					<div class="about__content-inner about__content-inner-two">					
						
						<div class="about__list-box about__list-box-two">
							<ul class="list-wrap">
								<li><i class="flaticon-arrow-button"></i>EMI Bounce :&nbsp;<?php
																							if ($appdetails->emibounce == 0) {
																								echo 'No';
																							} else if ($appdetails->emibounce == 1) {
																								echo 'Yes';
																							} else {
																								echo '-';
																							} ?></li>
								<li><i class="flaticon-arrow-button"></i>CIBIL Score :&nbsp;<strong><?php echo $appdetails->cibilscore; ?></strong></li>
								<li><i class="flaticon-arrow-button"></i>Income :&nbsp;<strong><?php echo formatePriceIndia($appdetails->income); ?></strong></li>
								<li><i class="flaticon-arrow-button"></i>Current EMI :&nbsp;<strong><?php echo $appdetails->currentemi; ?></strong></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="card card-border-start">
						<div class="card-body">
							<table id="myDatatable" class="table table-hover dt-responsive">
								<thead>
									<tr>
										<th></th>
										<th>Status</th>
										<th>Date</th>
										<th>Bank</th>
										<th>Remarks</th>
										<th>Details</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (count($statuslist)) {
										foreach ($statuslist as $row) {
											echo "<tr class='table-" . $row->colorclass . "'>";
											echo "<td></td>";

											echo "<td><strong>" . htmlentities($row->statusname) . "</strong></td>";
											echo "<td>" . displayDate($row->statusdate) . ' ' . displayTime($row->rec_date) . "</td>";
											echo "<td>" . htmlentities($row->bank_name) . "</td>";
											echo "<td>" . htmlentities($row->remarks) . "</td>";

											echo "<td width='200'>";
											if ($row->loanamount > 0) {
												echo "Loan Amount - " . formatePriceIndia($row->loanamount);
											}

											if ($row->loanroi != "") {
												echo "<br/>ROI - " . htmlentities($row->loanroi);
											}

											if ($row->loanterms != "") {
												echo "<br/>Terms - " . htmlentities($row->loanterms);
											}

											if ($row->processfees > 0) {
												echo "<br/>Process Fees - " . htmlentities($row->processfees);
											}

											if ($row->insurance != "") {
												echo "<br/>Insurance - " . htmlentities($row->insurance);
											}

											if ($row->monthlyemi > 0) {
												echo "<br/>Monthly EMI - " . htmlentities($row->monthlyemi);
											}
											echo "</td>";

											echo "</tr>";
										}
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php $this->load->view('customer/includes/footer-apply'); ?>
<script>
	$(document).ready(function() {
		$('#myDatatable').DataTable({
			dom: 'Bfrtip',
			responsive: true,
			buttons: [
				'copyHtml5',
				'excelHtml5',
				'csvHtml5',
				'pdfHtml5'
			]
		});
	});
</script>
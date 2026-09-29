<?php $this->load->view('customer/includes/header-apply'); ?>

<main class="fix">
	<!-- breadcrumb-area -->
	<section class="breadcrumb__area breadcrumb__bg" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">My Loan Applications History</h2>
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
	<!-- breadcrumb-area-end -->	
	<section class="team-area pt-120 pb-90 body-footer">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="card card-border-start">
						<div class="card-body">
							<table id="myDatatable" class="table table-hover dt-responsive">
								<thead>
									<tr>
										<th>#</th>
										<th>Date</th>
										<th>Loan Type</th>
										<th>Amount</th>
										<th>CIBIL Score</th>
										<th>Loan Purpose</th>
										<th>Tenure</th>
										<th>Details</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$cnt = 1;
									foreach ($loanhistory as $row) {
										echo "<tr>";
										echo "<td>" . $cnt . "</td>";
										echo "<td>" . displayDate($row->rec_date) . "</td>";

										if ($row->loantype == 11) {
											echo "<td>Personal Loan</td>";
										} else if ($row->loantype == 12) {
											echo "<td>Business Loan</td>";
										} else {
											echo "<td>-</td>";
										}
										$enc_id = '';
										$enc_id = stringCrypt($row->id, 'encrypt');
										echo "<td>" . formatePriceIndia($row->loanamount) . "</td>";
										echo "<td>" . htmlentities($row->cibilscore) . "</td>";
										echo "<td>" . htmlentities($row->loanpurpose) . "</td>";
										echo "<td>" . htmlentities($row->loantenure) . "</td>";

										echo "<td class='text-center' width='50'>" . anchor("customer/loan/appdetails/{$enc_id}", '<i class="fa fa-info-circle"></i>', 'class="btn btn-circle btn-soft-primary btn-sm"') . "</td>";

										echo "</tr>";
										$cnt++;
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
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
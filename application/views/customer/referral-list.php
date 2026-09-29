<?php $this->load->view('customer/includes/header-apply'); ?>
<main class="fix">
	<!-- breadcrumb-area -->
	<section class="breadcrumb__area breadcrumb__bg" data-background="<?= base_url('assets/img/bg/breadcrumb_bg.jpg'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="breadcrumb__content">
						<h2 class="title">My Customers</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">Customers</li>
								<li class="breadcrumb-item active" aria-current="page">My Customers</li>
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
	<section class="team-area pt-120 pb-90 body-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-border-start">
						<div class="card-body">
							<table id="myDatatable" class="table table-hover dt-responsive">
								<thead>
									<tr>
										<th>#</th>
										<th>Registration</th>
										<th>Name</th>
										<th>Mobile</th>
										<th>Email Id</th>
										<th>City</th>
										<th>Payout</th>
										<th>Pay Date</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$cnt = 1;
									foreach ($refuserlist as $row) {
										echo "<tr>";
										echo "<td>" . $cnt . "</td>";
										echo "<td>" . displayDate($row->rec_date) . "</td>";
										echo "<td class='text-capitalize'>" . htmlentities($row->fullname) . "</td>";
										echo "<td>" . htmlentities($row->mobile) . "</td>";
										echo "<td>" . htmlentities($row->email) . "</td>";
										echo "<td>" . htmlentities($row->city) . "</td>";

										if ($row->payout == 1) {
											echo "<td class='text-success'>Approved</td>";
										} else if ($row->payout == 2) {
											echo "<td class='text-danger'>Rejected</td>";
										} else if ($row->payout == 3) {
											echo "<td class='text-info'>Pending</td>";
										} else if ($row->payout == 4) {
											echo "<td class='text-warning'>Hold</td>";
										} else {
											echo "<td>-</td>";
										}

										echo "<td>";
										if ($row->payout_date != NULL) {
											echo displayDate($row->payout_date);
										}
										echo "</td>";

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
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List Warga</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/home-css/img/logo.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.6.2.js"></script>
	<style type="text/css">
		body {
			padding-top: 0px;
			padding-bottom: 0px;
			background: linear-gradient(#141e30, #243b55);
		}

		#style_vote {
			font-size: 200px;
			color: #0e90d2;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="hero-unit">
			<a href="<?php echo base_url(); ?>admin/menu"><button type="button" id="close_button" style="margin-top:-40px;margin-right:-40px;padding-right:10px;padding-left:10px;float:right;"> X </button></a>
			<div class="row" style="padding:20px;">
				<div class="span6">
					<h1 style="margin-bottom:25px;">Data Warga</h1>
				</div>
				<div class="span3">
				</div>
				<br />
				<div class="row" style="display:contents;">
					<div class="col-md-12">
						<table class="table table-hover" id="example">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">NIK</th>
									<th scope="col">STATUS</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 0;
								foreach ($warga as $data) : ?>
									<tr>
										<th><?php echo ++$i; ?></th>
										<td><?php echo $data->nik; ?></td>
										<td><?php if ($data->status == 1) {
												echo "Sudah";
											} else {
												echo "Belum";
											} ?></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			<hr style="border-color:#000;" />
			<div class="copy" style="margin-top:10px;">
				<p>&copy; Design by VoteOn 2022 </p>
			</div>

		</div>




		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>




		<script>
			$(document).ready(function() {
				$('#example').DataTable();
			});
		</script>


</body>

</html>
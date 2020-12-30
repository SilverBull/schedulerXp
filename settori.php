<!DOCTYPE html>
<html lang="en">


<?php
include_once 'header.php';
?>

<body>
	<div class="main-wrapper">
		<?php
		include_once 'top_menu.php';
		include_once 'menu.php';
		?>

		<div class="page-wrapper">
			<div class="content">
				<div class="row">
					<div class="col-sm-5 col-5">
						<h4 class="page-title">Settori</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										<th>#</th>
										<th>Calendario</th>
										<th>Vai</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Azienda</td>
										<td><span class="custom-badge status-green"><a href="calendar.php?type=azienda">Vai</a></span></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Settori</td>
										<td><span class="custom-badge status-green"><a href="calendar.php?type=settore">Vai</a></span></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Risorse</td>
										<td><span class="custom-badge status-green"><a href="calendar.php?type=risorsa">Vai</a></span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<?php include_once("messages.php"); ?>
		</div>
		<div id="delete_department" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Department?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sidebar-overlay" data-reff=""></div>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap4.min.js"></script>
	<script src="assets/js/jquery.slimscroll.js"></script>
	<script src="assets/js/app.js"></script>
</body>


<!-- departments23:21-->

</html>
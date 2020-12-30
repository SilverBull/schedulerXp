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
					<div class="col-sm-4 col-3">
						<h4 class="page-title">Risorse Umane</h4>
					</div>
				</div>
				<div class="row doctor-grid">
					<div class="col-md-4 col-sm-4  col-lg-3">
						<div class="profile-widget">
							<div class="doctor-img">
								<a class="avatar" href="calendar.php?type=risorsa"><img alt="" src="assets/img/user-02.jpg"></a>
							</div>
							<div class="dropdown profile-action">
								<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="edit-doctor.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
								</div>
							</div>
							<h4 class="doctor-name text-ellipsis"><a href="calendar.php?type=risorsa">Persona Qualunque</a></h4>
							<div class="doc-prof">CEO</div>
							<div class="user-country">
								<i class="fa fa-map-marker"></i> Italia, Napoli
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4  col-lg-3">
						<div class="profile-widget">
							<div class="doctor-img">
								<a class="avatar" href="calendar.php?type=risorsa"><img alt="" src="assets/img/user-03.jpg"></a>
							</div>
							<div class="dropdown profile-action">
								<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="edit-doctor.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
								</div>
							</div>
							<h4 class="doctor-name text-ellipsis"><a href="calendar.php?type=risorsa">Tizio Qualunque</a></h4>
							<div class="doc-prof">CTO</div>
							<div class="user-country">
								<i class="fa fa-map-marker"></i> Italia, Salerno
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4  col-lg-3">
						<div class="profile-widget">
							<div class="doctor-img">
								<a class="avatar" href="calendar.php?type=risorsa"><img alt="" src="assets/img/user-04.jpg"></a>
							</div>
							<div class="dropdown profile-action">
								<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="edit-doctor.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
								</div>
							</div>
							<h4 class="doctor-name text-ellipsis"><a href="calendar.php?type=risorsa">Clarabella Pippo</a></h4>
							<div class="doc-prof">CFO</div>
							<div class="user-country">
								<i class="fa fa-map-marker"></i> Italia, Avellino
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4  col-lg-3">
						<div class="profile-widget">
							<div class="doctor-img">
								<a class="avatar" href="calendar.php?type=risorsa"><img alt="" src="assets/img/user-05.jpg"></a>
							</div>
							<div class="dropdown profile-action">
								<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="edit-doctor.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
								</div>
							</div>
							<h4 class="doctor-name text-ellipsis"><a href="calendar.php?type=risorsa">Minnie Topolino</a></h4>
							<div class="doc-prof">Impiegato</div>
							<div class="user-country">
								<i class="fa fa-map-marker"></i> Italia, Salerno
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="see-all">
                            <a class="see-all-btn" href="javascript:void(0);">Load More</a>
                        </div>
                    </div>
                </div> -->
			</div>
			<?php include_once("messages.php"); ?>
		</div>
		<div id="delete_employee" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Employee?</h3>
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
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/app.js"></script>
</body>


<!-- employees23:22-->

</html>
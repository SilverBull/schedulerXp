<!DOCTYPE html>
<html lang="en">
<?php
include 'config.php';
include_once 'header.php';
?>

<body class="mini-sidebar">
	<div class="main-wrapper">
		<?php
		include_once 'top_menu.php';
		include_once 'menu.php';

		$calendarType = "";

		switch ($_GET['type']) {
			case 'azienda':
				$calendarType = "Azienda";
				break;
			case 'settoreMedica':
				$calendarType = "Settore Medica";
				break;
			case 'settoreProgettazione':
				$calendarType = "Settore Progettazione";
				break;
			case 'settoreDigital':
				$calendarType = "Settore Digital";
				break;
			case 'risorsa':
				$calendarType = "Risorsa";
				break;
		}
		?>
		<div class="page-wrapper">
			<div class="content">
				<div class="row">
					<div class="col-sm-12">
						<h4 class="page-title">Attività</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="activity">
							<div class="activity-box">
								<ul class="activity-list">
									<li>
										<div class="activity-user">
											<a href="calendar.php?type=risorsa" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
												<img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="calendar.php?type=risorsa" class="name">Lesley Grauer</a> ha aggiunto un task a <a href="#">Test</a>
												<span class="time">4 mins fa</span>
											</div>
										</div>
										<a class="activity-delete" href="#" title="Delete">&times;</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="calendar.php?type=risorsa" class="avatar" title="Immacolata Monaldo" data-toggle="tooltip">I</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="calendar.php?type=risorsa" class="name">Immacolata Monaldo</a> ha aggiunto <a href="calendar.php?type=risorsa" class="name">Loren Gatlin</a> e <a href="calendar.php?type=risorsa" class="name">Tarah Shropshire</a> al progetto <a href="#">Lavoro numero 1</a>
												<span class="time">6 mins fa</span>
											</div>
										</div>
										<a class="activity-delete" href="#" title="Delete">&times;</a>
									</li>
									<li>
										<div class="activity-user">
											<a href="calendar.php?type=risorsa" title="Catherine Manseau" data-toggle="tooltip" class="avatar">
												<img alt="Catherine Manseau" src="assets/img/user.jpg" class="img-fluid rounded-circle">
											</a>
										</div>
										<div class="activity-content">
											<div class="timeline-content">
												<a href="calendar.php?type=risorsa" class="name">Catherine Manseau</a> ha completato il lavoro <a href="#"> lorem ipsum</a>
												<span class="time">12 mins fa</span>
											</div>
										</div>
										<a class="activity-delete" href="#" title="Delete">&times;</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include_once("messages.php"); ?>
		</div>
		<div class="sidebar-overlay" data-reff=""></div>
		<script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.slimscroll.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/jquery-ui.min.html"></script>
		<script src="assets/js/fullcalendar.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/locale-all.js"></script>
		<script src="assets/js/jquery.fullcalendar.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/js/app.js"></script>
</body>


</html>
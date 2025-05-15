<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
$recid = intval($_GET['id']); // get doctor id
if (isset($_POST['submit'])) {
	$recname = $_POST['recname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
	$sql = mysqli_query($con, "Update receptionist set fullName='$recname',address='$address',city='$city',gender='$gender' where id='$recid'");
	if ($sql) {
		$msg = "Receptionist Details updated Successfully";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin | Edit Doctor Details</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
	<link href="../vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="../vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="../vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link href="../vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
	<link href="../vendor/select2/select2.min.css" rel="stylesheet" media="screen">
	<link href="../vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
	<link href="../vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


</head>

<body>
	<div id="app">
		<?php include('include/sidebar.php'); ?>
		<div class="app-content">

			<?php include('include/header.php'); ?>
			<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Admin | Edit Receptionist Details</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Admin</span>
								</li>
								<li class="active">
									<span>Edit Receptionist Details</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">
								<h5 style="color: green; font-size:18px; ">
									<?php if ($msg) {
										echo htmlentities($msg);
									} ?> </h5>
								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">Edit Receptionist info</h5>
											</div>
											<div class="panel-body">
												<?php $sql = mysqli_query($con, "select * from receptionist where id='$recid'");
												while ($data = mysqli_fetch_array($sql)) {
												?>
													<h4><?php echo htmlentities($data['fullName']); ?>'s Profile</h4>
													<p><b>Profile Reg. Date: </b><?php echo htmlentities($data['regDate']); ?></p>
													<hr />

													<form role="form" name="addrec" method="post" onSubmit="return valid();">

														<div class="form-group">
															<label for="doctorname">
																Full Name
															</label>
															<input type="text" name="recname" class="form-control" placeholder="Enter Receptionist Name" required="true"  value="<?php echo htmlentities($data['fullName']); ?>">
														</div>

														<div class="form-group">
															<label for="doctorname">
																Address
															</label>
															<input type="text" name="address" class="form-control" placeholder="Enter Receptionist Address" required="true" value="<?php echo htmlentities($data['address']); ?>">
														</div>

														<div class="form-group">
															<label for="doctorname">
																City
															</label>
															<input type="text" name="city" class="form-control" placeholder="Enter Receptionist City" required="true"value="<?php echo htmlentities($data['city']); ?>">
														</div>

														<div class="form-group">
															<label class="block">
																Gender
															</label>
															<div class="clip-radio radio-primary">
																<input type="radio" id="rec-female" name="gender" value="female" <?php if($data['gender'] == 'female'){
																	?>checked <?php
																}?>>
																<label for="rec-female">
																	Female
																</label>
																<input type="radio" id="rec-male" name="gender" value="male" <?php if($data['gender'] == 'male'){
																	?>checked<?php
																}?>>
																<label for="rec-male">
																	Male
																</label>
															</div>
														</div>

														<div class="form-group">
															<span class="input-icon">
																<input type="email" class="form-control" name="email" id="email" 
																disabled 
																onBlur="checkemailAvailability()" placeholder="Email" required value="<?php echo htmlentities($data['fullName']); ?>">
																<i class="fa fa-envelope"></i> </span>
															<span id="user-availability-status1" style="font-size:12px;"></span>
														</div>
													<?php } ?>

														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="panel panel-white">


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end: BASIC EXAMPLE -->






			<!-- end: SELECT BOXES -->

		</div>
	</div>
	</div>
	<!-- start: FOOTER -->
	<?php include('include/footer.php'); ?>
	<!-- end: FOOTER -->

	<!-- start: SETTINGS -->
	<?php include('include/setting.php'); ?>
	<>
		<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../vendor/modernizr/modernizr.js"></script>
		<script src="../vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="../vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="../vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="../vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="../vendor/autosize/autosize.min.js"></script>
		<script src="../vendor/selectFx/classie.js"></script>
		<script src="../vendor/selectFx/selectFx.js"></script>
		<script src="../vendor/select2/select2.min.js"></script>
		<script src="../vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="../vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>
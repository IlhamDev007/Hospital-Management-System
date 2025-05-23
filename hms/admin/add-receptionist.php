<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if (isset($_POST['submit'])) {
	echo 'Hello';
	$recname = $_POST['recname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sql = mysqli_query($con, "insert into receptionist(fullName, address,city,gender,email,password) values('$recname','$address','$city','$gender','$email','$password')");
	if ($sql) {
		echo "<script>alert('Receptionist info added Successfully');</script>";
		echo "<script>window.location.href ='manage-receptionist.php'</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin | Add Receptionist</title>

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
	<script type="text/javascript">
		function valid() {
			if (document.addrec.password.value != document.addrec.confirm_password.value) {
				alert("Password and Confirm Password Field do not match  !!");
				document.addrec.confirm_password.focus();
				return false;
			}
			return true;
		}
	</script>


	<script>
		function checkemailAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check_availability_rec.php",
				data: 'emailid=' + $("#email").val(),
				type: "POST",
				success: function(data) {
					$("#email-availability-status").html(data);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
	</script>
</head>

<body>
	<div id="app">
		<?php include('include/sidebar.php'); ?>
		<div class="app-content">

			<?php include('include/header.php'); ?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">Admin | Add Receptionist</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>Admin</span>
								</li>
								<li class="active">
									<span>Add Receptionist</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">

								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white">
											<div class="panel-heading">
												<h5 class="panel-title">Add Receptionist</h5>
											</div>
											<div class="panel-body">

												<form role="form" name="addrec" method="post" onSubmit="return valid();">

													<div class="form-group">
														<label for="doctorname">
															Full Name
														</label>
														<input type="text" name="recname" class="form-control" placeholder="Enter Receptionist Name" required="true">
													</div>

													<div class="form-group">
														<label for="doctorname">
															Address
														</label>
														<input type="text" name="address" class="form-control" placeholder="Enter Receptionist Address" required="true">
													</div>

													<div class="form-group">
														<label for="doctorname">
															City
														</label>
														<input type="text" name="city" class="form-control" placeholder="Enter Receptionist City" required="true">
													</div>

													<div class="form-group">
														<label class="block">
															Gender
														</label>
														<div class="clip-radio radio-primary">
															<input type="radio" id="rec-female" name="gender" value="female">
															<label for="rec-female">
																Female
															</label>
															<input type="radio" id="rec-male" name="gender" value="male">
															<label for="rec-male">
																Male
															</label>
														</div>
													</div>
														
													<div class="form-group">
														<span class="input-icon">
															<input type="email" class="form-control" name="email" id="email" onBlur="checkemailAvailability()" placeholder="Email" required>
															<i class="fa fa-envelope"></i> </span>
														<span id="user-availability-status1" style="font-size:12px;"></span>
													</div>
													<div class="form-group">
														<span class="input-icon">
															<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
															<i class="fa fa-lock"></i> </span>
													</div>
													<div class="form-group">
														<span class="input-icon">
															<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
															<i class="fa fa-lock"></i> </span>
													</div>
													
													<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
														Submit
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
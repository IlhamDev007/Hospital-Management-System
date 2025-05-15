<?php
session_start();
//error_reporting(0);
include('./hms/include/config.php');
include('./hms/include/checklogin.php');
check_login();

if (isset($_POST['submit'])) {
    $fname = $_POST['full_name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
    $newUserId=0;

    $query = mysqli_query($con, "insert into users(fullname,address,city,gender) values('$fname','$address','$city','$gender')");
	if ($query) {
		$newUserId = $con->insert_id;
	}


	$specilization = $_POST['Doctorspecialization'];
	$doctorid = $_POST['doctor'];
	$userid = $newUserId;
	$fees = $_POST['fees'];
	$reason = $_POST['reason'];
	$appdate = $_POST['appdate'];
	$time = $_POST['apptime'];
	$userstatus = 1;
	$docstatus = 1;
	$query = mysqli_query($con, "insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees, reason,appointmentDate,appointmentTime,userStatus,doctorStatus, appoinmentStatus) values('$specilization','$doctorid','$userid','$fees', '$reason','$appdate','$time','$userstatus','$docstatus', 'Pending')");
	if ($query) {
        $token = $con->insert_id;
		echo "<script>alert('Your appointment successfully booked. Your Token Number : $token');
        window.location.href = './index.php';
		</script>";
	}
}
?>
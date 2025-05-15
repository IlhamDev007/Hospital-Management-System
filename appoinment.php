<?php
session_start();
error_reporting(0);
include("./hms/include/config.php");
if (isset($_POST['submit'])) {
    $ret = mysqli_query($con, "SELECT * FROM users WHERE email='" . $_POST['username'] . "' and password='" . md5($_POST['password']) . "'");
    $num = mysqli_fetch_array($ret);
    if ($num > 0) {
        $extra = "dashboard.php"; //
        $_SESSION['login'] = $_POST['username'];
        $_SESSION['id'] = $num['id'];
        $host = $_SERVER['HTTP_HOST'];
        $uip = $_SERVER['REMOTE_ADDR'];
        $status = 1;
        // For stroing log if user login successfull
        $log = mysqli_query($con, "insert into userlog(uid,username,userip,status) values('" . $_SESSION['id'] . "','" . $_SESSION['login'] . "','$uip','$status')");
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("location:http://$host$uri/hms/$extra");
        exit();
    } else {

        $ret = mysqli_query($con, "SELECT * FROM receptionist WHERE email='" . $_POST['username'] . "' and password='" . md5($_POST['password']) . "'");
        $num = mysqli_fetch_array($ret);
        if ($num > 0) {
            $extra = "receptionist/dashboard.php"; //
            $_SESSION['login'] = $_POST['username'];
            $_SESSION['id'] = $num['id'];
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            header("location:http://$host$uri/hms/$extra");
            exit();
        } else {

            $ret = mysqli_query($con, "SELECT * FROM doctors WHERE docEmail='" . $_POST['username'] . "' and password='" . md5($_POST['password']) . "'");
            $num = mysqli_fetch_array($ret);
            if ($num > 0) {
                $extra = "doctor/dashboard.php";
                $_SESSION['dlogin'] = $_POST['username'];
                $_SESSION['id'] = $num['id'];
                $uip = $_SERVER['REMOTE_ADDR'];
                $status = 1;
                $log = mysqli_query($con, "insert into doctorslog(uid,username,userip,status) values('" . $_SESSION['id'] . "','" . $_SESSION['dlogin'] . "','$uip','$status')");
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                header("location:http://$host$uri/hms/$extra");
                exit();
            } else {

                $ret = mysqli_query($con, "SELECT * FROM admin WHERE username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'");
                $num = mysqli_fetch_array($ret);
                if ($num > 0) {
                    $extra = "admin/dashboard.php"; //
                    $_SESSION['login'] = $_POST['username'];
                    $_SESSION['id'] = $num['id'];
                    $host = $_SERVER['HTTP_HOST'];
                    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    header("location:http://$host$uri/hms/$extra");
                    exit();
                } else {
                    $_SESSION['errmsg'] = "Invalid username or password";
                    $extra = "index.php";
                    $host  = $_SERVER['HTTP_HOST'];
                    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    header("location:http://$host$uri/$extra");
                    exit();
                }
            }
        }
    }
}
?>
<script>
    function getdoctor(val) {
        $.ajax({
            type: "POST",
            url: "./hms/get_doctor.php",
            data: 'specilizationid=' + val,
            success: function(data) {
                $("#doctor").html(data);
            }
        });
    }
</script>


<script>
    function getfee(val) {
        $.ajax({
            type: "POST",
            url: "./hms/get_doctor.php",
            data: 'doctor=' + val,
            success: function(data) {
                $("#fees").html(data);
            }
        });
    }
</script>

<html>

<head>
    <meta charset="utf-8">
    <title>Appoinment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="./css/appoinment.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="hms/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
    <link href="hms/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <link href="./css/style.css" type="text/css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <style>
        .form-control {
            border-radius: 0.75rem;
        }
    </style>

    <script type="text/javascript">
        function valid() {
            if (document.registration.password.value != document.registration.password_again.value) {
                alert("Password and Confirm Password Field do not match  !!");
                document.registration.password_again.focus();
                return false;
            }
            return true;
        }

        function validateAndSubmit() {
            if (valid()) {
                // If validation passes, allow form submission
                return true;
            } else {
                // If validation fails, prevent form submission
                return false;
            }
        }
    </script>

</head>


<body>
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.php" class="navbar-brand">
            <img src="./img/logo.jpeg" alt="ABC Logo" style="width: 120px; height: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="price.html" class="nav-item nav-link">Doctors</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="login.php" class="nav-item nav-link btn-login">Log in</a>
            </div>
            </div>
        </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
        <div class="row">
            <div class="col-md-3 register-left" style="margin-top: 20%;right: 5%">
                <h3>Welcome to ABC Hospital</h3>

            </div>
            <div class="col-md-9 register-right" style="margin-top: 40px;left: 80px;">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
                        <h3 class="register-heading">Book Appoinment</h3>
                        <form role="form" name="book" method="post" action="./book-appoinment.php">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="DoctorSpecialization">
                                            Doctor Specialization
                                        </label>
                                        <select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
                                            <option value="">Select Specialization</option>
                                            <?php $ret = mysqli_query($con, "select * from doctorspecilization");
                                            while ($row = mysqli_fetch_array($ret)) {
                                            ?>
                                                <option value="<?php echo htmlentities($row['specilization']); ?>">
                                                    <?php echo htmlentities($row['specilization']); ?>
                                                </option>
                                            <?php } ?>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="doctor">
                                            Doctors
                                        </label>
                                        <select name="doctor" class="form-control" id="doctor" onChange="getfee(this.value);" required="required">
                                            <option value="">Select Doctor</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="consultancyfees">
                                            Consultancy Fees
                                        </label>
                                        <select name="fees" class="form-control" id="fees" readonly>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="block">
                                            Gender
                                        </label>
                                        <div class="clip-radio radio-primary">
                                            <input type="radio" id="rg-female" name="gender" value="female">
                                            <label for="rg-female">
                                                Female
                                            </label>
                                            <input type="radio" id="rg-male" name="gender" value="male">
                                            <label for="rg-male">
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="AppointmentDate">
                                            Reason
                                        </label>
                                        <input type="text" class="form-control" name="reason" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="AppointmentDate">
                                            Date
                                        </label>
                                        <input class="form-control datepicker" name="appdate" required="required" data-date-format="yyyy-mm-dd">eg : 2024-12-12

                                    </div>

                                    <div class="form-group">
                                        <label for="Appointmenttime">

                                            Time

                                        </label>
                                        <input class="form-control" name="apptime" id="timepicker1" required="required">eg : 10:00 PM
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" placeholder="City" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-o btn-primary">
                                        Submit
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>



            </div>

        </div>
    </div>

    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="hms/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="hms/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        FormElements.init();
    });

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '-3d'
    });
</script>
<script type="text/javascript">
    $('#timepicker1').timepicker();
</script>

</html>
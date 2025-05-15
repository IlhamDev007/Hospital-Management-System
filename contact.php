<?php
include_once('hms/include/config.php');
if (isset($_POST['submit'])) {
  $name = $_POST['fullname'];
  $email = $_POST['emailid'];
  $mobileno = $_POST['mobileno'];
  $dscrption = $_POST['description'];
  $query = mysqli_query($con, "insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
  echo "<script>alert('Your information succesfully submitted');</script>";
  echo "<script>window.location.href ='contact.php'</script>";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
  <script>
    function alphaOnly(event) {
      var key = event.keyCode;
      return ((key >= 65 && key <= 90) || key == 8 || key == 32);
    };
  </script>

  <style>
    body {
      background: #f5f5f5;
    }

    .contact-form {
      margin-top: 80px;
      border: 1px solid #e0e0e0;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      background: #f9f9f9;
      border-top-left-radius: 10% 50%;
      border-bottom-left-radius: 10% 50%;
      border-top-right-radius: 10% 50%;
      border-bottom-right-radius: 10% 50%;
    }
  </style>

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
            <a href="index.php" class="nav-item nav-link">About</a>
            <a href="index.php" class="nav-item nav-link">Service</a>
            <a href="index.php" class="nav-item nav-link">Doctors</a>
            <a href="contact.php" class="nav-item nav-link active">Contact</a>
            <a href="login.php" class="nav-item nav-link btn-login">Log in</a>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <div class="container contact-form" style="font-family: 'IBM Plex Sans', sans-serif;">
    <div class="contact-image">
      <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
    </div>
    <form method="post" action="contact.php">
      <h3>Drop Us a Message</h3>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">

            <input
              type="text"
              class="form-control"
              name="fullname"
              placeholder="Name"
              required="true"
              value="" />
          </div>
          <div class="form-group">
            <input
              type="email"
              class="form-control"
              name="emailid"
              placeholder="Email"
              required="true"
              value="" />
          </div>
          <input type="submit" class="btn btn-o btn-primary" name="submit" value="Send Message" />
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              name="mobileno"
              placeholder="Phone No"
              required="true"
              value="" />
          </div>
          <div class="form-group">
            <textarea
              class="form-control"
              name="description"
              cols="10"
              rows="5"
              placeholder="Message"
              required="true"></textarea>
          </div>
        </div>
      </div>
    </form>
  </div>

</body>

</html>
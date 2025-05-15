<?php
include('./includes/header.php')
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+012
                            345 6789</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i
                                class="bi bi-envelope me-2"></i>info@abc.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="https://x.com/">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="https://www.linkedin.com/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="https://www.youtube.com/">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <img src="img/logo.jpeg" alt="abc Logo" style="width: 120px; height: 60px;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#doctor" class="nav-item nav-link">Doctors</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>

                        <a href="login.php" class="nav-item nav-link btn-login">Log in</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Home Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"
                        style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To ABC</h5>
                    <h1 class="display-1 text-white mb-md-4">Your Health, Our Priority, Always Here</h1>
                    <div class="pt-2">
                        <a href="appoinment.php" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                        <!-- <a href="Login.php" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a> -->
                        <a href="Login.php" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home End -->

    <!-- About Start -->
    <div id="about">
        <div class="container-fluid py-5 bg-light">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="./img/about.png" alt="About Image">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-4">About ABC Hospital</h1>
                        <p>At ABC Hospital, we are committed to providing the highest quality care to all of our patients.
                            Our expert medical staff, advanced facilities, and compassionate care approach help us stand out
                            in the healthcare industry.</p>
                        <p>Since our founding, we have been at the forefront of medical technology and patient care. We
                            offer a wide range of medical services from routine check-ups to complex surgeries. At ABC, your
                            health is our priority.</p>
                        <a href="#service" class="btn btn-primary py-3 px-5">Explore Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!--service-->
    <div id="service" style="margin-top: 100px">
        <section id="service" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h2 class="ser-title">Our Service</h2>
                        <hr class="ser-botm-line">
                        <p>ABC Hospital is committed to providing outstanding, patient-centered healthcare services, ensuring personalized attention, compassionate care, and exceptional medical expertise.</p>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-stethoscope"></i>
                            </div>
                            <div class="icon-info">
                                <h4>24 Hour Support</h4>
                                <p>We offer 24/7 assistance to address all medical concerns, providing prompt, reliable, and professional support whenever you need help.</p>
                            </div>
                        </div>
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="icon-info">
                                <h4>Emergency Services</h4>
                                <p>Equipped for emergencies, we ensure swift care and immediate attention from skilled professionals during critical moments to save lives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-user-md"></i>
                            </div>
                            <div class="icon-info">
                                <h4>Medical Counseling</h4>
                                <p>Our expert counselors guide you through health decisions with personalized advice, tailored care plans, and support for a healthier future.</p>
                            </div>
                        </div>
                        <div class="service-info">
                            <div class="icon">
                                <i class="fa fa-medkit"></i>
                            </div>
                            <div class="icon-info">
                                <h4>Premium Healthcare</h4>
                                <p>We deliver advanced diagnostics, cutting-edge treatments, and holistic care, prioritizing your health, comfort, and satisfaction at every step.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--/ service-->

    <hr class="ser-line" style="height: 10px;">

    <!-- doctor Start -->
    <div id="doctor" style="margin-bottom: 100px;">
        <h2 class="doc-title">Our Doctors</h2>
        <hr class="botm-line">
        <div class="doctor-scroll-container">
            <button class="doctor-scroll-arrow left" onclick="scrollLeft()">&#8592;</button>
            <div class="doctor-team-container">
                <div class="doctor-card">
                    <img src="./img/doctor1.png" alt="Alex Robin">
                    <h3>Dr. Abdul Rahman</h3>
                    <p>Cardiologist</p>
                </div>
                <div class="doctor-card">
                    <img src="./img/doctor2.png" alt="Andrew Bon">
                    <h3>Dr Aravind Kumar</h3>
                    <p>General Surgeon</p>
                </div>
                <div class="doctor-card">
                    <img src="./img/doctor3.png" alt="Martin Tompson">
                    <h3>Dr. Fathima Banu</h3>
                    <p>ENT Surgeon</p>
                </div>
                <div class="doctor-card">
                    <img src="./img/doctor4.png" alt="Clarabelle Samber">
                    <h3>Dr. Mukesh Raj</h3>
                    <p>Neuro Surgeons</p>
                </div>
                <div class="doctor-card">
                    <img src="./img/doctor5.png" alt="Doctor Five">
                    <h3>Doctor Five</h3>
                    <p>Lab Assistant</p>
                </div>
                <div class="doctor-card">
                    <img src="#" alt="Doctor Six">
                    <h3>Doctor Six</h3>
                    <p>Lab Assistant</p>
                </div>
            </div>
            <button class="doctor-scroll-arrow right" onclick="scrollRight()">&#8594;</button>
        </div>
    </div>
    <!-- doctor End -->

    <hr class="f-line">

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Logo and Tagline -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-logo">
                        <img src="./img/f-logo.png" alt="ABC Hospital Logo" class="mb-3" style="max-width: 150px;">
                        <p>Your Health, Our Priority, Always Here</p>
                    </div>
                </div>

                <!-- Get In Touch -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Get In Touch</h4>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, Colombo, Sri Lanka</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@abc.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 6789</p>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a class="btn-link" href="#">About Us</a></li>
                        <li><a class="btn-link" href="#">Our Services</a></li>
                        <li><a class="btn-link" href="#">Contact</a></li>
                    </ul>
                </div>

                <!-- Follow Us -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Follow Us</h4>
                    <div class="d-flex">
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://x.com/"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Horizontal Line and Copyright -->
            <hr class="my-4" style="border-color: #EFF5F9;">
            <div class="row">
                <div class="col text-center">
                    <p class="mb-0">&copy; 2024 ABC Hospital. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

</body>

</html>
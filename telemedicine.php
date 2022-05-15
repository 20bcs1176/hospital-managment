<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors Information</title>

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet"
        href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> -->
    <link rel="stylesheet"
        href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./stylesheets/layout.css">
    <link rel="stylesheet" href="./stylesheets/telemedicine.css">
</head>

<body>
    <header>
        <nav>
            <div class="img-wrapper">
                <a><img src="./img/logo.jpg" alt="Heritage Hospitals"></a>
            </div>
            <div>
                <ul class="nav-list">
                    <li><a href="./index.php">Home</a></li>
                    <li class="dropdown">Hospital Information
                        <div class="nav-dropdown">
                            <div class="nav-dropdown-item"><a href="./telemedicine.php">Telemedicine Software</a></div>
                            <div class="nav-dropdown-item"><a
                                    href="https://docs.google.com/spreadsheets/d/1oKX5b30xebD6-OUJ-KOOavsDBlxC3ml2eklEVDFflK0/edit?usp=sharing">Doctor
                                    Information</a></div>
                            <div class="nav-dropdown-item"><a
                                    href="https://docs.google.com/spreadsheets/d/1rwPcRGtEKvi_sL8zgmVdQaMF_5YJ54pdgFI8e2CROE4/edit?usp=sharing">Patient
                                    Information</a></div>
                        </div>
                    </li>
                    <li><a href="./Doctors.html">Doctor</a></li>
                    <li id="about-us">About us</li>
                    <li><a href="./contact-us.php">Contact Us</a></li>
                    <li class="login-btn">
                        <?php 
							if ($_SESSION['loggedIn']){
								$text = "Logout " . $_SESSION['username'];
								$href = "./php/logout.php";
							  }
							  else{
								$text = "Login";
								$href = "./Login.html";
							  }

							  $htmlString = "<a href=\"$href\">$text</a>";
							  echo $htmlString;
						?>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="header-img-wrapper" style="background-image: url('./img/contact-us-bg.jpg');color: white">
            Telemedicine Software
        </div>
    </header>

    <section>
        <h2>Telemedicine Software: Your Healthcare Expert</h2>
        <p>Allow your patients to book appointments, request video consultations & e-consults through Telemedicine
            Software in India.
            Hosted on HIPAA compliant cloud - with end-to-end encryption!</p>

        <img src="./img/telemedicine-pc.png" alt="Telemedicine Software">



        <div class="grid-table">
            <div class="grid-table-item"><img src="./img/telemedicine-video.png" alt="Video Consultation"></div>

            <div class="grid-table-item">
                <h4>Request E-Consultation</h4>
                <p>Your patients can request e-consultations online. Especially useful for follow ups, post-surgery
                    consultations, regular diabetic dosage adjustments etc.</p>
            </div>

            <div class="grid-table-item">
                <h4>Video Consultation</h4>
                <p>Let your patients book a video appointment, and then consult on video. Now you do not have to be in
                    your clinic to practice.</p>
            </div>

            <div class="grid-table-item"><img src="./img/telemedicine-consultations.gif" alt="E-Consultation"></div>

            <div class="grid-table-item"><img src="./img/telemedicine-prescription.png" alt="Digital Prescription">
            </div>

            <div class="grid-table-item">
                <h4>Integration with EMR</h4>
                <p>While you are in a video call, you can pull up the EMR of the patient, refer medical history just
                    like a normal face to face consultation.</p>
            </div>

            <div class="grid-table-item">
                <h4>Digital Prescription</h4>
                <p>Issue Digitally Secure Prescriptions.</p>
            </div>

            <div class="grid-table-item"><img src="./img/telemedicine-EMR.png" alt="EMR Integration"></div>
        </div>
        <div class="feature">
            <h3>Features</h3>
            <p>We have everything you need and more!</p>
        </div>

        <div class="feature-table">
            <div class="feature-table-feature">
                <div class="color-feature">
                    <span class="material-symbols-outlined">attach_money</span>
                    <h3>Collect Payments</h3>
                </div>

                <p>Supports industry standard payment gateway integration for Credit card/Netbanking.</p>
            </div>

            <div class="feature-table-feature">
                <div class="color-feature">
                    <span class="material-symbols-outlined">payments</span>
                    <h3>Prepaid Consultation</h3>
                </div>

                <p>You can issue DocPulse prepaid cards to patients. Patients can use the account to send e-consultation
                    requests.</p>
            </div>

            <div class="feature-table-feature">
                <div class="color-feature">
                    <span class="material-symbols-outlined">draft</span>
                    <h3>EMR Integration</h3>
                </div>
                <p>During the e-consult/video consultation, past medical information is available for you to diagnose
                    and plan treatment.</p>
            </div>
        </div>

    </section>

    <footer>
        <div class="footer-wrapper">
            <div class="col-wrapper">
                <ul>
                    <li><img src="./img/logo.jpg" alt="Logo"></li>
                    <li>718, Hansa Plaza, Bangalore, India</li>
                    <li>contactus@docpulse.com</li>
                    <li>080 46837034</li>
                    <li>About us</li>
                </ul>
            </div>

            <div class="col-wrapper">
                <ul>
                    <li>Products</li>
                    <li>Appointments</li>
                    <li><a href="./telemedicine.php">Telemedicine Software</a></li>
                    <li>Appointment Scheduling Software</li>
                    <li>IVR Appointment Booking Software</li>
                </ul>
            </div>

            <div class="col-wrapper">
                <ul>
                    <li>Solutions</li>
                    <li>Clinic Management Software</li>
                    <li>Medical Software</li>
                    <li>Hospital Managment Software</li>
                    <li>Clinic Chains</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            Copyright © Heritage Hospitals - All Rights Reserved
        </div>
    </footer>
    <script src="./scripts/layout.js"></script>
</body>

</html>
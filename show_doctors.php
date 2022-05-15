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

    <link rel="stylesheet" href="./stylesheets/layout.css">
</head>

<body>
    <header>
        <nav>
            <div class="img-wrapper">
                <a><img src="./img/logo.jpg" alt="Heritage Hospitals"></a>
            </div>
            <div>
                <ul class="nav-list">
                    <li><a href="./index.html">Home</a></li>
                    <li class="dropdown">Hospital Information
                        <div class="nav-dropdown">
                            <div class="nav-dropdown-item"><a href="./telemedicine.html">Telemedicine Software</a></div>
                            <div class="nav-dropdown-item"><a href="https://docs.google.com/spreadsheets/d/1oKX5b30xebD6-OUJ-KOOavsDBlxC3ml2eklEVDFflK0/edit?usp=sharing">Doctor Information</a></div>
                            <div class="nav-dropdown-item"><a href="https://docs.google.com/spreadsheets/d/1rwPcRGtEKvi_sL8zgmVdQaMF_5YJ54pdgFI8e2CROE4/edit?usp=sharing">Patient Information</a></div>
                        </div>
                    </li>
                    <li><a href="./Doctors.html">Doctor</a></li>
                    <li id="about-us">About us</li>
                    <li><a href="./contact-us.html">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <div class="header-img-wrapper">
            Search Doctors
        </div>
    </header>

    <section>

<?php

    require_once('./php/connection.php');

    $conn = makeConn($connDetails);
?>


        <form action="POST" target="_self" class="search">
            <label for="doctor-name">Filter by Doctors</label>
            <select name="doctor-name" id="doctor-name">
                <?php 
                    function echoOption($doctId, $doctName) {
                        echo "<option value='$doctId'>$doctName</option>";
                    }

                    $result = makeReadQuery($conn, "SELECT * FROM Doctors_Name");
                    while($doctor = $result->fetch_assoc())
                        echoOption($doctor['Doctor_Id'], $doctor['Firstname'].' '
                        .$doctor['Lastname']);
                ?>
            </select>
        </form>
                
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
                    <li><a href="./telemedicine.html">Telemedicine Software</a></li>
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
    <script src="./scripts/show_doctors.js"></script>
</body>

</html>
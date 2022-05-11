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
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./stylesheets/show_doctors.css">
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
                    <li>Hospital Information</li>
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
    $connDetails = array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db' => 'hospital'
    );
    function makeConn($connDetails){
        $conn = new mysqli(
            $connDetails['host'],
            $connDetails['user'],
            $connDetails['pass'],
            $connDetails['db']
        );
        return $conn ?? NULL;
    }
    function makeReadQuery($conn, $query){
        $result = $conn->query($query);
        return $result ?? NULL;
    }


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
                        echoOption($doctor['Doctor_Id'], $doctor['First_name'].' '
                        .$doctor['Last_name']);
                ?>
            </select>
        </form>
                
    </section>

    <footer>

        <div class="col-wrapper">
            <img src="./img/logo.jpg" alt="Logo">
            <ul>
                <li>718, Hansa Plaza, Bangalore, India</li>
                <li>contactus@docpulse.com</li>
                <li>080 46837034</li>
                <li>About us</li>
            </ul>
        </div>
        
        <div class="col-wrapper">
            <h5>Products</h5>
            <ul>
                <li>Appointments</li>
                <li>Telemedicine Software</li>
                <li>Appointment Scheduling Software</li>
                <li>IVR Appointment Booking Software</li>
            </ul>
        </div>

        <div class="col-wrapper">
            <h5>Solutions</h5>
            <ul>
                <li>Clinic Management Software</li>
                <li>Medical Software</li>
                <li>Hospital Managment Software</li>
                <li>Clinic Chains</li>
            </ul>
        </div>
    </footer>
    <script src="./scripts/show_doctors.js"></script>
</body>
</html>
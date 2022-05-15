<?php

    require_once('./connection.php');

    $fName = $_POST['First_Name'];
    $lName = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $username = $_POST['UserName'];
    $password = $_POST['Password'];

    $conn = makeConn($connDetails);
    $query = "INSERT INTO Users(FirstName, LastName, Email, UserName, Password) VALUES('$fName', '$lName', '$email', '$username', '$password')";

    $result = makeInsertQuery($conn, $query);
    if ($result) {
        echo "New record is inserted sucessfully<br>";
    }
    else {
        echo "Error: ". $query ."". $conn->error;
        echo "<br>";
    }

    echo "Redirecting to homepage in 5 seconds...";
    echo "
    <script>
        setTimeout(function(){
            location.replace('../index.php');}, 5000);
    </script>";
?>
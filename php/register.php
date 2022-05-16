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
        $sucess = true;
        http_response_code(200);
    }
    else {
        $sucess = false;
        http_response_code(500);
    }

    echo  ($sucess?"Sucessfull":"Unsucessfull") . "Redirecting to homepage in 5 seconds...";
    echo "
    <script>
        setTimeout(function(){
            location.replace('../index.php');}, 5000);
    </script>";
?>
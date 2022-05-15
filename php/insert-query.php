<?php 
    require_once('./connection.php');

    $fName = $_POST['fName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $orgName = $_POST['orgName'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    $conn = makeConn($connDetails);
    $query = "INSERT INTO  Queries (FirstName, Email, Mobile, Organisation, City, Message) VALUES ('$fName', '$email', '$mobile', '$orgName', '$city', '$message')";

    $result = makeInsertQuery($conn, $query);
    if ($result)
        $_SESSION['submitSucessful'] = 1;
    else
        $_SESSION['submitSucessful'] = -1;

    $url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    str_replace("/scripts/insert-query.php", "/contact-us.php", $url);
    echo "
        <script type=\"text/javascript\">
            window.location.replace = \"$url\"
        </script>";
?>
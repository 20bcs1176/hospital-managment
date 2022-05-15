<?php 
    $url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $url = str_replace("/php/insert-query.php", "/contact-us.php", $url);
    header("Location: ../contact-us.php");
    
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

    // echo "
    //     <html>
    //     <head></head>
    //     <body>
    //     <script>
    //         window.location.replace = \"$url\";
    //     </script>
    //     </body>
    //     </html>";
?>
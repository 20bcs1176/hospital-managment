<?php 
    session_start();
    $userName = $_POST['user'];
    $password = $_POST['passowrd'];

    require_once('./connection.php');
    $conn = makeConn($connDetails);

    $query = "SELECT * FROM Users WHERE UserName = '$userName' AND Password = '$password'";

    $result = makeReadQuery($conn, $query);
    if ($result->num_rows == 0) 
        $loggedIn = false;
    else {
        $loggedIn = true;
        $user = $result->fetch_assoc();
        $credentials = array(
            'username' => $user['UserName'],
            'email' => $user['Email'],
            'firstname' => $user['FirstName'],
            'lastname' => $user['LastName']
        );
    }
?>
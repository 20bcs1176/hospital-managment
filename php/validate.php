<?php 
    session_start();
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    require_once('./connection.php');
    $conn = makeConn($connDetails);

    $query = "SELECT UserName FROM Users WHERE Email = '$email' AND Password = '$password'";

    $result = makeReadQuery($conn, $query);
    if ($result->num_rows == 0) {
        $_SESSION['loggedIn'] = false;
        unset($_SESSION['username']);
    }
    else {
        $loggedIn = true;
        $user = $result->fetch_assoc();
        $username = $user['UserName'];
        $_SESSION['username'] = $username;
        $_SESSION['loggedIn'] = true;
    }
    echo var_dump($_SESSION) . "<hr>";
    echo var_dump($_POST)  . "<hr>";
    echo var_dump($result) . "<hr>";
    // location.replace(\"../index.php \");
    // location.replace(\"../index.php \");
    // console.log($result->num_rows, $loggedIn, $username);
    if ($loggedIn)
        echo "<script>
            setTimeout(() => location.replace('../index.php'), 10000);
            console.log('Login sucessfull');
            console.log($result->num_rows);
        </script>";
    else{
        echo "Incorrect Credentials. Please try again.<br> Redirecting to homepage in 3 seconds";
        echo "
            <script>
                setTimeout(() => location.replace('../index.php'), 10000);
            </script>
        ";
    }       

?>
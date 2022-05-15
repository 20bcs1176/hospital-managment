<?php
    session_start();
    foreach($_SESSION as $key => $value) {
        unset($_SESSION[$key]);
    }
    $_SESSION['loggedIn'] = false;
    session_destroy();

    echo "
        <script>
            window.location.replace(\"../index.php \")
        </script>";
?>
<?php
    if (session_start() == PHP_SESSION_ACTIVE){
        unset ($_SESSION['credentials']);
        $_SESSION['loggedIn'] = false;
        
        $url = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        str_replace("/scripts/logout.php", "/index.php", $url);
        echo "
            <script type=\"text/javascript\">
                window.location.replace = \"$url\"
            </script>
        ";
    }
?>
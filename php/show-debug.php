<?php
    function debug(){
        echo "Session Status is " . session_status();
        echo "\n<br>PHP active symbol is " . PHP_SESSION_ACTIVE;
        echo "<br><hr>Session ID: " . session_id() . "<br><hr>";
        
        foreach($_SESSION as $name=>$value)
            echo "[SESSION] : $name:$value<br>";
        echo "<hr><br>";
        echo "y = $y <hr>";
        echo "Session vardump : ";
        echo var_dump($_SESSION);
        echo "<br><hr><br>";
        foreach($_SERVER as $name=>$value)
            echo "[SERVER]:  $name:$value<br>";
        echo "<hr>";    
    }
?>
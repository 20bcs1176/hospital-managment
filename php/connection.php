<?php
    $connDetails = array(
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'db' => 'hospital'
    );
    function makeConn($connDetails){
        $conn =  mysqli_connect (
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
?>
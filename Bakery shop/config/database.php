<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "testing";

    $connection = mysqli_connect($servername, $username, $password, $db_name);

    if(!$connection){
        echo "Connection failed!";
        die (mysqli_connect_error());
    }else{
        echo "Connection successful!";
    }

?>
<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "nodemcu";

    $conn = mysqli_connect($host ,$user,$password,$db);

    if($conn){
        echo "Successfully DB Connect";
    }
?>
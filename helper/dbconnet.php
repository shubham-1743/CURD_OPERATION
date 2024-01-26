<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "login";

    // create connetionn 
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die ("sorry we falied to connect". mysqli_connect_errno());
    }else{
        echo "";
    }
    ?>
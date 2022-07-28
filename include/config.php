<?php
    //database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "recruitmentsystem";
    
    $sql = mysqli_connect($host, $username, $password, $database) or die ('could not connect');
?>
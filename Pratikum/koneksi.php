<?php

    $hName='localhost'; // nama host 

    $uName='root';   // user name database

    $password='';   // password database 

    $dbName = "db_formulirpendaftaran"; // nama database 

    $conn= mysqli_connect($hName,$uName,$password,"$dbName");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
?>
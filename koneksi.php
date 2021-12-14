<?php

    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $databasename   = "latihan_api";

    $conn = mysqli_connect($servername, $username ,$password, $databasename);

    if(!$conn){
        die("Koneksi Gagal");
    }
?>
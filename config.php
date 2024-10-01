<?php
    $host = "localhost";
    $dbname = "auth_sys";
    $user = "root" ; 
    $pass = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname;",$user,$pass);
/*
    if($conn == true){
        echo "koneksi berhasil";
    }else{
            echo "koneksi gagal";
    }
*/
?>
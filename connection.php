<?php
    $host ="localhost";
    $user ="root";
    $pass ="";
    $database ="nanda_app";
    $koneksi = mysqli_connect($host,$user,$pass,$database);
    if(!$koneksi){
        echo ("gagal");
    }
    
?>
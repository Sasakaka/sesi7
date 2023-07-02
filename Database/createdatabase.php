<?php
    // include("../konfigurasi.php");
    include("konfigurasi.php");


    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);
    if($cnn){
        $sql ="CREATE DATABASE " . DBNAME;
        $hsl = mysqli_query($cnn, $sql );
        if($hsl){
            echo "Database ". DBNAME. " Berhasil dibuat";
        }else{
            echo "Database". DBNAME. " Gagal dibuat";
        }
    }else{
        echo "Koneksi DBMS Gagal";
    }
    mysqli_close($cnn);
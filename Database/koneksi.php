<?php
    include("konfigurasi.php");


    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT)or die("Koneksi ke DBMS Mysql Gagal");
    // if($cnn){
    //     echo "Koneksi ke DBMS Mysql suksess";
    // }else{
    //     echo "Koneksi ke DBMS Mysql Gagal";
    // }

    // mysqli_close($cnn);
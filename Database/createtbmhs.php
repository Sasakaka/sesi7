<?php
    include("koneksi.php");

    $tbel ="CREATE TABLE tbMHS(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        nim VARCHAR(255),
        prodi VARCHAR(10),
        jeniskelamin VARCHAR(1),
        tgllahir DATE,
        idmhs VARCHAR(255)
    );";

    $hsl = mysqli_query($cnn, $tbel);
    if($hsl){
        echo "Tabel tbMHS ==> Sukses dibuat ";
    }
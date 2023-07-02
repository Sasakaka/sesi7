<?php
    include("koneksi.php");

    $tbel ="CREATE TABLE tbUSER(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(35),
        email VARCHAR(255),
        Username VARCHAR(10),
        Passkey VARCHAR(255),
        iduser VARCHAR(255)
    );";

    $hsl = mysqli_query($cnn, $tbel);
    if($hsl){
        echo "Tabel tbUSER ==> Sukses dibuat ";
    }
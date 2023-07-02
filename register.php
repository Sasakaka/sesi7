<?php
    include("cmd/user.php");
    $psn = "";
    //cek pengiriman form
    if(isset($_POST["txPASS1"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];
            
           if( createuser($nama, $email, $user, $pass)){
            $psn = "Create data user sukses";
           }else{
            $psn = "Create data user gagal";
           }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    
<h1>Registrasi</h1>
<form method="POST" action="register.php">

<div>
    
</div>
    <div>
        Nama Lengkap
        <input type="text" name="txNAMA">
    </div>
    <div>
        Email
        <input type="email" name="txEMAIL">
    </div>
    <div>
        Username
        <input type="text" name="txUSER">
    </div>
    <div>
        Password
        <input type="password" name="txPASS1">
    </div>
    <div>
        Verifikasi
        <input type="password" name="txPASS2">
    </div>
    <div>
        <button type="submit"> Register</button>
    </div>

</form>

</body>
</html>
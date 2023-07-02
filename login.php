<?php
    session_start();
    include("cmd/user.php");
    
    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];

        $islogin = ceklogin($user, $pwd);
        if($islogin["STATUS"]){
            $_SESSION["login"]= md5($user);
            $_SESSION["NAMA"]= $islogin["NAMA"];

            header("location: dashboard.php");
        }else{
            $_SESSION["login"] = " ";
            $_SESSION["NAMA"] = " ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    
<form action="login.php" method="POSt">
    <h3>Form login</h3>
    <div>
        User name
        <input type="text" name="txUSER">
    </div>

    <div>
        Password
        <input type="password" name="txPASS">
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
</body>
</html>
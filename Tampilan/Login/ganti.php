<?php
include "database.php";
session_start();

if(isset($_POST["ganti"])){
    $pass1 = $_POST["password1"];
    $pass2 = $_POST["password2"];
    $username = $_SESSION["username"];


    if($pass1 == $pass2){
        $ganti = "UPDATE users SET password = '$pass1' WHERE username = '$username'";
   
        if($db->query($ganti)){
            $mes = "Ganti Password Berhasil";
    
        } else {
            $mes = "Ganti Password Gagal";
        }
    }else {
        $mes = "Password Tidak Cocok";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ganti Password</h1>
<form action="ganti.php" method="post">
    <p>Masukkan password <input type="password" name="password1"></p>
    <p>Ulangi password <input type="password" name="password2"></p>
    <button type="submit" name="ganti">Ganti Password</button>

    <?php
    include "temp.html";
    ?>
</form>
</body>
</html>
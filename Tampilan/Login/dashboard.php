<?php
include "database.php";
session_start();

if(isset($_POST["update"])){
    header("location:ganti.php");
}

if(isset($_POST["delete"])){
    $username = $_SESSION["username"];
    $hapus = "DELETE FROM users WHERE username = '$username'";


    if($db->query($register)){
        $_SESSION["info login"] = false;
        session_unset();
        session_destroy();

        header("location:login.php");

    } else {
        echo "Gagal Register: " . $db->error;

    }
}

if(isset($_POST["logout"])) {
    $_SESSION["info login"] = false;
    session_unset();
    session_destroy();

    header("location:login.php");
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
    <?php include "temp.html"
    ?>
    <h2>Dashboard</h2>
    <p>Selamat Datang Teman Ku Lala</p>

    <form action="dashboard.php"
    method="post">
<button type="submit"
name="logout">Logout</button>
</form>
<br>
<form action="dashboard.php"
    method="post">
</form>

<button type="submit"name="update">Ganti Password</button> <br> <br>
<button type="submit"name="delete">Hapus Password</button>

</body>
</html>
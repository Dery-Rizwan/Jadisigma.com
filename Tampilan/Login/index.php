<?php
session_start();
echo $_SESSION["username"];

// pindah ke dashboard
header ("location:dashboard.php");
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
</body>
</html>
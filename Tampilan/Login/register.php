<?php
$current_page = 'register';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <a href="index.php">Register</a>
            </div>
            <nav>
                <ul>
                    <li class="<?php echo ($current_page == 'index') ? 'active' : ''; ?>">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="<?php echo ($current_page == 'login') ? 'active' : ''; ?>">
                        <a href="login.php">Login</a>
                    </li>
                    <li class="<?php echo ($current_page == 'register') ? 'active' : ''; ?>">
                        <a href="register.php">Register</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

<form action="index.php" method="post">
    <p>Masukkan nama <input type="username" name="username"></p>
    <p>Masukkan password <input type="password" name="password"></p>
    <button type="submit" name="register">Daftar</button>

<?php
include "database.php";

session_start();

echo $_SESSION["username"];
if (isset($_POST['register'])) {
    $password = $_POST['password'];
    $username = $_POST['username'];


    if(isset($_SESSION["info login"]))


    $register = "INSERT INTO bentabel (username, password) VALUES ('$username', '$password')";
    if($db->query($register)){
        echo "Berhasil";    
    } else{
        echo "GAGAL";
    }
}
?>
</form>
</body>
</html>
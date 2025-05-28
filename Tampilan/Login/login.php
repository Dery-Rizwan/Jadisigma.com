<?php
$current_page = 'login';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <a href="index.php">Login</a>
            </div>
            <nav>
                <ul>
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
</body>
<body>
    <a>
<form action="login.php" method="post">
    <p>Masukkan nama <input type="username" name="username"></p>
    <p>Masukkan password <input type="password" name="password"></p>
    <button type="submit" name="login">LOGIN</button>

</form>

<?php
include "database.php";

//session
session_start();

if (isset($_POST['login'])) {
    $password = $_POST['password'];
    $username = $_POST['username'];

    $login = "SELECT * FROM bentabel WHERE username='$username' AND password = '$password'";
    $masuk=$db->query($login);

        if($masuk->num_rows > 0){
            echo "Berhasil login";
            $tabel = $masuk->fetch_assoc();
            $_SESSION["username"] = $tabel["username"] . $tabel["password"];
            $_SESSION["info login"] = true;

            echo $_SESSION["username"];

// pindah ke dashboard
header ("location:dashboard.php");

        } else {
            echo "Gagal login";
        }
}
?>
</body>
</html>
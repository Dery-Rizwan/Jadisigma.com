<?php

session_start();

$current_page = 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="wrapper">
    <header>
            <div class="container">
                <div class="logo">
                    <a href="index.php">Home </a>
                </div>
                <nav>
                    <ul>
                        <li class="<?php echo ($current_page == 'hp') ? 'active' : ''; ?>">
                            <a href="hp.php">JadiSigma</a>
                        <li class="<?php echo ($current_page == 'Tampilan') ? 'active' : ''; ?>">
                            <a href="look.php">Tampilan</a>
                        <li class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">
                            <a href="about.php">About Us</a>
                        </li>
                        <li class="<?php echo ($current_page == 'work') ? 'active' : ''; ?>">
                            <a href="hobby.php">Komunitas</a>
                        </li>
                        <li class="<?php echo ($current_page == 'info') ? 'active' : ''; ?>">
                            <a href="media.php">Sosial Media</a>
                        <li class="<?php echo ($current_page == 'tutorial') ? 'active' : ''; ?>">
                            <a href="tutorial.php">Tutorial</a>
                        </li>
                        <li class="<?php echo ($current_page == 'login') ? 'active' : ''; ?>">
                            <a href="masuk/login.php">Login</a>
                        </li>
                        <li class="<?php echo ($current_page == 'register') ? 'active' : ''; ?>">
                            <a href="masuk/register.php">Register</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>Selamat datang di JadiSigma! </h1>
                            <p>

Halo disni anda akan menemukan berbagai alat gym berkualitas tinggi yang siap membantu Anda meraih tubuh ideal dan gaya hidup sehat yang selalu Anda impikan.

Kami tahu, memulai atau melanjutkan perjalanan fitness bisa jadi tantangan. Tapi jangan khawatir, JadiSigma hadir untuk menjadi partner Anda. Kami menyediakan peralatan yang kokoh, nyaman, dan fungsional, baik untuk Anda yang baru memulai maupun para pegiat gym yang sudah berpengalaman.

Jelajahi setiap kategori, temukan alat yang paling sesuai dengan kebutuhan dan tujuan Anda.

Selamat berbelanja dan selamat memulai transformasi Anda bersama JadiSigma!</p>
                        </div>
                        <img src="aset/th(0).jpg" alt="Foto">
                    </div>
                </div>
            </section>
        </main>
        
        <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Kelompok Kita</p>
        </div>
    </footer>
    </div>
</body>
</html>
<?php
session_start();
$current_page = 'media';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sosial Media</title>
    <link rel="stylesheet" href="media.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="logo">
                    <a href="index.php">Sosial Media</a>
                </div>
                <nav>
                    <ul>
                        <li class="<?php echo ($current_page == 'hp') ? 'active' : ''; ?>">
                            <a href="hp.php">JadiSigma</a>
                        <li class="<?php echo ($current_page == 'Tampilan') ? 'active' : ''; ?>">
                            <a href="look.php">Tampilan</a>
                        <li class="<?php echo ($current_page == 'index') ? 'active' : ''; ?>">
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
                        </li>
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
<body>
        <main>
            <div class="container">
                <div class="hero">
                    <table class="media-table">
                        <tr>
                            <!-- Instagram -->
                            <td>
                                <div class="media-card">
                                    <h2>Instagram</h2>
                                    <img src="aset/3.jpg" alt="Profil_Instagram" class="media-image">
                                    <div class="divider"></div>
                                    <p>@JadiSigma_</p>
                                </div>
                            </td>
                            
                            <!-- Facebook -->
                            <td>
                                <div class="media-card">
                                    <h2>Facebook</h2>
                                    <img src="aset/1.jpg" alt="Profil_FaceBook" class="media-image">
                                    <div class="divider"></div>
                                    <p>@JadiSigma</p>
                                </div>
                            </td>
                            
                            <!-- TikTok -->
                            <td>
                                <div class="media-card">
                                    <h2>Tiktok</h2>
                                    <img src="aset/2.jpg" alt="Tiktok_profil" class="media-image">
                                    <div class="divider"></div>
                                    <p>@JadiSigma_</p>
                                </div>
                            </td>
                            
                            <!-- WhatsApp -->
                            <td>
                                <div class="media-card">
                                    <h2>WhatsApp</h2>
                                    <img src="aset/4.jpg" alt="WhatsApp_Profil" class="media-image">
                                    <div class="divider"></div>
                                    <p>+62 822 12314521</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
</body>
        <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Kelompok Kita</p>
        </div>
    </footer>
    </div>
</body>
</html>
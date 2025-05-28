<?php
session_start();
$current_page = 'hp';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JadiSigma</title>
    <link rel="stylesheet" href="hp.css">
</head>
<body>
    <div class="wrapper">
        <header>    
            <div class="container">
                <div class="logo">
                    <a href="index.php">JadiSigma</a>
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
    </head>

    <div class="search-container">
        <div class="search-box">
            <input type="text" placeholder="Cari Apapun tentang sigma..">
            <button>Cari</button>
        </div>
    </div>
    
    <section class="hero">
        <h1>Jadilah Sigma di JadiSigma.com</h1>
        <p>Temukan Tentor dan Kolega Sigma mu!</p>
        <button class="cta-button">Jadilah Sigma!</button>
    </section>
    
    <section class="features">
        <h2 class="section-title">Kenapa Harus JadiSigma.com??</h2>
        <div class="features-container">
            <div class="feature">
                <div class="feature-icon">🏋‍♀</div>
                <h3>Menjadi Kuat Seperti Sigma</h3>
                <p>Belajar dan jadi kuat bersama para Sigma lainnya, Jadilah kuat bersama Sigma lainnya di JadiSigma.com!</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🗿</div>
                <h3>Menjadi Bijaksana</h3>
                <p>Menjadi Sigma adalah menjadi pribadi yang Bijaksana, Itulah Dasar JadiSigma.com</p>
            </div>
            <div class="feature">
                <div class="feature-icon">📚</div>
                <h3>Mendapat Ilmu Yang Bermanfaat</h3>
                <p>Tidak hanya kuat dan bijaksana, Seorang Sigma haruslah pintar, belajar dengan para Sigma lainnya di JadiSigma.com!</p>
            </div>
        </div>
    </section>
    
    <section class="products">
        <h2 class="section-title">Hal Yang Kami Tawarkan Untuk Anda</h2>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.kym-cdn.com/photos/images/facebook/001/689/422/941.png" alt="Produk 1" />
                </div>
                <div class="product-info">
                    <h3 class="product-title">Paket Sigma Religius</h3>
                    <p class="product-price">Rp0</p>
                    <button class="product-button">Jadi Sigma Religius Sekarang!</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://wallpapercave.com/wp/wp9917278.jpg" alt="Produk 2" />
                </div>
                <div class="product-info">
                    <h3 class="product-title">Paket Sigma Strong</h3>
                    <p class="product-price">Rp 4.750.000</p>
                    <button class="product-button">Jadilah Sigma Strong Sekarang!</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.LN2TomkNXnseXorP8xvkrQHaJM&pid=Api&P=0&h=180" alt="Produk 3" />
                </div>
                <div class="product-info">
                    <h3 class="product-title">Paket Sigma Smart</h3>
                    <p class="product-price">Rp 100.000</p>
                    <button class="product-button">Jadilah Sigma Smart Sekarang!</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.Q8nCsWrfJLfSbal5KyVGiQHaJH&pid=Api&P=0&h=180" alt="Produk 4" />
                </div>
                <div class="product-info">
                    <h3 class="product-title">Paket Sigma Rich</h3>
                    <p class="product-price">Rp 15.899.000</p>
                    <button class="product-button">Jadilah Sigma Rich Sekarang!</button>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Kelompok Kita</p>
        </div>
    </footer>
</body>
</html>
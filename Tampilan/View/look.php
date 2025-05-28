<?php

$current_page = 'Tampilan';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
    <link rel="stylesheet" href="look.css">
</head>
<body class="wrapper">
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php">Tampilan</a>
            </div>
            <nav>
                <ul>
                    <li class="<?php echo ($current_page == 'hp') ? 'active' : ''; ?>">
                        <a href="hp.php">JadiSigma</a>
                    </li>
                    <li class="<?php echo ($current_page == 'Tampilan') ? 'active' : ''; ?>">
                         <a href="look.php">Tampilan</a> 
                    </li>
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

    </head>
<body>
    <?php
    // Simulasi data produk
    $products = [
        [
            'id' => 1,
            'name' => 'Dumbbell Set 20kg',
            'price' => 750000,
            'description' => 'Set dumbbell premium dengan berat 20kg, cocok untuk latihan di rumah',
            'icon' => '🏋️'
        ],
        [
            'id' => 2,
            'name' => 'Treadmill Elektrik',
            'price' => 8500000,
            'description' => 'Treadmill elektrik berkualitas tinggi dengan berbagai program latihan',
            'icon' => '🏃'
        ],
        [
            'id' => 3,
            'name' => 'Bench Press',
            'price' => 2500000,
            'description' => 'Bangku bench press yang kuat dan stabil untuk latihan dada',
            'icon' => '💪'
        ],
        [
            'id' => 4,
            'name' => 'Resistance Band',
            'price' => 150000,
            'description' => 'Set resistance band dengan berbagai tingkat resistensi',
            'icon' => '🎯'
        ],
        [
            'id' => 5,
            'name' => 'Yoga Mat Premium',
            'price' => 300000,
            'description' => 'Matras yoga premium anti-slip dengan ketebalan optimal',
            'icon' => '🧘'
        ],
        [
            'id' => 6,
            'name' => 'Kettlebell 12kg',
            'price' => 450000,
            'description' => 'Kettlebell besi cor 12kg untuk latihan functional training',
            'icon' => '⚡'
        ]
    ];

    // Simulasi cart
    $cartCount = 0;
    
    // Handle add to cart
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
        $cartCount++;
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                alert('Produk berhasil ditambahkan ke keranjang!');
                updateCartCount(" . $cartCount . ");
            });
        </script>";
    }

    function formatCurrency($amount) {
        return 'Rp ' . number_format($amount, 0, ',', '.');
    }
    ?>

    <header>
        <nav class="container">
            <a href="#" class="cart-icon">
                🛒 Keranjang
                <span class="cart-count" id="cart-count"><?php echo $cartCount; ?></span>
            </a>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h1>Wujudkan Tubuh Impian Anda</h1>
            <p>Peralatan gym berkualitas tinggi untuk mencapai target Sigma Anda</p>
            <a href="#products" class="cta-button">Belanja Sekarang</a>
        </div>
    </section>

    <section id="products" class="products">
        <div class="container">
            <h2>Produk Unggulan</h2>
            <div class="product-grid">
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <div class="product-image">
                            <?php echo $product['icon']; ?>
                        </div>
                        <div class="product-info">
                            <h3><?php echo $product['name']; ?></h3>
                            <p><?php echo $product['description']; ?></p>
                            <div class="product-price"><?php echo formatCurrency($product['price']); ?></div>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                                <button type="submit" name="add_to_cart" class="add-to-cart">Tambah ke Keranjang</button>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
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
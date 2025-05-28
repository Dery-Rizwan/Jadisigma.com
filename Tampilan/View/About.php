<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about.css">
</head>
<body>

    <header>
            <div class="container">
                <div class="logo">
                    <a href="index.php">About Us </a>
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
    

    <main>
        <div class="container">
            <div class="hero">
                <h1 style="text-align: center; margin-bottom: 30px; font-size: 32px; color: #333;">About Us</h1>
                
                <div class="hero-content">
                    <div class="hero-text">
                        <div style="text-align: center; margin-bottom: 30px;">
                            <img src="aset/th(0).jpg" alt="Foto Benhard" style="width: 250px; height: 250px; border-radius: 50%; object-fit: cover; margin-bottom: 15px; border: 5px solid #f5f5f5;">
                            
                            <h2 style="margin: 10px 0 5px 0; font-size: 24px; color: #333;">JadiSigma</h2>
                            <p style="color: #777; font-size: 16px; margin-top: 5px;">:D</p>
                        </div>
                    </div>
                    
                    <div class="hero-text">
                        <div style="margin-bottom: 20px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-radius: 8px; overflow: hidden;">
                                <tr>
                                    <td colspan="2" style="background-color: #3498db; color: white; padding: 10px 15px; font-weight: bold; font-size: 18px;">
                                        Informasi Perusahaan
                                    </td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 15px; font-weight: 600; color: #555; width: 40%;">Nama Perusahaan</td>
                                    <td style="padding: 15px; color: #333;">JadiSigma</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 15px; font-weight: 600; color: #555;">Tempat </td>
                                    <td style="padding: 15px; color: #333;">Surabaya, Jakarta, Bandung</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 15px; font-weight: 600; color: #555;">Tanggal Dibuat</td>
                                    <td style="padding: 15px; color: #333;">27 Mei 2025</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 15px; font-weight: 600; color: #555;">Pencipta</td>
                                    <td style="padding: 15px; color: #333;">Kelompok Kita</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600; color: #555;">Contact</td>
                                    <td style="padding: 15px; color: #333;">Kelompokkita@gmail.com</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-radius: 8px; overflow: hidden;">
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-radius: 8px; overflow: hidden;">
                                <tr>
                                    <td colspan="2" style="background-color: #27ae60; color: white; padding: 10px 15px; font-weight: bold; font-size: 18px;">
                                        Detail Barang
                                    </td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 15px; font-weight: 600; color: #555; width: 40%;">Barbel</td>
                                    <td style="padding: 15px; color: #333;">200 unit</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 15px; font-weight: 600; color: #555;">Bench Press</td>
                                    <td style="padding: 15px; color: #333;">50 unit</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 15px; font-weight: 600; color: #555;">Treadmill</td>
                                    <td style="padding: 15px; color: #333;">30 unit</td>
                                </tr>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <td style="padding: 15px; font-weight: 600; color: #555;">Upright Exercise Bike</td>
                                    <td style="padding: 15px; color: #333;">20 unit</td>
                                </tr>
                                <tr>
                                    <td style="padding: 15px; font-weight: 600; color: #555;">Leg Press Machine</td>
                                    <td style="padding: 15px; color: #333;">50 unit</td>
                                </tr>
                                </table>


                            </table>
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Kelompok Kita</p>
        </div>
    </footer>
</body>
</html>
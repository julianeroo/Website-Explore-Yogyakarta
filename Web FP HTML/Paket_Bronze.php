<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paket Bronze</title>
    <link rel="stylesheet" href="Paket_Bronze.css" />
</head>

<body>
    <!-- Section Header Untuk page bagian homepage -->
    <section class="header">
        <div class="homepage">
            <div class="navbar">
                <a href="AboutUs.php"><img src="IMG/logo.svg" alt="" class="logo" /></a>
                <ul>
                    <li><a href="Homepage.php">Home</a></li>
                    <li><a href="Destinations.php">Destinations</a></li>
                    <li><a href="Package.php">Package</a></li>
                    <li><a href="Information.php">Information</a></li>
                    <?php if (isset($_SESSION['Email'])) : ?>
                    <a href="Profile.php"><button class="login-btn" type="button">PROFILE</button></a>
                    <?php else : ?>
                    <a href="Account.php"><button class="login-btn" type="button">LOG IN</button></a>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="texthome">
                <h1>Paket Bronze</h1>
                <h2>2 Hari 1 Malam</h2>
                <br /><br />
                <h6>
                    Paket Bronze ini menyediakan paket tour dengan pilihan 3 wisata dan
                    Hotel. <br />
                    Yaitu Lava Tour ,Bungker Kaliadem, dan ke Pantai Parangtritis
                </h6>
                <br /><br />
                <h6>Harga : Rp400.000 / tiket5</h6>
                <div class="card-content">
                    <a href="pembayaran1.php" class="btn">Booking Now</a>
                </div>
            </div>
            <div class="textsisi">
                <div class="textsisi1">
                    <h3>History and Heritage</h3>
                    <ul>
                        <li>
                            Yogyakarta has long occupied <br />
                            one of them important role as the center<br />
                            the world of history and tourism <br />for Indonesia
                        </li>
                    </ul>
                </div>
                <div class="textsisi2">
                    <h3>People and Culture</h3>
                    <ul>
                        <li>
                            Yogyakarta has a rich culture<br />
                            Formed by the diversity of its society.<br />
                            which is the basis<br />
                            cultural identity.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- section sponsor untuk bagian sponsor/iklan -->
    <section class="sponsor">
        <div class="iklan">
            <div class="Bank"><img src="IMG/Bank BPD.svg" alt="Bank" /></div>
            <div class="Istimewa">
                <img src="IMG/Jogja Istimewa.svg" alt="Istimewa" />
            </div>
            <div class="G20"><img src="IMG/G20.svg" alt="G20" /></div>
            <div class="Pesona">
                <img src="IMG/Pesona Indonesia.svg" alt="Pesona" />
            </div>
        </div>
    </section>

    <!-- section untuk footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-logo">
                    <img src="IMG/logo.svg" alt="logo" width="250vh" />
                </div>
                <div class="footer-menu">
                    <div class="footer-col">
                        <h4>About</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">contact us</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">features</a></li>
                            <li><a href="#">blogs</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Support</h4>
                        <ul>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">support centre</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">feedback</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <ul>
                            <li><a href="#">instagram</a></li>
                            <li><a href="#">twitter</a></li>
                            <li><a href="#">facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
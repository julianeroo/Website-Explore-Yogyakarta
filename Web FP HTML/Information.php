<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="Information.css" />
    <title>Hiking Kings</title>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <a href="AboutUs.php"><img src="IMG/logo.svg" alt="" class="logo" /></a>
            <ul>
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="Destinations.php">Destinations</a></li>
                <li><a href="Package.php">Package</a></li>
                <li><a href="#">Information</a></li>
                <?php if (isset($_SESSION['Email'])) : ?>
                <a href="Profile.php"><button class="login-btn" type="button">PROFILE</button></a>
                <?php else : ?>
                <a href="Account.php"><button class="login-btn" type="button">LOG IN</button></a>
                <?php endif; ?>
        </div>

        <div class="content">
            <img src="IMG/contentinfo.png" alt="content" width="87%" />
        </div>
    </div>

    <section class="product1">
        <h2 class="product-category">Oleh - Oleh Khas Yogyakarta</h2>
        <button class="pre-btn"><img src="IMG/arrow.png" alt="" /></button>
        <button class="nxt-btn"><img src="IMG/arrow.png" alt="" /></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Bakpia.png" class="product-thumb" alt="" />
                    <button class="card-btn">checking</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Bakpia</h2>
                    <p class="product-short-description">
                    Bakpia adalah kue khas Yogyakarta yang terkenal dengan rasa manisnya
                    </p>
                    <span class="price">Rp 45.000,00</span><span class="actual-price">Rp 55.000,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Gudeg.png" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Gudeg</h2>
                    <p class="product-short-description">
                    Gudeg adalah hidangan khas dari Yogyakarta, Indonesia, yang terbuat dari nangka muda yang dimasak dalam santan kelapa dengan rempah-rempah.
                    </p>
                    <span class="price">Rp 20.000,00</span><span class="actual-price">Rp 25.000,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Getuk.png" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Getuk</h2>
                    <p class="product-short-description">
                    Getuk adalah jajanan tradisional Indonesia yang terbuat dari singkong yang diparut dan dicampur dengan santan, gula, garam, dan kadang-kadang pewarna makanan.
                    </p>
                    <span class="price">Rp 24.000,00</span><span class="actual-price">Rp 28.000,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Mercon.jpg" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Oseng-oseng Mercon</h2>
                    <p class="product-short-description">
                    Oseng-oseng Mercon adalah hidangan tumis pedas khas Yogyakarta yang terbuat dari potongan daging sapi, daging ayam, atau jeroan (hati, usus, dll.) yang dimasak dengan bumbu-bumbu rempah-rempah dan cabai yang sangat pedas.
                    </p>
                    <span class="price">Rp 70.000,00</span><span class="actual-price">Rp 90.000,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/MieLethek.jpg" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Mie Lethek</h2>
                    <p class="product-short-description">
                    Mie Lethek adalah mie khas Yogyakarta yang terbuat dari campuran tepung terigu, tepung beras, dan daun-daunan seperti daun pepaya atau daun singkong yang dihaluskan.
                    </p>
                    <span class="price">Rp 15.000,00</span><span class="actual-price">Rp 20.000,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/SateKere.jpg" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Sate Kere</h2>
                    <p class="product-short-description">
                    Sate Kere adalah versi sate yang lebih ekonomis namun tetap lezat dari Yogyakarta. Dibuat dengan menggunakan daging sapi atau ayam yang dipotong kecil-kecil, dicampur dengan bumbu rempah-rempah, dan ditusuk menggunakan tusukan bambu.
                    </p>
                    <span class="price">Rp 25.000,00</span><span class="actual-price">Rp 35.000,00</span>
                </div>
            </div>
        </div>
    </section>
    <section class="product2">
        <h2 class="product-category"></h2>
        <button class="pre-btn"><img src="IMG/arrow.png" alt="" /></button>
        <button class="nxt-btn"><img src="IMG/arrow.png" alt="" /></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Batik.png" class="product-thumb" alt="" />
                    <button class="card-btn">checking</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Batik</h2>
                    <p class="product-short-description">
                    Batik Yogyakarta merupakan seni membatik kain yang menggunakan motif-motif tradisional seperti parang, kawung, atau flora dan fauna lokal. Batik ini dihasilkan melalui proses cermat pewarnaan dan pembatikan secara manual.
                    </p>
                    <span class="price">Rp 215.000,00</span><span class="actual-price">Rp 250.000,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/gerabah.jpg" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Gerabah Kasongan</h2>
                    <p class="product-short-description">
                    Gerabah Kasongan adalah kerajinan gerabah yang berasal dari desa Kasongan, Yogyakarta. Gerabah ini terkenal dengan desainnya yang unik dan motif alam seperti bunga dan daun.
                    </p>
                    <span class="price">Rp 325.000,00</span><span class="actual-price">Rp 375.000,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/blangkon.jpg" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Blangkon</h2>
                    <p class="product-short-description">
                    Blangkon adalah penutup kepala tradisional pria Jawa, khususnya dari Yogyakarta. Terbuat dari kain batik yang dilipat dan diikat dengan cara tertentu, menciptakan bentuk yang khas.
                    </p>
                    <span class="price">Rp 75.000,00</span><span class="actual-price">Rp 100.000,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/batikkayu.jpg" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kerajian Batik Kayu</h2>
                    <p class="product-short-description">
                    Batik kayu adalah seni ukir kayu yang menghasilkan motif-motif batik tradisional. Biasanya diukir secara manual dan diwarnai dengan tangan, menciptakan karya seni yang unik dan indah.
                    </p>
                    <span class="price">Rp 300.000,00</span><span class="actual-price">Rp 325.000,00</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/kaosjogja.jpeg" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Kaos Khas Jogja</h2>
                    <p class="product-short-description">
                    Kaos khas Jogja sering kali memiliki desain yang mencerminkan budaya dan keunikan Yogyakarta, seperti gambar landmark atau kata-kata yang khas.
                    </p>
                    <span class="price">Rp 25.000,00</span><span class="actual-price">Rp 35.000,00</span>
                </div>
            </div>
        </div>
    </section>
    <!-- section footer untuk footer yang terdapat logo dan menu -->
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
    <script src="script.js"></script>
</body>

</html>
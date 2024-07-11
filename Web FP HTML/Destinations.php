<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Destinations.css" />
    <title>Web Pariwisata Yogyakarta</title>
</head>

<body>
    <!-- Section Header Untuk page bagian homepage yang merangkup navbar dan  isi content homepage -->
    <section class="header">
        <div class="homepage">
            <div class="navbar">
                <a href="AboutUs.php"><img src="IMG/logo.svg" alt="" class="logo" /></a>
                <ul>
                    <li><a href="Homepage.php">Home</a></li>
                    <li><a href="#">Destinations</a></li>
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
                <h1>Destinations</h1>
                <h6>Yogyakarta is rich in heritage and history. This City</h6>
                <h6>home to hundreds of important historical sites.</h6>
            </div>
        </div>
    </section>
    <!-- Section content Untuk page bagian content destinations page -->
    <section class="content">
        <div class="destinations">
            <div class="title">
                <h1>Best Destinations</h1>
                <p>
                    Explore the sights <br />
                    The enchanting city of Yogyakarta, from <br />
                    the stunning slopes of Merapi to the stunning coastal beaches.
                </p>
            </div>

            <div class="image-container">
                <div class="carddes1">
                    <div class="cardbody">
                        <h1>Kaliadem Banker</h1>
                        <p>
                            The Kaliadem Merapi Bunker is a concrete building located on the
                            <br />
                            slopes of Mount Merapi in Yogyakarta. This bunker was built in
                            <br />
                            2001 as an evacuation place for the community during a volcanic
                            <br />
                            eruption. However, in 2006, this bunker was buried by <br />
                            pyroclastic flows during the large eruption of Merapi.
                        </p>
                    </div>
                    <img src="IMG/card1.png" alt="" />
                </div>
                <div class="carddes2">
                    <div class="cardbody">
                        <h1>Malioboro</h1>
                        <p>
                            one of the three roads in Yogyakarta City which stretches from
                            <br />
                            Tugu Yogyakarta to the Yogyakarta Kilometer Zero Point <br />
                            intersection.
                        </p>
                    </div>
                    <img src="IMG/card4.png" alt="" />
                </div>
                <div class="carddes3">
                    <div class="cardbody">
                        <h1>Tumpeng Menoreh</h1>
                        <p>
                            In Kulon Progo, Yogyakarta, there is a tourist attraction that
                            <br />
                            is famous for its stunning natural views, namely Tumpeng <br />
                            Menoreh. This place offers a panoramic view of the green and
                            <br />
                            beautiful Menoreh hills from a height of 900 meters above sea
                            <br />
                            level.
                        </p>
                    </div>
                    <img src="IMG/card2.png" alt="" />
                </div>
                <div class="carddes4">
                    <div class="cardbody">
                        <h1>Parangtritis Beach</h1>
                        <p>
                            Known as one of the most iconic beaches in Yogyakarta, <br />
                            Parangtritis offers a stunning combination of natural charm with
                            <br />
                            rich local culture. Not only is it a place to enjoy natural
                            <br />
                            beauty, Parangtritis Beach also has strong historical and <br />
                            cultural value.
                        </p>
                    </div>
                    <img src="IMG/card5.png" alt="" />
                </div>
                <div class="carddes5">
                    <div class="cardbody">
                        <h1>Prambanan Temple</h1>
                        <p>
                            Prambanan Temple Complex in Karangasem, Yogyakarta. The
                            Prambanan <br />
                            Temple Complex is the largest Hindu temple complex in Java,
                            <br />
                            which has three main temple buildings surrounded by 244 <br />
                            ancillary temples.
                        </p>
                    </div>
                    <img src="IMG/card3.png" alt="" />
                </div>
                <div class="carddes6">
                    <div class="cardbody">
                        <h1>Mangunan Pine Forest</h1>
                        <p>
                            a natural tourist destination located in Bantul, Yogyakarta,
                            <br />
                            Indonesia. Known for its natural beauty, this place offers views
                            <br />
                            of rows of towering pine trees and a cool and calming <br />
                            atmosphere. Tourists can enjoy various activities here, such as
                            <br />
                            taking photos in Instagrammable spots.
                        </p>
                    </div>
                    <img src="IMG/card6.png" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!-- section dibawah membuat tampilan slider  -->
    <section class="product1">
        <h2 class="product-category">Informations</h2>
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
                        a short line about the cloth..
                    </p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Gudeg.png" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">
                        a short line about the cloth..
                    </p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Getuk.png" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">
                        a short line about the cloth..
                    </p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Batik.png" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">
                        a short line about the cloth..
                    </p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Sandal.png" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">
                        a short line about the cloth..
                    </p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="IMG/Kerajinan.png" class="product-thumb" alt="" />
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">
                        a short line about the cloth..
                    </p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section content Untuk page bagian contct us page -->
    <section class="Contact-us">
        <div class="container-wa">
            <div class="wa">
                <div class="wa-content">
                    <h4>Contact us on Whatsapp</h4>
                    <a href="" class="btn">Star chat</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Section content Untuk page bagian banner page -->
    <section class="banner">
        <div class="banner-packet"></div>
    </section>

    <!-- Section Footer Untuk page bagian footer yag merangkup logo dan menu -->
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
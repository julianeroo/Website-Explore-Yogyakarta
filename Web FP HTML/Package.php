<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="Package.css" />
    <title>Web Pariwisata Yogyakarta</title>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <a href="AboutUs.php"><img src="IMG/logo.svg" alt="" class="logo" /></a>
            <ul>
                <li><a href="Homepage.php">Home</a></li>
                <li><a href="Destinations.php">Destinations</a></li>
                <li><a href="#">Package</a></li>
                <li><a href="Information.php">Information</a></li>
                <?php if (isset($_SESSION['Email'])) : ?>
                    <a href="Profile.php"><button class="login-btn" type="button">PROFILE</button></a>
                <?php else : ?>
                    <a href="Account.php"><button class="login-btn" type="button">LOG IN</button></a>
                <?php endif; ?>
            </ul>
        </div>

        <div class="content">
            <h2>Our Tour Package</h2>
            <div class="card-container">
                <div class="card1">
                    <img src="IMG/lava-tour-jogja_20170216_163851.jpg" alt="" />
                    <div class="card-content">
                        <img src="IMG/Rating1.png" alt="" style="display: flex; width: 60%; height: 20%" />
                        <h3>Package Gold</h3>
                        <p>
                            Malioboro is one of the street names in the center of Yogyakarta
                            city which is very well known and attached. This road is known
                            as a center for trade, culture and tourism that attracts
                            tourists from all over the world
                        </p>
                        <a href="<?php echo isset($_SESSION['Email']) ? 'Paket_Gold.php' : 'Account.php'; ?>" class="btn">Book this tour</a>
                        <?php if (!isset($_SESSION['Email'])) : ?>
                            <p style="color: red; font-style: italic; margin-top: 5px;">Please login to book this tour.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card2">
                    <img src="IMG/Parangtritis.jpg" alt="" />
                    <div class="card-content">
                        <img src="IMG/Rating.png" alt="" style="display: flex; width: 60%; height: 20%" />
                        <h3>Package Silver</h3>
                        <p>
                            Malioboro is one of the street names in the center of Yogyakarta
                            city which is very well known and attached. This road is known
                            as a center for trade, culture and tourism that attracts
                            tourists from all over the world
                        </p>
                        <a href="<?php echo isset($_SESSION['Email']) ? 'Paket_Silver.php' : 'Account.php'; ?>" class="btn">Book this tour</a>
                        <?php if (!isset($_SESSION['Email'])) : ?>
                            <p style="color: red; font-style: italic; margin-top: 5px;">Please login to book this tour.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card3">
                    <img src="IMG/traveltips.jpg" alt="" />
                    <div class="card-content">
                        <img src="IMG/Rating.png" alt="" style="display: flex; width: 60%; height: 20%" />
                        <h3>Package Bronze</h3>
                        <p>
                            Malioboro is one of the street names in the center of Yogyakarta
                            city which is very well known and attached. This road is known
                            as a center for trade, culture and tourism that attracts
                            tourists from all over the world
                        </p>
                        <a href="<?php echo isset($_SESSION['Email']) ? 'Paket_Bronze.php' : 'Account.php'; ?>" class="btn">Book this tour</a>
                        <?php if (!isset($_SESSION['Email'])) : ?>
                            <p style="color: red; font-style: italic; margin-top: 5px;">Please login to book this tour.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <li><a href="AboutUs.html">about us</a></li>
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
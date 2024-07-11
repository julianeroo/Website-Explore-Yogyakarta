<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="confirmed.css" />
  </head>
  <body>
    <!-- Section untuk Navbar -->
    <section class="header">
      <div class="homepage">
        <div class="navbar">
          <img src="IMG/logo.svg" alt="" class="logo" />
          <ul>
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="Destinations.php">Destinations</a></li>
            <li><a href="Package.php">Package</a></li>
            <li><a href="Information.php">Information</a></li>
            <?php if (isset($_SESSION['Email'])) : ?>
            <a href="Profile.php">
              <button class="login-btn" type="button">PROFILE</button>
            </a>
            <?php else : ?>
            <a href="Account.php">
              <button class="login-btn" type="button">LOG IN</button>
            </a>
            <?php endif; ?>
          </ul>
        </div>
        <div class="texthome">
          <img src="IMG/Vector.png" alt="" />
          <h2>Your Order is complete!</h2>
          <h6>
            Please check your email to make payment, we will send you a scanned
            code
          </h6>
          <div class="card-content">
            <a href="Homepage.php" class="confirmed-btn">Go to the Homepage</a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

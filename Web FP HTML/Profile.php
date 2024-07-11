<?php
session_start();

if (!isset($_SESSION['Email'])) {
  header("Location: Account.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="profile.css" />
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
                <h2><?php echo $_SESSION['Email']; ?></h2><br>
                <h3> Apakah Anda yakin ingin logout dari akun Anda?</h3>
                <div class="card-content">
                    <form action="Server.php" method="POST">
                        <button type="submit" name="logout" class="logout-btn">Logout</button>
                    </form>
                </div>
            </div>
    </section>
</body>

</html>
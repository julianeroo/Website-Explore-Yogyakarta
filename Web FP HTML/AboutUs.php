<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="AboutUs.css" />
    <title>Web Pariwisata Yogyakarta</title>
  </head>

  <body>
    <!-- Section Header Untuk page bagian homepage yang merangkup navbar dan  isi content homepage -->
    <section class="header">
      <div class="homepage">
        <div class="navbar">
          <a href="AboutUs.php"
            ><img src="IMG/logo.svg" alt="" class="logo"
          /></a>
          <ul>
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="Destinations.php">Destinations</a></li>
            <li><a href="Package.php">Package</a></li>
            <li><a href="Information.php">Information</a></li>
            <?php if (isset($_SESSION['Email'])) : ?>
            <a href="Profile.php"
              ><button class="login-btn" type="button">PROFILE</button></a
            >
            <?php else : ?>
            <a href="Account.php"
              ><button class="login-btn" type="button">LOG IN</button></a
            >
            <?php endif; ?>
          </ul>
        </div>
        <div class="texthome">
          <h1>About Us</h1>
          <h6>Discover the city's hidden gems and breathtaking landscapes</h6>
        </div>
      </div>
    </section>

    <!-- Section content Untuk page bagian content traditional page -->
    <section class="content">
      <div class="texttitle">
        <h4>Yogyakarta, a city that inspires</h4>
        <p>A uniquely Yogyakarta experience awaits in summer</p>
      </div>
      <div class="content-traditional">
        <h2>Description of Yogyakarta</h2>
        <div class="content-descrp">
          <div class="card">
            <img src="IMG/Keraton.png" alt="malioboro" />
            <div class="card1-content">
              <h3>History</h3>
              <p>
                Yogyakarta has a rich history and is important in the
                development of Indonesia. Founded in 1755 after the Treaty of
                Giyanti, Yogyakarta the center of the Yogyakarta Sultanate under
                Sultan Hamengkubuwono I. During the struggle for Indonesian
                independence, Yogyakarta played a vital role, becoming the
                temporary capital of the Republic of Indonesia from 1946 to
                1949. The city also witnessed various important events in
                national history, including the General Attack of 1 March 1949.
                Until now, Yogyakarta still maintains its rich cultural and
                historical heritage while developing as a center for education
                and tourism.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card2-content">
              <h3>Culture</h3>
              <p>
                The culture in Yogyakarta is very strong with Javanese nuances
                which are rich in traditional customs and arts. The city is
                known as the center of Javanese culture, with the palace as a
                symbol of power and culture. Arts such as batik, shadow puppetry
                and traditional dance are still highly valued and preserved.
                Yogyakarta also has a strong educational atmosphere, often
                referred to as the "Student City" due to its many well-known
                universities and educational institutions. Apart from that, the
                people are known to be friendly and maintain the values of
                mutual cooperation and togetherness.
              </p>
            </div>
            <img src="IMG/Tamansari.png" alt="malioboro" />
          </div>
        </div>
      </div>
    </section>

    <!-- class dibawah membuat tampilan slider  -->
    <section class="product1">
      <h2 class="product-category">Informations</h2>
      <button class="pre-btn"><img src="IMG/arrow.png" alt="" /></button>
      <button class="nxt-btn"><img src="IMG/arrow.png" alt="" /></button>
      <div class="product-container">
        <div class="product-card">
          <div class="product-image">
            <div class="product-brand">
              <h2>Language</h2>
              <p>
                In the city of Yogyakarta, the dominant languages ​​used are
                Javanese and Indonesian. Javanese is often used in everyday
                conversations, while Indonesian is generally used in formal and
                educational contexts.
              </p>
            </div>
            <button class="card-btn">checking</button>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <div class="product-brand">
              <h2>Traditional</h2>
              <p>
                Yogyakarta has various rich traditions, including Sekaten, a
                festival that celebrates the birth of the Prophet Muhammad with
                gamelan music and a night market.
              </p>
            </div>
            <button class="card-btn">checking</button>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <div class="product-brand">
              <h2>Language</h2>
              <p>
                In the city of Yogyakarta, the dominant languages ​​used are
                Javanese and Indonesian. Javanese is often used in everyday
                conversations, while Indonesian is generally used in formal and
                educational contexts.
              </p>
            </div>
            <button class="card-btn">checking</button>
          </div>
        </div>
        <div class="product-card">
          <div class="product-image">
            <div class="product-brand">
              <h2>Language</h2>
              <p>
                In the city of Yogyakarta, the dominant languages ​​used are
                Javanese and Indonesian. Javanese is often used in everyday
                conversations, while Indonesian is generally used in formal and
                educational contexts.
              </p>
            </div>
            <button class="card-btn">checking</button>
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
      <div class="banner-packet">
        <img src="" alt="" />
      </div>
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

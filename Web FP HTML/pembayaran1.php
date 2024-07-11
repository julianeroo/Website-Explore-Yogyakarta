<?php
session_start();
include 'db_config.php';

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
    <link rel="stylesheet" href="pembayaran1.css" />
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
    </section>
    <!-- Page Penginputan -->
    <div class="row">
        <!-- Penginputan -->
         <form action="proses1.php" method="POST" class="baris">
         <input type="hidden" name="Id" value="<?php echo isset($_SESSION['Id']) ? $_SESSION['Id'] : ''; ?>"/>
        <div class="col" id="input-section" style="color: white">
            <h4>When You Will Visit?</h4>
            <input type="date" class="colorcol" name="tanggal"
                style="margin-top: 5px; margin-bottom: 20px; width: 650px; height: 30px;" />

            <h4>Which Time</h4>
            <input type="time" class="colorcol" name="jam"
                style="margin-top: 5px; margin-bottom: 20px; width: 650px; height: 30px;" />

            <h4 style="margin-bottom: 5px">Select Your Packages</h4>
            <div class="paragraf" style="margin-bottom: 20px">
                <p style="margin-top: 5px; margin-bottom: 5px; margin: 20px; background-color: rgb(139, 134, 134);">
                    Free for kids under 6 and disabled visitors (74%+) Pregnant women,<br /><br />
                    families with strollers, and visitors on crutches can buy priority tickets at the venue
                </p>
            </div>

            <div class="row baris1" style="display: flex">
                <div class="col">
                    <h5>Adult (18+)</h5>
                    <h5 style="color: #d34605">$34.00</h5>
                </div>
                <div class="col">
                    <div class="tambah">
                        <span class="minus">-</span>
                        <span class="num">00</span>
                        <span class="plus">+</span>
                    </div>
                </div>
            </div>

            <div class="row baris1" style="display: flex">
                <div class="col">
                    <h5>Child (6-17)</h5>
                    <h5 style="color: #d34605">$22.00</h5>
                </div>
                <div class="col">
                    <div class="tambah">
                        <span class="minus1">-</span>
                        <span class="num1">00</span>
                        <span class="plus1">+</span>
                    </div>
                </div>
            </div>

            <div class="row baris1" style="display: flex">
                <div class="col">
                    <h5>Infant (0-5)</h5>
                    <h5 style="color: #d34605">Free</h5>
                </div>
                <div class="col">
                    <div class="tambah">
                        <span class="minus2">-</span>
                        <span class="num2">00</span>
                        <span class="plus2">+</span>
                    </div>
                </div>
            </div>

            <div class="col" id="input-section" style="color: white">
                <h4>Select a Payment Method</h4>
                <div>
                    <div class="payment" style="display: flex; justify-content: space-between">
                    <div class="payment-card">
                        <input
                        style="margin-top: 20px; margin-left: 10px"
                        type="radio"
                        id="paypal"
                        name="payment"
                        value="paypal"
                        checked
                        />
                        <label for="paypal" class="payment-text">PayPal</label>
                    </div>
                    <div>
                        <img class="logo-payment" src="IMG/PayPal.png" alt="" />
                    </div>
                    </div>

                    <div class="payment" style="display: flex; justify-content: space-between">
                    <div class="payment-card">
                        <input
                        style="margin-top: 20px; margin-left: 10px"
                        type="radio"
                        id="dana"
                        name="payment"
                        value="dana"
                        />
                        <label for="dana" class="payment-text">Dana</label>
                    </div>
                    <div>
                        <img class="logo-payment" src="IMG/Dana.png" alt="" />
                    </div>
                    </div>

                    <div class="payment" style="display: flex; justify-content: space-between">
                    <div class="payment-card">
                        <input
                        style="margin-top: 20px; margin-left: 10px"
                        type="radio"
                        id="shopeepay"
                        name="payment"
                        value="shopeepay"
                        />
                        <label for="shopeepay" class="payment-text">ShopeePay</label>
                    </div>
                    <div>
                        <img class="logo-payment" src="IMG/ShopeePay.png" alt="" />
                    </div>
                    </div>

                    <div class="payment" style="display: flex; justify-content: space-between">
                    <div class="payment-card">
                        <input
                        style="margin-top: 20px; margin-left: 10px"
                        type="radio"
                        id="ovo"
                        name="payment"
                        value="ovo"
                        />
                        <label for="ovo" class="payment-text">Ovo</label>
                    </div>
                    <div>
                        <img class="logo-payment" src="IMG/ovo.png" alt="" />
                    </div>
                    </div>

                    <div class="payment" style="display: flex; justify-content: space-between">
                    <div class="payment-card">
                        <input
                        style="margin-top: 20px; margin-left: 10px"
                        type="radio"
                        id="gopay"
                        name="payment"
                        value="gopay"
                        />
                        <label for="gopay" class="payment-text">Gopay</label>
                    </div>
                    <div>
                        <img class="logo-payment" src="IMG/gopay.png" alt="" />
                    </div>
                    </div>
                </div>
            </div>

            
        </div>
        <!-- Overview -->
        <div class="col package" style="background-color: white">
            <div class="baris2">
                <h2 class="baris2-text">Your Package Tour Overview</h2>
                <div style="display: flex; background-color: white">
                    <img src="IMG/Rectangle 39.png" alt="" style="background-color: white" />
                    <h4 style="background-color: white; margin-left: 20px">
                        <label id="overview-package" style="background-color: white">Package Bronze</label><br /><br />
                        <label id="overview-date" style="background-color: white">Di isi Tanggal</label><br /><br />
                        <label id="overview-time" style="background-color: white">Di isi Jam</label>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="overview" style="background-color: white">
                    <label class="qty" id="overview-adult-qty">00</label>
                    <h4 class="bawahimg">Adult (18+)</h4>
                    <label class="price" id="overview-adult-price">$0</label><br />

                    <label class="qty" id="overview-child-qty">00</label>
                    <h4 class="bawahimg">Child (6-17)</h4>
                    <label class="price" id="overview-child-price">$0</label><br />

                    <label class="qty" id="overview-infant-qty">00</label>
                    <h4 class="bawahimg">Infant (0-5)</h4>
                    <label class="price" id="overview-infant-price">$0</label><br />

                    <h4 class="bawahimg2">Total Harga</h4>
                    <label class="price" id="overview-total" style="padding-left:50% ;">Harga Total</label><br />
                </div>
                <div class="Next" id="btn">
                    <button class="NextButton" onclick="goToNextStep()">Go To The Next Step</button>
                </div>
            </div>
        </div>
        <input type="hidden" name="jumlah_dewasa" id="hidden_jumlah_dewasa">
        <input type="hidden" name="jumlah_anak" id="hidden_jumlah_anak">
        <input type="hidden" name="jumlah_bayi" id="hidden_jumlah_bayi">
        <input type="hidden" name="total_harga" id="hidden_total_harga">

        </form>

    </div>
    <script src="Pembayaran.js"></script>






    
    <script>
              const plus = document.querySelector(".plus");
              num = document.querySelector(".num");
              minus = document.querySelector(".minus");

              let a = 0;

              plus.addEventListener("click", () => {
                a++;
                a = a < 10 ? "0" + a : a;

                num.innerText = a;
                document.getElementById('hidden_jumlah_dewasa').value = a;
                console.log(a);
              });

              minus.addEventListener("click", () => {
                if (a > 0) {
                  a--;

                  a = a < 10 ? "0" + a : a;

                  num.innerText = a;
                  document.getElementById('hidden_jumlah_dewasa').value = a;
                }
              });
            
              const plus1 = document.querySelector(".plus1");
              const num1 = document.querySelector(".num1");
              const minus1 = document.querySelector(".minus1");

              let b = 0;

              plus1.addEventListener("click", () => {
                b++;
                b = b < 10 ? "0" + b : b;

                num1.innerText = b;
                document.getElementById('hidden_jumlah_anak').value = b;
                console.log(b);
              });

              minus1.addEventListener("click", () => {
                if (b > 0) {
                  b--;

                  b = b < 10 ? "0" + b : b;

                  num1.innerText = b;
                  document.getElementById('hidden_jumlah_anak').value = b;
                }
              });
            
              const plus2 = document.querySelector(".plus2");
              num2 = document.querySelector(".num2");
              minus2 = document.querySelector(".minus2");

              let c = 0;

              plus2.addEventListener("click", () => {
                c++;
                c = c < 10 ? "0" + c : c;

                num2.innerText = c;
                document.getElementById('hidden_jumlah_bayi').value = c;
                console.log(c);
              });

              minus2.addEventListener("click", () => {
                if (c > 0) {
                  c--;

                  c = c < 10 ? "0" + c : c;

                  num2.innerText = c;
                  document.getElementById('hidden_jumlah_bayi').value = c;

                }
              });
            </script>


</body>

</html>
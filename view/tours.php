<?php
$obj = new tours;
$tours = $obj->afficher();


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travigo - Travel for everyone</title>
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
    <meta name="description"
        content="Choose From a Wide Range of Properties Which Booking.com Offers. Search Now! Find What You Need At Travigo.Com, The Biggest Travel Site In The World.">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>
    <!--header--->
    <header>
        <a href="first.php" class="logo">TVT</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="first.php">Home</a></li>
            <li><a href="first.php?action=tours">Tours</a></li>
            <li><a href="first.php?action=about">About</a></li>
            <li><a href="first.php?action=contactus">Contact Us</a></li>
            <li><a href="first.php?action=login">Login</a></li>
        </ul>
    </header>
    <section class="home" id="home">
        <div class="home-text">
            <h1>Travigo <br> Travel</h1>
            <p>Explore our trips and live The Good Life with Travigo <br> Tours that make you fall in love with the
                world.</p>
            <a href="#" class="home-btn">Let's go now</a>
        </div>
    </section>
    <section class="container1">
        <div class="text">
            <h2>Be Free To Choose Your Tour</h2>
        </div>
        <div class="kam">
            <img src="img/map.png">
        </div>
    </section>


    <section class="destination" id="destination">
        <div class="destination-content1">
            <?php
            foreach ($tours as $tour) {
            ?>
            <div class="col-content">
                <img src="imgupload/<?= $tour['immage'] ?>">
                <h5>
                    <?= $tour['ville'] ?>
                </h5>
                <p>
                    <?= $tour['pays'] ?>
                </p>
            </div>
            <?php
            }
            ?>
        </div>

    </section>
    </section>
    <section align="center" class="container">
        <div class="text">
            <h2>Our Hotels Around The World</h2>
        </div>
    </section>
    <section class="destination" id="destination">
        <div class="destination-content">

            <div class="col-content">
                <img src="https://img.freepik.com/photos-gratuite/baignoire-luxe-dans-chambre-hotel_1150-10837.jpg?w=360&t=st=1666089474~exp=1666090074~hmac=f93663b9845d08562208474fb2988f376046921bc531ac28e5b0d539019ecf40"
                    alt="hotels flights travelocity airline tickets vacation ">
                <h5>Pestana Cr7</h5>
                <p>Lisbon</p>
            </div>

            <div class="col-content">
                <img src="https://img.freepik.com/photos-premium/bel-hotel_100800-21983.jpg?w=360">
                <h5>Aventa</h5>
                <p>UK</p>
            </div>
            <div class="col-content">
                <img src="https://img.freepik.com/photos-premium/interieur-scandinave-chambre-coucher-fauteuil-lit-osier-petite-table-bois-vase-bois_179135-2872.jpg?w=360"
                    alt="hotels flights travelocity airline tickets vacation ">
                <h5>Quetta</h5>
                <p>France</p>
            </div>
    </section>
    <!--Newsletter--->
    <section class="newsletter">
        <div class="news-text">
            <h2>Newsletter</h2>
            <p>Subscribe For more HTML, CSS, and <br> coding tutorials</p>
        </div>

        <div class="send">
            <form>
                <input type="email" placeholder="Write Your Email" required>
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
    <!--footer--->
    <section id="contact">
        <div class="footer">
            <div class="main">
                <div class="list">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Tours</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Tour</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href="#">98 West 21th Street</a></li>
                        <li><a href="#">New York NY 10016</a></li>
                        <li><a href="#">+(123)-123-1234</a></li>
                        <li><a href="#">info@travigo.com</a></li>
                        <li><a href="#">+(123)-123-1234</a></li>
                    </ul>
                </div>

                <div class="list">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-linkedin'></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="end-text">
            <p>Copyright ©2022 All rights reserved | Travigo</p>
        </div>
    </section>

    <!--link to js--->
    <script type="text/javascript" src="../js/script.js"></script>

</body>

</html>
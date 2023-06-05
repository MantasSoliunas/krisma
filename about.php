<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Krisma</title>    
</head>
<body>

<!-- HEADER -->

    <header class="site-header">
    <script>
    function myFunction() {
    var x = document.getElementById('mMenu');
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
    </script>
        <div class="flex-between">
            <div class="info">
                <ul class="info">
                <li><i class="bi bi-envelope"></i><a href="mailto:info@krisma.lt">info@krisma.lt</a></li>
                <li><i class="bi bi-phone"></i><a href="tel:+37062210504">+370 698 21301</a></li>
                </ul>
            </div>
            <div class="socials">
                <ul class="socials">
                <li><a href="http://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                <li><a href="http://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                <li><a href="http://www.linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="http://www.cargo.lt" target="_blank"><i class="bi bi-truck"></i></a></li>
                </ul>
            </div>
        </div>
    </header>

<!-- NAVIGATION -->

    <section class="navi">
        <div class="flex-between">
            <div class="logo">
                <a href="index.php"><img src="img/logo_color.png" alt="Krisma logo" width="161px"></a>
            </div>
            <nav>
                <ul class="main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul id="mMenu" class="main-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="bi bi-list"></i>
                </a>
            </nav>
        </div>
    </section>

<!-- ABOUT PAGE -->

    <section class="about-page">
        <div class="container">
            <div class="about-row1">
                <h3 class="h3desktop">We take pride in being a family business with over 20 years of experience in delivering exceptional shipping solutions. Our dedication to providing high-quality services sets us apart in the industry. We prioritize clear communication, attention to detail, and personalized solutions tailored to your requirements. </h3>
                <img src="img/drone1.webp" alt="drone photo" width="550px">
                <h3 class="h3mobile">We take pride in being a family business with over 20 years of experience in delivering exceptional shipping solutions. Our dedication to providing high-quality services sets us apart in the industry.</h3>
            </div>
            <div class="splitline"></div>
            <div class="about-row2">
                
                <img src="img/drone2.webp" alt="drone photo" width="550px">
                <h3 class="h3mobile">With our extensive knowledge and expertise, we ensure that your goods are handled with the utmost care and delivered to their destination in a timely manner.</h3>
                <h3 class="h3desktop">With our extensive knowledge and expertise, we ensure that your goods are handled with the utmost care and delivered to their destination in a timely manner. Join countless satisfied customers who have experienced the difference of working with our reliable and customer-centric company. </h3>
            </div>
            <div class="splitline"></div>
            <div class="about-row3" style="background-image: url('img/truck-moving.png');">
                <div class="row3-fleet">
                    <h2>30+</h2>
                    <p>Trucks in our current fleet</p>
                </div>
                <div class="row3-experience">
                    <h2>20+</h2>
                    <p>Years of experience in the field</p>
                </div>
                <div class="row3-kilometers">
                    <h2>50M+</h2>
                    <p>Kilometers our trucks made over the years</p>
                </div> 
            </div>
            <div class="mobile-about-row3">
                <div class="row3-fleet" style="background-image: url('img/truck-mobile.png');">
                    <h2>30+</h2>
                    <p>Trucks in our current fleet</p>
                </div>
                <div class="splitline"></div>
                <div class="row3-experience" style="background-image: url('img/truck-mobile.png');">
                    <h2>20+</h2>
                    <p>Years of experience in the field</p>
                </div>
                <div class="splitline"></div>
                <div class="row3-kilometers" style="background-image: url('img/truck-mobile.png');">
                    <h2>50M+</h2>
                    <p>Kilometers our trucks made over the years</p>
                </div>
            </div>
            <div class="splitline"></div>
        </div>
    </section>

<!-- FOOTER MAIN -->

    <section class="footer-main">
        <div class="flex-between">
            <div class="who">
                <h2>Who we are</h2>
                <a href="index.php"><img src="img/logo_white.png" alt="Krisma logo" width="161px"></a>
                <p>With a strong emphasis on customer satisfaction and attention to detail, we have built a reputation as a trusted and dependable partner for businesses and individuals alike.</p>
                <a href="about.php"><strong>More about us<i class="bi bi-arrow-right"></i></strong></a>
            </div>
            <div class="contact-info">
                <h2>Let us know!</h2>
                <p>You can contact us every business day from 8am to 5pm and we will make sure to find a solution to all your needs</p>
                <i class="bi bi-geo-alt"></i><a href="https://goo.gl/maps/FUevTxM8EGbVHxTx9" target="_blank">Centrinė g. 2A, Ramučiai, Kauno r. LT54464</a>
                <br>
                <i class="bi bi-phone"></i><a href="tel:+37069821301">+370 698 21301</a>
                <br>
                <i class="bi bi-envelope"></i><a href="mailto:info@krisma.lt">info@krisma.lt</a>
            </div>
        </div>
    </section>

<!-- FOOTER SUB -->

    <footer class="footer-sub">
        <div class="flex-between">
            <div class="copyright">
                <p>&copy;<?php echo date('Y'); ?> Krisma. All rights reserved.</p>
            </div>
            <div class="socials">
                <ul class="socials">
                <li><a href="http://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                <li><a href="http://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                <li><a href="http://www.linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="http://www.cargo.lt" target="_blank"><i class="bi bi-truck"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
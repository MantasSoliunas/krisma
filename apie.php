<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css">
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
                <a href="pradinis.php"><img src="img/logo_color.png" alt="Krisma logo" width="161px"></a>
            </div>
            <nav>
                <ul class="main-nav">
                    <li><a href="pradinis.php">Pradinis</a></li>
                    <li><a href="apie.php">Apie</a></li>
                    <li><a href="kontaktai.php">Kontaktai</a></li>
                    <li><a href="/project_new/en/about.php"><span class="fi fi-gb"></span></a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul id="mMenu" class="main-nav">
                    <li><a href="pradinis.php">Pradinis</a></li>
                    <li><a href="apie.php">Apie</a></li>
                    <li><a href="kontaktai.php">Kontaktai</a></li>
                    <li><a href="/project_new/en/about.php"><span class="fi fi-gb"></span></a></li>
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
                <h3 class="h3desktop">Mes didžiuojamės būdami šeimos verslu su daugiau nei 20 metų patirtimi, teikiančiu išskirtines pristatymo sprendimus. Mūsų pasižymėjimas aukštos kokybės paslaugomis išskiria mus šioje srityje. Mes skiriame pirmenybę aiškiai komunikacijai, detaliems sprendimams ir Jūsų reikalavimams pritaikytiems individualiems sprendimams.</h3>
                <img src="img/drone1.webp" alt="drone photo" width="550px">
                <h3 class="h3mobile">Mes didžiuojamės būdami šeimos verslu su daugiau nei 20 metų patirtimi, teikiančiu išskirtines pristatymo sprendimus. Mūsų pasižymėjimas aukštos kokybės paslaugomis išskiria mus šioje srityje. </h3>
            </div>
            <div class="splitline"></div>
            <div class="about-row2">
                <img src="img/drone2.webp" alt="drone photo" width="550px">
                <h3 class="h3mobile">Su mūsų giliomis žiniomis ir įgūdžiais, užtikriname, kad Jūsų kroviniai būtų tvarkingai aptarnauti ir laiku pristatyti į jų paskirties vietą.</h3>
                <h3 class="h3desktop">Su mūsų giliomis žiniomis ir įgūdžiais, užtikriname, kad Jūsų kroviniai būtų tvarkingai aptarnauti ir laiku pristatyti į jų paskirties vietą. Prisijunkite prie begalės patenkintų klientų, kurie jau išgyveno skirtumą dirbdami su mūsų patikima ir į kliento poreikius orientuota įmone. </h3>
            </div>
            <div class="splitline"></div>
            <div class="about-row3" style="background-image: url('img/truck-moving.png');">
                <div class="row3-fleet">
                    <h2>30+</h2>
                    <p>Nuosavų vilkikų</p>
                </div>
                <div class="row3-experience">
                    <h2>20+</h2>
                    <p>Metų patirties</p>
                </div>
                <div class="row3-kilometers">
                    <h2>50M+</h2>
                    <p>Per darbo metus nuvažiuotų kilometrų</p>
                </div> 
            </div>
            <div class="mobile-about-row3">
                <div class="row3-fleet" style="background-image: url('img/truck-mobile.png');">
                    <h2>30+</h2>
                    <p>Nuosavų vilkikų</p>
                </div>
                <div class="splitline"></div>
                <div class="row3-experience" style="background-image: url('img/truck-mobile.png');">
                    <h2>20+</h2>
                    <p>Metų patirties</p>
                </div>
                <div class="splitline"></div>
                <div class="row3-kilometers" style="background-image: url('img/truck-mobile.png');">
                    <h2>50M+</h2>
                    <p>Per darbo metus nuvažiuotų kilometrų</p>
                </div>
            </div>
            <div class="splitline"></div>
        </div>
    </section>

<!-- FOOTER MAIN -->

    <section class="footer-main">
        <div class="flex-between">
            <div class="who">
                <h2>APIE MUS</h2>
                <a href="pradinis.php"><img src="img/logo_white.png" alt="Krisma logo" width="161px"></a>
                <p>Su dideliu dėmesiu klientų patenkinimui ir atidumu detalėms, mes sukūrėme reputaciją kaip patikimas transporto partneris verlams.</p>
                <a href="apie.php"><strong>Daugiau apie mus<i class="bi bi-arrow-right"></i></strong></a>
            </div>
            <div class="contact-info">
                <h2>Susisiekime!</h2>
                <p>Kreipkitės į mus kiekvieną darbo dieną nuo 8:00 iki 17:00 ir mes pažadame surasti sprendimą Jūsų poreikiams</p>
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
                <p>&copy;<?php echo date('Y'); ?> Krisma. Visos teisės saugomos.</p>
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
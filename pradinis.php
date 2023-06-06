<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css">
    <link rel="stylesheet" href="css/index.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="js/custom.js"></script>
    <title>Krisma</title>  
</head>
<body>

<!-- HEADER -->

    <header class="site-header">
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
                <a href="pradinis.php"><img src="img/logo_color.png" alt="Krisma logo" width="161"></a>
            </div>
            <nav>
                <ul class="main-nav">
                    <li><a href="pradinis.php">Pradinis</a></li>
                    <li><a href="apie.php">Apie</a></li>
                    <li><a href="kontaktai.php">Kontaktai</a></li>
                    <li><a href="/project_new/en/index.php"><span class="fi fi-gb"></span></a></li>
                </ul>
            </nav>
            <nav class="mobile-nav">
                <ul id="mMenu" class="main-nav">
                    <li><a href="pradinis.php">Pradinis</a></li>
                    <li><a href="apie.php">Apie</a></li>
                    <li><a href="kontaktai.php">Kontaktai</a></li>
                    <li><a href="/project_new/pradinis.php"><span class="fi fi-gb"></span></a></li>
                </ul>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="bi bi-list"></i>
                </a>
            </nav>
        </div>
    </section>
                                
<!-- HERO -->

    <section class="hero" id="hero">
        <div class="container">
            <h1>Jūsų patikimas transporto partneris!</h1>
            <h2>Susisiekite su mumis dėl transporto ir logistikos klausimų ir leiskite mums Jumis pasirūpinti.</h2>
            <div class="button_slide" onclick="scrollToElement()">Susisiekite!</div>
        </div>
    </section>

<!-- SERVICES -->

    <section class="services">
        <div class="container">
            <div class="section-heading">
            <h1>Logistikos ir transporto paslaugos Jūsų patogumui</h1>
            <h3>Mūsų įmonė gali pasiūlyti įvairias paslaugas - nuo krovinių pervežimo organizavimo ar krovinių sandėliavimo iki tiekimo grandinės sprendimų</h3>
            </div>
            <div class="section-content">
                    <i class="bi bi-truck"></i>
                    <div class="offer">
                    <h2>Transportas</h2>
                    <p>Transporto paslaugos krovinių pervežimams - pilni, daliniai, pavojingi (ADR) arba šaldomi kroviniai.</p>
                </div>
                    <i class="bi bi-house-door"></i>
                    <div class="offer">
                    <h2>Sandėliavimas</h2>
                    <p>Sandėliavimo paslaugos, įskaitant krovinio laikymą, priežiūrą ir krovinio pakrovimo/iškrovimo darbus.</p>
                </div>
                    <i class="bi bi-arrows-move"></i>
                    <div class="offer">
                    <h2>Logistika</h2>
                    <p>Logistikos konsultacijos paslaugos padėti optimizuoti Jūsų verslą - transporto ir logistikos sprendimai, našumo didinimas, bei savikainos mažinimas.</p>
                </div>
            </div>
        </div>
    </section>

<!-- LOCATION -->

    <section class="location">
        <div class="container">
            <h2>Mus galite rasti</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d572.9175592731067!2d24.03917006969647!3d54.943803468602944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e719d06ca9287f%3A0xc5c41fd931dd99a9!2sKrisma!5e0!3m2!1sen!2slt!4v1683619810083!5m2!1sen!2slt" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h3>Įsikūrę šalia A1 greitkelio, mes galime greitai reaguoti į Jūsų užklausas, arba būti itin patogia lokacija sandėliuoti Jūsų krovinį</h3>
        </div>
    </section>

<!-- CONTACT -->

    <section class="contact" id="targetElement">
        <div class="container">
            <div class="section-heading">
                <h2>SUSISIEKITE</h2>
                <p>Palikite savo užklausą ir mūsų komanda su Jumis susisieks per kelias darbo dienas!</p>
            </div>
            <div class="section-content">
                <form class="contact-form" id="myForm" onsubmit="submitForm(event)" method="POST">
                    <div class="input-row">
                        <input type="text" placeholder="Vardas" name="name" required>
                        <input type="email" placeholder="El. paštas" name="email" required>
                    </div>
                    <textarea name="message" placeholder="Jūsų žinutė" rows="8" required></textarea>
                    <input type="submit" name="submit" value="siųsti" class="submit-btn-slide">
                </form>
            </div>
            <div id="submittedText" style="display: none;">
                <h2>Dėkojame už Jūsų žinutę!</h2>
                <h3>Mūsų komanda su Jumis susisieks kaip galima greičiau!</h3>
            </div>
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
                <p>&copy; <?php echo date('Y'); ?> Krisma. Visos teisės saugomos.</p>
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
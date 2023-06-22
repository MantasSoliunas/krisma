<?php 
    require __DIR__ . '/../../app/src/app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css">
    <link rel="stylesheet" href="../../app/css/index.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="../../app/js/custom.js"></script>
    <title>Krisma - Tarptautinis krovinių gabenimas</title>  
</head>
<body>

<!-- HEADER -->
    <?php include '../../app/views/lt/header.php'; ?>

<!-- NAVIGATION -->
    <?php include '../../app/views/lt/navigation_lt.php'; ?>

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
                <form class="contact-form" id="myForm" action="pradinis.php" method="POST">
                    <div class="input-row">
                        <input type="text" name="name" placeholder="Vardas"  required>
                        <input type="email" name="email" placeholder="El. paštas" required>
                    </div>
                    <textarea name="message" placeholder="Jūsų žinutė" rows="8" required></textarea>
                    <button type="submit" name="submit" class="submit-btn-slide" id="contact-submit">siųsti</button>
                </form>
            </div>
            <!-- <div id="submittedText" style="display: none;">
                <h2>Dėkojame už Jūsų žinutę!</h2>
                <h3>Mūsų komanda su Jumis susisieks kaip galima greičiau!</h3>
            </div> -->
        </div>
    </section>
<!-- FOOTER MAIN -->
    <?php include '../../app/views/lt/footer_main_lt.php'; ?>
    
<!-- FOOTER SUB -->                   
    <?php include '../../app/views/lt/footer_sub_lt.php'; ?>

</body>
</html>
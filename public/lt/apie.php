<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css">
    <link rel="stylesheet" href="../../app/css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <script>
    function myFunction() {
    var x = document.getElementById('mMenu');
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}</script>
    <title>Krisma - Tarptautinis krovinių gabenimas</title>    
</head>
<body>

<!-- HEADER -->
    <?php include '../../app/views/lt/header.php'; ?>

<!-- NAVIGATION -->
    <?php include '../../app/views/lt/navigation_lt.php'; ?>

<!-- ABOUT PAGE -->

    <section class="about-page">
        <div class="container">
            <div class="about-row1">
                <h3 class="h3desktop">Mes didžiuojamės būdami šeimos verslu su daugiau nei 20 metų patirtimi, teikiančiu išskirtines pristatymo sprendimus. Mūsų pasižymėjimas aukštos kokybės paslaugomis išskiria mus šioje srityje. Mes skiriame pirmenybę aiškiai komunikacijai, detaliems sprendimams ir Jūsų reikalavimams pritaikytiems individualiems sprendimams.</h3>
                <img src="../../app/img/drone1.png" alt="drone photo" width="550px">
                <h3 class="h3mobile">Mes didžiuojamės būdami šeimos verslu su daugiau nei 20 metų patirtimi, teikiančiu išskirtines pristatymo sprendimus. Mūsų pasižymėjimas aukštos kokybės paslaugomis išskiria mus šioje srityje. </h3>
            </div>
            <div class="splitline"></div>
            <div class="about-row2">
                <img src="../../app/img/drone2.png" alt="drone photo" width="550px">
                <h3 class="h3mobile">Su mūsų giliomis žiniomis ir įgūdžiais, užtikriname, kad Jūsų kroviniai būtų tvarkingai aptarnauti ir laiku pristatyti į jų paskirties vietą.</h3>
                <h3 class="h3desktop">Su mūsų giliomis žiniomis ir įgūdžiais, užtikriname, kad Jūsų kroviniai būtų tvarkingai aptarnauti ir laiku pristatyti į jų paskirties vietą. Prisijunkite prie begalės patenkintų klientų, kurie jau išgyveno skirtumą dirbdami su mūsų patikima ir į kliento poreikius orientuota įmone. </h3>
            </div>
            <div class="splitline"></div>
            <div class="about-row3" style="background-image: url('../../app/img/truck-moving.png');">
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
                <div class="row3-fleet" style="background-image: url('../../app/img/truck-mobile.png');">
                    <h2>30+</h2>
                    <p>Nuosavų vilkikų</p>
                </div>
                <div class="splitline"></div>
                <div class="row3-experience" style="background-image: url('../../app/img/truck-mobile.png');">
                    <h2>20+</h2>
                    <p>Metų patirties</p>
                </div>
                <div class="splitline"></div>
                <div class="row3-kilometers" style="background-image: url('../../app/img/truck-mobile.png');">
                    <h2>50M+</h2>
                    <p>Per darbo metus nuvažiuotų kilometrų</p>
                </div>
            </div>
            <div class="splitline"></div>
        </div>
    </section>

<!-- FOOTER MAIN -->
    <?php include '../../app/views/lt/footer_main_lt.php'; ?>

<!-- FOOTER SUB -->
    <?php include '../../app/views/lt/footer_sub_lt.php'; ?>

</body>
</html>
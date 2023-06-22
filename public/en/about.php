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
}
    </script>
    <title>Krisma - International Transport</title>    
</head>
<body>

<!-- HEADER -->
    <?php include '../../app/views/lt/header.php'; ?>

<!-- NAVIGATION -->
    <?php include '../../app/views/en/navigation_en.php'; ?>

<!-- ABOUT PAGE -->
    <section class="about-page">
        <div class="container">
            <div class="about-row1">
                <h3 class="h3desktop">We take pride in being a family business with over 20 years of experience in delivering exceptional shipping solutions. Our dedication to providing high-quality services sets us apart in the industry. We prioritize clear communication, attention to detail, and personalized solutions tailored to your requirements. </h3>
                <img src="../../app/img/drone1.png" alt="drone photo" width="550px">
                <h3 class="h3mobile">We take pride in being a family business with over 20 years of experience in delivering exceptional shipping solutions. Our dedication to providing high-quality services sets us apart in the industry.</h3>
            </div>
            <div class="splitline"></div>
            <div class="about-row2">  
                <img src="../../app/img/drone2.png" alt="drone photo" width="550px">
                <h3 class="h3mobile">With our extensive knowledge and expertise, we ensure that your goods are handled with the utmost care and delivered to their destination in a timely manner.</h3>
                <h3 class="h3desktop">With our extensive knowledge and expertise, we ensure that your goods are handled with the utmost care and delivered to their destination in a timely manner. Join countless satisfied customers who have experienced the difference of working with our reliable and customer-centric company. </h3>
            </div>
            <div class="splitline"></div>
            <div class="about-row3" style="background-image: url('../../app/img/truck-moving.png');">
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
                <div class="row3-fleet" style="background-image: url('../../app/img/truck-mobile.png');">
                    <h2>30+</h2>
                    <p>Trucks in our current fleet</p>
                </div>
                <div class="splitline"></div>
                <div class="row3-experience" style="background-image: url('../../app/img/truck-mobile.png');">
                    <h2>20+</h2>
                    <p>Years of experience in the field</p>
                </div>
                <div class="splitline"></div>
                <div class="row3-kilometers" style="background-image: url('../../app/img/truck-mobile.png');">
                    <h2>50M+</h2>
                    <p>Kilometers our trucks made over the years</p>
                </div>
            </div>
            <div class="splitline"></div>
        </div>
    </section>

<!-- FOOTER MAIN -->
<?php include '../../app/views/en/footer_main_en.php'; ?>

<!-- FOOTER SUB -->
    <?php include '../../app/views/en/footer_sub_en.php'; ?>
  
</body>
</html>
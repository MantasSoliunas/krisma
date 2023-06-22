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
    <title>Krisma - International Transport</title>  
</head>
<body>

<!-- HEADER -->
    <?php include '../../app/views/lt/header.php'; ?>

<!-- NAVIGATION -->
    <?php include '../../app/views/en/navigation_en.php'; ?>
                                
<!-- HERO -->

    <section class="hero" id="hero">
        <div class="container">
            <h1>Your reliable transport partner!</h1>
            <h2>Contact us for all your transport or logistics needs and let us handle all your troubles.</h2>
            <div class="button_slide" onclick="scrollToElement()">Get in touch!</div>
        </div>
    </section>

<!-- SERVICES -->

    <section class="services">
        <div class="container">
            <div class="section-heading">
            <h1>Logistics and transport services at your call</h1>
            <h3>Our company can provide different services such as - organizing road transport, warehousing and offer supply chain solutions</h3>
            </div>
            <div class="section-content">
                    <i class="bi bi-truck"></i>
                    <div class="offer">
                    <h2>Transport</h2>
                    <p>Transportation services for cargo and freight, including full truckload, less-than-truckload (LTL), and hazardous materials, as well as temperature-controlled goods.</p>
                </div>
                    <i class="bi bi-house-door"></i>
                    <div class="offer">
                    <h2>Warehousing</h2>
                    <p>Warehousing and distribution services, including storage, inventory management, and order fulfillment.</p>
                </div>
                    <i class="bi bi-arrows-move"></i>
                    <div class="offer">
                    <h2>Logistics</h2>
                    <p>Logistics consulting services to help businesses optimize their transportation and logistics operations, improve efficiency, and reduce costs.</p>
                </div>
            </div>
        </div>
    </section>

<!-- LOCATION -->

    <section class="location">
        <div class="container">
            <h2>We are located</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d572.9175592731067!2d24.03917006969647!3d54.943803468602944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e719d06ca9287f%3A0xc5c41fd931dd99a9!2sKrisma!5e0!3m2!1sen!2slt!4v1683619810083!5m2!1sen!2slt" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <h3>Located near the highway A1, our company can quickly react to your inquiries or be a convenient place to store your goods in our warehouse</h3>
        </div>
    </section>

<!-- CONTACT -->

    <section class="contact" id="targetElement">
        <div class="container">
            <div class="section-heading">
                <h2>GET IN TOUCH</h2>
                <p>Leave a message or inquiry for our team and we are sure to get back to you in a few business days</p>
            </div>
            <div class="section-content">
                <form class="contact-form" id="myForm" action="index.php" method="POST">
                    <div class="input-row">
                        <input type="text" name="name" placeholder="Your Name"  required>
                        <input type="email" name="email" placeholder="Your Email"  required>
                    </div>
                    <textarea name="message" placeholder="Your Message" rows="8" required></textarea>
                    <input type="submit" name="submit" class="submit-btn-slide">
                </form>
            </div>
            <!-- <div id="submittedText" style="display: none;">
                <h2>Thank you for submitting the form!</h2>
                <h3>Our team will get back to you as soon as possible</h3>
            </div> -->
        </div>
    </section>

<!-- FOOTER MAIN -->
    <?php include '../../app/views/en/footer_main_en.php'; ?>

<!-- FOOTER SUB -->
    <?php include '../../app/views/en/footer_sub_en.php'; ?>

</body>
</html>
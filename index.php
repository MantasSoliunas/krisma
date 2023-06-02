<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                <a href="index.php"><img src="img/logo_color.png" alt="Krisma logo" width="161"></a>
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
                                
<!-- HERO -->

    <section class="hero" id="hero">
        <div class="container">
            <h1>Your reliable transport partner!</h1>
            <h2>Contact us for all your transport or logistics needs and let us handle all your troubles.</h2>
            <button onclick="scrollToElement()">Get in touch!</button>
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
                <form class="contact-form" id="myForm" onsubmit="submitForm(event)" method="POST">
                    <div class="input-row">
                        <input type="text" placeholder="Your Name" name="name" required>
                        <input type="email" placeholder="Your Email" name="email" required>
                    </div>
                    <textarea name="message" placeholder="Your Message" rows="8" required></textarea>
                    <input type="submit" name="submit" class="btn btn-form">
                </form>
            </div>
            <div id="submittedText" style="display: none;">
                <h2>Thank you for submitting the form!</h2>
                <h3>Our team will get back to you as soon as possible</h3>
            </div>
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
                <p>&copy; <?php echo date('Y'); ?> Krisma. All rights reserved.</p>
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
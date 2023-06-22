<?php
    if(isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($name) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                include 'db.php';
                $from = "$email";
                $to = "info@krisma.lt";
                $subject = "Nauja žinutė";
                $autorius = 'Nuo: ' . $name . ', ' . $email;
                $zinute = htmlspecialchars($message);
                mail($to, $subject, $autorius, $zinute, $from);
                echo "<script>alert('Dėkojame už žinutę, susisieksime su Jumis kuo greičiau! / Thank you for your message, we will get back to you as soon as possible!');</script>";        
            }
        }
    } 
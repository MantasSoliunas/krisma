<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_NAME", "forma");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Atsiprašome, bet svetainė susidūrė su problema.<br>";
        echo 'Klaida: ' . $mysqli->connect_error . '<br>';
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO messages (name, email, message) VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");


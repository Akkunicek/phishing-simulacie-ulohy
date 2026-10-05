<?php

$conn = new mysqli("localhost", "root", "", "phishing_simulacia");

if ($conn->connect_error) {
    die("Chyba pripojenia k databáze: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>
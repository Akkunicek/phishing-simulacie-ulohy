<?php

require "db.php";

$meno = $_POST["meno"] ?? "";
$priezvisko = $_POST["priezvisko"] ?? "";
$email = $_POST["email"] ?? "";
$telefon = $_POST["telefon"] ?? "";
$adresa = $_POST["adresa"] ?? "";
$cislo_karty = $_POST["cislo_karty"] ?? "";
$platnost = $_POST["platnost"] ?? "";

$format_karty = preg_match(
    "/^[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}$/",
    $cislo_karty
);

$format_platnosti = preg_match(
    "/^(0[1-9]|1[0-2])\/[0-9]{2}$/",
    $platnost
);

if ($format_karty) {
    $karta_format = "SPRAVNY";
} else {
    $karta_format = "NESPRAVNY";
}

if ($format_platnosti) {
    $platnost_format = "SPRAVNY";
} else {
    $platnost_format = "NESPRAVNY";
}

$stmt = $conn->prepare(
    "INSERT INTO rezervacie
    (meno, priezvisko, email, telefon, adresa, karta_format, platnost_format)
    VALUES (?, ?, ?, ?, ?, ?, ?)"
);

$stmt->bind_param(
    "sssssss",
    $meno,
    $priezvisko,
    $email,
    $telefon,
    $adresa,
    $karta_format,
    $platnost_format
);

if (!$stmt->execute()) {
    die("Chyba pri ukladaní: " . $stmt->error);
}

echo "<h2>Údaje boli zaznamenané</h2>";

echo "<p>Formát čísla karty: <b>" . $karta_format . "</b></p>";

echo "<p>Formát platnosti: <b>" . $platnost_format . "</b></p>";

echo "<p>Testovacie číslo karty nebolo uložené.</p>";

$stmt->close();
$conn->close();

?>
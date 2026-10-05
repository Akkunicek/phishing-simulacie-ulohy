<?php

require "db.php";

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if ($username !== "" && $password !== "") {

    $heslo_test = "ANO";

    $stmt = $conn->prepare(
        "INSERT INTO pokusy (username, heslo_test) VALUES (?, ?)"
    );

    if (!$stmt) {
        die("Chyba pri vytváraní SQL príkazu: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $heslo_test);

    if (!$stmt->execute()) {
        die("Chyba pri ukladaní do databázy: " . $stmt->error);
    }

    echo "<h2>Simulácia dokončená</h2>";
    echo "<p>Prihlasovací pokus bol zaznamenaný.</p>";

    $stmt->close();

} else {

    echo "<h2>Chyba</h2>";
    echo "<p>Vyplň username aj heslo.</p>";
}

$conn->close();

?>
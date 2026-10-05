<?php

$username = $_POST["username"] ?? "";

$cas = date("Y-m-d H:i:s");

$data = "Používateľ: " . $username . " | Čas: " . $cas . " | Heslo: NEULOŽENÉ\n";

file_put_contents("log.txt", $data, FILE_APPEND);

echo "<h2>Simulácia dokončená</h2>";
echo "<p>Prihlasovací pokus bol zaznamenaný.</p>";
echo "<p>Heslo nebolo uložené.</p>";

?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <title>Rezervácia dovolenky</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .formular {
            background-color: white;
            width: 450px;
            margin: 40px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 25px;
            background-color: #0077b6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .upozornenie {
            background-color: #fff3cd;
            padding: 10px;
            margin-top: 15px;
        }

    </style>
</head>

<body>

<div class="formular">

    <h2>Rezervácia dovolenky</h2>

    <p>
        Pre dokončenie rezervácie vyplňte svoje údaje.
    </p>

    <form method="POST" action="spracovanie.php">

        <label>Meno:</label>
        <input type="text" name="meno" required>

        <label>Priezvisko:</label>
        <input type="text" name="priezvisko" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Telefón:</label>
        <input type="tel" name="telefon" required>

        <label>Adresa:</label>
        <input type="text" name="adresa" required>

        <label>Číslo testovacej karty:</label>
        <input
            type="text"
            name="cislo_karty"
            placeholder="1234 5678 9012 3456"
            pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}"
            required
        >

        <label>Platnosť karty:</label>
        <input
            type="text"
            name="platnost"
            placeholder="MM/RR"
            pattern="(0[1-9]|1[0-2])/[0-9]{2}"
            required
        >

        <div class="upozornenie">
            Použite iba testovacie údaje. Údaje skutočnej platobnej karty nevkladajte.
        </div>

        <button type="submit">
            Dokončiť rezerváciu
        </button>

    </form>

</div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generata</title>
</head>
<body>
<h1>Password Generata</h1>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = intval($_POST["length"]);
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $charactersLength = strlen($characters);
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, $charactersLength - 1);
            $password .= $characters[$randomIndex];
        }

        echo "<p>$password</p>";
    }
    ?>
    <a href="index.php">Genera un'altra password</a>
</body>
</html>
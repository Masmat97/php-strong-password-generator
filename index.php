<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>
<body>
<h1>Seleziona la lunghezza della password</h1>
    <form action="generate_password.php" method="post">
        <input type="number" id="length" name="length" min="1" required>
        <button type="submit">Genera Password</button>
</body>
</html>
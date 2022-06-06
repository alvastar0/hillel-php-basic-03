<?php

session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Registration</title>
</head>
<body>

<?php require __DIR__.'/templates/alerts.php'; ?>

<form action="scripts/registration-controller.php" method="post">
    <fieldset>
        <p>
            <label for="email">Логин</label>
            <br>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="password">Пароль</label>
            <br>
            <input type="password" name="password" id="password">
        </p>
        <button type="submit">Register</button>
    </fieldset>
</form>
</body>
</html>

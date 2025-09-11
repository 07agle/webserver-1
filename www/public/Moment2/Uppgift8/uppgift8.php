<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="checkUser.php" method="post">
    <fieldset>
        <legend>Logga in</legend>
        <label>Användarnamn</label> <br>
        <input type="text" name="user">
        <br>
        <label>Lösenord</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="logIn">
    </fieldset>
    </form>
</body>
</html>

<?php

?>
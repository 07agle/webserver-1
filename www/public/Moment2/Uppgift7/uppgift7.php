<?php
include(__DIR__ . "/../../inc/cleanInput.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Förhindrar att PHP försöker läsa $_POST-data innan användaren fyllt i formuläret
    
    if (empty($_POST["firstName"]) || empty($_POST["lastName"]) || empty($_POST["username"]) || empty($_POST["password"]) || !isset($_POST['submit'])) {
        header("Location: uppgift7.php");
        exit();
    }

    $firstName = cleanData($_POST["firstName"]);
    $lastName = cleanData($_POST["lastName"]);
    $username = cleanData($_POST["username"]);
    $password = cleanData($_POST["password"]);
    echo "Förnamn; {$firstName} <br/>";
    echo "Efternamn; {$lastName} <br/>";
    echo "Användarnamn; {$username} <br/>";
    echo "Lösenord; {$password} <br/>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moment 2 Uppgift 7</title>
</head>

<body>
    <fieldset>
        <form method="post">
            <input type="text" name="firstName" placeholder="First Name">
            <input type="text" name="lastName" placeholder="Last Name">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Submit" name="submit">
        </form>
    </fieldset>
</body>

</html>
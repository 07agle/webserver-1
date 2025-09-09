<?php

include(__DIR__ ."/../../inc/cleanInput.php");

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

?>
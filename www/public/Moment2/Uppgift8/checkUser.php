<?php
if (!isset($_POST["user"])) {
    header("location: ../Uppgift8/uppgift8.php");
    exit;
}

//include(__DIR__ . "/../../inc/users.php");
include(__DIR__ . "/../../inc/user.php");

$person = new User("07agle", "12345", "Leon");
$person2 = new User("07bafr", "password", "Ferit");

$persons = [];
$persons[] = $person;
$persons[] = $person2;

$user = trim(stripslashes(htmlspecialchars($_POST["user"])));
$password = $_POST["password"];

for ($i = 0; $i < count($persons); $i++) {
    if ($user == $persons[$i]->getUsername() && $password == $persons[$i]->getPassword()) {
        header("location: ../Uppgift8/userPage.php" . "?name=" . $persons[$i]->getName());
        exit;
    }
}
header("location: ../Uppgift8/uppgift8.php");

<?php
if (!isset($_POST["user"])) {
    header("location: ../uppgift8");
    exit;
}

include(__DIR__ . "/../../inc/users.php");

$user = $_POST["user"];
$password = $_POST["password"];

$user = trim($user);          
$user = stripslashes($user);  
$user = htmlspecialchars($user); 

$password = trim($password);

for ($i = 0; $i < count($userArray); $i++) {
    if ($user == $userArray[$i]["user"] && $password == $userArray[$i]["password"]) {
        header("location: ../Uppgift8/userPage.php" . "?name=" . $userArray[$i]["name"]);
        exit;
    }
}
header("location: ../uppgift8");

?>
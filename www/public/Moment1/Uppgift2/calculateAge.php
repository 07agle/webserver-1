<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Ålder kvar</title>
</head>
<body>
<h1>Ålder kvar till pension: </h1>
<?php
    $name = $_GET['fullName'];
    $age = $_GET["age"];
    
    $yearsLeft = 65 - $age;
    echo"{$name} har {$yearsLeft} år kvar till pension";
?>
</body>
</html>

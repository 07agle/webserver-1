<?php
if (!isset($_GET["name"])) {
    header("location ../uppgift8");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET["name"] ?></title>
</head>

<body>
    <h1>
        <?php echo "Hej ". $_GET["name"] ?>
    </h1>
</body>

</html>
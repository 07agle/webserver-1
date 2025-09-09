<?php

include(__DIR__ . "/../../inc/math.php");

$t1 = 10;
$t2 = 5;

$dif = subtract($t1, $t2);
echo("{$t1}-{$t2}={$dif}");

$sum = sum($t1, $t2);
echo(" {$t1}+{$t2}={$sum}");

$prod = multiply($t1, $t2);
echo(" {$t1}*{$t2}={$prod}");

$kvot = divide($t1, $t2);
echo(" {$t1}/{$t2}={$kvot}");
?>

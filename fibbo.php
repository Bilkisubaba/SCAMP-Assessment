<?php
 echo "Print Fibbonacci Series of the number, 20:";

$a1 = 0;
$a2 = 1;
$sequence = 0;

while ($sequence<= 20) {
    $a3 = $a1+$a2;
    echo $a3.", ";

    $a1 = $a2;
    $a2 = $a3;
    $sequence = $sequence+1;
    }
?>
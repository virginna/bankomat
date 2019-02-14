<?php


$sum = $_POST["sum"];
$max = 885000;
$sum1 = $max;
require_once('index.html');

if (empty($sum)) {
    echo "Please, enter summ";
} else if (ctype_digit($sum) == false) {
    echo "Enter integer and positive summ";
} else if ($sum > $max) {
    echo "Unpossible. Choose less summ";
} else if ($sum > $sum1) {
    echo "Unpossible. Choose less summ";
} else if ($sum < 5) {
    echo "Unpossible. Summ less than 5";
} else if ($sum % 5 !== 0) {
    echo "Unpossible. Summ must aliquot 5";
}
//if ($sum % 5 !== 0) {
//    echo "Enter summ aliquot 5";
//}
else {

//for ($i = 0; $i <= $sum1; $i++) {
//    if ($sum >= 500) {
    $a = ($sum - $sum % 500) / 500;
    $a1 = $sum % 500;
    $q = 100 - $a;
    $b = ($a1 - $a1 % 200) / 200;
    $b1 = $a1 % 200;
    $q1 = 100 - $b;
    $c = ($b1 - $b1 % 100) / 100;
    $c1 = $b1 % 100;
    $q2 = 100 - $c;
    $d = ($c1 - $c1 % 50) / 50;
    $d1 = $c1 % 50;
    $q3 = 100 - $d;
    $e = ($d1 - $d1 % 20) / 20;
    $e1 = $d1 % 20;
    $q4 = 100 - $e;
    $f = ($e1 - $e1 % 10) / 10;
    $f1 = $e1 % 10;
    $q5 = 100 - $f;
    $g = ($f1 - $f1 % 5) / 5;
    $g1 = $f1 % 5;
    $q6 = 100 - $g;
    $sum1 = $max - $sum;

//};
    echo "Your  ";
    echo $sum;
    echo "<br>";
    echo "$a : 500 grn";
    echo "<br>";
    echo "$b : 200 grn";
    echo "<br>";
    echo "$c : 100 grn";
    echo "<br>";
    echo "$d : 50 grn";
    echo "<br>";
    echo "$e : 20 grn";
    echo "<br>";
    echo "$f : 10 grn";
    echo "<br>";
    echo "$g : 5 grn";
    echo "<br>";
    echo "<br>";
    echo "Bankomat now has $sum1 grn.";
    echo "<br>";
    echo "<br>";
    echo "500 grn. - $q шт.";
    echo "<br>";
    echo "200 grn. - $q1 шт.";
    echo "<br>";
    echo "100 grn. - $q2 шт.";
    echo "<br>";
    echo "50 grn. - $q3 шт.";
    echo "<br>";
    echo "20 grn. - $q4 шт.";
    echo "<br>";
    echo "10 grn. - $q5 шт.";
    echo "<br>";
    echo "5 grn. - $q6 шт.";
}
//}



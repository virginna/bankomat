<?php


$sum = $_POST["sum"];
$max = 50000;
$sum1 = $max ;
require_once('index.html');

if ($sum > $max || $sum > $sum1 || $sum % 5 !== 0) {
    echo "Unpossible";
}
//if ($sum % 5 !== 0) {
//    echo "Enter summ aliquot 5";
//}
else {

for ($i = 0; $i <= $sum1; $i++) {
//    if ($sum >= 500) {
        $a = ($sum - $sum % 500) / 500;
        $a1 = $sum % 500;
        $b = ($a1 - $a1 % 200) / 200;
        $b1 = $a1 % 200;
        $c = ($b1 - $b1 % 100) / 100;
        $c1 = $b1 % 100;
        $d = ($c1 - $c1 % 50) / 50;
        $d1 = $c1 % 50;
        $e = ($d1 - $d1 % 20) / 20;
        $e1 = $d1 % 20;
        $f = ($e1 - $e1 % 10) / 10;
        $f1 = $e1 % 10;
        $g = ($f1 - $f1 % 5) / 5;
        $g1 = $f1 % 5;
        $sum1 = $max - $sum;

};
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
        echo "Bankomat now has $sum1 grn.";
    }
//}



<?php

if (!isset($_SESSION['max']))
    $_SESSION['max'] = 885000;
$max = $_SESSION['max'];

$sum = $_POST["sum"];
//$max = 885000;
$sum1 = $sum;
require_once('index.html');

if (empty($sum)) {
    echo "Введите требуемую сумму";
} else if (ctype_digit($sum) == false) {
    echo "Введите целое и положительное число";
} else if ($sum > $max) {
    echo "Выдача невозможна. Введите меньшую сумму";
}
//else if ($sum > $sum1) {
//    echo "Выдача невозможна. Введите меньшую сумму";
//}
else if ($sum < 5) {
    echo "Выдача невозможна. Сумма меньше 5";
} else if ($sum % 5 !== 0) {
    echo "Выдача невозможна. Сумма должна быть кратна 5";
} else if ($sum > 50000) {
    echo "Выдача невозможна. Максимальная сумма выдачи в сутки 50000 грн.";
} else {
    $ar1 = array(500, 200, 100, 50, 20, 10, 5);
    for ($i = 0; $i <= 6; $i++) {
        $a2 = floor($sum / $ar1[$i]);
//            if ($a2 > 100) {
//            $a2 = 100;
//        }
        $a3 = $sum - $a2 * $ar1[$i];
        //$a3 = $sum % $ar1[$i];
        //$a2 = ($sum - $a3) / $ar1[$i];
        echo "$a2 x $ar1[$i]";
        echo "<br>";
        $q7 = 100 - $a2;
        echo "осталось $q7 купюр по $ar1[$i] грн.";
        echo "<br>";

        $sum = $a3;
    }
    //$q8 = $max - $sum1;
    $_SESSION['max'] = $_SESSION['max'] - $sum1;
    $q8 = $_SESSION['max'];
    echo "<br>";
    echo "Остаток в банкомате: $q8 грн.";
}



<?php
echo "<h1>Використання оператора циклу do-while</h1>";

$valute = 1;
$i = 1;

do {
    $valute *= 2;
    $i += 1;

    if ($valute == 4) {
        echo "Кінець циклу";
        break;
    }

    echo "Число " . $valute . "<br />";
} while ($i <= 10);

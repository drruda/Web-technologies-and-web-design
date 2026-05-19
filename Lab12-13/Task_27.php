<?php
// Створюємо масиви для розподілу значень
$negatives = [];
$positives = [];

// Обчислюємо значення Y та округлюємо їх до сотих
for ($x = 0; $x <= 2; $x += 0.01) {
    $x = round($x, 2);

    // Формула Y = X^2 - X
    $y = pow($x, 2) - $x;

    if ($y < 0) {
        $negatives[] = $y;
    } else {
        $positives[] = $y;
    }
}

// ВИВЕДЕННЯ ВІД'ЄМНИХ ЕЛЕМЕНТІВ (Синій колір)
echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: center; margin-bottom: 30px; font-family: sans-serif;'>";
echo "<tr><th colspan='10' style='background-color: #e6f2ff;'>Від'ємні елементи масиву Y</th></tr>";
echo "<tr>";

$count_neg = 0;
foreach ($negatives as $val) {
    if ($count_neg > 0 && $count_neg % 10 == 0) {
        echo "</tr><tr>";
    }
    echo "<td style='color: blue;'>$val</td>";
    $count_neg++;
}

while ($count_neg % 10 != 0) {
    echo "<td></td>";
    $count_neg++;
}
echo "</tr></table>";


// ВИВЕДЕННЯ ДОДАТНІХ ЕЛЕМЕНТІВ (Зелений колір)
echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: center; font-family: sans-serif;'>";
echo "<tr><th colspan='10' style='background-color: #eafaf1;'>Додатні елементи масиву Y</th></tr>";
echo "<tr>";

$count_pos = 0;
foreach ($positives as $val) {
    if ($count_pos > 0 && $count_pos % 10 == 0) {
        echo "</tr><tr>";
    }
    echo "<td style='color: green;'>$val</td>";
    $count_pos++;
}

while ($count_pos % 10 != 0) {
    echo "<td></td>";
    $count_pos++;
}
echo "</tr></table>";

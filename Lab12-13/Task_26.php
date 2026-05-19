<?php
echo "<h1>Завдання 26</h1>";
$start = 100;
$end = 500;
$count = 0;
$perRow = 10;

echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: center; font-family: Arial, sans-serif;'>";
echo "<thead><tr style='background-color: #f2f2f2;'><th colspan='{$perRow}'>Числа, кратні 5 (від $start до $end)</th></tr></thead>";
echo "<tbody><tr>";

for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
        if ($count > 0 && $count % $perRow == 0) {
            echo "</tr><tr>";
        }

        echo "<td>" . $i . "</td>";
        $count++;
    }
}

while ($count % $perRow != 0) {
    echo "<td></td>";
    $count++;
}

echo "</tr>";
$realCount = 0;
for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) $realCount++;
}

echo "<tr style='background-color: #f9f9f9; font-weight: bold;'><td colspan='{$perRow}'>Загальна кількість чисел: " . $realCount . "</td></tr>";
echo "</tbody></table>";

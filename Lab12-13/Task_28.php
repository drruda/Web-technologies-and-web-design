<?php
$students = [
    "Іваненко" => 85,
    "Петренко" => 74,
    "Сидоренко" => 95,
    "Коваленко" => 68,
    "Мельник" => 91,
    "Шевченко" => 82,
    "Бойко" => 79,
    "Ткаченко" => 88,
    "Кравченко" => 63,
    "Олійник" => 92
];

// Функція для виведення масиву
function printStudentsTable($array)
{
    echo "<table border='1' cellpadding='5' style='border-collapse: collapse; text-align: left; font-family: sans-serif; margin-bottom: 20px;'>";
    echo "<tr style='background-color: #f2f2f2;'><th>Прізвище студента</th><th>Середній бал</th></tr>";

    foreach ($array as $lastName => $score) {
        echo "<tr>";
        echo "<td>" . $lastName . "</td>";
        echo "<td>" . $score . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

// Функція для обчислення середнього балу всієї групи
function calculateGroupAverage($array)
{
    if (count($array) == 0) {
        return 0;
    }

    $totalSum = array_sum($array);
    $countStudents = count($array);

    $average = $totalSum / $countStudents;
    return round($average, 1);
}

echo "<h3>Список студентів групи:</h3>";
printStudentsTable($students);

$groupAverage = calculateGroupAverage($students);
echo "<strong>Середній бал всієї групи:</strong> " . $groupAverage . " / 100";

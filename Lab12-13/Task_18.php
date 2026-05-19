<?php
echo "<h1>Використання оператора switch</h1>";
$temperature = 18;
switch (true) {
    case ($temperature >= 23 && $temperature <= 26):
        echo "Приємна погода";
        break;

    case ($temperature >= 27 && $temperature <= 30):
        echo "Все ще приємна погода";
        break;

    case ($temperature >= 31 && $temperature <= 33):
        echo "Стає надто жарко";
        break;


    default:
        echo "Температура поза вказаними діапазонами";
        break;
}

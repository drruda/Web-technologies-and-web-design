<?php
echo "<h1>Завдання 25</h1>";

$a = 15;
$b = 15;

if($a > $b){
    $X = $a / $b + 1;
    echo "a = $a, b = $b <br>";
    echo "a > b <br>";
}
else if($a == $b){
    $X = $a + 25;
    echo "a = $a, b = $b <br>";
    echo "a == b <br>";
}
else if ($a < $b){
    $X = ($a * $b - 2) / $a;
    echo "a = $a, b = $b <br>";
    echo "a < b <br>";
}

echo "X = " . $X;
?>
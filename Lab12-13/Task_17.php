<?php
echo "<h1>Використання оператора if</h1>";
$gradus = 27;
if ($gradus > 25 && $gradus < 30) {
    echo "Температура комфортна<BR>";
    $temp_comf = TRUE;
} else {
    echo "Температура не комфортна<BR>";
    $temp_comf = FALSE;
}

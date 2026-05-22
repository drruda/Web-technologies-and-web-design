<?php
session_start();

echo "Ви перейшли на другу сторінку. Виведемо на екран змінну, задану на першій сторінці: <br>";
if (isset($_SESSION['test'])) {
    echo $_SESSION['test'];
} else {
    echo "Змінна не знайдена.";
}
echo "<br>";
?>
<a href="page3.php">Перейти на сторінку 3</a>
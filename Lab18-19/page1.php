<?php
session_start();

// Реєструємо змінну в сесії
$_SESSION['test'] = 'Hello world!';

echo "The content of session variable<br>";
echo $_SESSION['test'];
?>
<br>
<a href="page2.php">Перейти на сторінку 2</a>
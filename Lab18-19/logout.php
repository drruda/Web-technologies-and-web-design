<?php
session_start();

// Очищаємо масив сесії
$_SESSION = array();

// Знищуємо сесію на сервері
session_destroy();

// Повертаємо користувача на форму входу
header("Location: index.php");
exit;

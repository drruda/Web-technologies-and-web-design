<?php
session_start();

// Видаляємо змінну test
unset($_SESSION['test']);

// Спроба вивести (буде порожньо або попередження)
if (isset($_SESSION['test'])) {
    echo $_SESSION['test'];
}

// Повністю знищуємо сесію
session_destroy();

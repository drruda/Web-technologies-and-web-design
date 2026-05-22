<?php
session_start();

// Захист сторінки: якщо не залогінений — перенаправляємо на index.php
if (!isset($_SESSION['logged_user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Таємна сторінка</title>
</head>

<body>
    <h1>Вітаємо, <?php echo htmlspecialchars($_SESSION['logged_user']); ?>!</h1>
    <p>Ви перейшли на закриту сторінку сайта!!! :)</p>

    <!-- Кнопка виходу, яка веде на logout.php -->
    <button onclick="window.location.href='logout.php'">Logout</button>
</body>

</html>
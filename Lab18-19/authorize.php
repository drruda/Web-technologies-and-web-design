<?php
session_start();

// Перевіряємо, чи прийшли дані з форми
if (isset($_POST['user_name']) && isset($_POST['user_pass'])) {

    // Статична перевірка логіну та паролю
    if ($_POST["user_name"] == "user" && $_POST["user_pass"] == "111") {
        $_SESSION['logged_user'] = $_POST["user_name"];
        header("Location: secretplace.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Помилка</title>
</head>

<body>
    <p style="color: red;">Ви ввели неправильний логін або пароль!</p>
    <a href="index.php">Спробувати знову</a>
</body>

</html>
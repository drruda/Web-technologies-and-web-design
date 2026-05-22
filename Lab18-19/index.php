<?php
session_start();

// Якщо користувач уже залогінений — відразу пускаємо в секретну кімнату
if (isset($_SESSION['logged_user'])) {
    header("Location: secretplace.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Введіть пароль</title>
</head>

<body>
    <h2>Авторизація на сайті</h2>
    <form action="authorize.php" method="post">
        Логін: <input type="text" name="user_name" required><br><br>
        Пароль: <input type="password" name="user_pass" required><br><br>
        <input type="submit" name="Submit" value="Увійти">
    </form>
</body>

</html>
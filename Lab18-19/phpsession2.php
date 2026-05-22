<?php
// Якщо cookies вимкнені, приймаємо ID сесії з форми POST
if (isset($_POST['PHPSESSID'])) {
    session_id($_POST['PHPSESSID']);
}
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Зчитування даних сеансу</title>
</head>

<body>
    <center>
        <h1>Зчитування даних сеансу</h1>
        <?php
        if (isset($_SESSION['temperature'])) {
            echo "Значення температури складає " . $_SESSION['temperature'];
        } else {
            echo "Дані сесії втрачено або не передано.";
        }
        ?>
    </center>
</body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Передача ідентифікатора сеансу без cookies</title>
</head>

<body>
    <center>
        <h1>Передача ідентифікатора сеансу без cookies</h1>
        <?php
        $_SESSION['temperature'] = "36.6";
        echo "Температура: " . $_SESSION['temperature'];
        ?>
        <br><br>Для відображення температури на наступній сторінці натисніть OK:<br><br>

        <form action="phpsession2.php" method="POST">
            <!-- Передаємо ID сесії через приховане поле -->
            <input type="hidden" name="PHPSESSID" value="<?php echo session_id(); ?>">
            <input type="submit" value="OK">
        </form>
    </center>
</body>

</html>
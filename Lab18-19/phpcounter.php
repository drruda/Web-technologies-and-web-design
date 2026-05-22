<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Лічильник відвідувань</title>
</head>

<body>
    <center>
        <h1>Лічильник відвідувань</h1>
        <p>Цю сторінку відвідували
            <?php
            if (!isset($_SESSION['count'])) {
                $_SESSION['count'] = 1;
            } else {
                $_SESSION['count']++;
            }
            echo $_SESSION['count'];
            ?>
            разів.</p>
    </center>
</body>

</html>
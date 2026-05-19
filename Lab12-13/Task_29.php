<?php
// Функція, яка малює форму потрібною мовою
function generateRegistrationForm($lang = 'ua')
{
    if ($lang == 'en') {
        $title = 'Sign Up';
        $name = 'Name:';
        $email = 'Email:';
        $pass = 'Password:';
        $submit = 'Register';
    } else {
        $title = 'Реєстрація';
        $name = "Ім'я:";
        $email = 'Електронна пошта:';
        $pass = 'Пароль:';
        $submit = 'Зареєструватися';
    }

    echo "<div style='font-family: Arial; max-width: 250px; padding: 15px; border: 1px solid #333; margin-top: 10px;'>";
    echo "<h3>$title</h3>";
    echo "<form>";
    echo "<p>$name <br><input type='text' required style='width:100%'></p>";
    echo "<p>$email <br><input type='email' required style='width:100%'></p>";
    echo "<p>$pass <br><input type='password' required style='width:100%'></p>"; // Додано поле пароля
    echo "<button type='submit'>$submit</button>";
    echo "</form>";
    echo "</div>";
}

// Перевіряємо, яку мову вибрали (?lang=en або ?lang=ua)
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ua';

?>

<div style="font-family: Arial;">
    <a href="?lang=ua" style="padding: 5px 10px; background: #eee; text-decoration: none; color: black; border: 1px solid #ccc;">UA</a>
    <a href="?lang=en" style="padding: 5px 10px; background: #eee; text-decoration: none; color: black; border: 1px solid #ccc;">EN</a>
</div>

<?php
// Викликаємо функцію з обраною мовою
generateRegistrationForm($current_lang);
?>
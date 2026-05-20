<?php
function getRandomFileName($path)
{
    $path = $path ? rtrim($path, '/') . '/' : '';
    do {
        // Генеруємо назву з префіксом prod_ і унікальним ID на основі поточного часу
        $name = uniqid('prod_');
        $file = $path . $name;
    } while (file_exists($file)); // перевіряємо, чи немає файлу з таким ім'ям

    return $name;
}

if (isset($_FILES['image'])) {
    $fileTmpName = $_FILES['image']['tmp_name'];
    $errorCode = $_FILES['image']['error'];

    if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($fileTmpName)) {
        $errorMessages = [
            UPLOAD_ERR_INI_SIZE   => 'Розмір файлу перевищив значення upload_max_filesize в конфігурації PHP.',
            UPLOAD_ERR_FORM_SIZE  => 'Размір завантажуваного файлу перевищив значення MAX_FILE_SIZE в HTML-формі.',
            UPLOAD_ERR_PARTIAL    => 'Завантажуваний файл був одержаний тільки частково.',
            UPLOAD_ERR_NO_FILE    => 'Файл не був завантажений',
            UPLOAD_ERR_NO_TMP_DIR => 'Відсутня тимчасова папка.',
            UPLOAD_ERR_CANT_WRITE => 'Не вдалося записати файл на диск.',
            UPLOAD_ERR_EXTENSION  => 'PHP-розширення зупинило завантаження файлу.',
        ];

        $unknownMessage = 'При завантаженні файлу виникла невідома помилка.';
        $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
        die($outputMessage);
    } 
    else {
        $fi = finfo_open(FILEINFO_MIME_TYPE);
        $mime = (string) finfo_file($fi, $fileTmpName);
        if (strpos($mime, 'image') === false) die('Можна завантажувати лише зображення.');
        
        $image = getimagesize($fileTmpName);
        $limitBytes  = 1024 * 1024 * 5;
        if (filesize($fileTmpName) > $limitBytes) die('Розмір зображення не повинен перевищувати  5 Мбайт.');

        $name = getRandomFileName(__DIR__ . '/upload/');
        $extension = image_type_to_extension($image[2]);
        $format = str_replace('jpeg', 'jpg', $extension);

        if (!move_uploaded_file($fileTmpName, __DIR__ . '/upload/' . $name . $format)) {
            die('Помилка запису на диск');
        }
        echo 'Зображення успішно завантажене!';
    }
}

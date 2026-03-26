<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Гончаров М.Д.</title>
</head>
<body>
<h1> Часть 1.</h1>
<div>
    <?php
    echo "1. Файл:<br>";
    $filename = "not_found.txt";
    if (!file_exists($filename)) {
        echo "Ошибка: Файл '$filename' не существует. Отмена открытия.<br>";
    } else {
        $file = fopen($filename, "r");
    }
?>
</div>

</body>
</html>



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

    echo "<br><b>2. Деление на ноль:</b><br>";
    try {
        $a = 10;
        $b = 0;
        if ($b === 0) {
            throw new DivisionByZeroError("Ошибка: Деление на ноль!");
        }
        echo $a / $b;
    } catch (DivisionByZeroError $e) {
        $msg = $e->getMessage();
        file_put_contents("log.txt", $msg, FILE_APPEND);
        echo "Произошла ошибка, сообщение сохранено в log.txt: " . $e->getMessage() . "<br>";
    }

?>
</div>

</body>
</html>



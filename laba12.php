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

    echo "<br><b>3. Массив:</b><br>";
    $countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
    $key = 'Germany';

    try {
        if (!array_key_exists($key, $countries)) {
            throw new Exception("Ошибка: Ключа '$key' не существует в массиве.");
        }
        echo $countries[$key];
    } catch (Exception $e) {
        echo $e->getMessage() . "<br>";
    }
    ?>
</div>
<h2>Часть 2</h2>
<div>
    <?php
    $ts1 = strtotime("2025-03-15 10:25:00");
    echo "1. Timestamp (15.03.2025): $ts1 <br>";

    $pastDate = strtotime('1990-10-02 08:05:59');
    $diff = time() - $pastDate;
    echo "2. Секунд с 02.10.1990: $diff <br>";
    echo "3. Сейчас: " . date('Y.m.d H:i:s') . "<br>";



?>
</div>


</body>
</html>



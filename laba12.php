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
    echo "4. 1 сентября этого года: " . date('Y.09.01') . "<br>";

    echo "5. День недели 02.02.2000: " . date('l', strtotime('2000-02-02')) . "<br>";


    $week = [
        0 => 'Воскресенье', 1 => 'Понедельник', 2 => 'Вторник', 
        3 => 'Среда', 4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота'
    ];
    $currentDayNum = date('w');
    $bdayNum = date('w', strtotime('2016-06-12'));
    echo "6. Сегодня: " . $week[$currentDayNum] . ". А 12.06.2016 было: " . $week[$bdayNum] . "<br>";
    ?>

</div>
<div>
    <b>7. Сравнение дат через форму:</b><br>
    <form method="POST">
        <input type="date" name="date1" required>
        <input type="date" name="date2" required>
        <button type="submit">Сравнить</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
        if ($date1 > $date2) {
            echo "Большая дата: $date1";
        } elseif ($date2 > $date1) {
            echo "Большая дата: $date2";
        } else {
            echo "Даты равны";
        }
    }
    ?>
</div>

<div>
    <?php
    $inputDate = '2025-05-20';
    $formattedDate = date('d-m-Y', strtotime($inputDate));
    echo "8. Из $inputDate в $formattedDate <br>";


    $dateBase = date_create('2000-02-03');
    $baseDateFormat=date_format($dateBase,'d-m-Y');
    date_modify($dateBase, '2 days 1 month 3 days 1 year -3 days');
    $final_date=date_format($dateBase,'d-m-Y');
    echo "9. Базовая: $baseDateFormat. <br>"."Итоговая дата: $final_date";

    $newYear = strtotime('first day of January next year');
    $daysLeft = ceil(($newYear - time()) / 86400);
    echo "<br>10. До Нового года осталось дней: $daysLeft";


?>
</div>




</body>
</html>



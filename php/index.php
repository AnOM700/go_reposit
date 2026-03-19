<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Гончаров М.Д</title>
  </head>
  <body>
    <?php
    echo "<br>--Задание 1--<br>";
    //Задание 1
        $low = ['a', 'b', 'c', 'd', 'e'];
        $up = array_map('strtoupper', $low);
        echo implode(', ',$up);
    echo "<br><br>--Задание 2--<br>";
    //Задание 2
        $arr_count = [1, 2, 3];
        echo "Массив: [1, 2, 3]<br>";
        echo "Последний: " . $arr_count[count($arr_count)-1];
    echo "<br><br>--Задание 3--<br>";
    //Задание 3
        $numbers = [20, 7, 3, 40, 5];
        echo "Число 3 в [ ".implode(', ',$numbers)." ]: " . (in_array(3, $numbers) ? "Найдено" : "Нет");
    echo "<br><br>--Задание 4--<br>";
    //Задание 4
    $united_arr=array_merge([1, 2, 3], ['a', 'b', 'c']);
    echo implode(', ',$united_arr);


    echo "<br><br>--Задание 5--<br>";
    //Задание 5
        $slice_test = [1, 2, 3, 4, 5];
        $result =array_slice($slice_test, 1, 3);
        echo implode(', ',$result);

    echo "<br><br>--Задание 6--<br>";
    //Задание 6
        $assoc = ['a'=>1, 'b'=>2, 'c'=>3];
        $keys = array_keys($assoc);
        $values = array_values($assoc);
        echo "Ключи: ".implode(', ', $keys)."<br>";
        echo "Значения: ".implode(', ', $values); 

        echo "<br><br>--Задание 7--<br>";
    //Задание 7
        print_r(array_combine(['a', 'b', 'c'], [1, 2, 3]));
        echo "<br><br>--Задание 8--<br>";
    //Задание 8
        $chars = ['a', '-', 'b', '-', 'c', '-', 'd'];
        echo "Массив: [ ". implode(', ',$chars)." ]<br>";
        echo "Индекс первого '-': " . array_search('-', $chars);

        echo "<br><br>--Задание 9--<br>";
    //Задание 9
        $sort_arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
        asort($sort_arr); 
        echo "Сортировка по значениям (asort):<br>"; print_r($sort_arr);
        ksort($sort_arr);
        echo "<br>Сортировка по ключам (ksort):<br>"; print_r($sort_arr);

        echo "<br><br>--Задание 10--<br>";
    //Задание 10
        $digits = str_split('1234567890');
        echo "Сумма массива [ ".implode(', ',$digits)." ]: " . array_sum($digits);
        
        echo "<br><br>--Задание 11--<br>";
    //Задание 11
        print_r(array_fill(0, 10, 'x'));


        echo "<br><br>--Задание 12--<br>";
    //Задание 12
        $a1 = [1, 2, 3, 4, 5];
        $a2 = [3, 4, 5, 6, 7];
        echo "[ ".implode(', ',array_intersect($a1, $a2))." ]";
   ?>
</body>
</html>



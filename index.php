<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гончаров М.Д</title>
  </head>
  <body>
    <?php
    echo "<br>--Задание 1--<br>";
    //Задание 1
    function mul($a,$b){
        return $a*$b;
    }
    echo mul(6,6);
    echo "<br>--Задание 2--<br>";
    //Задание 2
        function m($a,$b){
        $result = mul($a,$b);
        return $result;
    }
    $a=rand(1,20);
    $b=rand(1,20);
    $result = function() use($a,$b){
        return mul($a,$b);
    };
    echo "1 Вариант ($a*$b): ".m($a,$b)."<br>";
    echo "2 Вариант ($a*$b): ".$result();
    echo "<br>--Задание 3--<br>";
    //Задание 3
    function operation($m, $n, $o) {
    return $o($m, $n);
    }

    $sum = function($a, $b) { return $a + $b; };
    echo "($a+$b) = ".operation($a, $b, $sum);
    echo "<br>--Задание 4--<br>";
    //Задание 4
echo "Исходный массив: ";
        function my_array_map($fn, $array) {
    $result = [];
    
    for ($i=0;$i < count($array);i++) {
        echo $array[$i]." ";
        $result[] = $fn($array[$i]);
    }
    return $result;
}

$numbers = [1, 2, 3, 4];
$squared = my_array_map(function($x) { return $x*$x; }, $numbers);


    echo "<br>--Задание 5--<br>";
    //Задание 5

    echo "<br>--Задание 6--<br>";
    //Задание 6

        echo "<br>--Задание 7--<br>";
    //Задание 7

    
   ?>
</body>
</html>



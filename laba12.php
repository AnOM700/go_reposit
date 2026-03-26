<!DOCTYPE html>
<html>
<title>Гончаров М.Д.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<?php
    try{
        $name= "test.txt";
        if(!fopen($name,"r")){
            throw new Exception("Ошибка: файл $name не существует");
        }
    }
    catch(Exception $ex){
        echo "Исключение: ".$ex->getMessage();
    }
?>
</body>
</html>

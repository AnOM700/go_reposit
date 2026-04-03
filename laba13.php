<?php


  //ПУНКТ 1: Создаем класс Worker
 
class Worker {
    // Свойства (Пункт 1)
    public $name;
    public $age;    
    public $salary;
}

// --- ВЫПОЛНЕНИЕ ПО ПУНКТАМ ---

echo "<h3>Результаты выполнения задания:</h3>";

// ПУНКТ 1: Создаем 2 объекта и устанавливаем значения
$worker1 = new Worker();
$worker1->name = "Иван";
$worker1->salary = 1000;
$worker1->age(25); 

$worker2 = new Worker();
$worker2->name = "Василий";
$worker2->salary = 2000;
$worker2->age(30);
// ПУНКТ 2: Выводим сумму зарплат и возрастов
echo "Сумма зарплат: " . ($worker1->salary + $worker2->salary) . "<br>";
echo "Сумма возрастов: " . ($worker1->age + $worker2->age) . "<br>";




?>


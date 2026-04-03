<?php

/**
 * ПУНКТ 1: Создаем класс Worker
 */
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
$worker1->setAge(25); 

$worker2 = new Worker();
$worker2->name = "Василий";
$worker2->salary = 2000;
$worker2->setAge(30);



?>


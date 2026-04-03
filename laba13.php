<?php


  //ПУНКТ 1
 
class Worker {
    // ПУНКТ 1
    public $name;
    public $age;    
    public $salary;
// Задания 3,4,5
public function getName() {
    return $this->name;
}

public function getAge() {
    return $this->age;
}

public function getSalary() {
    return $this->salary;
}




}

// --- ВЫПОЛНЕНИЕ ПО ПУНКТАМ ---

echo "<h3>Результаты выполнения задания:</h3>";

// ПУНКТ 1
$worker1 = new Worker();
$worker1->name = "Иван";
$worker1->salary = 1000;
$worker1->age = 25; 

$worker2 = new Worker();
$worker2->name = "Василий";
$worker2->salary = 2000;
$worker2->age = 30;
// ПУНКТ 2
echo "Сумма зарплат: " . ($worker1->salary + $worker2->salary) . "<br>";
echo "Сумма возрастов: " . ($worker1->age + $worker2->age) . "<br>";

// ПУНКТ 3,4,5
echo "Имя: " . $worker1->getName() . "<br>";
echo "Возраст: " . $worker1->getAge() . "<br>";
echo "Зарплата: " . $worker1->getSalary() . "<br>";

//ПУНКТ 6
$sumSalary = $worker1->getSalary() + $worker2->getSalary();
echo "Сумма зарплат через getSalary: " . $sumSalary . "<br>";


?>


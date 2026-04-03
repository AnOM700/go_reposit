<?php


  //ПУНКТ 1
 
class Worker {
    // ПУНКТ 1
    public $name;
    private $age; //ПУНКТ 7   
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
//ПУНКТ 7,8
public function setAge($age) {
    if ($age >= 18) {
        $this->age = $age;
    } else {
        echo "Вам работать в нашей компании еще рано<br>";
    }
}






}

// --- ВЫПОЛНЕНИЕ ПО ПУНКТАМ ---

echo "<h3>Результаты выполнения задания:</h3>";

// ПУНКТ 1
$worker1 = new Worker();
$worker1->name = "Иван";
$worker1->salary = 1000;


$worker2 = new Worker();
$worker2->name = "Василий";
$worker2->salary = 2000;
// ПУНКТ 7
$worker1->setAge(17);//Вывод предупреждения
$worker1->setAge(20);
$worker2->setAge(21); 
// ПУНКТ 2
echo "Сумма зарплат: " . ($worker1->salary + $worker2->salary) . "<br>";
echo "Сумма возрастов: " . ($worker1->getAge() + $worker2->getAge()) . "<br>";

// ПУНКТ 3,4,5
echo "Имя: " . $worker1->getName() . "<br>";
echo "Возраст: " . $worker1->getAge() . "<br>";
echo "Зарплата: " . $worker1->getSalary() . "<br>";

//ПУНКТ 6
$sumSalary = $worker1->getSalary() + $worker2->getSalary();
echo "Сумма зарплат через getSalary: " . $sumSalary . "<br>";


?>


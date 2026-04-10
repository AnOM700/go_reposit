<?php
interface CalculatableArea {
    public function getArea();
}


abstract class Figure {
    protected $area;
    protected $color;
    protected $sidesCount;

    abstract public function infoAbout();
}
class Rectangle extends Figure implements CalculatableArea {
    private $a;
    private $b;

    public function __construct($a, $b, $color = "black") {
        $this->a = $a;
        $this->b = $b;
        $this->color = $color;
        $this->sidesCount = 4;
    }

    public function getArea() {
        $this->area = $this->a * $this->b;
        return $this->area;
    }

    public function infoAbout() {
        return "Это класс прямоугольника. У него {$this->sidesCount} стороны.";
    }
}

class Square extends Figure implements CalculatableArea {
    private $a;

    public function __construct($a, $color = "blue") {
        $this->a = $a;
        $this->color = $color;
        $this->sidesCount = 4;
    }

    public function getArea() {
        $this->area = $this->a * $this->a;
        return $this->area;
    }

    public function infoAbout() {
        return "Это класс квадрата. У него {$this->sidesCount} стороны.";
    }
}
class Triangle extends Figure implements CalculatableArea {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c, $color = "green") {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->color = $color;
        $this->sidesCount = 3;
    }

    public function getArea() {
        $p = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return round($this->area, 2);
    }

    public function infoAbout() {
        return "Это класс треугольника. У него {$this->sidesCount} стороны.";
    }
}


?>

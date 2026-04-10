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

?>

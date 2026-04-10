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
?>

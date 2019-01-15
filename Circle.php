<?php


class Circle extends Figure
{


    private $radius;
    const PI = 3.14;

    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->setRadius($radius);
    }

    public function AreaFigure(){
        $this->area = self::PI * pow($this->radius,2);
        // возвращаем ноль - по заданию
        return 0;
    }

    public function getFigure(){
        echo "<hr><b>Данные фигуры:</b><br>
            Наименование: {$this->name}<br>
            Радиус: {$this->getRadius()} см<br>
            Площадь: {$this->getArea()} см^2<br>
        ";
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

}
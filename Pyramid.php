<?php


class Pyramid extends Figure
{

    protected $apophema;  //апофема
    protected $perimeter;
    protected $radius; //радиус вписанной окружности(для рассчета площади основания)

    public function __construct($name,$apophema,$perimeter,$radius)
    {
        parent::__construct($name);
        $this->apophema = $apophema;
        $this->perimeter = $perimeter;
        $this->radius = $radius;

    }

    public function AreaFigure(){
        $this->area = (1/2 * $this->radius * $this->perimeter) + (1/2 * $this->perimeter*$this->apophema);
        // возвращаем ноль - по заданию
        //return 0;
    }

    public function getFigure()
    {
        echo "<hr><b>Данные фигуры:</b><br>
            Наименование: {$this->name}<br>
            Апофема: {$this->apophema} см<br>
            Периметр: {$this->perimeter} см<br>
            Радиус вписанной окружности: {$this->radius} см<br>
            Площадь: {$this->area} см^2<br>
        ";
    }
}
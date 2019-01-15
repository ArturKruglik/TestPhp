<?php


class Rectangle extends  Figure
{
    public $length;
    public $width;


    public function __construct($name,$length,$width)
    {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
    }


    public function AreaFigure(){
        $this->area = ($this->length) * ($this->width);
        // возвращаем ноль - по заданию
        return 0;
    }

    public function getFigure(){
        echo "<hr><b>Данные фигуры:</b><br>
            Наименование: {$this->name}<br>
            Длина: {$this->length} см<br>
            Ширина: {$this->width} см<br>
            Площадь: {$this->area} см^2<br>
        ";


    }
}
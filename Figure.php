<?php


abstract class Figure
{

    public $name;
    public $area = 0;

    public function __construct($name)
    {
        $this->name = $name;

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    abstract public function AreaFigure();

    abstract public function getFigure();

    /**
     * @return int
     */
    public function getArea()
    {
        return $this->area;
    }

}
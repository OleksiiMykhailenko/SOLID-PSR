<?php

//Hint - Liskov Substitution Principle

interface calculationFigures
{
    public function area();
}

class Figures
{   protected $width;
    protected $height;

    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function area()
    {
        return $this->height * $this->width;
    }
}
class Rectangle extends Figures implements calculationFigures
{

}

class Square extends Figures implements calculationFigures
{

}

class RectangleTest
{
    private $rectangle;
    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }
    public function testArea()
    {
        $this->rectangle->setHeight(2);
        $this->rectangle->setWidth(3);
        if ($this->rectangle->area() !== 6) {
            return "Bad area \n";
        } else {
            return "Test passed! \n";
        }
    }
}

class SquareTest
{
    private $square;
    public function __construct(Square $square)
    {
        $this->square = $square;
    }
    public function testArea()
    {
        $this->square->setHeight(2);
        $this->square->setWidth(2);
        if ($this->square->area() !== 4) {
            return "Bad area \n";
        } else {
            return "Test passed! \n";
        }
    }
}

$rectangle = new Rectangle();
echo "Calc area for rectangle \n";
$rectangleTest = new RectangleTest($rectangle);
echo $rectangleTest->testArea();
$square = new Square();
echo "Calc area for square \n";
$squareTest = new SquareTest($square);
echo $squareTest->testArea();
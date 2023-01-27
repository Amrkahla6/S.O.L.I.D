<?php


use SOLID\SP\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    /**
     * @var Square
     */
    private $square;

    public function setUp()
    {
        $this->square = new Square;
        $this->square->setHeight(5);
        $this->square->setWidth(10);
    }

    public function test_that_area_is_valid(){
        $this->assertEquals(50,$this->square->calculateArea());
    }
}

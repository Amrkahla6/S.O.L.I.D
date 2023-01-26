<?php


namespace SOLID\OCP;

use SOLID\OCP\Vehicle;

class Car extends Vehicle
{
    public function move() : string {
        return "I move in the road";
    }
}
<?php


namespace SOLID\OCP;

use SOLID\OCP\IMove;

class MoveOnTheRoads implements IMove
{
    public function move() : string {
        return "I move in the road";
    }
}
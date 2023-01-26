<?php


namespace SOLID\OCP;

use SOLID\OCP\IMove;

class MoveOverWaves implements IMove
{
    public function move() : string {
        return "I am ship and I am floating";
    }
}
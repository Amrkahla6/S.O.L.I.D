<?php


namespace SOLID\ISP;


class Car implements Vehicle
{
    public function move(){
        echo "I am moving";
    }

    public function accelerate(){
        echo "I can accelerate up to 200 per/h";
    }

    public function stop(){
        echo "Stopping";
    }
    public function musicPlay(){
        echo "Playing your favourite music";
    }
    public function pause(){
        echo "pausing current track";
    }
    public function rewind(){
        echo "I will rewind the tape";
    }
    public function caryHeavyCargo(){
        echo "Having a cargo that wights 2000 kg";
    }
}
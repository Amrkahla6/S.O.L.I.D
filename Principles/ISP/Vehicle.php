<?php

namespace SOLID\ISP;

interface Vehicle
{
    public function move();
    public function accelerate();
    public function stop();
    public function musicPlay();
    public function pause();
    public function rewind();
    public function caryHeavyCargo();
}
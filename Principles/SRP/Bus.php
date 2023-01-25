<?php


namespace SOLID\SRP;


/**
 * Class Bus
 * @package SOLID\SRP
 */
class Bus
{
    /**
     * @var int
     */
    private $busNumber;
    /**
     * @var int
     */
    private $numberOfPassenger;
    /**
     * @var string
     */
    private $color;
    /**
     * @var string
     */
    private $maxNumberSpeed;

    /**
     * @var integer
     */
    private $doors;

    /**
     * @var Driver
     */
    private $drivers;

    /**
     * @var array
     */
    private $route = [];

    /**
     * Bus constructor.
     * @param $busNumber
     */
    public function __construct($busNumber)
    {
        $this->setBusNumber($busNumber);
    }

    /**
     * @return int
     */
    public function getNumberOfPassenger(): int
    {
        return $this->numberOfPassenger;
    }

    /**
     * @param int $numberOfPassenger
     */
    public function setNumberOfPassenger(int $numberOfPassenger): void
    {
        $this->numberOfPassenger = $numberOfPassenger;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMaxNumberSpeed(): string
    {
        return $this->maxNumberSpeed . "K/H";
    }

    /**
     * @param int $maxNumberSpeed
     */
    public function setMaxNumberSpeed(int $maxNumberSpeed): void
    {
        $this->maxNumberSpeed = $maxNumberSpeed;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @return Driver
     */
    public function getDrivers(): Driver
    {
        return $this->drivers;
    }

    /**
     * @param Driver $drivers
     */
    public function setDrivers(Driver $drivers): void
    {
        $this->drivers = $drivers;
    }



    /**
     * @return array
     */
    public function getRoute(): array
    {
        return $this->route;
    }

    /**
     * @param Route $route
     */
    public function addRoute(Route $route): void{
        $this->route[] = $route;
    }

    /**
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }


    /**
     * @param $from string from destination
     * @param $to string to distinction
     * @return string
     */
    public function driveToRoute(string $from,string $to) : string
    {
        return "This bus is return" . $from . " to " . $to;
    }

    /**
     * @return string
     */
    public function doMaintenance() : string
    {
        return "The bus is doing maintenance right now";
    }

    public function move(): string
    {
        $output = '';
        foreach ($this->getRoute() as $route){
            $output .= "<p> I am moving now from " . $route->getSource() .
                " to " . $route->getDestination() .
                " at max speed of ". $this->getMaxNumberSpeed() .
                " the driver is ". $this->getDrivers()->getName() ."</p>";
        }
        return $output;
    }


}
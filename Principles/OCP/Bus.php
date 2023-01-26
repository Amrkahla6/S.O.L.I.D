<?php


namespace SOLID\OCP;

use SOLID\OCP\Vehicle;

/**
 * Class Bus
 * @package SOLID\SRP
 */
class Bus extends Vehicle
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
     * @var integer
     */
    private $doors;

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
}
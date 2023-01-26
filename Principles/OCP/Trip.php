<?php
namespace SOLID\OCP;

class Trip
{
    /**
     * @var IVehicle
     */
    private $vehicle;

    /**
     * @var string
     */

    /**
     * @var string
     */
    private $tripNumber;

    /**
     * @var int
     */
    private $tripPrice;

    /**
     * @var int time duration in minutes
     */
    private $duration;

    /**
     * Trip constructor.
     * @param IVehicle $vehicle
     * @param string $tripNumber
     * @param float $tripPrice
     * @param int $duration
     */
    public function __construct(IVehicle $vehicle, string $tripNumber, float $tripPrice, int $duration)
    {
        $this->setVehicle($vehicle);
        $this->setTripNumber($tripNumber);
        $this->setTripPrice($tripPrice);
        $this->setDuration($duration);
    }

    /**
     * @return IVehicle
     */
    public function getVehicle(): IVehicle
    {
        return $this->vehicle;
    }

    /**
     * @param IVehicle $vehicle
     */
    public function setVehicle(IVehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    /**
     * @return float
     */
    public function getTripNumber(): float
    {
        return $this->tripNumber;
    }

    /**
     * @param string $tripNumber
     */
    public function setTripNumber(string $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    /**
     * @return int
     */
    public function getTripPrice(): int
    {
        return $this->tripPrice;
    }

    /**
     * @param int $tripPrice
     */
    public function setTripPrice(int $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function move() : string {
        return $this->vehicle->move();
    }
}
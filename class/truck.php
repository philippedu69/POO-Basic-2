<?php

use http\QueryString;

require_once 'vehicle.php';

class Truck extends Vehicle
{
    /**
     * @var string
     */
    private $energy;
    /**
     * @var int
     */
    private $storageCapacity = 100;
    /**
     * @var int
     */
    private $shipment = 0;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {

            $this->storageCapacity = $storageCapacity;
    }
    public function getShipment(): int
    {
        return $this->shipment;
    }
    public function setShipment(int $shipment): void
    {
        $this->shipment = $shipment;
    }
    public function fillingIn(): string
    {
        $sentence = "";
        while($this->shipment < $this->storageCapacity){
            $this->shipment += 25;
            $sentence .= "in filling";
        }
        $sentence .= "full";
        return $sentence;
    }

}


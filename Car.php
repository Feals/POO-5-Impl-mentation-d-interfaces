<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Car extends Vehicle implements LightableInterface
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',

    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, int $nbWheels, string $energy)
    {
        parent::__construct($color, $nbSeats, $nbWheels);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

 public function setEnergy(string $energy): Car
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function start(): string | NULL
    { if ($this->hasParkBrake === true) {
        throw new Exception('Park brake is pulled <br>');        
    } return null;
    }

    public function setParkBrake(): void
    {   if ($this->hasParkBrake = true) {
        $this->hasParkBrake = false;}
        else { $this->hasParkBrake = true;}
    }

    public function switchOn(): string

    { return 'la lumière est allumée';

        // you must implement this method

    }

    public function switchOff(): string

    { return 'la lumière est éteinte';

        // you must implement this method

    }
    
}

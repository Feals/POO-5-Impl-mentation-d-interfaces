<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Bicycle extends Vehicle implements LightableInterface

{

    private bool $dynamo;

    public function __construct(string $color, int $nbSeats, bool $dynamo)

    {

        $this->color = $color;

        $this->nbSeats = $nbSeats;

        $this->dynamo = $dynamo;

    }

    public function getDynamo(): bool

    {

        return $this->dynamo;

    }


    public function setDynamo(bool $dynamo): void

    {

        $this->dynamo = $dynamo;

    }

    public function switchOn(): string

    { if ($this->dynamo = true && $this->currentSpeed >= 10) {
        
        return 'la lumière est allumée';
    } else {
        return 'la lumière est éteinte';
    }

    }

    public function switchOff(): string

    { return 'la lumière est éteinte';

        // you must implement this method

    }
}
<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Wheel;

class CarBuilder implements Builder
{
    private Car $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        $this->car->setPart('Wheel1', new Wheel());
        $this->car->setPart('Wheel2', new Wheel());
        $this->car->setPart('Wheel3', new Wheel());
        $this->car->setPart('Wheel4', new Wheel());
        $this->car->setPart('Wheel5', new Wheel());
        $this->car->setPart('Wheel6', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('rightDoor', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
<?php

namespace CreationalDesignPatterns\Builder;

use CreationalDesignPatterns\Builder\Vehicle\Parts\Door;
use CreationalDesignPatterns\Builder\Vehicle\Parts\Engine;
use CreationalDesignPatterns\Builder\Vehicle\Parts\Wheel;
use CreationalDesignPatterns\Builder\Vehicle\Parts\Mirror;
use CreationalDesignPatterns\Builder\Vehicle\Parts\Light;
use CreationalDesignPatterns\Builder\Vehicle;
use CreationalDesignPatterns\Builder\VehicleBuilder;

/**
 * Car builder
 */
class CarBuilder implements VehicleBuilder
{
    /**
     * Car vehicle
     *
     * @var Vehicle
     */
    private $car;

    /**
     * {@inheritDoc}
     */
    public function createVehicle()
    {
        $this->car = new Vehicle();
    }

    /**
     * {@inheritDoc}
     */
    public function addDoors()
    {
        $this->car->addPart('frontRightDoor', new Door());
        $this->car->addPart('frontLeftDoor', new Door());
        $this->car->addPart('backRightDoor', new Door());
        $this->car->addPart('backLeftDoor', new Door());
    }

    /**
     * {@inheritDoc}
     */
    public function addEngine()
    {
        $this->car->addPart('carEngine', new Engine());
    }

    /**
     * {@inheritDoc}
     */
    public function addWheels()
    {
        $this->car->addPart('frontLeftWheel', new Wheel());
        $this->car->addPart('frontRightWheel', new Wheel());
        $this->car->addPart('backLeftWheel', new Wheel());
        $this->car->addPart('backRightWheel', new Wheel());
    }

    /**
     * {@inheritDoc}
     */
    public function addLights()
    {
        $this->car->addPart('frontLeftLight', new Light());
        $this->car->addPart('frontRightLight', new Light());
        $this->car->addPart('backLeftLight', new Light());
        $this->car->addPart('backRightLight', new Light());
    }

    /**
     * {@inheritDoc}
     */
    public function addMirrors()
    {
        $this->car->addPart('leftExternalMirror', new Mirror());
        $this->car->addPart('rightExternalMirror', new Mirror());
        $this->car->addPart('centerInternalMirror', new Mirror());
    }

    /**
     * {@inheritDoc}
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}

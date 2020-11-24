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
 * Truck builder
 */
class TruckBuilder implements VehicleBuilder
{
    /**
     * Truck vehicle
     *
     * @var Vehicle
     */
    private $truck;

    /**
     * {@inheritDoc}
     */
    public function createVehicle()
    {
        $this->truck = new Vehicle();
    }

    /**
     * {@inheritDoc}
     */
    public function addDoors()
    {
        $this->truck->addPart('frontRightDoor', new Door());
        $this->truck->addPart('frontLeftDoor', new Door());
    }

    /**
     * {@inheritDoc}
     */
    public function addEngine()
    {
        $this->truck->addPart('truckEngine', new Engine());
    }

    /**
     * {@inheritDoc}
     */
    public function addWheels()
    {
        $this->truck->addPart('frontLeftWheel', new Wheel());
        $this->truck->addPart('frontRightWheel', new Wheel());
        $this->truck->addPart('backLeftWheel1', new Wheel());
        $this->truck->addPart('backLeftWheel2', new Wheel());
        $this->truck->addPart('backRightWheel', new Wheel());
        $this->truck->addPart('backRightWhee2', new Wheel());
    }

    /**
     * {@inheritDoc}
     */
    public function addLights()
    {
        $this->truck->addPart('frontLeftLight', new Light());
        $this->truck->addPart('frontRightLight', new Light());
        $this->truck->addPart('backLeftLight', new Light());
        $this->truck->addPart('backRightLight', new Light());
    }

    /**
     * {@inheritDoc}
     */
    public function addMirrors()
    {
        $this->truck->addPart('leftExternalMirror', new Mirror());
        $this->truck->addPart('rightExternalMirror', new Mirror());
        $this->truck->addPart('centerInternalMirror', new Mirror());
    }

    /**
     * {@inheritDoc}
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}

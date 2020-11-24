<?php

namespace CreationalDesignPatterns\Builder;

use CreationalDesignPatterns\Builder\Vehicle;

/**
 * Director is part of the builder pattern. It knows the interface of the builder
 * and builds a complex object with the help of the builder
 *
 * You can also inject many builders instead of one to build more complex objects
 */
class Director
{
    /**
     * Build the vehicle
     *
     * @param VehicleBuilder $vehicleBuilder
     * @return Vehicle
     */
    public function build(VehicleBuilder $vehicleBuilder): Vehicle
    {
        $vehicleBuilder->createVehicle();
        $vehicleBuilder->addDoors();
        $vehicleBuilder->addEngine();
        $vehicleBuilder->addWheels();
        $vehicleBuilder->addLights();

        return $vehicleBuilder->getVehicle();
    }
}

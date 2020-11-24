<?php

namespace CreationalDesignPatterns\Builder;

use CreationalDesignPatterns\Builder\Vehicle;

/**
 * Vehicle builder interface
 */
interface VehicleBuilder
{
    /**
     * Create vehicle
     *
     * @return void
     */
    public function createVehicle();

    /**
     * Add wheels to vehicle
     *
     * @return void
     */
    public function addWheels();

    /**
     * Add engine to vehicle
     *
     * @return void
     */
    public function addEngine();

    /**
     * Add doors to vehicle
     *
     * @return void
     */
    public function addDoors();

    /**
     * Add lights to vehicle
     *
     * @return void
     */
    public function addLights();

    /**
     * Add mirrors to vehicle
     *
     * @return void
     */
    public function addMirrors();

    /**
     * Get vehicle
     *
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}

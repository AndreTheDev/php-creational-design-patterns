<?php

namespace CreationalDesignPatterns\Prototype;

/**
 * United States city prototype
 */
class UnitedStatesCityPrototype extends CityPrototype
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->country = 'United States';
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
    }
}
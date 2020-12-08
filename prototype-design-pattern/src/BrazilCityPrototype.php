<?php

namespace CreationalDesignPatterns\Prototype;

/**
 * Brazil city prototype
 */
class BrazilCityPrototype extends CityPrototype
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->country = 'Brazil';
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
    }
}
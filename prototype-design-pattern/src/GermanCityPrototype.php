<?php

namespace CreationalDesignPatterns\Prototype;

/**
 * German city prototype
 */
class GermanCityPrototype extends CityPrototype
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->country = 'German';
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
    }
}
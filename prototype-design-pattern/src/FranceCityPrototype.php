<?php

namespace CreationalDesignPatterns\Prototype;

/**
 * France city prototype
 */
class FranceCityPrototype extends CityPrototype
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->country = 'France';
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
    }
}
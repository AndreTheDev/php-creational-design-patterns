<?php

namespace CreationalDesignPatterns\Prototype;

/**
 * China city prototype
 */
class ChinaCityPrototype extends CityPrototype
{
    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->country = 'China';
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
    }
}
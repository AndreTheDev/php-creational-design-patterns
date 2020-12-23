<?php

namespace CreationalDesignPatterns\Pool;

use CreationalDesignPatterns\Pool\Laptop;

/**
 * Laptop Pool
 */
class LaptopPool
{
    /**
     * Laptops
     *
     * @var array
     */
    private $laptops = [];

    /**
     * Laptops been used
     *
     * @var array
     */
    private $occupiedLaptops = [];

    /**
     * Get laptop from pool or from list
     *
     * @return Laptop
     */
    public function getLaptop(): Laptop
    {
        if (!$this->laptops) {
            // here you deal with the complexity of create a new object
            $laptop = new Laptop();
        } else {
            $laptop = array_pop($this->laptops);
        }

        $this->occupiedLaptops[spl_object_hash($laptop)] = $laptop;

        return $laptop;
    }

    /**
     * Return the laptop to the list of laptops
     *
     * @param Laptop $laptop
     * @return void
     */
    public function dispose(Laptop $laptop)
    {
        $key = spl_object_hash($laptop);

        if (!isset($this->occupiedLaptops[$key])) {
            return;
        }

        unset($this->occupiedLaptops[$key]);
        $this->laptops[$key] = $laptop;
    }
}

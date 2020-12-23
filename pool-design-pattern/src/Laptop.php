<?php

namespace CreationalDesignPatterns\Pool;

/**
 * Laptop
 */
class Laptop
{
    /**
     * Model
     *
     * @var string
     */
    private $model;

    /**
     * Brand
     *
     * @var string
     */
    private $brand;

    /**
     * Year 
     *
     * @var integer
     */
    private $year;

    /**
     * Get model of laptop
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * Set model of laptop
     *
     * @param string $model
     * @return self
     */
    public function setModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Get brand from laptop
     *
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Set brand of laptop
     *
     * @param string $brand
     * @return self
     */
    public function setBrand(string $brand): self
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Get year from laptop
     *
     * @return integer
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * Set year from laptop
     *
     * @param integer $year
     * @return self
     */
    public function setYear(int $year): self
    {
        $this->year = $year;
        return $this;
    }
}

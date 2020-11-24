<?php

namespace CreationalDesignPatterns\Builder;

/**
 * Vehicle
 */
class Vehicle
{
    /**
     * @var object[]
     */
    private $parts = [];
    
    /**
     * Model of vehicle
     *
     * @var string
     */
    private $model;

    /**
     * Year of vehicle
     *
     * @var integer
     */
    private $year;

    /**
     * Add vehicle part
     *
     * @param string $key
     * @param object $value
     * @return void
     */
    public function addPart(string $key, object $value): self
    {
        $this->parts[$key] = $value;
        return $this;
    }

    /**
     * Get vehicle model
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * Set vehicle model
     *
     * @param string $model
     * @return void
     */
    public function setModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }

    /**
     * Get vehicle year
     *
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * Set vehicle year
     *
     * @param integer $year
     * @return void
     */
    public function setYear(int $year): self
    {
        $this->year = $year;
        return $this;
    }

    /**
     * Serialize to array
     *
     * @return array
     */
    public function __toArray(): array
    {
        return [
            $this->model,
            $this->year,
            $this->parts
        ];
    }
}
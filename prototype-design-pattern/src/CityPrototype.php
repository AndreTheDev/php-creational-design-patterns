<?php

namespace CreationalDesignPatterns\Prototype;

/**
 * City Prototype
 */
abstract class CityPrototype
{
    /**
     * City name
     *
     * @var string
     */
    protected $name;

    /**
     * City country
     *
     * @var string
     */
    protected $country;

    /**
     * City population
     *
     * @var integer
     */
    protected $population;

    /**
     * Is capital
     *
     * @var boolean
     */
    protected $isCapital;

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get country
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get population
     *
     * @return integer|null
     */
    public function getPopulation(): ?int
    {
        return $this->population;
    }

    /**
     * Set population
     *
     * @param integer $population
     * @return self
     */
    public function setPopulation(int $population): self
    {
        $this->population = $population;
        return $this;
    }

    /**
     * Check if city is capital
     *
     * @return boolean|null
     */
    public function isCapital(): ?bool
    {
        return $this->isCapital;
    }

    /**
     * Define if the city is capital
     *
     * @param boolean $isCapital
     * @return self
     */
    public function setIsCapital(bool $isCapital): self
    {
        $this->isCapital = $isCapital;
        return $this;
    }

    /**
     * Native magic call function of clone objects in php which is a essential piece in prototype design pattern
     *
     * @return void
     */
    public abstract function __clone();
}
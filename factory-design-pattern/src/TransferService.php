<?php

namespace CreationalDesignPatterns\Factory\Service;

/**
 * Transfer Service
 * 
 * @package CreationalDesignPatterns\Factory\Service
 */
class TransferService
{
    /**
     * Minimum value to transfer
     *
     * @var integer
     */
    private $minValue;

    /**
     * Max transaction value
     *
     * @var integer
     */
    private $maxValue;

    /**
     * Service construct
     *
     * @param integer $minValue
     * @param integer $maxValue
     */
    public function __construct(int $minValue, int $maxValue)
    {
        $this->minValue = $minValue;
        $this->maxValue = $maxValue;
    }

    /**
     * Execute the service
     *
     * @param string $accountFrom
     * @param string $accountTo
     * @param float $value
     * @return boolean
     */
    public function execute(string $accountFrom, string $accountTo, float $value): bool
    {
        if ($value < $this->minValue) {
            print_r("The value of transfer is under the minimum value");
            return false;
        }

        if ($value > $this->maxValue) {
            print_r("The value of transfer is above the maximum value");
            return false;
        }

        // execute the transfer
        print_r("The value \${$value} was succesfully transfered from {$accountFrom} to {$accountTo}");
        return true;
    }
}

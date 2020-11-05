<?php

namespace CreationalDesignPatterns\Factory\Service;

/**
 * Transfer Service factory
 * 
 * @package CreationalDesignPatterns\Factory\Service;
 */
class TransferServiceFactory
{
    /**
     * Execute the service
     *
     * @var CreateUserRequest
     * @return CreateUserResponse
     */
    public function __invoke(): TransferService
    {
        // These values can come from system configuration, by example
        $maxValue = 100;
        $minValue = 10;

        // Here may have authentication configs too

        return new TransferService($minValue, $maxValue);
    }
}

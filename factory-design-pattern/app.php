<?php

declare(strict_types=1);

namespace CreationalDesignPatterns\Factory;

require __DIR__ . '\src\TransferService.php';
require __DIR__ . '\src\TransferServiceFactory.php';

use CreationalDesignPatterns\Factory\Service\TransferServiceFactory;

/**
 * Function which runs the app
 *
 * @return void
 */
function run()
{
    global $argv;

    $accountFrom = $argv[1];
    $accountTo = $argv[2];
    $value = (int) $argv[3];

    $transferService = (new TransferServiceFactory())();
    $transferService->execute($accountFrom, $accountTo, $value);
}

run();
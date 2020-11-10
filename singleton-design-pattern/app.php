<?php

declare(strict_types=1);

namespace CreationalDesignPatterns\Singleton;

require __DIR__ . '\src\GroupRepository.php';
require __DIR__ . '\src\UserRepository.php';

use CreationalDesignPatterns\Singleton\GroupRepository;
use CreationalDesignPatterns\Singleton\UserRepository;

/**
 * Function which runs the app
 *
 * @return void
 */
function run()
{
    // Trying without Singleton
    (new GroupRepository())->listGroups();
    (new GroupRepository())->getGroupById(29);
    (new GroupRepository())->countGroups();
    // At each call, a new intance is created and a new connection to database will be opened

    var_dump('------------------------------------');

    // Trying with Singleton
    UserRepository::getInstance()->listUsers();
    UserRepository::getInstance()->getUserById(13);
    UserRepository::getInstance()->countUsers();
    // The instance is reused at each call, eliminating the need to open a new connection to database
}

run();
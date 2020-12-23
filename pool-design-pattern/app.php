<?php

declare(strict_types=1);

namespace CreationalDesignPatterns\Pool;

require __DIR__ . '\src\Laptop.php';
require __DIR__ . '\src\LaptopPool.php';

use CreationalDesignPatterns\Pool\Laptop;
use CreationalDesignPatterns\Pool\LaptopPool;

/**
 * Execute the application without parameters
 *
 * @return void
 */
function run()
{
    $laptop1 = (new Laptop())
        ->setBrand('Dell')
        ->setModel('G5')
        ->setYear(2020);

    // do something with this laptop instance...

    $laptop2 = (new Laptop())
        ->setBrand('Dell')
        ->setModel('G3')
        ->setYear(2020);

    // do something with this laptop instance...

    $laptop3 = (new Laptop())
        ->setBrand('Dell')
        ->setModel('G7')
        ->setYear(2018);

    // do something with this laptop instance...

    $laptop4 = (new Laptop())
        ->setBrand('ACER')
        ->setModel('Nitro 5')
        ->setYear(2020);

    // do something with this laptop instance...

    $laptop4 = (new Laptop())
        ->setBrand('ACER')
        ->setModel('Nitro 7')
        ->setYear(2018);

    // do something with this laptop instance...

    // Pay attention that we need to create some instances of laptops to manipulate them
}

/**
 * Execute the application with pool design pattern applied
 *
 * @return void
 */
function runWithPoolDesignPatternApplied()
{
    $pool = new LaptopPool();

    $laptop1 = $pool->getLaptop(); // get a new or a existing laptop instance in pool
    $laptop1
        ->setBrand('ACER')
        ->setModel('Nitro 7')
        ->setYear(2018);

    // do something with this laptop instance...

    $pool->dispose($laptop1); // send it back to pool

    $laptop2 = $pool->getLaptop();
    // do something with this laptop instance...
    $laptop3 = $pool->getLaptop();
    // do something with this laptop instance...

    $pool->dispose($laptop2); 
    $pool->dispose($laptop3); 

    $laptop4 = $pool->getLaptop();
    // do something with this laptop instance...

    $pool->dispose($laptop4); 

    $laptop5 = $pool->getLaptop();
    // do something with this laptop instance...
    $laptop6 = $pool->getLaptop();
    // do something with this laptop instance...

    $pool->dispose($laptop5); 
    $pool->dispose($laptop6); 
}

run();
runWithPoolDesignPatternApplied();
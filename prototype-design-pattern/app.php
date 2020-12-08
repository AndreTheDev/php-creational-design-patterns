<?php

declare(strict_types=1);

namespace CreationalDesignPatterns\Prototype;

require __DIR__ . '\src\CityPrototype.php';
require __DIR__ . '\src\BrazilCityPrototype.php';
require __DIR__ . '\src\ChinaCityPrototype.php';
require __DIR__ . '\src\FranceCityPrototype.php';
require __DIR__ . '\src\GermanCityPrototype.php';
require __DIR__ . '\src\UnitedStatesCityPrototype.php';

use CreationalDesignPatterns\Prototype\BrazilCityPrototype;
use CreationalDesignPatterns\Prototype\UnitedStatesCityPrototype;
use CreationalDesignPatterns\Prototype\ChinaCityPrototype;
use CreationalDesignPatterns\Prototype\FranceCityPrototype;
use CreationalDesignPatterns\Prototype\GermanCityPrototype;

/**
 * Execute the app without the prototype design pattern applied
 *
 * @return void
 */
function runApp()
{
    $cities = [];

    $cities[] = (new BrazilCityPrototype())
        ->setName('Rio de Janeiro')
        ->setPopulation(6000000)
        ->setIsCapital(false);

    $cities[] = (new BrazilCityPrototype())
        ->setName('Brasilia')
        ->setPopulation(3000000)
        ->setIsCapital(true);

    $cities[] = (new BrazilCityPrototype())
        ->setName('São Paulo')
        ->setPopulation(11000000)
        ->setIsCapital(false);

    $cities[] = (new UnitedStatesCityPrototype())
        ->setName('Los Angeles')
        ->setPopulation(4000000)
        ->setIsCapital(false);

    $cities[] = (new UnitedStatesCityPrototype())
        ->setName('New York')
        ->setPopulation(8000000)
        ->setIsCapital(false);

    $cities[] = (new UnitedStatesCityPrototype())
        ->setName('Washington')
        ->setPopulation(700000)
        ->setIsCapital(true);

    $cities[] = (new ChinaCityPrototype())
        ->setName('Beijing')
        ->setPopulation(20000000)
        ->setIsCapital(true);

    $cities[] = (new ChinaCityPrototype())
        ->setName('Shangai')
        ->setPopulation(26000000)
        ->setIsCapital(false);

    $cities[] = (new FranceCityPrototype())
        ->setName('Paris')
        ->setPopulation(2000000)
        ->setIsCapital(true);

    $cities[] = (new FranceCityPrototype())
        ->setName('Lyon')
        ->setPopulation(500000)
        ->setIsCapital(false);

    $cities[] = (new GermanCityPrototype())
        ->setName('Berlin')
        ->setPopulation(3500000)
        ->setIsCapital(true);

    $cities[] = (new GermanCityPrototype())
        ->setName('Munich')
        ->setPopulation(1500000)
        ->setIsCapital(false);

    // pay attention that at every city object instance created, there is a new instance in memory created

    print_r(PHP_EOL);
    print_r('CITIES' . PHP_EOL);

    showCities($cities);
}

/**
 * Execute the app with the prototype design pattern applied
 *
 * @return void
 */
function runAppWithPrototypeDesignPatternApplied()
{
    $cities = [];

    $brazilCity = new BrazilCityPrototype();

    $cities[] = $brazilCity
        ->setName('Rio de Janeiro')
        ->setPopulation(6000000)
        ->setIsCapital(false);;

    $cities[] = (clone $brazilCity)
        ->setName('Brasilia')
        ->setPopulation(3000000)
        ->setIsCapital(true);

    $cities[] = (clone $brazilCity)
        ->setName('São Paulo')
        ->setPopulation(11000000)
        ->setIsCapital(false);

    $unitedStatesCity = new UnitedStatesCityPrototype();

    $cities[] = (clone $unitedStatesCity)
        ->setName('Los Angeles')
        ->setPopulation(4000000)
        ->setIsCapital(false);

    $cities[] = (clone $unitedStatesCity)
        ->setName('New York')
        ->setPopulation(8000000)
        ->setIsCapital(false);

    $cities[] = (clone $unitedStatesCity)
        ->setName('Washington')
        ->setPopulation(700000)
        ->setIsCapital(true);

    $chinaCity = new ChinaCityPrototype();

    $cities[] = (clone $chinaCity)
        ->setName('Beijing')
        ->setPopulation(20000000)
        ->setIsCapital(true);

    $cities[] = (clone $chinaCity)
        ->setName('Shangai')
        ->setPopulation(26000000)
        ->setIsCapital(false);

    $franceCity = new FranceCityPrototype();

    $cities[] = (clone $franceCity)
        ->setName('Paris')
        ->setPopulation(2000000)
        ->setIsCapital(true);

    $cities[] = (clone $franceCity)
        ->setName('Lyon')
        ->setPopulation(500000)
        ->setIsCapital(false);

    $germanCity = new GermanCityPrototype();

    $cities[] = (clone $germanCity)
        ->setName('Berlin')
        ->setPopulation(3500000)
        ->setIsCapital(true);

    $cities[] = (clone $germanCity)
        ->setName('Munich')
        ->setPopulation(1500000)
        ->setIsCapital(false);

    // apllying the prototype design pattern we reduce the creation of new objects instances in memory
    // because the use of php native magic call function "clone"

    // we can make this code even better if we remove almost all cities objects instances creation,
    // except one so then we can use it to manipulate it values

    print_r(PHP_EOL);
    print_r('CITIES WITH PROTOTYPE DESIGN PATTERN APPLIED' . PHP_EOL);

    showCities($cities);
}

/**
 * Show the cities list
 *
 * @return void
 */
function showCities(array $cities)
{
    foreach ($cities as $city) {
        print_r(PHP_EOL);
        print_r('This is the ' . $city->getName() . ' city' . PHP_EOL);
        print_r('Name: ' . $city->getName() . PHP_EOL);
        print_r('Country: ' . $city->getCountry() . PHP_EOL);
        print_r('Population: ' . $city->getPopulation() . PHP_EOL);
        print_r('Is Capital: ' . ($city->isCapital() ? 'Yes' : 'No') . PHP_EOL);
    }
}

runApp();
runAppWithPrototypeDesignPatternApplied();
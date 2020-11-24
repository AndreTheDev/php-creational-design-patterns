<?php

declare(strict_types=1);

namespace CreationalDesignPatterns\Builder;

require __DIR__ . '\src\Vehicle\Parts\Door.php';
require __DIR__ . '\src\Vehicle\Parts\Engine.php';
require __DIR__ . '\src\Vehicle\Parts\Light.php';
require __DIR__ . '\src\Vehicle\Parts\Mirror.php';
require __DIR__ . '\src\Vehicle\Parts\Wheel.php';
require __DIR__ . '\src\Vehicle\Vehicle.php';
require __DIR__ . '\src\VehicleBuilder.php';
require __DIR__ . '\src\Director.php';
require __DIR__ . '\src\CarBuilder.php';
require __DIR__ . '\src\TruckBuilder.php';

use CreationalDesignPatterns\Builder\Vehicle\Parts\Door;
use CreationalDesignPatterns\Builder\Vehicle\Parts\Engine;
use CreationalDesignPatterns\Builder\Vehicle\Parts\Light;
use CreationalDesignPatterns\Builder\Vehicle\Parts\Mirror;
use CreationalDesignPatterns\Builder\Vehicle\Parts\Wheel;
use CreationalDesignPatterns\Builder\Vehicle;

/**
 * Run the app without builder design pattern
 *
 * @return void
 */
function runWithoutBuilderDesignPattern()
{
    var_dump("creating the Car...");
    $car = new Vehicle();

    var_dump("adding the doors...");
    $car->addPart("frontRightDoor", new Door());
    $car->addPart("frontLeftDoor", new Door());
    $car->addPart("backRightDoor", new Door());
    $car->addPart("backLeftDoor", new Door());

    var_dump("adding the engine...");
    $car->addPart("carEngine", new Engine());

    var_dump("adding the wheels...");
    $car->addPart("frontLeftWheel", new Wheel());
    $car->addPart("frontRightWheel", new Wheel());
    $car->addPart("backLeftWheel", new Wheel());
    $car->addPart("backRightWheel", new Wheel());

    var_dump("adding the lights...");
    $car->addPart("frontLeftLight", new Light());
    $car->addPart("frontRightLight", new Light());
    $car->addPart("backLeftLight", new Light());
    $car->addPart("backRightLight", new Light());

    var_dump("adding the mirrors...");
    $car->addPart("leftExternalMirror", new Mirror());
    $car->addPart("rightExternalMirror", new Mirror());
    $car->addPart("centerInternalMirror", new Mirror());

    var_dump("The Car is ready");

    // let's set some properties
    $car->setModel('BMW');
    $car->setYear(2020);

    var_dump((array) $car);


    var_dump("creating the Truck...");
    $truck = new Vehicle();

    var_dump("adding the doors...");
    $truck->addPart('frontRightDoor', new Door());
    $truck->addPart('frontLeftDoor', new Door());

    var_dump("adding the engine...");
    $truck->addPart('truckEngine', new Engine());

    var_dump("adding the wheels...");
    $truck->addPart('frontLeftWheel', new Wheel());
    $truck->addPart('frontRightWheel', new Wheel());
    $truck->addPart('backLeftWheel1', new Wheel());
    $truck->addPart('backLeftWheel2', new Wheel());
    $truck->addPart('backRightWheel', new Wheel());
    $truck->addPart('backRightWhee2', new Wheel());

    var_dump("adding the lights...");
    $truck->addPart('frontLeftLight', new Light());
    $truck->addPart('frontRightLight', new Light());
    $truck->addPart('backLeftLight', new Light());
    $truck->addPart('backRightLight', new Light());

    var_dump("adding the mirrors...");
    $truck->addPart('leftExternalMirror', new Mirror());
    $truck->addPart('rightExternalMirror', new Mirror());
    $truck->addPart('centerInternalMirror', new Mirror());

    var_dump("The Truck is ready");

    // let's set some properties
    $truck->setModel('SCANIA');
    $truck->setYear(2020);

    var_dump((array) $truck);
    // both vehicles are ready :)
    // but what if we have to repeat this code always in other methods when we want to create a new Car or Truck? :/
}

/**
 * Run the app with builder design pattern applied
 *
 * @return void
 */
function runWithBuilderDesignPattern()
{
    // let's create our Car with the CarBuilder
    $carBuilder = new CarBuilder();

    // let's create our Truck with the CarBuilder
    $truckBuilder = new TruckBuilder();

    // let's create the director, the responsible for to control the proccess of building our vehicles
    $director = new Director();

    // let's order the director to build our vehicles
    $car = $director->build($carBuilder);
    $truck = $director->build($truckBuilder);

    // let's set some properties
    $car->setModel('Mercedez');
    $car->setYear(2020);

    // let's set some properties
    $truck->setModel('SCANIA');
    $truck->setYear(2020);

    var_dump('Our Car build with builder is ready');
    var_dump((array) $car);

    var_dump('Our Truck build with builder is ready');
    var_dump((array) $truck);
    // with the builders and director we doesn't have to deal with the complexity of creating complex objects composed with many parts
    // instead, we can use these builders always when we want
}

runWithoutBuilderDesignPattern();
runWithBuilderDesignPattern();
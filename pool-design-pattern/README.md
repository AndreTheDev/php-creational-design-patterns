# Pool Design Pattern

This design pattern uses a set of initialized objects kept ready to use – a “pool” – rather than allocating and destroying them on demand. A client of the pool will request an object from the pool and perform operations on the returned object. When the client has finished, it returns the object, which is a specific type of factory object, to the pool rather than destroying it.

This example was inspired in this website [Design Patterns Php](https://designpatternsphp.readthedocs.io/en/latest/Creational/Pool/README.html) and [Domnikl](https://designpatternsphp.readthedocs.io/en/latest/Creational/Pool/README.html).

## Description

The use case of this project is a simple functionality which needs to use some Laptops.

## Usage

If you would like to test, you just have to execute the command below

```bash
php app.php
```
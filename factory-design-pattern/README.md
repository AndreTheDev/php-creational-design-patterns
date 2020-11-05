# Factory Design Pattern

The purpose of this design pattern is to create a object without exposing the logic of creation to the client. This pattern allows to refer to this created object using a common interface, which is essential as the software system is becoming bigger and more complex.

## Description

The use case of this project is a simple functionality to transfer money from one account to another, but this transfer can only occur under some rules

## Usage

If you would like to test, you just have to execute the command below

```bash
php app.php accountNameOne accountNameTwo 100
```
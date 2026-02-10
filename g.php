<?php

// Define the Car class
class Car {
    // Properties (variables)
    public $brand;
    public $model;

    // Constructor method, called when a new object is created
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method (function) to display car details
    public function displayInfo() {
        echo "This car is a {$this->brand} {$this->model}.";
    }
}

// Create an object (instance) of the Car class
$myCar = new Car("Toyota", "Corolla");

// Call a method on the object to display its information
$myCar->displayInfo();

?>

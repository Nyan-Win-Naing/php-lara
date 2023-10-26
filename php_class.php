<?php 
    // class
    class Car {
    
        protected $name;

        function __construct($carName) {
            $this -> name = $carName;
        }

        function drive() {
            echo $this -> name." is Driving";
        }
        
        function stop() {
            echo $this -> name." is stop";
        }
    }
    
    // object
    // $carObj = new Car("hammer");
    // $carObj -> drive();
    // $carObj -> stop();

    // inheritance
    class Truck extends Car {
        private $wheels;
        function __construct($carName, $carWheel) {
            $this -> name = $carName;
            $this->wheels = $carWheel;
        }

        function wheels() {
            echo $this->name." has ".$this->wheels." wheels";
        }
    }

    $truckObj = new Truck("Big Truck", 13);

    $truckObj->drive();
    $truckObj->wheels();
?>
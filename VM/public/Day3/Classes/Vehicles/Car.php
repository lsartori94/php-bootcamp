<?php
    // Car class
    class Car extends Transport
    {
        // Class contructor
        public function __construct($cap, $speed, $time, $fly)
        {
            parent::__construct($cap, $speed, $time, $fly);
        }

        public function speed()
        {
            return "Car top Speed: " . parent::speed() . " km/h";
        }

        public function maxPassengers()
        {
            return "Car max passengers: " . parent::maxPassengers() . " passengers";
        }

        public function canFly()
        {
            return (parent::canFly()) ? "The car can fly " : "The car can't fly ";
        }

        public function travelDistance()
        {
            parent::travelDistance();
        }

        public function printInfo()
        {
            echo "Car: " . parent::info();
        }
    }

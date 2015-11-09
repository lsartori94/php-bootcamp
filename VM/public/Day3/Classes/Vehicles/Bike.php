<?php
    // Bike class
    class Bike extends Transport
    {
        // Class contructor
        public function __construct($cap, $speed, $time, $fly)
        {
            parent::__construct($cap, $speed, $time, $fly);
        }

        public function speed()
        {
            return "Bike top Speed: " . parent::speed() . " km/h";
        }

        public function maxPassengers()
        {
            return "Bike max passengers: " . parent::maxPassengers() . " passengers";
        }

        public function canFly()
        {
            return (parent::canFly()) ? "The bike can fly " : "The bike can't fly ";
        }

        public function travelDistance()
        {
            parent::travelDistance();
        }

        public function printInfo()
        {
            echo "Bike: " . parent::info();
        }
    }

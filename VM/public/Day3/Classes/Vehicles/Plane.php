<?php
    // Plane class
    class Plane extends Transport
    {
        // Class contructor
        public function __construct($cap, $speed, $time, $fly)
        {
            parent::__construct($cap, $speed, $time, $fly);
        }

        public function speed()
        {
            return "Plane top Speed: " . parent::speed() . " km/h";
        }

        public function maxPassengers()
        {
            return "Plane max passengers: " . parent::maxPassengers() . " passengers";
        }

        public function canFly()
        {
            return (parent::canFly()) ? "The plane can fly " : "The plane can't fly ";
        }

        public function travelDistance()
        {
            parent::travelDistance();
        }

        public function printInfo()
        {
            echo "Plane: " . parent::info();
        }
    }

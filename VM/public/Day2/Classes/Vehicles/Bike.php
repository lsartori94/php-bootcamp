<?php
    // Bike class
    class Bike extends Abs
    {
        // Class contructor
        public function __construct($cap, $speed)
        {
            parent::__construct($cap, $speed, false);
        }

        public function printInfo()
        {
            echo "Bike: " . parent::info();
        }
    }

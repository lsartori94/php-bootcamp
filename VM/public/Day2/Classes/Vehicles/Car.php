<?php
    // Car class
    class Car extends Abs
    {
        // Class contructor
        public function __construct($cap, $speed)
        {
            parent::__construct($cap, $speed, false);
        }

        public function printInfo()
        {
            echo "Car: " . parent::info();
        }
    }

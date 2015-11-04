<?php
    // Plane class
    class Plane extends Abs
    {
        // Class contructor
        public function __construct($cap, $speed)
        {
            parent::__construct($cap, $speed, true);
        }

        public function printInfo()
        {
            echo "Plane: " . parent::info();
        }
    }

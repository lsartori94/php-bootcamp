<?php
    interface AbsTransport
    {
            // Constructor
            public function __construct($cap, $speed, $time, $fly);

            // Returns top speed
            public function speed();

            // Returns passenger capacity
            public function maxPassengers();

            // Returns if it can fly
            public function canFly();

            // Returns travel distance
            public function travelDistance();

            // Returns object info
            public function printInfo();
    }

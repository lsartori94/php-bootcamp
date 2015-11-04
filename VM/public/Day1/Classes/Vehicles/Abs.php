<?php
    // Abstract vehice class
    Abstract class Abs
    {
        private $passengerCapacity;
        private $topSpeed;
        private static $canFly;

        // Class contructor
        public function __construct($cap, $speed, $fly)
        {
            $this->passengerCapacity = $cap;
            $this->topSpeed = $speed;
            $this->canFly= $fly;
        }

        // Returns top speed
        public function speed()
        {
            return 'Speed: ' . $this->topSpeed . ' Km/h. ';
        }

        // Returns passenger capacity
        public function maxPassengers()
        {
            return 'Max passengers: ' . $this->passengerCapacity;
        }

        // Returns if it can fly
        public function canFly()
        {
            switch ($this->canFly) {
                case true:
                return 'It can fly. ';
                break;

            default:
                return 'It can not fly. ';
                break;
            }
        }

        public function info()
        {
            return $this->speed() . $this->canFly() . $this->maxPassengers();
        }
    }

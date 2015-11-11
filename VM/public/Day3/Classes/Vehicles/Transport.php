<?php
    // Abstract vehice class
    Abstract class Transport implements AbsTransport
    {
        private $passengerCapacity;
        private $topSpeed;
        private $canFly;
        // Must be in minutes
        private $timeOfTravel;

        // Class contructor
        public function __construct($cap, $speed, $time, $fly)
        {
            $this->passengerCapacity = $cap;
            $this->topSpeed = $speed;
            $this->timeOfTravel = $time;
            $this->canFly= $fly;
        }

        // Returns top speed
        public function speed()
        {
            return $this->topSpeed;
        }

        // Returns passenger capacity
        public function maxPassengers()
        {
            return $this->passengerCapacity;
        }

        // Returns if it can fly
        public function canFly()
        {
            return $this->canFly;
        }

        // Returns time of travel
        public function time()
        {
            return $this->timeOfTravel . " minutes of travel";
        }

        // Returns travel distance
        public function travelDistance()
        {
            return 2 . " kilometers travelled.";
        }

        // Returns all object's info
        public function info()
        {
            return $this->speed() . " " . $this->canFly() . " " . $this->maxPassengers() . " " . $this->time() . " " . $this->travelDistance();
        }
    }

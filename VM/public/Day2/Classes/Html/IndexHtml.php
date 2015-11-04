<?php
    class IndexHtml
    {
        private $passengers;
        private $action;

        // Class constructor
        public function __construct($pasngrs, $act)
        {
            $this->passengers = $pasngrs;
            $this->action = $act;
        }

        public function echoHtml()
        {
            echo "<form name='travelBy' method= 'post' action=". $this->action . ">";
            echo "<strong>Travel using a</strong><br></br>";
            echo "<input type= 'radio' name= 'vehicle' value= 'plane'> Plane<br></br>";
            echo "<input type= 'radio' name= 'vehicle' value= 'car'> Car<br></br>";
            echo "<input type= 'radio' name= 'vehicle' value= 'bike'> Bike<br></br>";
            echo "<strong>Passengers</strong></br>";
            echo "<input type= 'text' name= 'passengers' value= '" . $this->passengers . "'><br></br>";
            echo "<input type= 'submit' name= 'submit' value='Travel!'>";
        }
    }

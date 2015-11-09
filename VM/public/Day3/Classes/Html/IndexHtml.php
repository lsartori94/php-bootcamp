<?php
    abstract class IndexHtml
    {
        // Generates html
        public static function echoPageHtml($plane, $car, $bike)
        {
            echo "<li>"; $plane->printInfo(); echo "</li>";
        	echo "<li>"; $car->printInfo(); echo "</li>";
        	echo "<li>"; $bike->printInfo(); echo"</li>";
        }

    }

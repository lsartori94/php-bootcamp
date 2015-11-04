<?php
	// Each time a new class is added a new autoload method must be created
	spl_autoload_register('vehicleAbsClassLoader');
	spl_autoload_register('vehicleAutoloader');

	// Autoload method for Vehicle classes
	function vehicleAutoloader($className)
	{
		$path = 'Classes/Vehicles/' . $className . '.php';
		if (file_exists($path)) {
			require_once($path);
		}
	}

	// Autoload method for abstract vehicle
	function vehicleAbsClassLoader()
	{
		$path = 'Classes/Vehicles/Abs.php';
		if (file_exists($path)){
			require_once($path);
		}
	}

	// Vehicle instances
	$plane = new Plane(190, 900);
	$car = new Car(5, 110);
	$bike = new Bike(2, 20);

	// Echoes info for each instance as a bulleted list
	echo "<li>"; $plane->printInfo(); echo "</li>";
	echo "<li>"; $car->printInfo(); echo "</li>";
	echo "<li>"; $bike->printInfo(); echo"</li>";

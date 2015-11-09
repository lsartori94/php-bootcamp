<?php
    // Each time a new class is added a new autoload method must be created
    spl_autoload_register('vehicleAbsClassLoader');
    spl_autoload_register('vehicleAutoloader');
    spl_autoload_register('transportInterfaceLoader');
    spl_autoload_register('indexHtmlClassLoader');

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

    // Autoload method for interface
    function transportInterfaceLoader()
    {
        $path = 'Interfaces/AbsTransport.php';
        if (file_exists($path)){
            require_once($path);
        }
    }

    // Autoload method for html generator
	function indexHtmlClassLoader()
	{
		$path = 'Classes/Html/IndexHtml.php';
		if(file_exists($path)){
			require_once($path);
		}
	}

    // Classes instances
    // Travel time must be in minutes
    $car = new Car(5, 120, 120, false);
    $bike = new Bike(2, 25, 45, false);
    $plane = new Plane(120, 960, 120, true);

    // Prints html
    IndexHtml::echoPageHtml($plane, $car, $bike);

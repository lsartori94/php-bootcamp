<?php
	// Each time a new class is added a new autoload method must be created
	spl_autoload_register('vehicleAbsClassLoader');
	spl_autoload_register('vehicleAutoloader');
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

	// Autoload method for html generator
	function indexHtmlClassLoader()
	{
		$path = 'Classes/Html/IndexHtml.php';
		if(file_exists($path)){
			require_once($path);
		}
	}

	// Vehicles instances
	$plane = new Plane(190, 900);
	$car = new Car(5, 110);
	$bike = new Bike(2, 20);

	// Check server for form submition
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	    // Form sanitation
	    if (isset($_POST['passengers'])) {
	        if ($_POST['passengers'] != ""){
	            $_POST['passengers'] = filter_var($_POST['passengers'], FILTER_SANITIZE_NUMBER_INT);
	            if (($_POST['passengers'] == "") || ($_POST['passengers'] == 0)) {
	                $errors = "Please enter a valid passengers number.<br></br>";
	            }
	        } else {
	            $errors = "Please enter a number of passengers.<br></br>";
	        }
	    }

	    if (!empty($_POST['vehicle'])) {
	        switch ($_POST['vehicle']) {
	            case 'plane':
	                $max = filter_var($plane->maxPassengers(), FILTER_SANITIZE_NUMBER_INT);
	                $selVehicle = "Plane";
	                break;

	            case 'car':
	                $max = filter_var($car->maxPassengers(), FILTER_SANITIZE_NUMBER_INT);
	                $selVehicle = "Car";
	                break;

	            case 'bike':
	                $max = filter_var($bike->maxPassengers(), FILTER_SANITIZE_NUMBER_INT);
	                $selVehicle = "Bike";
	                break;

	            default:
	                $max = 0;
	                break;
	        }
	    } else {
	        $errors = "Please select a vehicle<br></br>";
	        $max = 0;
	    }
	    // Posible number of passengers by transport
	    $options = array(
	        'options' => array(
	                            'min_range' => 1,
	                            'max_range' => $max,
	                        )
	    );

	    // Form Validation
	    if (empty($errors)){
	        if (filter_var($_POST['passengers'], FILTER_VALIDATE_INT, $options) == true){
	            header("Location: formSubmition.php");
	        } else {
	            $errors = "You can't travel on a " . $selVehicle . " with " . $_POST['passengers'] . " passengers.";
	            $errors .= " The maximun number of allowed passengers for the selected transport is " . $max . ".<br></br>";
	        }
	    }
	    echo "<span class='error'>" . $errors . "</span>";
	}

	if (isset($_POST['passengers'])){
		$passengers = htmlspecialchars($_POST['passengers']);
	} else{
		$passengers = "";
	}

	$action = htmlspecialchars($_SERVER["PHP_SELF"]);

	// Form instance
	$form = new IndexHtml($passengers, $action);

	// Echo Html
	$form->echoHtml();

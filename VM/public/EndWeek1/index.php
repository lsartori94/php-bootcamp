<?php
    spl_autoload_register("classAutoloader");

    // Class autoloader method
    function classAutoloader($classname)
    {
        $path= "Classes/" . $classname . ".php";
        if(file_exists($path))
        {
            require_once($path);
        }
    }

    // Grabs html from file and echoes it
    $file = file_get_contents("./Resources/foundationHtml.txt");
    if ($file === FALSE) {
        echo "Error. Can't get html";
    } else {
        echo $file;
    }

    // Books instances
    $book1 = new Book();
    $book2 = new Book();
    $booksArray = array($book1, $book2);

    // Database credentials
    $host = "localhost";
    $dbname = "bookstore";
    $user = "root";
    $pass = "root";

    // Connect database
    try {
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

    // Add books to database
    $STH = $DBH->("INSERT INTO " . $dbname . " (title, description, price) VALUE (:title, :description, :price)");
    foreach ($booksArray as $book) {
        $STH->excecute((array)$book);
    }

<?php

    require_once 'Car.php';
    require_once 'Carchild.php';

    $car = new Car("Volvo", "Red", "New");
    $car->setMilage(100) . "<br>";
    
    echo "This Car is " . $car->model ."<br>" . "This Color is ". $car->color . "<br>" . " This Brand is " . $car->is_new . "<br>" . "This millage is " . $car->getMilage() ;

    $carchild = new Carchild("Volvo", "Red", "New");
    echo $carchild->getModel();


?>
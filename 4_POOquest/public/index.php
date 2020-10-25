<?php
    require_once "../src/models/vehicles/Vehicle.php";
    require_once "../src/models/way/HighWay.php";
    
    $car = new Car('red', 5, 'electric');
    $car->setParkBrake(true);
    try {
        $car->start($car);
     } catch (Exception $hasParkBrake){
        echo 'Une exception a été lancée. Message d\'erreur : ', $hasParkBrake->getMessage() . "<br>";
        $this->hasParkBrake = false;
     }finally{
        echo 'Ma voiture roule comme un donut';
    }
    

    

<!-- 
class = object

perperties = variables || Class variables || atributes 
methods = function - 
we call them methods when they are inside the class or function when they are on their openssl_csr_new -->
<?php

class Cars {
    var $wheel_count = 4;
    var $door_count = 4;
    function car_details(){
        return "This car has " . $this->wheel_count . " wheels.";
    }
}

$bmw = new Cars(); //create a different instance
// $bmw->greetings(); //initiating the method

$bmw->wheel_count = 3;
// echo $bmw->door_count = 23;

echo $bmw->car_details();
?>
<!-- 
class = object

perperties = variables
methods = function - 
we call them methods when they are inside the class or function when they are on their openssl_csr_new -->
<?php

class Cars {
    function greetings(){
        echo "Hello Student, ";
    }
    function question(){
        echo "What is your name?";
    }

}

$bmw = new Cars(); //create a different instance
$bmw->greetings(); //initiating the method
$bmw->question();

?>
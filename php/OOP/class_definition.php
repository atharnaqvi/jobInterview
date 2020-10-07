//class = object

// perperties = variables
// methods = function
<?php

class Cars {

}

$my_classes = get_declared_classes();

foreach ($my_classes as $class){
    echo $class . "<br>";
}

?>
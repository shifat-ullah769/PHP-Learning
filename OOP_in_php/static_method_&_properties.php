<?php

// Static method and properties give us the ability to call methods and properties from outside the class without creating an instance of that class

class myClass{
    public static $className = "myClass";

    public static function greet($name){
        echo"Hello {$name}, Welcome to PHP.";
    }
}

echo "Class name is - " . myClass :: $className;
echo"<br>";
myClass :: greet("Mike");

?>
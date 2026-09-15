<?php

//  namespace is a virtual directory system used to prevent naming conflicts and group related classes, interfaces, functions, and constants together.
// We can't use two classes with the same name so we use a virtual path which is not in our project but in our code. These path differentiate the classes with same name.


// Suppose this is from bank file
/*
namespace App;   ---> This path differntiate this file class
class Bank{
    public function __construct()
    {
        echo"I am from bank file";
    }
}
*/

// Suppose this is from account file
/*
namespace App\Data;   ---> This path differntiate this file class
class Bank{
    public function __construct()
    {
        echo"I am from account file";
    }
}
*/

// Object creation in another file
/*
$b = new App\Bank;  ---> Object of bank file class
$a = new APP\Data\Bank;  ---> Object of account file class

*/

?>
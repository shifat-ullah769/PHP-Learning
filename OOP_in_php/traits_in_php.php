<?php

// When we use the same function in different classes then we simply can make a trait in which our common function will be.
// Then we can simply use that function through that trait instead of writing the same function again and again in different classes.

trait logger{
    public function log($name){
        echo "[LOG] : " . $name . "<br>";
    }
}

class Product{
    use logger;

    public function create(){
        $this->log("Product created.");
    }
}

class Order{
    use logger;

    public function order(){
        $this->log("Order placed.");
    }
}

$p = new Product();
$p->create();

$o = new Order();
$o->order();



?>
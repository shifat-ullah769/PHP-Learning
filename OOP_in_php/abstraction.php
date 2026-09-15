<?php

abstract class pyamentGateway{

    abstract public function paymentMethod($amount);

}

class bkash extends pyamentGateway{
    #[Override]
    public function paymentMethod($amount)
    {
        echo"Paying {$amount} with bkash now <br>";
    }
}


class nagad extends pyamentGateway{
    #[Override]
    public function paymentMethod($amount)
    {
        echo"Paying {$amount} with nagad now <br>";
    }
}

$bKash = new bkash();
$bKash->paymentMethod(10000);

$nagad = new nagad();
$nagad->paymentMethod(5000);

?>
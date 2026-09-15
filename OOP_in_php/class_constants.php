<?php

class myClass{
    const APP_VERSION = "1.0.1";

    public function getAppVersion(){
        echo"App Version". self :: APP_VERSION . "<br>";
    }
}


$app = new myClass();
$app->getAppVersion();

echo"My app version is:". myClass::APP_VERSION;


?>
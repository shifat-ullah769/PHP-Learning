<?php

// All interface function must be public and can not have a body

interface Notifiable{
    public function sendNotificaiton($message);
}

class EmailNotificaiton implements Notifiable{
    #[Override]
    public function sendNotificaiton($message)
    {
        echo"Sending email notification - " . $message. "<br>";
    }
}

class SMSnotification implements Notifiable{
    #[Override]
    public function sendNotificaiton($message)
    {
        echo"Sending sms notification - " . $message. "<br>";
    }
}

function notify(Notifiable $notifiable, $message){
    $notifiable->sendNotificaiton($message);
}

$email = new EmailNotificaiton();
$sms = new SMSnotification();

notify($email, "You are selected for next round of our contest.");
notify($sms, "Your OTP is 225544.");

// $email->sendNotificaiton("You are selected for next round of our contest.");
// $sms->sendNotificaiton("Your OTP is 225544.");

?>
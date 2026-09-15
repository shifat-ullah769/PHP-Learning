<?php

// Dependency injection is a software design pattern where an object receives the other objects it needs (called dependencies) from an external source instead of creating them itself.
// We just simply pass one class object to another class which class is dependennt on our passed class for some method or properties. As a result, we don't manually create object of the class on which it is dependent.

class MailService{
    public function notifyUser($to, $message){
        echo "Email sent {$to} with message - {$message}";
    }
}

class UserController{
    private $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;  // Dependency injection instead of creating new object.
    }

    public function sendMail($email){
        echo "User registered with email - {$email} <br>";
        $this->mailService->notifyUser($email, "Welcome to our workshoop.");
    }
}

$mail = new MailService();
$controller = new UserController($mail);   // Dependency Injection
$controller->sendMail("abc@gmail.com");


?>
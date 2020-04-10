<?php

include __DIR__ . "/../Validation/";
use Phalcon\Mvc\Controller;
use Phalcon\MVC\View;


class SignUpController extends Controller
{
    
    public function indexAction()
    {
        
    }

    public function registerAction()
    {
        $validation= new UserValidation();

        $nama = "Bobbi";
        $email ="";
        $messages = $validation->validate($email);
        // echo 'count($messages';
        // if (count($messages)) {
        //     foreach ($messages as $message) {
        //         echo 'Message: ', $message->getMessage(), "\n";
        //         echo 'Field: ', $message->getField(), "\n";
        //         echo 'Type: ', $message->getType(), "\n";
        //     }
        // echo 'Anda masuk ke sayHallo action<br>';
        return $messages;
    }
}
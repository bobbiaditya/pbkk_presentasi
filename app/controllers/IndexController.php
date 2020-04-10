<?php

include __DIR__ . "/../Validation/";
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {

    }

    public function registerAction()
    {
        $validation= new UserValidation();
        $messages = $validation->validate($_POST);
        if (count($messages)) {
            foreach ($messages as $message) {
                echo $message, '<br>';
            }
        }
        else{
            $this->response->redirect('/');
        }
    }

    public function sayHalloAction()
    {
        echo 'Anda masuk ke sayHallo action';
        return '<h1>Haloooooo!!!<h1>';
    }
}
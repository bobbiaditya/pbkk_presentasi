<?php

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        // return 'Jihan Cepat Sembuh';
    }

    public function sayHalloAction()
    {
        echo 'Anda masuk ke sayHallo action';
        return '<h1>Haloooooo!!!<h1>';
    }
}
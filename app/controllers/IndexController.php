<?php

include __DIR__ . "/../validation/";
use Phalcon\Mvc\Controller;
use Phalcon\Url;

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
                // echo 'Message:', $message->getMessage(), '<br>';
                // echo 'Field: ', $message->getField(), '<br>';
                // echo 'Type: ', $message->getType(), '<br>';
            }
            
            // $filteredMessages = $messages->filter('username');

            // foreach ($filteredMessages as $message) {
            //         echo $message, '<br>';
            //     }
            }
        else {
            $this->response->redirect('/');
        }
    }
    
    public function urlAction()
    {
        // $url = new Url();
        // $url->setBaseUri('/home/');
        // echo $url->getBaseUri(), '<br>'; 
        // echo $url->get('/edit/1'), '<br>';

        
        // $url = new Url();
        // $url->setStaticBaseUri('/signup.com/');
        // echo $url->getStaticBaseUri(), '<br>'; 
        

        // $url = new Url();
        // echo $url->getStatic("img/wallpaper.jpg"), '<br>'; 
    }
}
<?php
use coreAppNS\Controllers;
class signupController extends Controllers{
    public $controller;
   

    function __construct(){
        $this->controller = new Controllers();
        $this->controller->view_object->create_view('signup');
       
       
    }

    function signup(){
        print_r($_POST);
            $this->controller->model_object->insert_user($_POST);
        }
    
}

?>

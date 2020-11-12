<?php
use coreAppNS\Controllers;
class loginController extends Controllers{
    public $controller;
    public $login_model;
    public $link;

    function __construct($function="login")
    {
      //  $this->link = $url;
        $this->controller = new Controllers();
        $this->login_model=$this->controller->model_object->create_model('login');
        $this->$function();
       
    }
    function login(){   
        $this->controller->view_object->create_view('home');
       }
    function checklogin(){
        $this->login_model->check($_POST); 
       }
    function update(){
        $items=array(
            'userdata'=>$this->login_model->userdata(),
            );
        $this->controller->view_object->create_view('update',$items);
    }
}
?>
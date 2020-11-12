<?php
namespace coreAppNS;
class Controllers{

    public $view_object;
    public $model_object;
   // public $db_object;

    function __construct(){

       $this->view_object = new View();
        $this->model_object = new Model();
       // $this->db_object = new db();
    }

}

?>
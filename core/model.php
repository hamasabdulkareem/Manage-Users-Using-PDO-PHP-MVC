<?PHP
namespace coreAppNS;
class Model{
    function create_model($model_name){
        include("app/models/".$model_name.".php");
    }
}



?>
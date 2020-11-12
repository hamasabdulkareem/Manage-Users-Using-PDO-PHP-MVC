<?PHP
require("database.php");

class signupModel {
    public $db;

    function __construct(){
        $this->db=new DB();
    }
    function insert_user($data){          
              $this->db->insert("register",$data);
              header("Location: ../views/login");
  }
    
    
  
?>


<?PHP

require("database.php");


class main{


   public  $db;

    function __construct(){
        $this->db=new DB();
    }
function check($data){
    $cols=array("id","email","password");
    $tbls=array("register");
    $select_result =  $this->db
    ->select($cols)
    ->from($tbls)
    ->where("email","=",$_POST['email'])
    ->Where("password","=",$_POST['password'])
    ->build()
    ->exeucte();
    $count = count($select_result);
    if ( $count > 0) 
    {
        session_start();
        $_SESSION['user_id'] = $select_result[0]->id;
        header("Location: ../views/update");
        exit();
    }
    else 
    { 
        header("Location: ../views/login?error=sorry check your email or password");
        exit();
    }
}
function userdata(){
    session_start();
    return $this->db
    ->select("*")
    ->from($tbls)
    ->where("id","=", $_SESSION['user_id'])
    ->build()
    ->exeucte();
}
}
?>
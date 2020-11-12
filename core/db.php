<?PHP

class DB{
        public $columns="";
        public $tables="";
        public $cond="";
        public $final_query="";
        private $connection;
        function __construct(){
            try {
            $conn = dbconnect::$server.":host=".dbconnect::$host.";dbname=".dbconnect::$dbname;
            $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
          $this->connection = new PDO($conn,dbconnect::$username, dbconnect::$password, $options);
         
          echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
         
        }
   
    function select($cols){
        $this->colums="select ".implode(",",$cols)." ";
        return $this;
    }
    function from($tbls){
        $this->tables="from ".implode(",",$tbls)." ";
        return $this;
    }
    function where($cond,$oprator,$value){
        if(impty($this->cond))
        $this->cond="where ".$cond." ".$oprator." ".$value." ";
        else
        $this->cond.=" or ".$cond." ".$oprator." ".$value." ";
        return $this;
    }
    function build(){
        $this->final_query=$this->colums.$this->$tables.$this->cond;
    }
    function exeucte(){
        $this->conn->query($this->final_query);
   }
   function insert($tbl,$items){
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $values=array();
    foreach(array_values($items)as $item){
        $values[]="'".$item."'";
    }
   try{
    $this->final_query="insert into ".$tbl."(".implode(",",array_keys($items)).") values (".implode(",",$values).")";
    $stmt=$this->connection->prepare($this->final_query);
    $stmt->execute();
    echo " add successfully";

   }catch(Exception $ex){
       
       echo $ex->getMessage();
   }
    return $this;
}

}


?>


<?PhP
session_start();
class DbConnect{
   
    public function connect(){
        $servername = "localhost";
        $dbname = "manage_users_mvc";
        $username = "root";
        $password = "";
        $conn = "mysql::host=$servername;dbname=$dbname";
        $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,];
        $conn = new PDO($conn, $username, $password, $options);
        return $conn;
    }
    
}

?>
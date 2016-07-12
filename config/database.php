<?php 
class Database{ 
 
    // specify your own database credentials 
    private $host = "eduteka.icesi.edu.co"; 
    private $db_name = "edtksite_recursos"; 
    private $username = "edtksite"; 
    private $password = "r3002045"; 
    public $conn; 
 
    // get the database connection 
    public function getConnection(){ $this->conn = null;
         
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}
?>
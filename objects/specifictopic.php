<?php 
/**
* Tema Especifico
*/
class SpecificTopic{
	// database connection and table name 
    private $conn; 
    private $table_name = "contenidos_temasEsp"; 

	public $id;
	public $name;
	public $description;
	function __construct($db)
	{
		$this -> conn = $db;
	}
	// read subjects
	function readAll($generalId){
	 
	    // select all query
	    $query = "SELECT 
	                *
	            FROM 
	                " . $this->table_name . "
	            WHERE
	              idTemasGen=".$generalId."
	            ORDER BY 
	                idEje DESC";
	 
	    // prepare query statement
	    $stmt = $this->conn->prepare( $query );
	     
	    // execute query
	    $stmt->execute();
	     
	    return $stmt;
	}
}
?>
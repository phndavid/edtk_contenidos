<?php
/**
* Area 
*/
class Area{
	// database connection and table name 
    private $conn; 
    private $table_name = "contenidos_area"; 
 
	//object properties
	public $id;
	public $name;
	public $description;
	public $url;
	public function __construct($db)
	{
		$this -> conn = $db;
	}
	// read areas
	function readAll(){
	 
	    // select all query
	    $query = "SELECT 
	                *
	            FROM 
	                " . $this->table_name . "
	            ORDER BY 
	                idArea DESC";
	 
	    // prepare query statement
	    $stmt = $this->conn->prepare( $query );
	     
	    // execute query
	    $stmt->execute();
	     
	    return $stmt;
	}
}
?>
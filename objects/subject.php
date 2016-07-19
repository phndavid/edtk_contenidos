<?php 
/**
* Asignatura
*/
class Subject{
	// database connection and table name 
    private $conn; 
    private $table_name = "contenidos_asignatura"; 

	public $id;
	public $name;
	public $description;
	public $url;
	function __construct($db)
	{
		$this -> conn = $db;
	}
	// read subjects
	function readAll($areaId){
	 
	    // select all query
	    $query = "SELECT 
	                *
	            FROM 
	                " . $this->table_name . "
	            WHERE
	              idArea=".$areaId."
	            ORDER BY 
	                idAsignatura DESC";
	 
	    // prepare query statement
	    $stmt = $this->conn->prepare( $query );
	     
	    // execute query
	    $stmt->execute();
	     
	    return $stmt;
	}
}
?>

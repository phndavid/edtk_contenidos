<?php 
/**
* Asignatura
*/
class Subject{
	// database connection and table name 
    private $conn; 
    private $table_name = "contenidos_eje"; 

	public $id;
	public $name;
	public $description;
	function __construct($db)
	{
		$this -> conn = $db;
	}
	// read subjects
	function readAll($asignaturaId){
	 
	    // select all query
	    $query = "SELECT 
	                *
	            FROM 
	                " . $this->table_name . "
	            WHERE
	              idAsignatura=".$asignaturaId."
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
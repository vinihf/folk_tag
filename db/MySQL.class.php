<?php
include "Config.inc.php";

class MySQL{
	
	private $connection;
		
	public function __construct(){
		$this->connection = new mysqli(HOST,USER,PASSWORD,DATABASE);
	}
	
	public function __destruct(){
		mysqli_close($this->connection);
	}
	
	public function execute($sql){
		$result = $this->connection->query($sql);
		return $result;
	}
	
	public function search($sql){
		$query = $this->connection->query($sql);
		$result = array();
		while($data = $query->fetch_array()){
			$result[] = $data;
		}
		if(count($result)>0){
			return $result;
		}
		return false;
	}
}
?>
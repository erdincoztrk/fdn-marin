<?php
class dbConnection{
	private $host = 'localhost';
	private $dbName = 'fdn-marin';
	private $username = 'root';
	private $password = 'root';
	private $db = '';

	public function __construct()
	{
		$connectionString = "mysql:host=$this->host;dbname=$this->dbName";
		try {
			$this->db = new PDO($connectionString,$this->username,$this->password);
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch (\PDOException $e){
			echo "DATABASE CONNECTION WAS FAILED $e->getMessage()";
		}
	}

	public function getRow($query){
		return $this->db->query($query)->fetch(PDO::FETCH_ASSOC);
	}
	public function getRows($query){
		return $this->db->query($query)->fetchAll(PDO::FETCH_ASSOC);
	}
	public function query($query,$parameters=null){
		if($parameters){
			$result = $this->db->prepare($query)->execute($parameters);
		}
		else{
			$result = $this->db->prepare($query)->execute();
		}
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
?>
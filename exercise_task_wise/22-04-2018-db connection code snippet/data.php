<?php 
	class Database{
		
		private $host;
		private $user;
		private $pass;
		private $host;
		public $link;
		
		
		public function __construct(){
			$this->link = $this->connection();
		}
		
		public function connection(){
			try{
				$con = new mysqli($this->host,$this->user,$this->pass,$this->host);
				if($con){
					return $con;
				}
			}catch(Exception $e){
				echo "Failed to connectio to database ".$e->getMessage();
			}
		}
		
		public function insert($q){
			$stmt = $this->link->query($q);
			if($stmt){
				return true;
			}else{
				return false;
			}
		}
		
		
		public function singleasArray($query){
			$stmt = $this->link->query($query);
			if($stmt){
				if($stmt->num_rows > 0){
					return $stmt->fetch_array();
				}else{
					return false;
				}
			}
		}
		
		
		public function singleasAssoc($query){
			$stmt = $this->link->query($query);
			if($stmt){
				if($stmt->num_rows > 0){
					$stmt->fetch_assoc();
				}else{
					return false;
				}
			}
		}
		
		
		public function singleasObject($query){
			$stmt = $this->link->query($query);
			if($stmt){
				if($stmt->num_rows > 0){
					return $stmt->fetch_object();
				}else{
					return false;
				}
			}
		}
		
		
		public function rowCount($query){
			$stmt = $this->link->query($query);
			if($stmt){
				if($row = $stmt->num_rows > 0){
					return $row;
				}else{
					return false;
				}
			}
		}
		
		
		public function checkExist($query){
			$stmt = $this->link->query($query);
			if($stmt){
				if($row = $stmt->num_rows > 0){
					return true;
				}else{{
					return false;
				}}
			}
		}
		
		
		public function customQuery($table,$column,$where="",$orderby="",$limit=""){
			$result = "";
			$result .="select $column from"
					.$table;
			if($where !=""){
				//$result .=
			}		
					
		}
		
	}
?>
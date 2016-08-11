<?php
class Database{
	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db = "technofarm";
	var $conn;
	var $select;
	
	public function __construct(){
		$this->Dbconnect();
		$this->Dbselect();
	}
	public function Dbconnect(){
		$this->conn = mysql_connect($this->host,$this->user,$this->pass)or die(mysql_error());
		return $this->conn;
	}
	public function Dbselect(){
		$this->select = mysql_select_db($this->db) or die(mysql_error());
		return $this->select;
	}
}
?>
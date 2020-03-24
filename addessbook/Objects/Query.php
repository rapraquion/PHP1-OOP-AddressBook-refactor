<?php 
session_start();
//Include Connection class here..
include 'Connection.php';

$msg = "";
$msg_type = "";

Class Query extends Connection {

	public function __construct()
	{
	   parent::__construct();
	}

	public function display()
	{
	  //your select code here
	  $sql = "SELECT * FROM address";
	  $stmt = parent::getConnection()->prepare($sql);
	  $result = $stmt->execute();
		if($result) {
			return $stmt->fetchAll();
		}
	}

	public function insert($get)
	{
	  //your insert code here
	  $sql = "INSERT INTO address (name, phone, email) VALUES (?,?,?)";
	  $stmt = parent::getConnection()->prepare($sql);
	  $result = $stmt->execute([$get[0], $get[1], $get[2]]);
	  if($result) {
		json_encode(array("statusCode"=>200));	
	  } else {
		json_encode(array("statusCode"=>201));
	  }
	  header('location: index.php');
	}

	public function update($id,$get)
	{
	 //your update code here
	 $sql = "UPDATE address SET name=?,phone=?,email=? WHERE id=?";
	 $stmt = parent::getConnection()->prepare($sql);
	 $result = $stmt->execute([$get[0], $get[1], $get[2], $id]);
	 if($result) {
		json_encode(array("statusCode"=>200));	
	  } else {
		json_encode(array("statusCode"=>201));
	  }
	  header('location: index.php');
	}

	public function delete($id)
	{
	 //your delete code
	 $sql = "DELETE FROM address WHERE id=?";
	 $stmt = parent::getConnection()->prepare($sql);
	 $result = $stmt->execute([$id]);
	 if($result) {
		json_encode(array("statusCode"=>200));	
	  } else {
		json_encode(array("statusCode"=>201));
	  }
	  header('location: index.php');
	}
} 



<?php 
session_start();
//Include Connection class here..
include 'Connection.php';

$msg = "";
$msg_type = "";
$errors = array();

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
		$_SESSION['msg'] = "New contact saved!";
		$_SESSION['msg_type'] = "success";
	  } else {
		$_SESSION['msg'] = "Error adding contact to database!";
		$_SESSION['msg_type'] = "danger";
	  }
	}

	public function update($id,$get)
	{
	 //your update code here
	 $sql = "UPDATE address SET name=?,phone=?,email=? WHERE id=?";
	 $stmt = parent::getConnection()->prepare($sql);
	 $result = $stmt->execute([$get[0], $get[1], $get[2], $id]);
	 if($result) {
		$_SESSION['msg'] = "Contact updated!";
		$_SESSION['msg_type'] = "info";
	  } else {
		$_SESSION['msg'] = "Updating contact failed!";
		$_SESSION['msg_type'] = "danger";
	  }
	}

	public function delete($id)
	{
	 //your delete code
	 $sql = "DELETE FROM address WHERE id=?";
	 $stmt = parent::getConnection()->prepare($sql);
	 $result = $stmt->execute([$id]);
	 if($result) {
		$_SESSION['msg'] = "Successfuly deleted!";
		$_SESSION['msg_type'] = "warning";
	  } else {
		$_SESSION['msg'] = "Deleting contact did not succeed!";
		$_SESSION['msg_type'] = "danger";
	  }
	}
} 



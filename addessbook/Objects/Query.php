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
		if($stmt) {
			$stmt->execute();
			return $stmt->fetchAll();
		} else {
			$_SESSION['msg'] = "Unable to fetch contact from database!";
		  	$_SESSION['msg_type'] = "danger";
		}
	}

	public function insert($get)
	{
	  //your insert code here
	  $sql = "INSERT INTO address (name, phone, email) VALUES (?,?,?)";
	  $stmt = parent::getConnection()->prepare($sql);
	  if($stmt) {
	 	$stmt->execute([$get[0], $get[1], $get[2]]);
		$_SESSION['msg'] = "New contact added!";
		$_SESSION['msg_type'] = "success";
	  } else {
		  $_SESSION['msg'] = "Unable to add contact!";
		  $_SESSION['msg_type'] = "danger";
	  }
	}

	public function update($id,$get)
	{
	 //your update code here
	 $sql = "UPDATE address SET name=?,phone=?,email=? WHERE id=?";
	 $stmt = parent::getConnection()->prepare($sql);
		if($stmt) {
			 $stmt->execute([$get[0], $get[1], $get[2], $id]);
			 $_SESSION['msg'] = "Contact updated!";
			 $_SESSION['msg_type'] = "info";
		} else {
			 $_SESSION['msg'] = "Error updating contact!";
			 $_SESSION['msg_type'] = "danger";
		}
	}

	public function delete($id)
	{
	 //your delete code
	 $sql = "DELETE FROM address WHERE id=?";
	 $stmt = parent::getConnection()->prepare($sql);
		if($stmt) {
			$stmt->execute([$id]);
			$_SESSION['msg'] = "Contact deleted!";
			$_SESSION['msg_type'] = "dark";
		} else {
			$_SESSION['msg'] = "Error deleting contact!";
			$_SESSION['msg_type'] = "danger";
		}
	}
} 



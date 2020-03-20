<?php 

//Include Connection class here..
include 'Connection.php';

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
			echo "Database Error!";
		}
	}

	public function insert($get)
	{
	  //your insert code here
	  $sql = "INSERT FROM address(NAME, phone, email) VALUES (?,?,?)";
	  $stmt = parent::getConnection()->prepare($sql);
		if($stmt) {
			$stmt->execute([$get[0], $get[1], $get[2]]);
		} else {
			echo "Database Error!";
		}
	}

	public function update($id,$get)
	{
	 //your update code here
	 $sql = "UPDATE address SET NAME=?,phone=?,email=? WHERE id=?";
	 $stmt = parent::getConnection()->prepare($sql);
		if($stmt) {
	 		$stmt->execute([$get[0], $get[1], $get[2], $id]);
		} else {
			echo "Database Error!";
		}
	}

	public function delete($id)
	{
	 //your delete code
	 $sql = "DELETE FROM address WHERE id = ?";
	 $stmt = parent::getConnection()->prepare($sql);
		if($stmt) {
			$stmt->execute([$id]);
		} else {
			echo "Database Error!";
		}
	}
} 



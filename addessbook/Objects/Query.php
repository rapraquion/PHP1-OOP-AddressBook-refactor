<?php 

//Include Connection class here..
include 'Connection.php';

Class Query extends Connection {
	
	public function __construct()
	{
	   parent::connect();
	}

	public function display()
	{
	  //your select code here
	  $sql = "SELECT * FROM address WHERE name = ?";
	 
	}

	public function insert($get)
	{
	  //your insert code here
	//   $sql = "INSERT INTO address(name, phone, email) VALUES (?,?,?)";
	//   $stmt = parent::connect()->prepare($sql);
	//     if($stmt) {
	//   		$stmt->execute([$get[0], $get[1], $get[2]]);
	// 	} else {
	// 		echo "Database Error!";
	// 	}
	}

	public function update($id,$get)
	{
	 //your update code here
	//  $sql = "UPDATE address SET name=?,phone=?,email=? WHERE id=?";
	//  $stmt = parent::connect()->prepare($sql);
	// 	if($stmt) {
	//  		$stmt->execute([$get[0], $get[1], $get[2], $id]);
	// 	} else {
	// 		echo "Database Error!";
	// 	}
	}

	public function delete($id)
	{
	 //your delete code
	//  $sql = "DELETE FROM address WHERE id = ?";
	//  $stmt = parent::connect()->prepare($sql);
	//  $stmt->execute([$id]);
	}
} 



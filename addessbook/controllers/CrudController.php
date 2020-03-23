<?php

$query = new Query();

// add new contact
if(isset($_POST['newContact'])) {
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];

	if(!empty($name) && !empty($contact) && !empty($email)) {
		$get = array($name, $contact, $email);
		$query->insert($get);
	}
}

// edit contact
if(isset($_POST['editContact'])) {
    $id= $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['contact'];
    $email = $_POST['email'];

    $get = array($name, $phone, $email);
    $query->update($id, $get);
}

// delete contact
if(isset($_POST['deleteContact'])) {
	$id = $_POST['id'];
	
	$query->delete($id);
}
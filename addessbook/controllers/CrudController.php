<?php
session_start();
include '../Objects/Query.php';
$query = new Query();

$errors = array();
$name = "";
$phone = "";
$email = "";

// add new contact
if(isset($_POST['newContact'])) {
	$name = $_POST['name'];
	$contact = $_POST['contact'];
    $email = $_POST['email'];

    if(empty($name)) {
        $errors['name'] =  "Full name is required";
    }
    
    if(empty($contact)) {
        $errors['contact'] = "Phone number is required";
    }

    if(empty($email)) {
        $errors['email'] = "Email address is required";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid Email address';
    }

    if(count($errors) === 0){
        $get = array($name, $contact, $email);
        $query->insert($get);
        header('location: index.php');
    }
}

// edit contact
if(isset($_POST['editContact'])) {
    $id= $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['contact'];
    $email = $_POST['email'];

    if(empty($name)) {
        $errors['name'] =  "Full name is required";
    }
    
    if(empty($phone)) {
        $errors['contact'] = "Phone number is required";
    }

    if(empty($email)) {
        $errors['email'] = "Email address is required";
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Invalid Email address';
    }

    if(count($errors) === 0){
        $get = array($name, $phone, $email);
        $query->update($id, $get);
    }
}

// delete contact
if(isset($_POST['deleteContact'])) {
	$id = $_POST['id'];
	$query->delete($id);
}
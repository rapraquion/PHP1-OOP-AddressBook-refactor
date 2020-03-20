<?php error_reporting(1); ?>

<?php 
//Inlude the Query class here ..
include_once './Objects/Query.php';
$self = $_SERVER['PHP_SELF'];

//Default methods
// display
$query = new Query();

// insert
if(isset($_GET['NAME'])) {
	$name = $_GET['NAME'];
	$phone = $_GET['phone'];
	$email = $_GET['email'];

	if(!empty($name) && !empty($phone) && !empty($email)) {
		$get = array($name, $phone, $email);
		$query->insert($get);
		header('location: index.php');
		echo "
		<div class='alert alert-sucess' role='alert'>
			New contact successfully added!
	  	</div>";
	} else {
		echo "
		<div class='alert alert-danger' role='alert'>
			Unable to add new contact! Please try again.
	  	</div>";
	}
}

// update
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$newName = $_GET['NAME'];
	$newPhone = $_GET['phone'];
	$newEmail = $_GET['email'];

	if(!empty($name) && !empty($phone) && !empty($email)) {
		$get = array($newName, $newPhone, $newEmail);
		$query->update($id, $get);
		header('location: index.php');
		echo "
		<div class='alert alert-info' role='alert'>
			Contact updated!
	  	</div>";
	} else {
		echo "
		<div class='alert alert-danger' role='alert'>
			Unable to add new contact! Please try again.
	  	</div>";
	}
}
/**
**	delete($id)
**/

?>


<!-- Your HTML below php code below-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<title>Addressbook - Refactor</title>
</head>
<body>
	<?php include('./includes/Nav.php') ?>

    <div class="main">

        <button class="btn btn-success" data-toggle="modal" data-target="#addForm">
            Add Contact
        </button>
		<?php include('./includes/AddModal.php') ?>

		<!-- table -->
		<table class="table table-striped table-responsive-md">
			<thead>
				<tr>
					<th>Name</th>
					<th>Contact</th>
					<th>Email</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($query->display() as $contacts): ?>
					<tr>
						<th><?php echo $contacts['NAME']; ?></th>
						<td><?php echo $contacts['phone']; ?></td>
						<td><?php echo $contacts['email']; ?></td>
						<td>
							<button class="btn btn-info" data-toggle="modal" data-target="#editForm">UPDATE</button>
							<button class="btn btn-danger">DELETE</button>
						</td>
					</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		<?php include('./includes/EditModal.php') ?>
    </div>  
<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
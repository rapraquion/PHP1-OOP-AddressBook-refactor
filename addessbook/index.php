<?php error_reporting(1); ?>

<?php 
//Inlude the Query class here ..
include './Objects/Query.php';
$self = $_SERVER['PHP_SELF'];

//Default methods
// display
$query = new Query();

// CUD
include './controllers/CrudController.php';
?>


<!-- Your HTML below php code below-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Addressbook - Refactor</title>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
				<a class="navbar-brand" href="./index.php">BoomCamp</a>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				</ul>
					<ul class="form-inline my-2 my-lg-0">
					<a class="navbar-brand" href="#">
						Addressbook - Refactor
					</a>
				</ul>
				</div>
		</div>
	</nav>

	<!-- notifications -->
	<?php include './includes/Notification.php'; ?>

    <div class="main">
		<!-- add contact (create) (update) (delete) -->
		<div class="container-md add-btn">
			<?php include './includes/AddModal.php'; ?>
		</div>

		<!-- table (read) -->
		<?php include './includes/Table.php'; ?>
    </div>  
	<!-- jQuery, Popper.js, Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<!-- <script src="includes/myFunc.js" crossorigin="anonymous"></script> -->
</body>
</html>
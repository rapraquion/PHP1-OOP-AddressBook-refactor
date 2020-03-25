<?php if(isset($_SESSION['msg'])) :?>
	<div class="alert alert-dismissible fade show alert-<?php echo $_SESSION['msg_type']; ?>" role='alert'>
		<div class="container-md"  style="display: flex; justify-content: center;">
			<?php
				echo $_SESSION['msg'];
				unset($_SESSION['msg'])
			?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	</div>
<?php elseif(count($errors) > 0): ?>
	<div class="alert alert-danger">
		<div class="container-md">
			<?php foreach($errors as $error): ?>
				<li><?php echo $error; ?></li>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>
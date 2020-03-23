<div class="container-md">
	<table id="contact" class="table table-responsive-md text-center table-striped">
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
					<td><?php echo $contacts['name']; ?></td>
					<td><?php echo $contacts['phone']; ?></td>
					<td><?php echo $contacts['email']; ?></td>
					<td style="display: inline-flex;">
						<!-- update -->
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#editForm<?php echo $contacts['id']; ?>">Edit</button>
						<?php include './includes/EditModal.php'; ?>
						<!-- delete -->
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteForm<?php echo $contacts['id']; ?>">Remove</button>
						<?php include './includes/DeleteModal.php'; ?>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
	</table>
</div>
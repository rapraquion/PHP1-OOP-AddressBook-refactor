<div class="modal fade" id="deleteForm<?php echo $contacts['id']; ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Delete Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal Body --> 
        <div class="modal-body">
          <div class="alert alert-warning" role="alert">
              <h4 class="alert-heading">Are you sure you want to <br />delete this entry?</h4>
              <hr>
              <p class="mb-0">Name: <?php echo $contacts['name']; ?></p>
              <p class="mb-0">Phone Number: <?php echo $contacts['phone']; ?></p>
              <p class="mb-0">Email: <?php echo $contacts['email']; ?></p>
          </div>
        </div>
      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <form method="post">
            <input value="<?php echo $contacts['id'] ?>" name="id" type="hidden"> 
            <button type="submit" name="deleteContact" class="btn btn-default">Delete</button>
          </form>
      </div>
    </div>
  </div>
</div>
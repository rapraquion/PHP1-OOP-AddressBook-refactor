<div class="container">    
    <div class="modal fade" id="editForm<?php echo $contacts['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Contact</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <!-- Modal Body -->
                <form class="create-main" method="post">
                    <div class="modal-body">
                            <input value="<?php echo $contacts['id'] ?>" name="id" type="hidden">  
                        <div class="form-group">
                            <input autofocus required class="form-control form-control-lg capital" value="<?php echo $contacts['name'] ?>" placeholder="Name" name="name" type="text">  
                        </div>
                        <div class="form-group">                               
                            <input required class="form-control form-control-lg capital" value="<?php echo $contacts['phone'] ?>" placeholder="Contact" name="contact" type="tel" pattern="[0-9\-]+">    
                        </div>
                        <div class="form-group">                                    
                            <input required class="form-control form-control-lg capital" value="<?php echo $contacts['email'] ?>" placeholder="Email" name="email" type="email">  
                        </div>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="editContact" class="btn btn-default">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
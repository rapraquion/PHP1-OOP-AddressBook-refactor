<div class="container">    
    <div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Contact</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form class="create-main needs-validation" method="post" novalidate>
                        <div class="form-group">
                            <input class="form-control form-control-lg capital" value="<?php echo $name; ?>" placeholder="Full Name" id="name" name="name" type="text">  
                        </div>
                        <div class="form-group">                               
                            <input class="form-control form-control-lg capital" value="<?php echo $contact; ?>" placeholder="Phone Number" id="contact" name="contact" type="tel" pattern="[0-9\-]+">  
                        </div>
                        <div class="form-group">                                    
                            <input class="form-control form-control-lg capital" value="<?php echo $email; ?>" placeholder="Email" id="email" name="email" type="email" pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{1,})+$/">  
                        </div>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="newContact" name="newContact" class="btn btn-default">Save</button>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>
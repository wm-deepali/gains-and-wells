<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="<?php echo e(route('admin.manage-offers.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
                <h4 class="modal-title">Add</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">

            <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Name <span class="required">*</span></label>
                        <input type="name" class="form-control" name="name" required>
                    </div>
                </div>
            
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Image <span class="required">*</span></label>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                </div>
            
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">status <span class="required">*</span></label>
                        <select class="form-control" name="status" id="status" required>
                        <option value="">-- Select Status --</option>
                        <option value="0">Active</option>
                        <option value="1">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/admin/offers/ajax/create.blade.php ENDPATH**/ ?>
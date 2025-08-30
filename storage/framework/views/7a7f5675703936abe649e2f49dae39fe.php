<div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <form class="form form-horizontal">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title">Add Blog Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Offer Name <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
                        <div class="text-danger" id="name-err"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">Url <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter slug" name="url" id="url">
                        <div class="text-danger" id="url-err"></div>
                    </div>
                </div>



                <div class="form-group row">
                    
                    <div class="col-sm-6">
                        <label class="label-control label">Status <span class="required">*</span></label>
                        <select class="form-control" name="status" id="status">
                            <option value="active">Active</option>
                            <option value="block">Block</option>
                        </select>
                        <div class="text-danger" id="status-err"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary add-category-btn">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
    </form>
</div>
<script>
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "<?php echo e(route('admin.image-upload', ['_token' => csrf_token()])); ?>",
        filebrowserUploadMethod: 'form'
    });
</script><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/admin/blog-categories/ajax/create.blade.php ENDPATH**/ ?>
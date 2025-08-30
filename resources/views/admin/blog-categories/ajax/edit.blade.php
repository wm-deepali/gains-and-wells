<div class="modal-dialog modal-lg">
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
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="{{$category->name}}">
                        <div class="text-danger" id="name-err"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">Url <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter slug" name="url" id="url" value="{{$category->url}}">
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
                <button type="button" class="btn btn-primary" id="update-category-btn" category_id="{{ $category->id }}">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
    </form>
    </div>
<script>

    CKEDITOR.replace('content', {

        filebrowserUploadUrl: "{{ route('admin.image-upload', ['_token' => csrf_token()]) }}",

        filebrowserUploadMethod: 'form'

    });

</script>
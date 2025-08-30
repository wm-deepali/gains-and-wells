<div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <form method="post" action="{{ route('admin.manage-past-opportunity.store-opportunity') }}" enctype="multipart/form-data">
        @csrf
        
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Past Opportunity</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-6">

                        <label class="label-control label">Status <span class="required">*</span></label>
                        <select class="form-control" name="status" id="status">
                            <option value="active">Active</option>
                            <option value="block">Block</option>
                        </select>

                        <div class="text-danger" id="status-err"></div>
                    </div>
                    
                    <div class="col-sm-6">

                        <label class="label-control label">Page <span class="required">*</span></label>
                        <select class="form-control" name="type" id="type">
                            <option value="Corporate Debt">Corporate Debt</option>
                            <option value="Venture Debt">Venture Debt</option>
                            <option value="Invoice Discounting">Invoice Discounting</option>
                            <option value="Asset Backed Leasing">Asset Backed Leasing</option>
                            <option value="Asset Class">Asset Class</option>
                        </select>

                        <div class="text-danger" id="status-err"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Title <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title">
                        <div class="text-danger" id="title-err"></div>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="label-control label">Image <span class="required">*</span></label>
                        <input type="file" class="form-control" name="image" id="image" required>
                        <div class="text-danger" id="image-err"></div>

                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Heading <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Heading" name="heading" id="heading">
                        <div class="text-danger" id="heading-err"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Percentage <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Percentage" name="percentage" id="percentage">
                        <div class="text-danger" id="percentage-err"></div>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="label-control label">Months <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Months" name="months" id="months">
                        <div class="text-danger" id="months-err"></div>

                    </div>
                </div>
                


                <div class="form-group row">
                    <div class="col-sm-12">

                        <label class="label-control label">Content <span class="required">*</span></label>

                        <textarea class="form-control" name="content" id="content" cols="30" rows="5"></textarea>

                        <div class="text-danger" id="content-err"></div>

                    </div>

                </div>
               

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Add</button>

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </form>

</div>

<script>

    // CKEDITOR.replace('content', {

    //     filebrowserUploadUrl: "{{ route('admin.image-upload', ['_token' => csrf_token()]) }}",

    //     filebrowserUploadMethod: 'form'

    // });
CKEDITOR.replace('content', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});
</script>


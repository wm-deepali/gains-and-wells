<div class="modal-dialog modal-lg">

    <!-- Modal content-->

    <div class="modal-content">

        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-faq.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="modal-header">
                <h4 class="modal-title">Add</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                

            </div>

            <div class="modal-body">

                <div class="form-group row">

    <div class="col-sm-4" style="margin-top: 12px;">
        <select class="form-control" name="page_id" >
            <option value="">Select a page</option>
            @foreach ($pages as $page)
                <option value="{{ $page->id }}">{{ $page->title }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-sm-4" style="margin-top: 12px;">
        <select class="form-control" name="status" required>
            <option value="active">Active</option>
            <option value="block">Block</option>
        </select>
    </div>

    <div class="col-sm-4" style="margin-top: 12px;">
        <select class="form-control" name="is_default" required>
            <option value="">Is Default?</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>

</div>

                    
                 


                <div class="form-group row">

                    <div class="col-sm-12">

                        <label class="label-control label">Question <span class="required">*</span></label>

                        <textarea class="form-control" name="question" cols="30" rows="5" required></textarea>

                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-sm-12">

                        <label class="label-control label">Answer <span class="required">*</span></label>

                        <textarea class="form-control" id="content" name="answer" cols="30" rows="10" required></textarea>

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
<script>
    CKEDITOR.replace('content', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});
</script>
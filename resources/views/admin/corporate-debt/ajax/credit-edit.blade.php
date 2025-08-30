<div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <form method="post" action="{{ route('admin.manage-corporate-debt.credit-assessment-process.credit-process-update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$blog->id}}">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Credit Assessment Process</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-6">

                        <label class="label-control label">Status <span class="required">*</span></label>
                        <select class="form-control" name="status" id="status">
                            <option value="active" @if($blog->status == 'active') selected @endif>Active</option>
                            <option value="block" @if($blog->status == 'block') selected @endif>Block</option>
                        </select>

                        <div class="text-danger" id="status-err"></div>
                    </div>
                    
                    <div class="col-sm-6">

                        <label class="label-control label">Page <span class="required">*</span></label>
                       <select class="form-control" name="type" id="type">
                            <option value="Corporate Debt" @if($blog->type == 'Corporate Debt') selected @endif>Corporate Debt</option>
                            <option value="Venture Debt" @if($blog->type == 'Venture Debt') selected @endif>Venture Debt</option>
                            <option value="Invoice Discounting" @if($blog->type == 'Invoice Discounting') selected @endif>Invoice Discounting</option>
                            <option value="Asset Backed Leasing" @if($blog->type == 'Asset Backed Leasing') selected @endif>Asset Backed Leasing</option>
                            <option value="Asset Class" @if($blog->type == 'Asset Class') selected @endif>Asset Class</option>
                        
                        </select>

                        <div class="text-danger" id="status-err"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Title <span class="required">*</span></label>
                        <input type="text" class="form-control" value="{{ $blog->title}}" placeholder="Enter Title" name="title" id="title">
                        <div class="text-danger" id="title-err"></div>
                    </div>
                    
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-12">

                        <label class="label-control label">Content <span class="required">*</span></label>

                        <textarea class="form-control" name="content" id="content" cols="30" rows="5">{{ $blog->content }}</textarea>

                        <div class="text-danger" id="content-err"></div>

                    </div>

                </div>
               

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Update</button>

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


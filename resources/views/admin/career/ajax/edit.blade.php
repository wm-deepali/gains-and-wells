<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-career.update') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $career->id }}">
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label"> Heading <span class="required">*</span></label>
                         <!-- <textarea class="form-control" name="heading" id="heading" cols="30" rows="5">{{$career->heading}}</textarea> -->
                         <input type="text" class="form-control" value="{{$career->heading}}" name="heading" placeholder="Enter Button Name" required>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label"> Content <span class="required">*</span></label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="5">{{$career->content}}</textarea>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label"> Image <span class="required">*</span></label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    @if($career->image!=null)
                        <div class="m-2"><img src="{{ asset('storage/career/'.$career->image) }}"height="50"> </div>
                    @endif
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label"> Button Name <span class="required">*</span></label>
                        <input type="text" class="form-control" value="{{$career->button_name}}" name="button_name" placeholder="Enter Button Name" required>

                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label"> Button Link <span class="required">*</span></label>
                        <input type="text" class="form-control" value="{{$career->button_link}}" name="button_link" placeholder="Enter Button Link" required>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    CKEDITOR.replace('content', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});
    
</script>
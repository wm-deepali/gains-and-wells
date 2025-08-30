<div class="modal-dialog modal-lg">

    <!-- Modal content-->

    <div class="modal-content">

        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-faq.update', $faq->id) }}" enctype="multipart/form-data">

            @csrf

            @method('PUT')

            <div class="modal-header">
                 <h4 class="modal-title">Edit</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

               

            </div>

            <div class="modal-body">

                

                <div class="form-group row">

                    <div class="col-sm-4" style="margin-top:12px">

                        <select class="form-control" name="page_id" >
                            <option value="">Select a Page</option>
                            @if (isset($pages) && count($pages) > 0)
                            @foreach ($pages as $page)
                            <option value="{{ $page->id }}" @if ($page->id == $faq->page_id) selected @endif>{{ $page->title }}</option>
                            @endforeach
                            @endif

                        </select>

                    </div>
                    <div class="col-sm-4" style="margin-top:12px">

                        <select class="form-control" name="status" required>
                            <option value="active" @if ($faq->status == 'active') selected @endif>Active</option>
                            <option value="block" @if ($faq->status == 'block') selected @endif>Block</option>
                        </select>

                    </div>
                    
 <div class="col-sm-4" style="margin-top:12px">
                        <select class="form-control" name="is_default" id="is_default" required>
                            <option value="">Is Default?</option>
                            <option value="yes" {{ $faq->is_default == 'yes' ? 'selected' : '' }}>Yes</option>
                            <option value="no" {{ $faq->is_default == 'no' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>
                    
                </div>

                

                <div class="form-group row">

                    <div class="col-sm-12">

                        <label class="label-control label">Question <span class="required">*</span></label>

                        <textarea class="form-control" name="question" cols="30" rows="5" required>{{ $faq->question }}</textarea>

                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-sm-12">

                        <label class="label-control label">Answer <span class="required">*</span></label>

                        <textarea class="form-control" name="answer" id="content" cols="30" rows="10" required>{{ $faq->answer }}</textarea>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Submit</button>

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


<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-business.update', $state->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Business Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="Business_name" value="{{ $state->Business_name }}" required>
                    </div>
                </div>
              
                <div class="form-group row">
                    <div class="col-sm-12">
                      
        <label class="label-control label">Status <span class="required">*</span></label>
        <select class="form-control" name="status" id="status" required>
            <option value="">-- Select Status --</option>
            <option value="active" {{ $state->status == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $state->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
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

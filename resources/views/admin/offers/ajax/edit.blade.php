<div class="modal-dialog">
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-offers.update', $state->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="modal-header">
                <h4 class="modal-title">Edit Offer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                  <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Name <span class="required">*</span></label>
                        <input type="name" class="form-control" name="name"  value="{{ $state->name }}">
                    </div>
                </div>
                {{-- Image upload --}}
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Image <span class="required">*</span></label>
                        <input type="file" class="form-control" name="image">
                       
                    </div>
                </div>

              
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Status <span class="required">*</span></label>
                        <select class="form-control" name="status" required>
                            <option value="">-- Select Status --</option>
                            <option value="0" {{ $state->status == '0' ? 'selected' : '' }}>Active</option>
                            <option value="1" {{ $state->status == '1' ? 'selected' : '' }}>Inactive</option>
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

<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-state.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Add</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Country <span class="required">*</span></label>
                        <select class="form-control" name="country_id" required>
                            <option value="">Select a Country</option>
                            @foreach ($countries as $country)
                            <option value="{{ $country->id }}" >{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">State Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" required>
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

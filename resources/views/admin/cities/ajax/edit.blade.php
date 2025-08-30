<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-city.update', $city->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">State <span class="required">*</span></label>
                        <select class="form-control" name="state_id" required>
                            <option value="">Select a State</option>
                            @foreach ($states as $state)
                            <option value="{{ $state->id }}" @if($state->id == $city->state_id) selected @endif>{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
              
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label"> Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $city->name }}" required>
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

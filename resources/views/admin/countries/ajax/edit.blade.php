<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-country.update', $country->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Country Code <span class="required">*</span></label>
                        <input type="text" class="form-control" name="code" value="{{ $country->code }}" required>
                    </div>
                </div>
              
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Country Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $country->name }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Country Phone Code <span class="required">*</span></label>
                        <input type="number" class="form-control" name="phonecode" value="{{ $country->phonecode }}">
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

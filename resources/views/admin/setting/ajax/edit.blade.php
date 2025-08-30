<div class="modal-dialog modal-lg">
         <form class="form form-horizontal">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title">Update Convenience Fee & GST</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Convenience Fee(%) <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Convenience Fee" name="convenience_fee" id="convenience_fee" value="{{$setting->convenience_fee}}">
                        <div class="text-danger" id="convenience_fee-err"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">GST(%) <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter GST" name="gst" id="gst" value="{{$setting->gst}}">
                        <div class="text-danger" id="gst-err"></div>
                    </div>
                </div>

                
                <div class="form-group row">
                    <div class="col-sm-12">
                        <h6>Bank Details</h6>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Bank <span class="required">*</span></label>
                        <select name="bank_name" class="form-control" id="bank_name">
                            <option value="">Select Bank</option>
                            @foreach($banks as $bank)
                            <option value="{{$bank->bank}}" {{$setting->bank_name == $bank->bank ? 'selected' : ''}}>{{$bank->bank}}</option>
                            @endforeach
                        </select>
                        <div class="text-danger" id="bank_name-err"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">Account Holder Name <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Account Holder Name" name="account_name" id="account_name" value="{{$setting->account_name}}">
                        <div class="text-danger" id="account_name-err"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Account Type <span class="required">*</span></label>
                        <select name="account_type" class="form-control" id="account_type">
                            <option value="">Select Account Type</option>
                            <option value="Saving Account" {{$setting->account_type == 'Saving Account' ? 'selected' : ''}}>Saving Account</option>
                            <option value="Current Account" {{$setting->account_type == 'Current Account' ? 'selected' : ''}}>Current Account</option>
                        </select>
                        <div class="text-danger" id="account_type-err"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">Account Number <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Account Number" name="account_number" id="account_number" value="{{$setting->account_number}}">
                        <div class="text-danger" id="account_number-err"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">IFSC Code <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter IFSC Code" name="ifsc_code" id="ifsc_code" value="{{$setting->ifsc_code}}">
                        <div class="text-danger" id="ifsc_code-err"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="update-setting-btn" setting_id="{{ $setting->id }}">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
    </form>
    </div>

@include('admin.header')
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-2">
                <h3 class="content-header-title mb-0">Manage Store Setup</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-xs-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item">Store Setting</li>
                            <li class="breadcrumb-item active">Manage General Setting
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Store Setting - General Setting</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                </div>
                <section>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card-body collapse in">
                                <div class="card-block card-dashboard">
                                    <div class="table-responsive">
                                        <form method="post" action="{{ route('admin.manage-general-setting.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body collapse in">
                                                <div class="card-block">
                                                    <div class="form-body">
                                                        <div class="form-group row">
                                                            <label class="col-md-2 label-control">Name*</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{ $general_setting->email ?? null }}" required>
                                                            </div>
                                                            <label class="col-md-2 label-control">Email*</label>
                                                            <div class="col-md-4">
                                                                <input type="email" class="form-control" placeholder="Enter Email Address" name="email" value="{{ $general_setting->email ?? null }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-2 label-control">Mobile Number</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" placeholder="Enter Mobile number" name="mobile_number" value="{{ $general_setting->mobile_number ?? null }}" required>
                                                            </div>
                                                            <label class="col-md-2 label-control">Whatsapp Number</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" placeholder="Enter Whatsapp number" name="whatsapp_number" value="{{ $general_setting->whatsapp_number ?? null }}" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-2 label-control">Map</label>
                                                            <div class="col-md-4">
                                                                <textarea class="form-control" name="map" cols="30" rows="10" required>{{ $general_setting->map ?? null }}</textarea>
                                                            </div>
                                                            <label class="col-md-2 label-control">Address</label>
                                                            <div class="col-md-4">
                                                                <textarea class="form-control" name="address" cols="30" rows="10" required>{{ $general_setting->address ?? null }}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-2 label-control">State</label>
                                                            <div class="col-md-4">
                                                                <select class="form-control" name="state" id="state" required>
                                                                    <option value="">Select</option>
                                                                    @if (isset($states) && count($states) > 0)
                                                                        @foreach ($states as $state)
                                                                            <option value="{{ $state->id }}" @if (isset($general_setting->state_id) && $general_setting->state_id == $state->id) selected @endif>{{ $state->name }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>

                                                            <label class="col-md-2 label-control">City</label>
                                                            <div class="col-md-4">
                                                                <select class="form-control" name="city" id="city" required>
                                                                    <option value="">Select</option>
                                                                    @if (isset($cities) && count($cities) > 0)
                                                                        @foreach ($cities as $city)
                                                                            <option value="{{ $city->id }}" @if ($general_setting->city_id == $city->id) selected @endif>{{ $city->name }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-md-2 label-control">Header Logo</label>
                                                            <div class="col-md-4">
                                                                @if (isset($general_setting->header_logo) && Storage::exists($general_setting->header_logo))
                                                                    <img src="{{ URL::asset('storage/' . $general_setting->header_logo) }}" alt="" width="100" height="100">
                                                                @endif
                                                                <input type="file" class="form-control-file" name="header_logo">
                                                            </div>
                                                            <label class="col-md-2 label-control">Footer Logo</label>
                                                            <div class="col-md-4">
                                                                @if (isset($general_setting->footer_logo) && Storage::exists($general_setting->footer_logo))
                                                                    <img src="{{ URL::asset('storage/' . $general_setting->footer_logo) }}" alt="" width="100" height="100">
                                                                @endif
                                                                <input type="file" class="form-control-file" name="footer_logo">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-2 label-control">Footer Content</label>
                                                            <div class="col-md-10">
                                                                <textarea class="form-control" name="footer_content" cols="30" rows="10" required>{{ $general_setting->footer_content ?? null }}</textarea>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <h3>Social Media:</h3>
                                                        <br>
                                                        <div class="form-group row">
                                                            <label class="col-md-2 label-control">Facebook</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" placeholder="Enter Facebook" name="facebook" value="{{ $general_setting->facebook ?? null }}" required>
                                                            </div>
                                                            <label class="col-md-2 label-control">Twitter</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" placeholder="Enter Twitter" name="twitter" value="{{ $general_setting->twitter ?? null }}" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-2 label-control">Instagram</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" placeholder="Enter instagram" name="instagram" value="{{ $general_setting->instagram ?? null }}" required>
                                                            </div>
                                                            <label class="col-md-2 label-control">Youtube</label>
                                                            <div class="col-md-4">
                                                                <input type="text" class="form-control" placeholder="Enter youtube" name="youtube" value="{{ $general_setting->youtube ?? null }}" required>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <h3>GST Setting:</h3>
                                                        <br>
                                                        <div class="form-group row">
                                                            <label class="col-md-1 label-control">CGST (%)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" placeholder="Enter CGST" name="cgst_percentage" value="{{ $general_setting->cgst_percentage ?? null }}" required>
                                                            </div>
                                                            <label class="col-md-1 label-control">SGST (%)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" placeholder="Enter SGST" name="sgst_percentage" value="{{ $general_setting->sgst_percentage ?? null }}" required>
                                                            </div>
                                                            <label class="col-md-1 label-control">IGST (%)</label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control" placeholder="Enter IGST" name="igst_percentage" value="{{ $general_setting->igst_percentage ?? null }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12 text-center">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
<script>
    $(document).ready(function() {
        $(document).on("change", "#state", function(event) {
            let state_id = $(this).val();
            $.ajax({
                url: `{{ URL::to('cities-by-state/${state_id}') }}`,
                type: "get",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#city").html(result.html);
                    }
                }
            });
        });
    });
</script>

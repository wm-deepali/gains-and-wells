@include('admin.top-header')

<div class="main-section">

@include('admin.header')

<div class="app-content content container-fluid">

<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">

<div class="breadcrumb-wrapper">

<ol class="breadcrumb bg-transparent mb-0">

<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

<li class="breadcrumb-item">Pages</li>

<li class="breadcrumb-item active">Profile Setting</li>

</ol>

</div>

</div>


<div class="content-wrapper">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#tabs-3" role="tab">Contact Details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tabs-1" role="tab">Account Setting</a>
    </li>
   <!--  <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Contact Details</a>
    </li> -->
   
</ul><!-- Tab panes -->
<div class="tab-content border px-3 ">
    <div class="tab-pane" id="tabs-1" role="tabpanel">
        
        <form class="py-3" action="resetpassword" method="post">
            @csrf

            @if(Session::has('success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                       </button>
                    </div>
                </div>
            </div>
            @endif

            
            <div class="row">
            <div class="col-md-6">
            <div class="wdinput form-group">
                <label>New Password</label>
                <input type="text" class="form-control" placeholder="Enter New Password"  name="password" id="password">
                 @error('password')
                 <div class="text-danger">{{ $message }}</div>
                 @enderror
            </div>
            </div>
            <div class="col-md-6">
                <div class="wdinput form-group">
                <label>Confirm Password</label>
                <input type="text" class="form-control" placeholder="Enter Confirm Password"  name="password_confirmation" id="password_confirmation">
                @error('password_confirmation')
                 <div class="text-danger">{{ $message }}</div>
                 @enderror
            </div>
            </div>

            <div class="col-md-12">
                <div class="wdinput form-group">
                    <button class="btn bg-dark text-white" type="submit">Submit</button>
            </div>
            </div>
            </div>
        </form>
    </div>
    <!-- <div class="tab-pane" id="tabs-2" role="tabpanel">
        <form class="py-5">
            <div class="row">
            <div class="col-md-6">
            <div class="wdinput form-group">
                <label class="d-flex">Facebook </label>
                <input type="text" class="form-control" placeholder="Enter Facebook Url"  name="">
            </div>
            </div>
            <div class="col-md-6">
                <div class="wdinput form-group">
                <label>Twitter</label>
                <input type="text" class="form-control" placeholder="Enter Twitter Url"  name="">
            </div>
            </div>

            <div class="col-md-6">
                <div class="wdinput form-group">
                <label>Linkedin</label>
                <input type="text" class="form-control" placeholder="Enter Linkedin Url"  name="">
            </div>
            </div>

            <div class="col-md-6">
                <div class="wdinput form-group">
                <label>Instagram</label>
                <input type="text" class="form-control" placeholder="Enter Instagram Url"  name="">
            </div>
            </div>

            <div class="col-md-6">
                <div class="wdinput form-group">
                <label>Google Plus</label>
                <input type="text" class="form-control" placeholder="Enter Instagram Url"  name="">
            </div>
            </div>

            <div class="col-md-12">
                <div class="wdinput form-group">
                    <button class="btn bg-dark text-white" type="button">Submit</button>
            </div>
            </div>
            </div>
        </form>
    </div> -->
    <div class="tab-pane active" id="tabs-3" role="tabpanel">
       <form class="py-2" method="post" action="{{ route('admin.profile-setting.store') }}" enctype="multipart/form-data">
        @csrf

            @if(Session::has('success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                       </button>
                    </div>
                </div>
            </div>
            @endif

            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                          <div class="col-md-12">
            <div class="wdinput form-group">
                <label>Banner</label><br/>
                    @if ($contacts->banner!=null)
                        <img src="{{ URL::asset('storage/contactus/' . $contacts->banner) }}" class="img-fluid mb-3" style="height:100px;" alt="">
                    @endif     
                <input type="file" class="form-control" name="banner">
                </div>
                <div class="text-danger " id="banner-err"></div>
            </div>
            <div class="col-md-6">
            <div class="wdinput form-group">
                <label>Banner Alt Attribute</label>
                <input type="email" class="form-control" placeholder="Enter Banner Alt Attribute"  name="banner_alt" id="banner_alt" value="{{ $contacts->banner_alt ?? null }}" required>
            </div>
             <div class="text-danger " id="banner_alt-err"></div>
            </div>
            <div class="col-md-6">
            <div class="wdinput form-group">
                <label>Email Id</label>
                <input type="email" class="form-control" placeholder="Enter Email Id"  name="email" id="email" value="{{ $contacts->email ?? null }}" required>
            </div>
             <div class="text-danger " id="email-err"></div>
            </div>
            <div class="col-md-12">
                <div class="wdinput form-group">
                    <label>Banner Title</label>
                    <textarea class="form-control" name="banner_title" id="banner_title" rows="4" cols="5">{{ $contacts->banner_title }}</textarea>
                </div>
                <div class="text-danger" id="banner_title-err"></div>
            </div>
            <div class="col-md-6">
                <div class="wdinput form-group">
                    <label>Banner Button Name</label>
                    <input type="text" class="form-control" placeholder="Enter Banner Button Name"  name="banner_button_name" id="banner_button_name" value="{{ $contacts->banner_button_name ?? null }}" required>
                </div>
                <div class="text-danger" id="banner_button_name-err"></div>
            </div>
            
             <div class="col-md-6">
                <div class="wdinput form-group">
                    <label>Banner Button Link</label>
                    <input type="text" class="form-control" placeholder="Enter Banner Button Link"  name="banner_button_link" id="banner_button_link" value="{{ $contacts->banner_button_link ?? null }}" required>
                </div>
                <div class="text-danger" id="banner_button_link-err"></div>
            </div>
             <div class="col-md-12">
                <div class="wdinput form-group">
                    <label>Heading</label>
                    <input type="text" class="form-control" placeholder="Enter Heading"  name="heading" id="heading" value="{{ $contacts->heading ?? null }}" required>
                </div>
                <div class="text-danger" id="heading-err"></div>
            </div>
            <div class="col-md-6">
                <div class="wdinput form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter Phone Number"  name="mobile_number" id="mobile_number" value="{{ $contacts->mobile_number ?? null }}" required>
            </div>
             <div class="text-danger " id="mobile_number-err"></div>
            </div>
            <div class="col-md-6">
                <div class="wdinput form-group">
                <label>Whatsapp Number</label>
                <input type="text" class="form-control" placeholder="Enter Whatsapp Number"  name="whatsapp_number" id="whatsapp_number" value="{{ $contacts->whatsapp_number ?? null }}" required>
            </div>
             <div class="text-danger " id="whatsapp_number-err"></div>
            </div>
            <div class="col-md-12">
                <div class="wdinput form-group">
                <label>CIN</label>
                <input type="text" class="form-control" placeholder="Enter CIN"  name="cin" id="cin" value="{{ $contacts->cin ?? null }}" required>
            </div>
            </div>
            <div class="col-md-6">
                <div class="wdinput form-group">
                <label>Address</label>
                <textarea class="form-control" placeholder="Address" name="address" id="address">{{ $contacts->address ?? null }}</textarea>
            </div>
             <div class="text-danger " id="address-err"></div>
            </div>
           
             <div class="text-danger " id="cin-err"></div>
            
            <div class="col-md-6">
                <div class="wdinput form-group">
                <label>Map Iframe</label>
                <textarea class="form-control" placeholder="Map Iframe" name="map" id="map">{{ $contacts->map ?? null }}</textarea>
            </div>
             <div class="text-danger " id="map-err"></div>
            </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                         <div class="col-md-12">

                        <h6 class="border-bottom pb-2">SEO Section</h6>

                    </div>

                    <div class="col-md-12 form-group">

                        <label class="label-control label">URL <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Url" name="url" id="url" value="{{ $contacts->url ?? null }}" required>

                        <div class="text-danger validation-err" id="url-err"></div>

                    </div>

                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Title <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Meta Title" name="meta_title" id="meta_title" maxlength="70" value="{{ $contacts->meta_title ?? null }}" required>

                        <strong class="note-span small" id="meta_title-limit">We recommend title between 60-70 characters.(0 character)</strong>

                        <div class="text-danger validation-err" id="meta_title-err"></div>

                    </div>



                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Keywords <span class="required">*</span></label>

                        <textarea class="form-control" rows="4" cols="7" placeholder="Enter Meta Keywords" name="meta_keyword" id="meta_keyword">{{ $contacts->meta_keyword ?? null }}</textarea>

                        <div class="text-danger validation-err" id="meta_keyword-err"></div>

                    </div>



                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Description <span class="required">*</span></label>

                        <textarea class="form-control" rows="4" cols="7" placeholder="Enter Meta Description" name="meta_description" id="meta_description" maxlength="170">{{ $contacts->meta_description ?? null }}</textarea>

                        <strong class="note-span small" id="meta_description-limit">We recommend descriptions between 160-170 characters.(0 character)</strong>

                        <div class="text-danger validation-err" id="meta_description-err"></div>

                    </div>
                    </div>
                </div>

            <div class="col-md-12">
                <div class="wdinput form-group">
                    <button class="btn bg-dark text-white" type="button" id="updateContact">Submit</button>
            </div>
            </div>
            </div>


        </form>


    </div>
</div>
</div>
            

</div>



@include('admin.footer')

<script>

CKEDITOR.replace('content1', {

filebrowserUploadUrl: "{{ route('admin.image-upload', ['_token' => csrf_token()]) }}",

filebrowserUploadMethod: 'form'

});

CKEDITOR.replace('banner_title', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});

</script>

<script>


$(document).ready(function(event) {


    $(document).on("click", "#updateContact", function(event) {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }   
       
        $('#banner-err').html('');
        $('#banner_alt-err').html('');
        $('#banner_title-err').html('');
        $('#banner_button_name-err').html('');
        $('#banner_button_link-err').html('');
        $('#email-err').html('');
        $('#mobile_number-err').html('');
        $('#whatsapp_number-err').html('');
        $('#address-err').html('');
        $('#map-err').html('');
        $('#cin-err').html('');
        $('#url-err').html('');
        $('#heading-err').html('');
        $('#meta_title-err').html('');
        $('#meta_keyword-err').html('');
        $('#meta_description-err').html('');
        let formData = new FormData();

        formData.append('banner', $('input[type=file]')[0].files[0]); 
        formData.append('banner_alt', $('#banner_alt').val());
        formData.append('email', $('#email').val());
        formData.append('heading', $('#heading').val());
        formData.append('mobile_number', $('#mobile_number').val());
        formData.append('whatsapp_number', $('#whatsapp_number').val());
        formData.append('address', $('#address').val());
        formData.append('map', $('#map').val());
        formData.append('cin', $('#cin').val());
        formData.append('url', $('#url').val());
        formData.append('banner_title', $('#banner_title').val());
        formData.append('banner_button_name', $('#banner_button_name').val());
        formData.append('banner_button_link', $('#banner_button_link').val());
        formData.append('meta_title', $('#meta_title').val());
        formData.append('meta_keyword', $('#meta_keyword').val());
        formData.append('meta_description', $('#meta_description').val());
        formData.append('status', $('#status').val());
        
        $.ajax({
            url: "{{ URL::to('admin/profile-setting') }}",
            type: 'POST',
            processData: false,
            contentType: false,
            dataType: 'json',
            data: formData,
            context: this,
            success: function(result) {
                if (result.success) {
                    Swal.fire(
                        'Updated successfully !'
                        );

                    setTimeout(function() {
                        
                    }, 100);
                } else {
                    $(this).attr('disabled', false);
                    if (result.code == 422) {
                        for (const key in result.errors) {
                            $(`#${key}-err`).html(result.errors[key][0]);
                        }
                    } else {
                        console.log(result);
                    }
                }
            }
        });
    });

});

</script>
@include('admin.top-header')
<div class="main-section">
@include('admin.header')
    <div class="app-content content container-fluid">
        <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb bg-transparent mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Manage Corporate Debt</li>
                </ol>
            </div>
        </div>
        <div class="border p-3">
            <form method="post" action="{{ route('admin.manage-corporate-debt.content-store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-body">
                    <div class="row ">
                        <div class="col-md-6 form-group">
                            <label class="label-control d-block">Banner Image </label> 
                            @if ($join->banner_image!=null)
                                <img src="{{ URL::asset('storage/startup/' . $join->banner_image) }}" class="img-fluid mb-3" style="height:100px;" alt="">
                            @endif     
                            <input type="file" class="form-control" name="banner_image">
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label class="label-control">Banner Title *</label>
                            <input type="text" class="form-control" placeholder="Enter Banner Title" name="banner_title" id="banner_title" value="{{ $join->banner_title ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Banner Button Name *</label>
                            <input type="text" class="form-control" placeholder="Enter Button Name" name="banner_button_name" id="banner_button_name" value="{{ $join->banner_button_name ?? null }}" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="label-control">Banner Button Link *</label>
                            <input type="text" class="form-control" placeholder="Enter Button Link" name="banner_button_link" id="banner_button_link" value="{{ $join->banner_button_link ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Banner Short Description * </label>    
                            <textarea class="form-control" name="banner_short_description" id="content2" cols="30" rows="10" required>{!! $join->banner_short_description ?? null !!}</textarea>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Description * </label>    
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10" required>{!! $join->description ?? null !!}</textarea>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="label-control">Title *</label>
                            <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" value="{{ $join->title ?? null }}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="label-control">Title 1*</label>
                            <input type="text" class="form-control" placeholder="Enter Title" name="title1" id="title1" value="{{ $join->title1 ?? null }}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="label-control">Heading * </label>    
                            <input type="text" class="form-control" name="heading" placeholder="Enter Heading" id="heading" value="{{ $join->heading}}"></div>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label class="label-control">Sub Heading * </label>    
                            <textarea class="form-control" name="sub_heading" id="sub_heading" cols="30" rows="10" required>{!! $join->sub_heading ?? null !!}</textarea>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label class="label-control">Heading 1* </label>    
                            <input type="text" class="form-control" name="heading1" placeholder="Enter Heading" id="heading1" value="{{ $join->heading1}}"></div>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label class="label-control">Sub Heading 1* </label>    
                            <textarea class="form-control" name="sub_heading1" id="sub_heading1" cols="30" rows="10" required>{!! $join->sub_heading1 ?? null !!}</textarea>
                        </div>
                        
                        <!--<div class="col-md-12 form-group">-->
                        <!--    <label class="label-control d-block"> Image </label> -->
                        <!--    @if ($join->image!=null)-->
                        <!--        <img src="{{ URL::asset('storage/startup/' . $join->f_image) }}" class="img-fluid mb-3" style="height:100px;" alt="">-->
                        <!--    @endif     -->
                        <!--    <input type="file" class="form-control" name="f_image">-->
                        <!--</div>-->
                        
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control d-block">Risk Image </label> 
                            @if ($join->risk_image1!=null)
                                <img src="{{ URL::asset('storage/startup/' . $join->risk_image1) }}" class="img-fluid mb-3" style="height:100px;" alt="">
                            @endif     
                            <input type="file" class="form-control" name="risk_image1">
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label class="label-control">Risk Title *</label>
                            <input type="text" class="form-control" placeholder="Enter Risk Title" name="risk_title1" id="risk_title1" value="{{ $join->risk_title1 ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control d-block">Risk Image 1 </label> 
                            @if ($join->risk_image2!=null)
                                <img src="{{ URL::asset('storage/startup/' . $join->risk_image2) }}" class="img-fluid mb-3" style="height:100px;" alt="">
                            @endif     
                            <input type="file" class="form-control" name="risk_image2">
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label class="label-control">Risk Title 1*</label>
                            <input type="text" class="form-control" placeholder="Enter Risk Title" name="risk_title2" id="risk_title2" value="{{ $join->risk_title2 ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control d-block">Risk Image 2 </label> 
                            @if ($join->risk_image3!=null)
                                <img src="{{ URL::asset('storage/startup/' . $join->risk_image3) }}" class="img-fluid mb-3" style="height:100px;" alt="">
                            @endif     
                            <input type="file" class="form-control" name="risk_image3">
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label class="label-control">Risk Title 2*</label>
                            <input type="text" class="form-control" placeholder="Enter Risk Title" name="risk_title3" id="risk_title3" value="{{ $join->risk_title3 ?? null }}" required>
                        </div>
                        
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Last Title*</label>
                            <input type="text" class="form-control" placeholder="Enter Last Title" name="last_title" id="last_title" value="{{ $join->last_title ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Last Content*</label>
                            <input type="text" class="form-control" placeholder="Enter Last Content" name="last_description" id="last_description" value="{{ $join->last_description ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Last Button Name*</label>
                            <input type="text" class="form-control" placeholder="Enter Last Button Name" name="last_button_name" id="last_button_name" value="{{ $join->last_button_name ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Last Button Link*</label>
                            <input type="text" class="form-control" placeholder="Enter Last Button Link" name="last_button_link" id="last_button_link" value="{{ $join->last_button_link ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Last Button Name1*</label>
                            <input type="text" class="form-control" placeholder="Enter Last Button Name" name="last_button_name1" id="last_button_name1" value="{{ $join->last_button_name1 ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Last Button Link1*</label>
                            <input type="text" class="form-control" placeholder="Enter Last Button Link" name="last_button_link1" id="last_button_link1" value="{{ $join->last_button_link1 ?? null }}" required>
                        </div>
                        
                        
                        
                        <div class="col-md-12 form-group">
                            <label class="label-control">Content *</label>
                            <textarea class="form-control" name="content" id="content4" cols="30" rows="10" required>{!! $join->content ?? null !!}</textarea>
                        
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Meta Title *</label>
                            <input type="text" class="form-control" placeholder="Enter Meta Title" name="meta_title" id="meta_title" value="{{ $join->meta_title ?? null }}" required>
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label class="label-control">Meta Keywords *</label>
                            <input type="text" class="form-control" placeholder="Enter Meta Keywords" name="meta_keywords" id="meta_keywords" value="{{ $join->meta_keywords ?? null }}" required>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label class="label-control">Meta Description * </label>    
                            <textarea class="form-control" name="meta_description" id="meta_description" cols="30" rows="10" required>{!! $join->meta_description ?? null !!}</textarea>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!-- second title open -->
                </div>
            </form>
        </div>              
    </div>
@include('admin.footer')

<script>

CKEDITOR.replace('content1', {

filebrowserUploadUrl: "{{ route('admin.image-upload', ['_token' => csrf_token()]) }}",

filebrowserUploadMethod: 'form'

});
CKEDITOR.replace('content2', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});
CKEDITOR.replace('content3', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});
CKEDITOR.replace('content4', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});
CKEDITOR.replace('content5', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});
CKEDITOR.replace('content6', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});

CKEDITOR.replace('sub_heading', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});

CKEDITOR.replace('sub_heading1', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});

</script>


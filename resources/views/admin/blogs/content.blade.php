@include('admin.top-header')

<div class="main-section">

    @include('admin.header')

    <div class="app-content content container-fluid">

        <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">

            <div class="breadcrumb-wrapper">

                <ol class="breadcrumb bg-transparent mb-0">

                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

                    <li class="breadcrumb-item">Blogs</li>

                    <li class="breadcrumb-item active">Manage Blog Content</li>

                </ol>
            </div>
        </div>
        <div class="border p-3">

            <form method="post" action="{{ route('admin.manage-blog-content.store-content') }}" enctype="multipart/form-data">

            @csrf

                <div class="form-body">

                    <div class="row">

                        <div class="col-md-12 form-group">

                            <label class="label-control d-block">Image</label> 

                            @if (isset($invest) && $invest->image != null)

                            <img src="{{ URL::asset('storage/blogs/' . $invest->image) }}" class="img-fluid mb-3" style="height:40px;" alt="">

                            @endif     

                            <input type="file" class="form-control" name="image">
                        </div>
                        
                        <div class="col-md-12 form-group">

                            <label class="label-control"> Title*</label>
                            <input type="text" class="form-control"  placeholder="Enter Title" name="title" id="title" value="{!! $invest->title ?? null !!}" required>
                        </div>

                        
                        <div class="col-md-12 form-group">

                            <label class="label-control">content*</label>
                            <textarea class="form-control" name="content" id="content" rows="4" cols="4">{{ $invest->content}}</textarea>
                            
                        </div>
                        
                        <div class="col-md-6 form-group">

                            <label class="label-control"> Button Name*</label>
                            <input type="text" class="form-control"  placeholder="Enter Button Name" name="button_name" id="button_name" value="{!! $invest->button_name ?? null !!}" required>
                        </div>

                        <div class="col-md-6 form-group">

                            <label class="label-control"> Button Link*</label>

                            <input type="text" class="form-control" placeholder="Enter Button Link" name="button_link" id="button_link" value="{{ $invest->button_link ?? null }}" required>

                        </div>

                        <div class="col-sm-12 ">

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                    
                </div>

            </form>

        </div>              

    </div>

</div>

@include('admin.footer')

<script>
CKEDITOR.replace('content', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});

</script>


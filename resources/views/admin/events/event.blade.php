@include('admin.top-header')

<div class="main-section">

    @include('admin.header')

    <div class="app-content content container-fluid">

        <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">

            <div class="breadcrumb-wrapper">

                <ol class="breadcrumb bg-transparent mb-0">

                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

                    <li class="breadcrumb-item">Pages</li>

                    <li class="breadcrumb-item active">Manage Event Content</li>

                </ol>
            </div>
        </div>
        <div class="border p-3">

            <form method="post" action="{{ route('admin.contentStore') }}" enctype="multipart/form-data">

                @csrf

                <div class="form-body">
                    <div class="row">

                        <div class="col-md-6 form-group">
                            <label class="label-control">Feature Title 1 *</label>
                            <input type="text" class="form-control" placeholder="Enter Meta Keywords" name="feature_title1" id="meta_keywords" value="{{ $join->feature_title1 ?? null }}" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="label-control">Feature Title 2 *</label>
                            <input type="text" class="form-control" placeholder="Enter Meta Keywords" name="feature_title2" id="meta_keywords" value="{{ $join->feature_title2 ?? null }}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="label-control">Button Name *</label>
                            <input type="text" class="form-control" placeholder="Enter Meta Keywords" name="button_name1" id="meta_keywords" value="{{ $join->button_name1 ?? null }}" required>
                        </div>
                    
                        <div class="col-md-12 form-group">
                            <label class="label-control d-block">Banner Image *</label>
                            @if ($join->banner_img!=null)
                            <img src="{{ URL::asset('storage/events/' . $join->banner_img) }}" class="img-fluid mb-3" style="height:100px;" alt="Image">
                            @endif
                            <input type="file" class="form-control" name="banner_img">
                        </div>

                    </div>

                    <div class="col-sm-12 ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>

        </div>

    </div>

</div>

@include('admin.footer')

<script>
    CKEDITOR.replace('content1', {

        filebrowserUploadUrl: "{{ route('admin.image-upload', ['_token' => csrf_token()]) }}",

        filebrowserUploadMethod: 'form'

    });

    CKEDITOR.replace('feature_description1', {
        extraAllowedContent: 'h1 span',
        allowedContent: true,
    });
</script>
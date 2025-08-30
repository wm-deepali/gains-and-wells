@include('admin.top-header')

<div class="main-section">

    @include('admin.header')

    <div class="app-content content container-fluid">

        <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">

            <div class="breadcrumb-wrapper">

                <ol class="breadcrumb bg-transparent mb-0">

                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>

                    <li class="breadcrumb-item">Faqs</li>

                    <li class="breadcrumb-item active">Manage Faqs Detail Page Content</li>

                </ol>
            </div>
        </div>
        <div class="border p-3">

            <form method="post" action="{{ route('admin.manage-pages.detail-content-store') }}" enctype="multipart/form-data">

                @csrf

                <div class="form-body">

                    <div class="row">

                        <div class="col-md-12 form-group">

                            <label class="label-control d-block">Banner Image</label>

                            @if (isset($invest) && $invest->banner_image != null)

                            <img src="{{ URL::asset('storage/faq/' . $invest->banner_image) }}" class="img-fluid mb-3" style="height:40px;" alt="">

                            @endif

                            <input type="file" class="form-control" name="banner_image">
                        </div>

                        <div class="col-md-12 form-group">
                            <label class="label-control d-block">Banner Content</label>
                            <textarea id="banner_content" name="banner_content" class="form-control" rows="4" cols="5">{{ $invest->banner_content ?? null}}</textarea>
                        </div>

                        <div class="col-md-12 form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="label-control">Feature Title 1 *</label>
                                    <input type="text" class="form-control" placeholder="Enter Feature Title 1" name="feature_title1" id="meta_keywords" value="{{ $invest->feature_title1 ?? null }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="label-control">Feature Title 2 *</label>
                                    <input type="text" class="form-control" placeholder="EnterFeature Title 2" name="feature_title2" id="meta_keywords" value="{{ $invest->feature_title2 ?? null }}" required>
                                </div>
                            </div>
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
    CKEDITOR.replace('content1', {

        filebrowserUploadUrl: "{{ route('admin.image-upload', ['_token' => csrf_token()]) }}",

        filebrowserUploadMethod: 'form'

    });


    CKEDITOR.replace('banner_content', {
        extraAllowedContent: 'h1 span',
        allowedContent: true,
    });

    CKEDITOR.replace('description', {
        extraAllowedContent: 'h1 span',
        allowedContent: true,
    });

    CKEDITOR.replace('content', {
        extraAllowedContent: 'h1 span',
        allowedContent: true,
    });

    CKEDITOR.replace('scan_content', {
        extraAllowedContent: 'h1 span',
        allowedContent: true,
    });
</script>
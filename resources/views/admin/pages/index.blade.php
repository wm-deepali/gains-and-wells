@include('admin.top-header')
<div class="main-section">
@include('admin.header')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Setting</li>
                        <li class="breadcrumb-item active">Pages</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    <a href="javascript:void(0)" class="add-page text-dark"><i class="fa fa-plus"></i> Add </a>
                    <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="for_all">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Date &amp; Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                    @php $i=1; @endphp
                    @if (isset($pages) && count($pages) > 0)
       
                    @foreach ($pages as $page)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $page->title }}</td>
                            <td>{{ $page->slug }}</td>
                            <td>{{ $page->created_at }}</td>
                           
                            <td class="text-truncate">
                                 @if($page->slug != "default")
                                <a href="javascript:void(0)" class="edit-page text-dark mr-2" page_id="{{ $page->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation({{ $page->id }})" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<div id="page-modal" class="modal fade" role="dialog"></div>
@include('admin.footer')
<script>
    function deleteConfirmation(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: `{{ URL::to('admin/manage-pages/${id}') }}`,
                    type: "DELETE",
                    dataType: "json",
                    success: function(result) {
                        if (result.success) {
                            Swal.fire(
                                'Deleted!',
                                'success'
                            );
                            setTimeout(function() {
                                location.reload();
                            }, 400);
                        } else {
                            Swal.fire(result.msgText);
                        }
                    }
                });

            }
        })
    };
    $(document).ready(function() {
        $(document).on("click", ".add-page", function(event) {
            $.ajax({
                url: "{{ URL::to('admin/manage-pages/create') }}",
                type: "GET",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#page-modal").html(result.html);
                        $("#page-modal").modal('show');
                    } else {

                    }
                }
            });
        });

        $(document).on("click", ".edit-page", function(event) {
            let id = $(this).attr('page_id');
            $.ajax({
                url: `{{ URL::to('admin/manage-pages/${id}/edit') }}`,
                type: "get",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#page-modal").html(result.html);
                        $("#page-modal").modal('show');
                    } else {
                        toastr.error('error encountered ' + result.msgText);
                    }
                },
                error: function(error) {
                    toastr.error('error encountered ' + error.statusText);
                }
            });
        });
    });
    $(document).ready(function() {
        $(document).on('keyup', "#title", function(event) {
        let title = $(this).val();
        let url = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        $("#slug").val(url);
        })
    });
</script>

@include('admin.top-header')
<div class="main-section">
@include('admin.header')
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Settings</li>
                        <li class="breadcrumb-item active">Cities</li>
                    </ol>
                </div>
                <div class="add-back ml-auto mr-2">
                    <a href="javascript:void(0)" class="add-city text-dark"><i class="fa fa-plus"></i> Add </a>
                    <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="for_all">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @php $i=1; @endphp
                        @if (isset($cities) && count($cities) > 0)
                        @foreach ($cities as $city)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $city->state->name }}</td>
                            <td>{{ $city->name }}</td>
                            
                            <td class="text-truncate">
                                <a href="javascript:void(0)" class="edit-city text-dark mr-2" city_id="{{ $city->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation({{ $city->id }})" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
<div id="city-modal" class="modal fade" role="dialog"></div>
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
                    url: `{{ URL::to('admin/manage-city/${id}') }}`,
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
        $(document).on("click", ".add-city", function(event) {
            $.ajax({
                url: "{{ URL::to('admin/manage-city/create') }}",
                type: "GET",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#city-modal").html(result.html);
                        $("#city-modal").modal('show');
                    } else {

                    }
                }
            });
        });

        $(document).on("click", ".edit-city", function(event) {
            let id = $(this).attr('city_id');
            $.ajax({
                url: `{{ URL::to('admin/manage-city/${id}/edit') }}`,
                type: "get",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#city-modal").html(result.html);
                        $("#city-modal").modal('show');
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
</script>

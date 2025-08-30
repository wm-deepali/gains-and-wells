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
<li class="breadcrumb-item active">Contact deatils 
</li>
</ol>
</div>
<div class="add-back ml-auto mr-2">

<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>

<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
        <tr>
                
                 <th>S.N.</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                   <th>Mobile</th>
                 <th>Email</th>
                 <th>Message</th>
                <th>Action</th>
        </tr>
</thead>
<tbody> @php $i=1; @endphp
       
       
        @foreach ($offerdeatils as $business)
        <tr>
            <td>{{ $i++ }}</td>
           <td> {{ $business->first_name  }} </td>
         <td>{{ $business->last_name  }}</td>
            <td>  {{ $business->mobile_number  }}</td>
            <td>  {{ $business->email  }}</td>
             <td>  {{ $business->message  }}</td>
            <td class="text-truncate">
               
                <a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation({{ $business->id }})" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    
</tbody>
</table>

</div>
</div>
</div>
</div>
<div id="state-modal" class="modal fade" role="dialog"></div>
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
                    url: `{{ URL::to('admin/manage-offers/${id}') }}`,
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
       
        $(document).on("click", ".add-state", function(event) {
            
            $.ajax({
                url: "{{ URL::to('admin/manage-offers/create') }}",
                type: "GET",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#state-modal").html(result.html);
                        $("#state-modal").modal('show');
                    } else {

                    }
                }
            });
        });

        $(document).on("click", ".edit-state", function(event) {
            let id = $(this).attr('state_id');
            $.ajax({
                url: `{{ URL::to('admin/manage-offers/${id}/edit') }}`,
                type: "get",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#state-modal").html(result.html);
                        $("#state-modal").modal('show');
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

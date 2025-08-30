@include('admin.top-header')
<div class="main-section">
@include('admin.header')
<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Career Inquiries</li>
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
<th>Date &amp; Time</th>
<th>Post Applied for</th>
<th>Candidate Name</th>
<th>Email</th>
<th>Mobile number</th>
<th>Total Experience</th>
<th>Gender</th>
<th>Status</th>
<th>Picture</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@if (isset($inquiries) && count($inquiries) > 0)
@foreach ($inquiries as $inquiry)
<tr>
    <td>{{ $inquiry->created_at }}</td>
    <td>{{ $inquiry->designation->title ?? '' }}</td>
    <td>{{ $inquiry->name }}</td>
    <td>{{ $inquiry->email }}</td>
    <td>{{ $inquiry->mobile }}</td>
    <td>{{ $inquiry->experience }}</td>
    <td>{{ $inquiry->gender }}</td>
    <td>{{ $inquiry->status }}</td>
    <td>
        @if (($inquiry->profile_pic)!=null)
        <img src="{{ URL::asset('storage/career/profile/' . $inquiry->profile_pic) }}" class="img-fluid" style="height:50px;">
        @else
        NA
        @endif
    </td>
    <td class="text-truncate">
        <a href="{{ URL::asset('storage/career/resume/' . $inquiry->resume) }}" downlaod title="Download"><i class="fa fa-download" aria-hidden="true"></i></a>
        <a href="javascript:void(0)" onclick="deleteConfirmation({{ $inquiry->id }})" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>     
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
                    url: `{{ URL::to('admin/manage-career-inquiries/${id}') }}`,
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
</script>

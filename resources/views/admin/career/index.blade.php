@include('admin.top-header')
<div class="main-section">
@include('admin.header')
<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Career</li>
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
<th>Heading</th>
<th>Image</th>
<th>Content</th>
<th>Button Name</th>
<th>Button Link</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@if (isset($career))

<tr>
    <td>{{ $career->created_at }}</td>
    <td>@php echo $career->heading; @endphp</td>
    <td>@if (($career->image)!=null)
        <img src="{{ URL::asset('storage/career/' . $career->image) }}" class="img-fluid" style="height:50px;">
        @else
        NA
        @endif</td>
    <td>@php echo $career->content; @endphp</td>
    <td>{{ $career->button_name }}</td>
    <td>{{ $career->button_link }}</td>
    
    <td class="text-truncate">
      <a href="javascript:void(0)" class="edit-career text-dark mr-2" career_id=" @if(isset($career->id)) {{ $career->id }} @endif" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>    
    </td>
</tr>

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
     $(document).ready(function() {
       

        $(document).on("click", ".edit-career", function(event) {
            let id = $(this).attr('career_id'); 
            $.ajax({
                url: `{{ URL::to('admin/manage-career/edit/${id}') }}`,
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

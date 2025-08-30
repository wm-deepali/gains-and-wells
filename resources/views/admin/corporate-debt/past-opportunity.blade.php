@include('admin.top-header')
<div class="main-section">
@include('admin.header')
    <div class="app-content content container-fluid">
        <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb bg-transparent mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Manage Past Opportunity</li>
                </ol>
            </div>

            <div class="add-back ml-auto mr-2">
                <a href="javascript:void(0)" class="add-category btn text-dark"><i class="fa fa-plus"></i> Add </a>
                <a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="for_all">
                    <thead>
                        <tr>
                            <th>Date &amp; Time</th> 
                            <th>Page</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Heading</th>
                            <th>Percentage</th>
                            <th>Months</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($join) && count($join) > 0)
                        @foreach ($join as $getCategory)
                        <tr>
                            <td>{{ $getCategory->created_at }}</td>
                            <td>{{ ucfirst($getCategory->page)}}</td>
                            <td>
                                @if (($getCategory->image)!=null)
                                <img src="{{ URL::asset('storage/startup/' . $getCategory->image) }}" class="img-fluid" style="height:50px;">
                                @else
                                NA
                                @endif
                            </td>
                            <td>{{ $getCategory->title }}</td>
                            <td>{{ $getCategory->heading }}</td>
                            <td>{{ $getCategory->percentage }}</td>
                            <td>{{ $getCategory->months }}</td>
                            <td>@php echo $getCategory->content; @endphp</td>
                            <td>{{ ucfirst($getCategory->status) }}</td>
                            <td class="text-truncate">
                            <a href="javascript:void(0)" class="edit-category text-dark mr-2" category_id="{{ $getCategory->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="javascript:void(0)" onclick="deleteConfirmation({{ $getCategory->id }})" title="Delete" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="offer-modal" class="modal fade" role="dialog"></div>
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
url: `{{ URL::to('admin/manage-past-opportunity/delete-opportunity/${id}') }}`,
type: "POST",
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


$(document).ready(function(event) {
$(document).on('keyup', "#title", function(event) {

let name = $(this).val();

let url = name.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');

$("#slug").val(url);

})

$(document).on("click", ".add-category", function(event) { 
$.ajax({
url: "{{ URL::to('admin/manage-past-opportunity/create-opportunity') }}",
type: "GET",
dataType: "json",
success: function(result) {
if (result.success) {
$("#offer-modal").html(result.html);
$("#offer-modal").modal('show');
} else {

}
}
});
});


$(document).on("click", ".edit-category", function(event) {
let id = $(this).attr('category_id');
$.ajax({
url: `{{ URL::to('admin/manage-past-opportunity/edit-opportunity/${id}') }}`,
type: "get",
dataType: "json",
success: function(result) {
if (result.success) {
$("#offer-modal").html(result.html);
$("#offer-modal").modal('show');
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

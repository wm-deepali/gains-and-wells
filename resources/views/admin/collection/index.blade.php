@include('admin.top-header')
<div class="main-section">
@include('admin.header')
<div class="app-content content container-fluid">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item">Packages</li>
<li class="breadcrumb-item active">Manage Collection</li>
</ol>
</div>

<div class="add-back ml-auto mr-2">
<a href="javascript:void(0)" class="add-brand btn text-dark"><i class="fa fa-plus"></i> Add </a>
<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>
<div class="content-wrapper">
<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
<tr>
<!-- <th>Date &amp; Time</th> -->
<th>Name</th>
<!-- <th>Code</th> -->
<!-- <th>URL</th> -->
<th>Image</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@if (isset($amenities) && count($amenities) > 0)
@foreach ($amenities as $brand)
<tr>
<!-- <td>{{ $brand->created_at }}</td> -->
<td>{{ $brand->name }}</td>
<!-- <td>{{ $brand->code }}</td> -->
<!-- <td>{{ $brand->url }}</td> -->
<td>
@if ($brand->image!=null)
<a href="javascript:void(0)" class="view-image" brand_id="{{ $brand->id }}">
<img src="{{ URL::asset('storage/collections/' . $brand->image) }}" height="50" width="50">
</a>
@else
NA
@endif
</td>
<td>{{ $brand->status }}</td>
<td class="text-truncate">
<a href="javascript:void(0)" class="edit-brand text-dark mr-2" brand_id="{{ $brand->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="javascript:void(0)" onclick="deleteConfirmation({{ $brand->id }})" title="Delete" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>

</td>
</tr>
@endforeach
@endif
</tbody>
</table>
</div>

</div>
</div>
<div id="brand-modal" class="modal fade" role="dialog">
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
url: `{{ URL::to('admin/manage-collection/${id}') }}`,
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


$(document).ready(function(event) {


$(document).on("click", ".add-brand", function(event) { 
$.ajax({
url: "{{ URL::to('admin/manage-collection/create') }}",
type: "GET",
dataType: "json",
success: function(result) {
if (result.success) {
$("#brand-modal").html(result.html);
$("#brand-modal").modal('show');
} else {

}
}
});
});


$(document).on("click", ".add-brand-btn", function(event) {
$(this).attr('disabled', true);
$('#name-err').html('');
$('#image-err').html('');
$('#status-err').html('');
let formData = new FormData();
formData.append('name', $('#name').val());
formData.append('status', $('#status').val());
formData.append('image', (typeof $('#image')[0].files[0] == 'undefined') ? '' : $('#image')[0].files[0]);
$.ajax({
url: "{{ URL::to('admin/manage-collection') }}",
type: 'POST',
processData: false,
contentType: false,
dataType: 'json',
data: formData,
context: this,
success: function(result) {
if (result.success) {
location.reload();
} else {
$(this).attr('disabled', false);
if (result.code == 422) {
for (const key in result.errors) {
$(`#${key}-err`).html(result.errors[key][0]);
}
} else {
console.log(result);
}
}
}
});
});

$(document).on("click", ".edit-brand", function(event) {
let id = $(this).attr('brand_id');
$.ajax({
url: `{{ URL::to('admin/manage-collection/${id}/edit') }}`,
type: "get",
dataType: "json",
success: function(result) {
if (result.success) {
$("#brand-modal").html(result.html);
$("#brand-modal").modal('show');
} else {
toastr.error('error encountered ' + result.msgText);
}
},
error: function(error) {
toastr.error('error encountered ' + error.statusText);
}
});
});

$(document).on("click", "#update-brand-btn", function(event) {
for (instance in CKEDITOR.instances) {
CKEDITOR.instances[instance].updateElement();
}
$(this).attr('disabled', true);
$('#name-err').html('');
$('#image-err').html('');
$('#status-err').html('');
let formData = new FormData();
formData.append('_method', 'PUT');
formData.append('name', $('#name').val());
formData.append('status', $('#status').val());
formData.append('image', (typeof $('#image')[0].files[0] == 'undefined') ? '' : $('#image')[0].files[0]);
let brand_id = $(this).attr('brand_id');
$.ajax({
url: `{{ URL::to('admin/manage-collection/${brand_id}') }}`,
type: 'POST',
processData: false,
contentType: false,
dataType: 'json',
data: formData,
context: this,
success: function(result) {
if (result.success) {
location.reload();
} else {
$(this).attr('disabled', false);
if (result.code == 422) {
for (const key in result.errors) {
$(`#${key}-err`).html(result.errors[key][0]);
}
} else {
console.log(result);
}
}
}
});
});


});
</script>

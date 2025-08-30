@include('admin.top-header')
<div class="main-section">
@include('admin.header')
<div class="app-content content container-fluid">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item">Designation</li>
</ol>
</div>

<div class="add-back ml-auto mr-2">
<a href="javascript:void(0)" class="add-designation btn text-dark"><i class="fa fa-plus"></i> Add </a>
<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>
<div class="content-wrapper">
<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
<tr>
<th>Title</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@if (isset($designations) && count($designations) > 0)
@foreach ($designations as $designation)
<tr>
<td>{{ $designation->title }}</td>
<td>{{ $designation->status }}</td>
<td class="text-truncate">
<a href="javascript:void(0)" class="edit-designation text-dark mr-2" designation_id="{{ $designation->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="javascript:void(0)" onclick="deleteConfirmation({{ $designation->id }})" title="Delete" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>

</td>
</tr>
@endforeach
@endif
</tbody>
</table>

</div>

</div>
</div>
<div id="designation-modal" class="modal fade" role="dialog">
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
url: `{{ URL::to('admin/manage-designations/${id}') }}`,
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
$(document).on("click", ".add-designation", function(event) { 
$.ajax({
url: "{{ URL::to('admin/manage-designations/create') }}",
type: "GET",
dataType: "json",
success: function(result) {
if (result.success) {
$("#designation-modal").html(result.html);
$("#designation-modal").modal('show');
} else {

}
}
});
});


$(document).on("click", ".add-designation-btn", function(event) {
$(this).attr('disabled', true);
$('#title-err').html('');
$('#status-err').html('');
let formData = new FormData();
formData.append('title', $('#title').val());
formData.append('status', $('#status').val());
$.ajax({
url: "{{ URL::to('admin/manage-designations') }}",
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

$(document).on("click", ".edit-designation", function(event) {
let id = $(this).attr('designation_id');
$.ajax({
url: `{{ URL::to('admin/manage-designations/${id}/edit') }}`,
type: "get",
dataType: "json",
success: function(result) {
if (result.success) {
$("#designation-modal").html(result.html);
$("#designation-modal").modal('show');
} else {
toastr.error('error encountered ' + result.msgText);
}
},
error: function(error) {
toastr.error('error encountered ' + error.statusText);
}
});
});

$(document).on("click", "#update-designation-btn", function(event) {
$(this).attr('disabled', true);
$('#title-err').html('');
$('#status-err').html('');
let formData = new FormData();
formData.append('_method', 'PUT');
formData.append('title', $('#title').val());
formData.append('status', $('#status').val());
let designation_id = $(this).attr('designation_id');
$.ajax({
type: 'POST',
url: `{{ URL::to('admin/manage-designations/${designation_id}') }}`,
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
console.log(error);
}
}
}
});
});
});
</script>

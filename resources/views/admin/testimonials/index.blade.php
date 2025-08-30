@include('admin.top-header')
<div class="main-section">
@include('admin.header')
<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item active">Manage Testimonial
</li>
</ol>
</div>
<div class="add-back ml-auto mr-2">
<a href="javascript:void(0)" class="add-testimonial btn text-dark"><i class="fa fa-plus"></i> Add </a>
<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>

<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
<tr>
<th>Name</th>
<th>Content</th>
<th>Designation</th>
<!--<th>Project</th>-->
<th>Image</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@if (isset($testimonials) && count($testimonials) > 0)
@foreach ($testimonials as $testimonial)
<tr>
<td>{{ $testimonial->name }}</td>
<td>@php echo $testimonial->contents; @endphp</td>
<!--<td>{{ $testimonial->project }}</td>-->
<td>{{ $testimonial->designation }}</td>
<td>
@if (($testimonial->image)!=null)
<img src="{{ URL::asset('storage/testimonials/' . $testimonial->image) }}" class="img-fluid" style="height:50px;">
@else
NA
@endif
</td>
<td>{{ $testimonial->status }}</td>
<td class="text-truncate">

<a href="javascript:void(0)" class="edit-testimonial text-dark mr-2" testimonial_id="{{ $testimonial->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation({{ $testimonial->id }})" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
</tr>
@endforeach
@endif
</tbody>
</table>

</div>


</div>
</div>
<div id="testimonial-modal" class="modal fade" role="dialog">
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
url: `{{ URL::to('admin/manage-testimonial/${id}') }}`,
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

$(document).on("click", ".add-testimonial", function(event) {
$.ajax({
url: "{{ URL::to('admin/manage-testimonial/create') }}",
type: "GET",
dataType: "json",
success: function(result) {
if (result.success) {
$("#testimonial-modal").html(result.html);
$("#testimonial-modal").modal('show');
} else {

}
}
});
});

$(document).on("click", "#add-testimonial-btn", function(event) {
for (instance in CKEDITOR.instances) {
CKEDITOR.instances[instance].updateElement();
}
$(this).attr('disabled', true);
$('#name-err').html('');
$('#project-err').html('');
$('#designation-err').html('');
$('#contents-err').html('');
$('#image-err').html('');
$('#status-err').html('');
let formData = new FormData();
formData.append('name', $('#name').val());
formData.append('project', $('#project').val());
formData.append('designation', $('#designation').val());
formData.append('contents', $('#contents').val());
formData.append('status', $('#status').val());
formData.append('image', (typeof $('#image')[0].files[0] == 'undefined') ? '' : $('#image')[0].files[0]);
$.ajax({
url: "{{ URL::to('admin/manage-testimonial') }}",
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

$(document).on("click", ".edit-testimonial", function(event) {
let id = $(this).attr('testimonial_id');
$.ajax({
url: `{{ URL::to('admin/manage-testimonial/${id}/edit') }}`,
type: "get",
dataType: "json",
success: function(result) {
if (result.success) {
$("#testimonial-modal").html(result.html);
$("#testimonial-modal").modal('show');
} else {
toastr.error('error encountered ' + result.msgText);
}
},
error: function(error) {
toastr.error('error encountered ' + error.statusText);
}
});
});

$(document).on("click", "#update-testimonial-btn", function(event) {
for (instance in CKEDITOR.instances) {
CKEDITOR.instances[instance].updateElement();
}
$(this).attr('disabled', true);
$('#name-err').html('');
$('#project-err').html('');
$('#designation-err').html('');
$('#contents-err').html('');
$('#image-err').html('');
$('#status-err').html('');
let formData = new FormData();
formData.append('_method', 'PUT');
formData.append('name', $('#name').val());
formData.append('project', $('#project').val());
formData.append('designation', $('#designation').val());
formData.append('contents', $('#contents').val());
formData.append('status', $('#status').val());
formData.append('image', (typeof $('#image')[0].files[0] == 'undefined') ? '' : $('#image')[0].files[0]);
let testimonial_id = $(this).attr('testimonial_id');
$.ajax({
url: `{{ URL::to('admin/manage-testimonial/${testimonial_id}') }}`,
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

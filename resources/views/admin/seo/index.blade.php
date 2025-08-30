@include('admin.top-header')
<div class="main-section">
@include('admin.header')
<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item">Seo Meta</li>
<li class="breadcrumb-item active">Manage Page Seo Meta
</li>
</ol>
</div>
<div class="add-back ml-auto mr-2">
<a href="javascript:void(0)" class="add-seo btn text-dark"><i class="fa fa-plus"></i> Add </a>
<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>

<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
<tr>
<th>Date &amp; Time</th>
<th>Page</th>
<th>Meta Title</th>
<th>Meta Keywords</th>
<th>Meta Description</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@if (isset($pages) && count($pages) > 0)
@foreach ($pages as $page)
<tr>
<td>{{ $page->created_at }}</td>
<td>{{ $page->page->title ?? "" }}</td>
<td>{{ $page->meta_title }}</td>
<td>{{ $page->meta_keyword }}</td>
<td>{{ $page->meta_description }}</td>
<td class="text-truncate">
<a href="javascript:void(0)" class="edit-seo text-dark mr-2" seo_id="{{ $page->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<!--a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation({{ $page->id }})" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a-->
</td>
</tr>
@endforeach
@endif
</tbody>
</table>


</div>


</div>
</div>
<div id="seo-modal" class="modal fade" role="dialog">
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
url: `{{ URL::to('admin/manage-page-seo/${id}') }}`,
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

$(document).on("click", ".add-seo", function(event) {
$.ajax({
url: "{{ URL::to('admin/manage-page-seo/create') }}",
type: "GET",
dataType: "json",
success: function(result) {
if (result.success) {
$("#seo-modal").html(result.html);
$("#seo-modal").modal('show');
} else {

}
}
});
});

$(document).on("click", "#add-seo-btn", function(event) {
$(this).attr('disabled', true);
$('#page_slug-err').html('');
$('#meta_title-err').html('');
$('#meta_keyword-err').html('');
$('#meta_description-err').html('');
let formData = new FormData();
formData.append('page_slug', $('#page_slug').val());
formData.append('meta_title', $('#meta_title').val());
formData.append('meta_keyword', $('#meta_keyword').val());
formData.append('meta_description', $('#meta_description').val());
formData.append('scripts_text', $('#scripts_text').val());
$.ajax({
url: "{{ URL::to('admin/manage-page-seo') }}",
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

$(document).on("click", ".edit-seo", function(event) {
let id = $(this).attr('seo_id');
$.ajax({
url: `{{ URL::to('admin/manage-page-seo/${id}/edit') }}`,
type: "get",
dataType: "json",
success: function(result) {
if (result.success) {
$("#seo-modal").html(result.html);
$("#seo-modal").modal('show');
} else {
toastr.error('error encountered ' + result.msgText);
}
},
error: function(error) {
toastr.error('error encountered ' + error.statusText);
}
});
});

$(document).on("click", "#update-seo-btn", function(event) {
$('#page_slug-err').html('');
$('#meta_title-err').html('');
$('#meta_keyword-err').html('');
$('#meta_description-err').html('');
let formData = new FormData();
formData.append('_method', 'PUT');
formData.append('page_slug', $('#page_slug').val());
formData.append('meta_title', $('#meta_title').val());
formData.append('meta_keyword', $('#meta_keyword').val());
formData.append('meta_description', $('#meta_description').val());
formData.append('scripts_text', $('#scripts_text').val());
let seo_id = $(this).attr('seo_id');
$.ajax({
url: `{{ URL::to('admin/manage-page-seo/${seo_id}') }}`,
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

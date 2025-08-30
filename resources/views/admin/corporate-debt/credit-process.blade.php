@include('admin.top-header')
<div class="main-section">
@include('admin.header')
    <div class="app-content content container-fluid">
        <div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb bg-transparent mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Coporate Debt</li>
                    <li class="breadcrumb-item active">Manage Credit Assessment Process</li>
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
                            <th>Title</th>
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
                            <td>{{ ucfirst($getCategory->type)}}</td>
                            
                            <td>{{ $getCategory->title }}</td>
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
url: `{{ URL::to('admin/manage-corporate-debt/credit-assessment-process/delete-credit-process/${id}') }}`,
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
url: "{{ URL::to('admin/manage-corporate-debt/credit-assessment-process/create') }}",
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
url: `{{ URL::to('admin/manage-corporate-debt/credit-assessment-process/edit-credit-process/${id}') }}`,
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

$(document).on("click", "#update-category-btn", function(event) {
for (instance in CKEDITOR.instances) {
CKEDITOR.instances[instance].updateElement();
}
$(this).attr('disabled', true);
$('#heading-err').html('');
$('#title-err').html('');
$('#slug-err').html('');
$('#content-err').html('');
$('#button_name-err').html('');
$('#button_link-err').html('');
$('#status-err').html('');
let formData = new FormData();
formData.append('_method', 'PUT');
formData.append('heading', $('#heading').val());
formData.append('title', $('#title').val());
formData.append('slug', $('#slug').val());
formData.append('content', $('#content').val());
formData.append('button_name', $('#button_name').val());
formData.append('button_link', $('#button_link').val());
formData.append('status', $('#status').val());
let category_id = $(this).attr('category_id');
$.ajax({
url: `{{ URL::to('admin/manage-join-category/${category_id}') }}`,
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

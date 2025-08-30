@include('admin.top-header')
<div class="main-section">
@include('admin.header')
<div class="app-content content container-fluid">

<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item">Faqs</li>
<li class="breadcrumb-item active">Details
</li>
</ol>
</div>
<div class="add-back ml-auto mr-2">
<a href="javascript:void(0)" class="add-faq btn text-dark"><i class="fa fa-plus"></i> Add </a>
<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>
<div class="content-wrapper">
<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
<tr>
<!-- <th>Date &amp; Time</th> -->
<th>S.N.</th>
<th>Category</th>
<th>Question</th>
<th>Answer</th>
<!--<th>Home Visible</th>-->
<!--<th>FAQ Visible</th>-->
<th>Action</th>
</tr>
</thead>
<tbody>
@php $count=1; @endphp
@if (isset($faqs) && count($faqs) > 0)
@foreach ($faqs as $faq)
<tr>
<!-- <td>{{ $faq->created_at }}</td> -->
<td>{{ $count++ }}</td>
<td>
    @if($faq->is_default === 'yes')
        Default
    @else
        {{ $faq->page->title ?? 'Not selected' }}
    @endif
</td>

<td>{{ $faq->question }}</td>
<td>@php echo $faq->answer; @endphp</td>
<!--<td>{{ $faq->isHome }}</td>-->
<!--<td>{{ $faq->isFaq }}</td>-->
<td class="text-truncate">
<a href="javascript:void(0)" class="edit-faq text-dark mr-2" faq_id="{{ $faq->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="javascript:void(0)" onclick="deleteConfirmation({{ $faq->id }})" title="Delete" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
</tr>
@endforeach
@endif
</tbody>
</table>
</div>

</div>
</div>
<div id="faq-modal" class="modal fade" role="dialog">
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
url: `{{ URL::to('admin/manage-faq/${id}') }}`,
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
$(document).on("click", ".add-faq", function(event) {
$.ajax({
url: "{{ URL::to('admin/manage-faq/create') }}",
type: "GET",
dataType: "json",
success: function(result) {
if (result.success) {
$("#faq-modal").html(result.html);
$("#faq-modal").modal('show');
} else {

}
}
});
});

$(document).on("click", ".edit-faq", function(event) {
let id = $(this).attr('faq_id');
$.ajax({
url: `{{ URL::to('admin/manage-faq/${id}/edit') }}`,
type: "get",
dataType: "json",
success: function(result) {
if (result.success) {
$("#faq-modal").html(result.html);
$("#faq-modal").modal('show');
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

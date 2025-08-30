@include('admin.top-header')
<div class="main-section">
@include('admin.header')
<div class="app-content content container-fluid">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item">Settings</li>
<li class="breadcrumb-item active">Manage Settings</li>
</ol>
</div>


</div>
<div class="content-wrapper">
<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all" style="width:100%;">
<thead>
<tr>
<th>Date &amp; Time</th> 
<th>Convenience Fee(%)</th>
<th>GST(%)</th>
<th>Bank Name</th>
<th>Account Name</th>
<th>Account Type</th>
<th>Account Number</th>
<th>IFSC Code</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>{{ $setting->created_at }}</td>
<td>{{ $setting->convenience_fee }}</td>
<td>{{ $setting->gst }}</td>
<td>{{ $setting->bank_name }}</td>
<td>{{ $setting->account_name }}</td>
<td>{{ $setting->account_type }}</td>
<td>{{ $setting->account_number }}</td>
<td>{{ $setting->ifsc_code }}</td>
<td class="text-truncate">
<a href="javascript:void(0)" class="edit-setting text-dark mr-2" setting_id="{{ $setting->id }}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
</td>
</tr>
</tbody>
</table>
</div>

</div>
</div>
<div id="setting-modal" class="modal fade" role="dialog">
</div>
</div>
@include('admin.footer')
<script>


$(document).ready(function(event) {
$(document).on("click", ".edit-setting", function(event) {
let id = $(this).attr('setting_id');
$.ajax({
url: `{{ URL::to('admin/manage-fee-gst/${id}/edit') }}`,
type: "get",
dataType: "json",
success: function(result) {
if (result.success) {
$("#setting-modal").html(result.html);
$("#setting-modal").modal('show');
} else {
toastr.error('error encountered ' + result.msgText);
}
},
error: function(error) {
toastr.error('error encountered ' + error.statusText);
}
});
});

$(document).on("click", "#update-setting-btn", function(event) {
$(this).attr('disabled', true);
$('#convenience_fee-err').html('');
$('#gst-err').html('');
$('#bank_name-err').html('');
$('#account_name-err').html('');
$('#account_type-err').html('');
$('#account_number-err').html('');
$('#ifsc_code-err').html('');
let formData = new FormData();
formData.append('_method', 'PUT');
formData.append('convenience_fee', $('#convenience_fee').val());
formData.append('gst', $('#gst').val());
formData.append('bank_name', $('#bank_name').val());
formData.append('account_name', $('#account_name').val());
formData.append('account_type', $('#account_type').val());
formData.append('account_number', $('#account_number').val());
formData.append('ifsc_code', $('#ifsc_code').val());
let setting_id = $(this).attr('setting_id');
$.ajax({
url: `{{ URL::to('admin/manage-fee-gst/${setting_id}') }}`,
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

<?php echo $__env->make('admin.top-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main-section">
<?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="app-content content container-fluid">

<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
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
<?php $count=1; ?>
<?php if(isset($faqs) && count($faqs) > 0): ?>
<?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<!-- <td><?php echo e($faq->created_at); ?></td> -->
<td><?php echo e($count++); ?></td>
<td>
    <?php if($faq->is_default === 'yes'): ?>
        Default
    <?php else: ?>
        <?php echo e($faq->page->title ?? 'Not selected'); ?>

    <?php endif; ?>
</td>

<td><?php echo e($faq->question); ?></td>
<td><?php echo $faq->answer; ?></td>
<!--<td><?php echo e($faq->isHome); ?></td>-->
<!--<td><?php echo e($faq->isFaq); ?></td>-->
<td class="text-truncate">
<a href="javascript:void(0)" class="edit-faq text-dark mr-2" faq_id="<?php echo e($faq->id); ?>" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="javascript:void(0)" onclick="deleteConfirmation(<?php echo e($faq->id); ?>)" title="Delete" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</tbody>
</table>
</div>

</div>
</div>
<div id="faq-modal" class="modal fade" role="dialog">
</div>
</div>
<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
url: `<?php echo e(URL::to('admin/manage-faq/${id}')); ?>`,
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
url: "<?php echo e(URL::to('admin/manage-faq/create')); ?>",
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
url: `<?php echo e(URL::to('admin/manage-faq/${id}/edit')); ?>`,
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
<?php /**PATH /home/tpmhelpinghand/public_html/gains-and-well.tpmhelpinghand.com/resources/views/admin/faqs/index.blade.php ENDPATH**/ ?>
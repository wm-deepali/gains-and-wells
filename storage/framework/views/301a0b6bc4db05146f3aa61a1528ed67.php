<?php echo $__env->make('admin.top-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main-section">
<?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
<li class="breadcrumb-item">Blogs</li>
<li class="breadcrumb-item active">Manage blog
</li>
</ol>
</div>
<div class="add-back ml-auto mr-2">
<a href="javascript:void(0)" class="add-blog btn text-dark"><i class="fa fa-plus"></i> Add </a>
<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>

<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
<tr>
<th>Date &amp; Time</th>
<th>Category</th>
<th>Title</th>
<th>Publish Date</th>
<th>Image</th>
<th>Author</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php if(isset($blogs) && count($blogs) > 0): ?>
<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($blog->created_at); ?></td>
<td>
<?php
$categories = App\Models\BlogCategory::where('id', $blog->category)->first();
?>
<?php echo e($categories->name??'Not selected'); ?>

</td>

<td><?php echo e($blog->title); ?></td>
<!--<td><?php echo e($blog->url); ?></td>-->
 <td><?php echo e($blog->publish_date); ?></td>
<td>
<?php if(($blog->image)!=null): ?>
<img src="<?php echo e(URL::asset('storage/blogs/' . $blog->image)); ?>" class="img-fluid" style="height:50px;">
<?php else: ?>
NA
<?php endif; ?>
</td>
<td><?php echo e($blog->author); ?></td>
<td><?php echo e($blog->status); ?></td>
<td class="text-truncate">

<a href="javascript:void(0)" class="edit-blog text-dark mr-2" blog_id="<?php echo e($blog->id); ?>" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation(<?php echo e($blog->id); ?>)" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</tbody>
</table>


</div>


</div>
</div>
<div id="blog-modal" class="modal fade" role="dialog">
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
url: `<?php echo e(URL::to('admin/manage-blog/${id}')); ?>`,
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
$(document).on('keyup', "#title", function(event) {
let title = $(this).val();
let url = title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
$("#url").val(url);
})

$(document).on("click", ".add-blog", function(event) {
$.ajax({
url: "<?php echo e(URL::to('admin/manage-blog/create')); ?>",
type: "GET",
dataType: "json",
success: function(result) {
if (result.success) {
$("#blog-modal").html(result.html);
$("#blog-modal").modal('show');
} else {

}
}
});
});

$(document).on("click", "#add-blog-btn", function(event) {
for (instance in CKEDITOR.instances) {
CKEDITOR.instances[instance].updateElement();
}
$(this).attr('disabled', true);
$('#title-err').html('');
$('#image_alt-err').html('');
$('#category-err').html('');
$('#url-err').html('');
$('#publish_date-err').html('');
$('#image-err').html('');
$('#content-err').html('');
$('#short_description-err').html('');
$('#author-err').html('');
$('#meta_title-err').html('');
$('#meta_keyword-err').html('');
$('#meta_description-err').html('');
$('#status-err').html('');
let formData = new FormData();
formData.append('title', $('#title').val());
formData.append('image_alt', $('#image_alt').val());
formData.append('category', $('#category').val());
formData.append('url', $('#url').val());
formData.append('publish_date', $('#publish_date').val());
formData.append('short_description', $('#short_description').val());
formData.append('content', $('#content').val());
formData.append('author', $('#author').val());
formData.append('meta_title', $('#meta_title').val());
formData.append('meta_keyword', $('#meta_keyword').val());
formData.append('meta_description', $('#meta_description').val());
formData.append('status', $('#status').val());
formData.append('image', (typeof $('#image')[0].files[0] == 'undefined') ? '' : $('#image')[0].files[0]);
$.ajax({
url: "<?php echo e(URL::to('admin/manage-blog')); ?>",
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

$(document).on("click", ".edit-blog", function(event) {
let id = $(this).attr('blog_id');
$.ajax({
url: `<?php echo e(URL::to('admin/manage-blog/${id}/edit')); ?>`,
type: "get",
dataType: "json",
success: function(result) {
if (result.success) {
$("#blog-modal").html(result.html);
$("#blog-modal").modal('show');
} else {
toastr.error('error encountered ' + result.msgText);
}
},
error: function(error) {
toastr.error('error encountered ' + error.statusText);
}
});
});

$(document).on("click", "#update-blog-btn", function(event) {
for (instance in CKEDITOR.instances) {
CKEDITOR.instances[instance].updateElement();
}
$(this).attr('disabled', true);
$('#title-err').html('');
$('#image_alt-err').html('');
$('#category-err').html('');
$('#url-err').html('');
$('#publish_date-err').html('');
$('#image-err').html('');
$('#content-err').html('');
$('#short_description-err').html('');
$('#author-err').html('');
$('#meta_title-err').html('');
$('#meta_keyword-err').html('');
$('#meta_description-err').html('');
$('#status-err').html('');
let formData = new FormData();
formData.append('_method', 'PUT');
formData.append('title', $('#title').val());
formData.append('image_alt', $('#image_alt').val());
formData.append('category', $('#category').val());
formData.append('url', $('#url').val());
formData.append('publish_date', $('#publish_date').val());
formData.append('short_description', $('#short_description').val());
formData.append('content', $('#content').val());
formData.append('author', $('#author').val());
formData.append('meta_title', $('#meta_title').val());
formData.append('meta_keyword', $('#meta_keyword').val());
formData.append('meta_description', $('#meta_description').val());
formData.append('status', $('#status').val());
formData.append('image', (typeof $('#image')[0].files[0] == 'undefined') ? '' : $('#image')[0].files[0]);
let blog_id = $(this).attr('blog_id');
$.ajax({
url: `<?php echo e(URL::to('admin/manage-blog/${blog_id}')); ?>`,
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
<?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/admin/blogs/index.blade.php ENDPATH**/ ?>
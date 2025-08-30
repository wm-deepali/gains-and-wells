<?php echo $__env->make('admin.top-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main-section">
<?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="app-content content container-fluid">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
<li class="breadcrumb-item">Settings</li>
<li class="breadcrumb-item active">Manage Section</li>
</ol>
</div>
<div class="add-back ml-auto mr-2">
    <a href="javascript:void(0)" class="add-section text-dark"><i class="fa fa-plus"></i> Add </a>
</div>


</div>
<div class="content-wrapper">
<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all" style="width:100%;">
<thead>
<tr>
<th>Date &amp; Time</th> 
<th>Page Slug</th>
<th>Is Show FAQ</th>
<th>Type</th>
<th>Is Show Logo Marque</th>
<th>Is Show Blog Section</th>
<th>Is Show Testimonial</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php if(isset($settings) && count($settings) > 0): ?>
       
       <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($setting->created_at); ?></td>
<td><?php echo e($setting->page_slug); ?></td>
<td><?php echo e(ucfirst($setting->is_show_faq_form) ?? ""); ?></td>
<td><?php echo e(ucfirst($setting->faq_type) ?? ""); ?></td>
<td><?php echo e(ucfirst($setting->is_show_logo_marque) ?? ""); ?></td>
<td><?php echo e(ucfirst($setting->is_show_blog_section) ?? ""); ?></td>
<td><?php echo e(ucfirst($setting->is_show_testimonial) ?? ""); ?></td>
<td class="text-truncate">
    <a href="javascript:void(0)" class="edit-section text-dark mr-2" page_id="<?php echo e($setting->id); ?>" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation(<?php echo e($setting->id); ?>)" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</tbody>
</table>
</div>

</div>
</div>
<div id="sections-modal" class="modal fade" role="dialog">
</div>
</div>
<?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    var showfaq = $('#is_show_faq_form').val();
    var ftype = $('#faq_type').val();
    if(ftype == 'page-based')
    {
        $('#pageval').show();
        $("#faq_id").attr("required", "true");
        
    }
    else{
        $("#faq_id").removeAttr("required");
        $('#pageval').hide();
        
    }

    if(showfaq == 'yes')
    {
        $("#faq_type").attr("required", "true");
        $("#faq_id").attr("required", "true");
        $('#ftype').show();
        $('#pageval').show();
    }
    else{
        $("#faq_type").removeAttr("required");
        $("#faq_id").removeAttr("required");
        $('#ftype').hide();
        $('#pageval').hide();
    }
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
                    url: `<?php echo e(URL::to('admin/manage-sections/${id}')); ?>`,
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
        $(document).on("click", ".add-section", function(event) {
            $.ajax({
                url: "<?php echo e(URL::to('admin/manage-sections/create')); ?>",
                type: "GET",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#sections-modal").html(result.html);
                        $("#sections-modal").modal('show');
                    } else {
                        toastr.error('error encountered ' + result.msgText);
                    }
                },
                error: function(error) {
                    toastr.error('error encountered ' + error.statusText);
                }
            });
        });

        $(document).on("click", ".edit-section", function(event) {
            let id = $(this).attr('page_id');
            $.ajax({
                url: `<?php echo e(URL::to('admin/manage-sections/${id}/edit')); ?>`,
                type: "get",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#sections-modal").html(result.html);
                        $("#sections-modal").modal('show');
                    } else {
                        toastr.error('error encountered ' + result.msgText);
                    }
                },
                error: function(error) {
                    toastr.error('error encountered ' + error.statusText);
                }
            });
        });
        $(document).on("change", "#is_show_faq_form", function(event) {
            var showfaq = $('#is_show_faq_form').val();
            if(showfaq == 'yes')
            {
                $("#faq_type").attr("required", "true");
                $("#faq_id").attr("required", "true");
                $('#ftype').show();
                $('#pageval').show();
                
                $("#faq_id").val('');
                $("#faq_type").val('');
            }
            else{
                $("#faq_type").removeAttr("required");
                $("#faq_id").removeAttr("required");
                $('#ftype').hide();
                $('#pageval').hide();
                
                $("#faq_type").val('');
                $("#faq_id").val('');
            }
        });
        $(document).on("change", "#faq_type", function(event) {
            var type = $('#faq_type').val();
            if(type == 'page-based')
            {
                $('#pageval').show();
                $("#faq_id").attr("required", "true");
                $("#faq_id").val('');
            }
            else{
                $('#pageval').hide();
                $("#faq_id").removeAttr("required");
                $("#faq_id").val('');
            }
        });
    });
    
</script>
<?php /**PATH D:\web-mingo-project\gains-and-wells\resources\views/admin/setting/section.blade.php ENDPATH**/ ?>
<?php echo $__env->make('admin.top-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main-section">
<?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="app-content content container-fluid">
<div class="content-wrapper">
<div class="breadcrumbs-top d-flex align-items-center bg-light mb-3">
<div class="breadcrumb-wrapper">
<ol class="breadcrumb bg-transparent mb-0">
<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
<li class="breadcrumb-item">Settings</li>
<li class="breadcrumb-item active">Package 
</li>
</ol>
</div>
<div class="add-back ml-auto mr-2">
<a href="javascript:void(0)" class="add-state text-dark"><i class="fa fa-plus"></i> Add </a>
<a href="javascript:history.go(-1)" class="btn text-dark"><i class="fa-solid fa-rotate-left"></i> Go Back</a>
</div>
</div>

<div class="table-responsive">
<table class="table table-striped table-bordered" id="for_all">
<thead>
        <tr>
                
                 <th>S.N.</th>
                 <th>Page Name </th>
                 <th> Name </th>
                  <th>Price Required</th>
                 <th>MRP</th>
                <th>Action</th>
        </tr>
</thead>
<tbody> <?php $i=1; ?>
       
       
        <?php $__currentLoopData = $offer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($i++); ?></td>
            
   <td> <?php echo e($business->page->title ?? 'NA'); ?>  </td>

         <td>
    <?php echo e($business->name); ?>

</td>
<td> <?php echo e($business->price_required ?? 'NA'); ?>  </td>
            <td> <?php echo e($business->mrp); ?></td>
            <td class="text-truncate">
                <a href="javascript:void(0)" class="edit-state text-dark mr-2" state_id="<?php echo e($business->id); ?>" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <a href="javascript:void(0)" class="text-danger" onclick="deleteConfirmation(<?php echo e($business->id); ?>)" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</tbody>
</table>

</div>
</div>
</div>
</div>
<div id="state-modal" class="modal fade" role="dialog"></div>
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
                    url: `<?php echo e(URL::to('admin/manage-packages/${id}')); ?>`,
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
       
        $(document).on("click", ".add-state", function(event) {
            
            $.ajax({
                url: "<?php echo e(URL::to('admin/manage-packages/create')); ?>",
                type: "GET",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#state-modal").html(result.html);
                        $("#state-modal").modal('show');
                    } else {

                    }
                }
            });
        });

        $(document).on("click", ".edit-state", function(event) {
            let id = $(this).attr('state_id');
            $.ajax({
                url: `<?php echo e(URL::to('admin/manage-packages/${id}/edit')); ?>`,
                type: "get",
                dataType: "json",
                success: function(result) {
                    if (result.success) {
                        $("#state-modal").html(result.html);
                        $("#state-modal").modal('show');
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
<?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/admin/packages/index.blade.php ENDPATH**/ ?>
<?php if(isset($datas) && count($datas)>0): ?>
<div class="col-md-12 col-lg-12 mb-6">
    <div class="form-group">
        <select name="sub_service_id" id="sub_service_id" class="form-control" required>
            <option value="">Select Sub Service</option>
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </select>
    </div>
</div>
<?php endif; ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/layouts/includes/option.blade.php ENDPATH**/ ?>
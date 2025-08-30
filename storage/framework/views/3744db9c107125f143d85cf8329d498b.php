<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="<?php echo e(route('admin.manage-visa.update', $groupId)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="modal-header">
                <h4 class="modal-title">Edit Visa Costs</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div id="edit-visa-cost-group">
                    <?php $__currentLoopData = $visaCosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $visa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="visa-cost-row row mt-2">
                            <input type="hidden" name="visa_costs[<?php echo e($index); ?>][id]" value="<?php echo e($visa->id); ?>">

                            <!-- Visa Type -->
                            <div class="col-md-4">
                                <label>Visa Type <span class="required">*</span></label>
                                <select class="form-control" name="visa_costs[<?php echo e($index); ?>][business_id]" required>
                                    <option value="">-- Select Business Type --</option>
                                    <?php $__currentLoopData = $businesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($business->id); ?>" <?php echo e($visa->business_id == $business->id ? 'selected' : ''); ?>>
                                            <?php echo e($business->Business_name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <!-- No. of Visa -->
                            <div class="col-md-4">
                                <label>No. of Visa</label>
                                <input type="number" class="form-control" name="visa_costs[<?php echo e($index); ?>][quantity]" value="<?php echo e($visa->quantity); ?>" required>
                            </div>

                            <!-- No. of Shareholders/Partners -->
                            <div class="col-md-4">
                                <label>No. of Shareholders/Partners <span class="text-danger">*</span></label>
                                <select class="form-control" name="visa_costs[<?php echo e($index); ?>][number_owner]" required>
                                    <?php for($i = 1; $i <= 10; $i++): ?>
                                        <option value="<?php echo e($i); ?>" <?php echo e($visa->number_owner == $i ? 'selected' : ''); ?>>
                                            <?php echo e($i); ?> Shareholder<?php echo e($i > 1 ? 's' : ''); ?>/Partner<?php echo e($i > 1 ? 's' : ''); ?>

                                        </option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <!-- Cost: Dubai Mainland -->
                            <div class="col-md-4 mt-3">
                                <label>Cost Dubai Mainland (AED)</label>
                                <input type="number" class="form-control" name="visa_costs[<?php echo e($index); ?>][dubai_mainland]" value="<?php echo e($visa->dubai_mainland); ?>" step="0.01" required>
                            </div>

                            <!-- Cost: UAE Offshore -->
                            <div class="col-md-4 mt-3">
                                <label>Cost UAE Offshore (AED)</label>
                                <input type="number" class="form-control" name="visa_costs[<?php echo e($index); ?>][uae_offshore]" value="<?php echo e($visa->uae_offshore); ?>" step="0.01" required>
                            </div>

                            <!-- Cost: UAE Freezone -->
                            <div class="col-md-4 mt-3">
                                <label>Cost UAE Freezone (AED)</label>
                                <input type="number" class="form-control" name="visa_costs[<?php echo e($index); ?>][uae_freezone]" value="<?php echo e($visa->uae_freezone); ?>" step="0.01" required>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /home/ashtonwell/public_html/resources/views/admin/visa/ajax/edit.blade.php ENDPATH**/ ?>
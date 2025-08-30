<!-- Modal -->
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="<?php echo e(route('admin.manage-visa.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
                <h4 class="modal-title">Add Visa Cost</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div id="visa-cost-group">
                    <div class="visa-cost-row row mb-3">
                        <div class="col-md-4">
                            <label>Business Type <span class="text-danger">*</span></label>
                            <select class="form-control" name="visa_costs[0][business_id]" required>
                                <option value="">-- Select Business Type --</option>
                                <?php $__currentLoopData = $businesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $business): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($business->id); ?>"><?php echo e($business->Business_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label>No. of Shareholders/Partners <span class="text-danger">*</span></label>
                            <select class="form-control" name="visa_costs[0][number_owner]" required>
                                <?php for($i = 1; $i <= 10; $i++): ?>
                                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?> Shareholder<?php echo e($i > 1 ? 's' : ''); ?>/Partner<?php echo e($i > 1 ? 's' : ''); ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label>Number of Visa <span class="text-danger">*</span></label>
                            <select class="form-control" name="visa_costs[0][visa_count]" required>
                                <?php for($i = 0; $i <= 10; $i++): ?>
                                    <option value="<?php echo e($i); ?>"><?php echo e($i); ?> Visa</option>
                                <?php endfor; ?>
                            </select>
                        </div>

                        <div class="col-md-4 mt-3">
                            <label>Dubai Mainland Cost (AED)</label>
                            <input type="number" class="form-control" name="visa_costs[0][costs][dubai_mainland]">
                        </div>

                        <div class="col-md-4 mt-3">
                            <label>UAE Offshore Cost (AED)</label>
                            <input type="number" class="form-control" name="visa_costs[0][costs][uae_offshore]">
                        </div>

                        <div class="col-md-4 mt-3">
                            <label>UAE Free Zone Cost (AED)</label>
                            <input type="number" class="form-control" name="visa_costs[0][costs][uae_freezone]">
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="button" class="btn btn-success" id="add-more">Add More</button>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>

<!-- Include jQuery if not already present -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(function () {
        const businesses = <?php echo json_encode($businesses, 15, 512) ?>;
        let rowIndex = 1;

        $('#add-more').on('click', function () {
            // Get last selected values
            let lastBusiness = $(`#visa-cost-group .visa-cost-row:last select[name^="visa_costs"][name$="[business_id]"]`).val();
            let lastOwner = $(`#visa-cost-group .visa-cost-row:last select[name^="visa_costs"][name$="[number_owner]"]`).val();
            let lastVisaCount = $(`#visa-cost-group .visa-cost-row:last select[name^="visa_costs"][name$="[visa_count]"]`).val();

            // Business Options
            let businessOptions = '<option value="">-- Select Business Type --</option>';
            businesses.forEach(b => {
                businessOptions += `<option value="${b.id}" ${lastBusiness == b.id ? 'selected' : ''}>${b.Business_name}</option>`;
            });

            // Shareholder Options
            let shareholdersOptions = '';
            for (let i = 1; i <= 10; i++) {
                shareholdersOptions += `<option value="${i}" ${lastOwner == i ? 'selected' : ''}>${i} Shareholder${i > 1 ? 's' : ''}/Partner${i > 1 ? 's' : ''}</option>`;
            }

            // Visa Count Options
            let visaOptions = '';
            for (let i = 0; i <= 10; i++) {
                visaOptions += `<option value="${i}" ${lastVisaCount == i ? 'selected' : ''}>${i} Visa</option>`;
            }

            // Append new row
            const row = `
                <div class="visa-cost-row row mb-3">
                    <div class="col-md-4">
                        <label>Business Type <span class="text-danger">*</span></label>
                        <select class="form-control" name="visa_costs[${rowIndex}][business_id]" required>
                            ${businessOptions}
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label>No. of Shareholders/Partners <span class="text-danger">*</span></label>
                        <select class="form-control" name="visa_costs[${rowIndex}][number_owner]" required>
                            ${shareholdersOptions}
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label>Number of Visa <span class="text-danger">*</span></label>
                        <select class="form-control" name="visa_costs[${rowIndex}][visa_count]" required>
                            ${visaOptions}
                        </select>
                    </div>

                    <div class="col-md-4 mt-3">
                        <label>Dubai Mainland Cost (AED)</label>
                        <input type="number" class="form-control" name="visa_costs[${rowIndex}][costs][dubai_mainland]">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label>UAE Offshore Cost (AED)</label>
                        <input type="number" class="form-control" name="visa_costs[${rowIndex}][costs][uae_offshore]">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label>UAE Free Zone Cost (AED)</label>
                        <input type="number" class="form-control" name="visa_costs[${rowIndex}][costs][uae_freezone]">
                    </div>
                </div>
            `;

            $('#visa-cost-group').append(row);
            rowIndex++;
        });
    });
</script>
<?php /**PATH /home/ashtonwell/public_html/resources/views/admin/visa/ajax/create.blade.php ENDPATH**/ ?>
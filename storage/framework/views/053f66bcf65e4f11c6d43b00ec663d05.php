<div class="modal-dialog modal-lg">

    <!-- Modal content-->

    <form class="form form-horizontal">

        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Edit Page Meta </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">

                <div class="row border m-1 p-2 bg-light">

                    <div class="col-md-12">

                        <h6 class="border-bottom pb-2">SEO Section</h6>

                    </div>

                    <div class="col-md-12 form-group">

                        <label class="label-control label">Page <span class="required">*</span></label>
                        <select class="form-control" name="page_slug" id="page_slug" required>
                            <option value="">Select a page</option>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($page->slug); ?>" <?php if($page->slug == $seo->page_slug): ?> selected <?php endif; ?>><?php echo e($page->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          

                        </select>
                       <div class="text-danger" id="page_slug-err"></div>

                    </div>

                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Title <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Meta Title" name="meta_title" id="meta_title" maxlength="70" value="<?php echo e($seo->meta_title ?? null); ?>">

                        <strong class="note-span small" id="meta_title-limit">We recommend title between 60–70 characters.(0 character)</strong>

                        <div class="text-danger validation-err" id="meta_title-err"></div>

                    </div>



                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Keywords <span class="required">*</span></label>

                        <textarea class="form-control" rows="4" cols="7" placeholder="Enter Meta Keywords" name="meta_keyword" id="meta_keyword"><?php echo e($seo->meta_keyword ?? null); ?></textarea>

                        <div class="text-danger validation-err" id="meta_keyword-err"></div>

                    </div>



                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Description <span class="required">*</span></label>

                        <textarea class="form-control" rows="4" cols="7" placeholder="Enter Meta Description" name="meta_description" id="meta_description" maxlength="170"><?php echo e($seo->meta_description ?? null); ?></textarea>

                        <strong class="note-span small" id="meta_description-limit">We recommend descriptions between 160–170 characters.(0 character)</strong>

                        <div class="text-danger validation-err" id="meta_description-err"></div>

                    </div>
                    <div class="col-md-12 form-group">

                        <label class="label-control label">Header OG Tags & Scripts </label>

                        <textarea class="form-control" rows="4" cols="7" placeholder="Enter  OG Tags & Scripts" name="scripts_text" id="scripts_text"><?php echo e($seo->scripts_text ?? null); ?></textarea>

           
                    </div>
                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary" id="update-seo-btn" seo_id="<?php echo e($seo->id); ?>">Submit</button>

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </form>

</div>

<script>

    // CKEDITOR.replace('content', {

    //     filebrowserUploadUrl: "<?php echo e(route('admin.image-upload', ['_token' => csrf_token()])); ?>",

    //     filebrowserUploadMethod: 'form'

    // });

</script>

<?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/admin/seo/ajax/edit.blade.php ENDPATH**/ ?>
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="<?php echo e(route('admin.manage-sections.update', $setting->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="modal-header">
                <h4 class="modal-title">Edit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
            <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control label">Page Slug <span class="required">*</span></label>
                        <select class="form-control" name="page_slug" required>
                            <option value="">Select a page</option>
                            <?php if(isset($pages) && count($pages) > 0): ?>
                            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($page->slug); ?>" <?php if($page->slug == $setting->page_slug): ?> selected <?php endif; ?>><?php echo e($page->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                          

                        </select>
                        

                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Is Show Faq & Form<span class="required">*</span></label>
                        <select class="form-control" name="is_show_faq_form" id="is_show_faq_form" required>
                        <option value="no" <?php if($setting->is_show_faq_form == "no"): ?> selected <?php endif; ?>>No</option>
                            <option value="yes" <?php if($setting->is_show_faq_form == "yes"): ?> selected <?php endif; ?>>Yes</option>
                            
                            
                        </select>
                     </div>
                    <div class="col-sm-6" style="margin-top: 12px;<?php if($setting->is_show_faq_form == 'no'): ?> display:none; <?php endif; ?>" id="ftype">
                        <label class="label-control label">Type<span class="required">*</span></label>
                        <select class="form-control" name="faq_type" id="faq_type">
                            <option value="" >Select Type</option>
                            <option value="default" <?php if($setting->faq_type == "default"): ?> selected <?php endif; ?>>Default FAQ</option>
                            <option value="page-based" <?php if($setting->faq_type == "page-based"): ?> selected <?php endif; ?>>Page Dependent</option>   
                        </select>
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6" style="margin-top: 12px;<?php if($setting->faq_type == 'default' || $setting->is_show_faq_form == 'no'): ?> display:none; <?php endif; ?>" id="pageval">
                         <label class="label-control label">Page FAQ<span class="required">*</span></label>
                            <select class="form-control" name="faq_id" id="faq_id">
                                <option value="" >Select Page Faq</option>
                                <?php if(isset($faqs) && count($faqs) > 0): ?>
                                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($faq->page->id)): ?>
                                <option value="<?php echo e($faq->page->id); ?>" <?php if($setting->faq_id == $faq->page->id): ?> selected <?php endif; ?>><?php echo e($faq->page->title); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Is Show Logo Marque<span class="required">*</span></label>
                        <select class="form-control" name="is_show_logo_marque" id="is_show_logo_marque" required>
                            <option value="no" <?php if($setting->is_show_logo_marque == "no"): ?> selected <?php endif; ?>>No</option>
                            <option value="yes" <?php if($setting->is_show_logo_marque == "yes"): ?> selected <?php endif; ?>>Yes</option>  
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">Is Show Blog Section<span class="required">*</span></label>
                        <select class="form-control" name="is_show_blog_section" id="is_show_blog_section" required>
                            <option value="no" <?php if($setting->is_show_blog_section == "no"): ?> selected <?php endif; ?>>No</option>
                            <option value="yes" <?php if($setting->is_show_blog_section == "yes"): ?> selected <?php endif; ?>>Yes</option>  
                        </select>
                    </div>
                    
                </div>
                <div class="form-group row">
                   
                    <div class="col-sm-6">
                        <label class="label-control label">Is Show Testimonial<span class="required">*</span></label>
                        <select class="form-control" name="is_show_testimonial" id="is_show_testimonial" required>
                            <option value="no" <?php if($setting->is_show_testimonial == "no"): ?> selected <?php endif; ?>>No</option>
                            <option value="yes" <?php if($setting->is_show_testimonial == "yes"): ?> selected <?php endif; ?>>Yes</option>  
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH D:\web-mingo-project\gains-and-wells\resources\views/admin/setting/ajax/edit-section.blade.php ENDPATH**/ ?>
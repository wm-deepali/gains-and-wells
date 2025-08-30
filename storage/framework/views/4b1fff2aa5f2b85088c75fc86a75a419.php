<div class="modal-dialog modal-lg">

    <!-- Modal content-->

    <form class="form form-horizontal">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title">Edit Blog </h4>inves

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                

            </div>

            <div class="modal-body">


                <div class="form-group row">
                    <div class="col-sm-6"> 

                        <label class="label-control label">Category <span class="required">*</span>
                        </label>

                        <select class="form-control" name="category" id="category">

                            <option value="" >Select a Category</option>
                            <?php
                            $categories = App\Models\BlogCategory::where('status',1)->get();
                            ?>

                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $getCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($blog->category==$getCat->id): ?>
                            <option class="form-control" value="<?php echo e($getCat->id); ?>" selected><?php echo e($getCat->name); ?></option>
                            <?php else: ?>
                            <option class="form-control" value="<?php echo e($getCat->id); ?>"><?php echo e($getCat->name); ?></option>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

                        </select>

                        <div class="text-danger" id="category-err"></div>

                    </div>

                    <div class="col-sm-6">

                        <label class="label-control label">Title <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Title" name="title" id="title" value="<?php echo e($blog->title); ?>">

                        <div class="text-danger" id="title-err"></div>

                    </div>
                    
                </div>
                
                <div class="form-group row">

                    

                    <div class="col-sm-6">

                        <label class="label-control label">Author <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Author" name="author" id="author" value="<?php echo e($blog->author); ?>">

                        <div class="text-danger" id="author-err"></div>

                    </div>
                    <div class="col-md-6">

                        <label class="label-control label">Image <span class="required">*</span></label>

                        <input type="file" class="form-control" name="image" id="image">

                        <div class="text-danger" id="image-err"></div>

                        <?php if($blog->image!=null): ?>
                        <div class="m-2"><img src="<?php echo e(asset('storage/blogs/'.$blog->image)); ?>"height="50"> </div>
                        <?php endif; ?>

                    </div>

                </div>

                <div class="form-group row">

                    

                    <div class="col-sm-6">

                        <label class="label-control label">Image Alt Tag<span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Image Alt Tag" name="image_alt" id="image_alt" value="<?php echo e($blog->image_alt); ?>">

                        <div class="text-danger" id="image_alt-err"></div>

                    </div>

                     <div class="col-sm-6">

                        <label class="label-control label">Status <span class="required">*</span></label>

                        <select class="form-control" name="status" id="status">

                            <option value="active" <?php if($blog->status == 'active'): ?> selected <?php endif; ?>>Active</option>

                            <option value="block" <?php if($blog->active == 'block'): ?> selected <?php endif; ?>>Block</option>

                        </select>

                        <div class="text-danger" id="status-err"></div>

                    </div>

                </div>



                



                <div class="form-group row">

                    <div class="col-sm-12">

                        <label class="label-control label">Short Description <span class="required">*</span></label>

                        <textarea class="form-control" name="short_description" id="short_description" cols="30" rows="2" maxlength="170"><?php echo e($blog->short_description); ?></textarea>

                        <div class="text-danger" id="short_description-err"></div>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">

                        <label class="label-control label">Content <span class="required">*</span></label>

                        <textarea class="form-control" name="content" id="content" cols="30" rows="5"><?php echo e($blog->content); ?></textarea>
                            <div class="text-danger" id="content-err"></div>
                        </div>
                    </div>

                <!-- End changes -->
                <div class="form-group row">

    
                    <div class="col-sm-6">

                        <label class="label-control label">Publish Date <span class="required">*</span></label>

                        <input type="date" class="form-control" placeholder="Enter Publish Date" name="publish_date" id="publish_date" value="<?php echo e($blog->publish_date); ?>">

                        <div class="text-danger" id="publish_date-err"></div>

                    </div>
                </div>

                <div class="row border m-1 p-2 bg-light">

                    <div class="col-md-12">

                        <h6 class="border-bottom pb-2">SEO Section</h6>

                    </div>

                    <div class="col-md-12 form-group">

                       
                        <label class="label-control label">URL <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Url" name="url" id="url" value="<?php echo e($blog->url); ?>">

                        <div class="text-danger" id="url-err"></div>

                    </div>

                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Title <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Meta Title" name="meta_title" id="meta_title" maxlength="70" value="<?php echo e($blog->meta_title ?? null); ?>">

                        <strong class="note-span small" id="meta_title-limit">We recommend title between 60–70 characters.(0 character)</strong>

                        <div class="text-danger validation-err" id="meta_title-err"></div>

                    </div>



                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Keywords <span class="required">*</span></label>

                        <textarea class="form-control" rows="4" cols="7" placeholder="Enter Meta Keywords" name="meta_keyword" id="meta_keyword"><?php echo e($blog->meta_keyword ?? null); ?></textarea>

                        <div class="text-danger validation-err" id="meta_keyword-err"></div>

                    </div>



                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Description <span class="required">*</span></label>

                        <textarea class="form-control" rows="4" cols="7" placeholder="Enter Meta Description" name="meta_description" id="meta_description" maxlength="170"><?php echo e($blog->meta_description ?? null); ?></textarea>

                        <strong class="note-span small" id="meta_description-limit">We recommend descriptions between 160–170 characters.(0 character)</strong>

                        <div class="text-danger validation-err" id="meta_description-err"></div>

                    </div>
                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary" id="update-blog-btn" blog_id="<?php echo e($blog->id); ?>">Submit</button>

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
    CKEDITOR.replace('content', {
    extraAllowedContent: 'h1 span',
    allowedContent:true,
});
</script>

<?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/admin/blogs/ajax/edit.blade.php ENDPATH**/ ?>
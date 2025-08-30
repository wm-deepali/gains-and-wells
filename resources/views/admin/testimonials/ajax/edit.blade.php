<div class="modal-dialog modal-lg">

    <!-- Modal content-->

    <form class="form form-horizontal">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title">Edit Testimonial </h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                

            </div>

            <div class="modal-body">

                <div class="form-group row">

                    <div class="col-sm-6">

                        <label class="label-control label">Status <span class="required">*</span></label>

                        <select class="form-control" name="status" id="status">

                            <option value="active" @if ($testimonial->status == 'active') selected @endif>Active</option>

                            <option value="block" @if ($testimonial->active == 'block') selected @endif>Block</option>

                        </select>

                        <div class="text-danger" id="status-err"></div>

                    </div>

                   

                   <div class="col-sm-6">

                        <label class="label-control label">Name <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="{{ $testimonial->name }}">

                        <div class="text-danger" id="name-err"></div>

                    </div>

                    

                </div>
                <div class="form-group row">
                    <!--<div class="col-sm-6">-->
                    <!--    <label class="label-control label">Project <span class="required">*</span></label>-->

                    <!--    <input type="text" class="form-control" placeholder="Enter Project" name="project" id="project" value="{{ $testimonial->project }}">-->

                    <!--    <div class="text-danger" id="project-err"></div>-->
                    <!--</div>-->
                    
                    <div class="col-md-6">

                        <label class="label-control label">Image <span class="required">*</span></label>

                        <input type="file" class="form-control" name="image" id="image">

                        <div class="text-danger" id="image-err"></div>
                        
                        @if($testimonial->image!=null)
                        <div class="m-2"><img src="{{ asset('storage/testimonials/'.$testimonial->image) }}"height="50"> </div>
                        @endif

                    </div>
                    
                    <div class="col-sm-6">
                        <label class="label-control label">Designation <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Designation" name="designation" id="designation" value="{{ $testimonial->designation }}">

                        <div class="text-danger" id="designation-err"></div>
                    </div>
                </div>

                



                    <div class="row">

                        <div class="col-sm-12">

                            <div class="form-group">

                                <label class="label-control label">Content <span class="required">*</span></label>

                                 <textarea type="text" class="form-control" placeholder="Enter Content" name="contents" id="contents" rows="5">{{ $testimonial->contents }}  </textarea>

                                <div class="text-danger" id="contents-err"></div>

                           </div>

                        </div>

                    </div>
                    </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-primary" id="update-testimonial-btn" testimonial_id="{{ $testimonial->id }}">Submit</button>

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </form>

</div>

<script>

    CKEDITOR.replace('contents', {

        filebrowserUploadUrl: "{{ route('admin.image-upload', ['_token' => csrf_token()]) }}",

        filebrowserUploadMethod: 'form'

    });

</script>


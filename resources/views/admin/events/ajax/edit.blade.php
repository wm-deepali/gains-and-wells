<div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <form class="form form-horizontal">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title">Edit Event</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Event Name <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Event Name" name="event_name" id="event_name" value="{{ $event->event_name }}">
                        <div class="text-danger" id="event_name-err"></div>
                    </div>

                    <div class="col-sm-6">
                        <label class="label-control label">Event Slug <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Event Slug" name="slug" id="slug" value="{{ $event->slug }}">
                        <div class="text-danger" id="slug-err"></div>
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Start Date <span class="required">*</span></label>
                        <input type="date" class="form-control" placeholder="Enter Start Date" name="event_start_date" id="event_start_date" value="{{ $event->event_start_date }}">
                        <div class="text-danger" id="event_start_date-err"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">End Date <span class="required">*</span></label>
                        <input type="date" class="form-control" placeholder="Enter End Date" name="event_end_date" id="event_end_date" value="{{ $event->event_end_date }}">
                        <div class="text-danger" id="event_end_date-err"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Event Time <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Time" name="event_time" id="event_time" value="{{ $event->event_time }}">
                        <div class="text-danger" id="event_time-err"></div>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">Event Venue <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter Event Venue" name="event_venue" id="event_venue" value="{{ $event->event_venue }}">
                        <div class="text-danger" id="event_venue-err"></div>
                    </div>
                </div>

                <div class="form-group row">
                    
                    <div class="col-sm-12">
                        <label class="label-control label">Description <span class="required">*</span></label>
                        <textarea class="form-control" placeholder="Enter Description" name="description" id="description" rows="3" cols="10">{{ $event->description }}</textarea>
                        <div class="text-danger" id="description-err"></div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        <div class="text-danger" id="image-err"></div>
                        @if($event->image!=null)
                        <div class="m-2"><img src="{{ asset('storage/events/'.$event->image) }}"height="50"> </div>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">Image Alt Tag</label>
                        <input type="text" class="form-control" placeholder="Enter Image Alt Tag" name="image_alt" id="image_alt" value="{{ $event->image_alt }}">
                        <div class="text-danger" id="image_alt-err"></div>
                    </div>
                </div>

                
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Status<span class="required">*</span></label>
                        <select class="form-control" name="status" id="status">
                        <option value="Active" {{$event->status == 'Active' ? 'selected' : ''}}>Active</option>
                            <option value="Inactive" {{$event->status == 'Inactive' ? 'selected' : ''}}>Inactive</option>
                        </select>
                        <div class="text-danger" id="status-err"></div>
                    </div>
                </div>

               
                <div class="row border m-1 p-2 bg-light">

                    <div class="col-md-12">

                        <h6 class="border-bottom pb-2">SEO Section</h6>

                    </div>

                    <div class="col-md-12 form-group">

                        <label class="label-control label">URL <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Url" name="canonical_url" id="canonical_url" value="{{ $event->canonical_url }}">

                        <div class="text-danger validation-err" id="canonical_url-err"></div>

                    </div>

                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Title <span class="required">*</span></label>

                        <input type="text" class="form-control" placeholder="Enter Meta Title" name="meta_title" id="meta_title" maxlength="70" value="{{$event->meta_title ?? null }}">

                        <strong class="note-span small" id="meta_title-limit">We recommend title between 60-70 characters.(0 character)</strong>

                        <div class="text-danger validation-err" id="meta_title-err"></div>

                    </div>



                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Keywords <span class="required">*</span></label>

                        <textarea class="form-control" rows="4" cols="7" placeholder="Enter Meta Keywords" name="meta_keyword" id="meta_keyword" required="required">{{$event->meta_keyword ?? null }}</textarea>

                        <div class="text-danger validation-err" id="meta_keyword-err"></div>

                    </div>



                    <div class="col-md-12 form-group">

                        <label class="label-control label">Meta Description <span class="required">*</span></label>

                        <textarea class="form-control" rows="4" cols="7" placeholder="Enter Meta Description" name="meta_description" id="meta_description" maxlength="170"required="required">{{$event->meta_description ?? null }}</textarea>

                        <strong class="note-span small" id="meta_description-limit">We recommend descriptions between 160–170 characters.(0 character)</strong>

                        <div class="text-danger validation-err" id="meta_description-err"></div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary update-event-btn" event_id="{{ $event->id }}">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </form>
</div>
<script>
    CKEDITOR.replace('description', {
        extraAllowedContent: 'h1 span',
        allowedContent:true,
    });
</script>
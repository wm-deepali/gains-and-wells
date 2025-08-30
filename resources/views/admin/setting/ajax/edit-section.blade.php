<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-sections.update', $setting->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                            @if(isset($pages) && count($pages) > 0)
                            @foreach($pages as $page)
                            <option value="{{ $page->slug }}" @if ($page->slug == $setting->page_slug) selected @endif>{{ $page->title }}</option>
                            @endforeach
                            @endif
                          

                        </select>
                        

                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Is Show Faq & Form<span class="required">*</span></label>
                        <select class="form-control" name="is_show_faq_form" id="is_show_faq_form" required>
                        <option value="no" @if ($setting->is_show_faq_form == "no") selected @endif>No</option>
                            <option value="yes" @if ($setting->is_show_faq_form == "yes") selected @endif>Yes</option>
                            
                            
                        </select>
                     </div>
                    <div class="col-sm-6" style="margin-top: 12px;@if ($setting->is_show_faq_form == 'no') display:none; @endif" id="ftype">
                        <label class="label-control label">Type<span class="required">*</span></label>
                        <select class="form-control" name="faq_type" id="faq_type">
                            <option value="" >Select Type</option>
                            <option value="default" @if ($setting->faq_type == "default") selected @endif>Default FAQ</option>
                            <option value="page-based" @if ($setting->faq_type == "page-based") selected @endif>Page Dependent</option>   
                        </select>
                    </div>
                    
                </div>
                <div class="form-group row">
                    <div class="col-sm-6" style="margin-top: 12px;@if ($setting->faq_type == 'default' || $setting->is_show_faq_form == 'no') display:none; @endif" id="pageval">
                         <label class="label-control label">Page FAQ<span class="required">*</span></label>
                            <select class="form-control" name="faq_id" id="faq_id">
                                <option value="" >Select Page Faq</option>
                                @if(isset($faqs) && count($faqs) > 0)
                                @foreach($faqs as $faq)
                                @if(isset($faq->page->id))
                                <option value="{{ $faq->page->id }}" @if ($setting->faq_id == $faq->page->id) selected @endif>{{ $faq->page->title }}</option>
                                @endif
                                @endforeach
                                @endif
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label class="label-control label">Is Show Logo Marque<span class="required">*</span></label>
                        <select class="form-control" name="is_show_logo_marque" id="is_show_logo_marque" required>
                            <option value="no" @if ($setting->is_show_logo_marque == "no") selected @endif>No</option>
                            <option value="yes" @if ($setting->is_show_logo_marque == "yes") selected @endif>Yes</option>  
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control label">Is Show Blog Section<span class="required">*</span></label>
                        <select class="form-control" name="is_show_blog_section" id="is_show_blog_section" required>
                            <option value="no" @if ($setting->is_show_blog_section == "no") selected @endif>No</option>
                            <option value="yes" @if ($setting->is_show_blog_section == "yes") selected @endif>Yes</option>  
                        </select>
                    </div>
                    
                </div>
                <div class="form-group row">
                   
                    <div class="col-sm-6">
                        <label class="label-control label">Is Show Testimonial<span class="required">*</span></label>
                        <select class="form-control" name="is_show_testimonial" id="is_show_testimonial" required>
                            <option value="no" @if ($setting->is_show_testimonial == "no") selected @endif>No</option>
                            <option value="yes" @if ($setting->is_show_testimonial == "yes") selected @endif>Yes</option>  
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

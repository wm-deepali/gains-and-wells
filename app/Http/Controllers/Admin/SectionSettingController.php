<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SectionSetting;
use App\Models\Faq;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SectionSettingController extends Controller
{
    public function index()
    {
        $settings = SectionSetting::latest()->get();
        return view('admin.setting.section')->with([
            'settings' => $settings
        ]);
    }

    
    public function create()
    {
        $faqs = Faq::with('page')->groupBy('page_id')->get();
        $pages = Page::all();
        try{
            return response()->json([
                "success" => true,
                "html" => view('admin.setting.ajax.create-section')->with([
                    'faqs' => $faqs,
                    'pages'=>$pages

                ])->render(),
            ]);
        }
        catch(\Exception $ex){
            return response()->json([
                "success" => false,
                'msgText' =>$ex->getMessage(),
            ]);
        }
    }

    
    public function store(Request $request)
    {
        //
        $requestData = $request->all();
        $validator = Validator::make($requestData, [
             'page_slug' => 'required|unique:section_settings|max:255',
             'is_show_faq_form' => 'required',
             'is_show_blog_section' => 'required',
             'is_show_logo_marque' => 'required',
             'is_show_testimonial' => 'required',
             'faq_type' => 'nullable',
             'faq_id' => 'nullable',
            
            
        ]);
        if ($validator->passes()) {
            try {

                SectionSetting::create([
                    'page_slug' => $request->page_slug,
                    'is_show_faq_form' => $request->is_show_faq_form,
                    'is_show_logo_marque' => $request->is_show_logo_marque,
                    'is_show_blog_section' => $request->is_show_blog_section,
                    'is_show_testimonial' => $request->is_show_testimonial,
                    'faq_type' => $request->faq_type  ?? NULL,
                    'faq_id' => $request->faq_id  ?? NULL,
                ]);
                return redirect(route('admin.manage-sections.index'))->with('success','Add Successfull');
            } catch(\Exception $ex) {
                return redirect(route('admin.manage-sections.index'))->with('error', $ex->getMessage());
            }
        } else {
            return redirect(route('admin.manage-sections.index'))->with('error', $validator->errors());
            
        }
    }

    public function edit($id)
    {
        try {
            $pages = Page::all();
            $faqs = Faq::with('page')->groupBy('page_id')->get();
            $setting = SectionSetting::findOrFail($id);
            return response()->json([
                "success" => true,
                "html" => view('admin.setting.ajax.edit-section')->with([
                    'setting' => $setting,
                    'faqs' => $faqs,
                    'pages'=>$pages
                ])->render(),
            ]);
        } catch(\Exception $ex){
            return response()->json([
                "success" => false,
                'msgText' =>$ex->getMessage(),
            ]);
        }
    }

    
    public function update(Request $request , $id)
    {
        $requestData = $request->all();
        $validator = Validator::make($requestData, [
            'page_slug' => [ "required",Rule::unique('section_settings')->ignore($id),"max:255"],
            'is_show_faq_form' => 'required',
            'is_show_blog_section' => 'required',
            'is_show_logo_marque' => 'required',
            'is_show_testimonial' => 'required',
            'faq_type' => 'nullable',
            'faq_id' => 'nullable',
        ]);
        if ($validator->passes()) {
            try {
                $category = SectionSetting::findOrFail($id);
                $data = array(
                    'page_slug' => $request->page_slug,
                    'is_show_faq_form' => $request->is_show_faq_form,
                    'is_show_logo_marque' => $request->is_show_logo_marque,
                    'is_show_blog_section' => $request->is_show_blog_section,
                    'is_show_testimonial' => $request->is_show_testimonial,
                    'faq_type' => $request->faq_type ?? NULL,
                    'faq_id' => $request->faq_id ?? NULL,
                );

                $category->update($data);
                return redirect(route('admin.manage-sections.index'))->with('success','Update Successfull');
            } catch(\Exception $ex) {
                return redirect(route('admin.manage-sections.index'))->with('error', $ex->getMessage());
            }
        } else {
            return redirect(route('admin.manage-sections.index'))->with('error', $validator->errors());
        }
    }

   
    public function destroy($id)
    {
        try {
            $category = SectionSetting::findOrFail($id);
            
            

            $category->delete();
            return response()->json([
                'success' => true,
            ]);
        } catch(\Exception $ex) {
            return response()->json([
                'success' => false,
                'msgText' => $ex->getMessage(),
            ]);
        }
    }
}

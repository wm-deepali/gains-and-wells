<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::latest()->get();
        return view('admin.pages.index')->with([
            'pages' => $pages
        ]);
    }

    public function create()
    {
        try{
            return response()->json([
                "success" => true,
                "html" => view('admin.pages.ajax.create')->render(),
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
        $requestData = $request->all();
        $validator = Validator::make($requestData, [
            'title' => 'required|unique:pages|max:255',
            'slug' => 'required|unique:pages|max:255' 
       ]);
        if ($validator->passes()) {
            try {
                Page::create([
                    'title' => $request->title,
                    'slug' => $request->slug
                ]);
                return redirect(route('admin.manage-pages.index'))->with('success','Add Successfull');
            } catch(\Exception $ex) {
                return redirect(route('admin.manage-pages.index'))->with('error','Error Encountered '.$ex->getMessage());
            }
        } else {
            return redirect(route('admin.manage-pages.index'))->with('error','Error Encountered '.$validator->errors());
        
        }
        
    }

    public function edit($id)
    {
        try {
            $page = Page::findOrFail($id);
            return response()->json([
                "success" => true,
                "html" => view('admin.pages.ajax.edit')->with([
                    'page' => $page
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
        $page = Page::findOrFail($id);
        $requestData = $request->all();
        $validator = Validator::make($requestData, [
            'title' => [ "required",Rule::unique('pages')->ignore($id),"max:255"],
            'slug' => [ "required",Rule::unique('pages')->ignore($id),"max:255"],
            
            
        ]);
        if ($validator->passes()) {
        
            try {
                
                $page->update([
                    'title' => $request->title,
                    'slug' => $request->slug
            ]);
                return redirect(route('admin.manage-pages.index'))->with('success','Update Successfull');
            } catch(\Exception $ex) {
                return redirect(route('admin.manage-pages.index'))->with('error','Error Encountered '.$ex->getMessage());
            }
        }
        else{
            return redirect(route('admin.manage-pages.index'))->with('error','Error Encountered '.$validator->errors());
        }
    }

    public function destroy($id)
    {
        try {
            $page = Page::findOrFail($id);
            $page->delete();
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

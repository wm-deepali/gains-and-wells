<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoMeta;
use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SeoMetaController extends Controller
{
 public function index()
    {
        $pages = SeoMeta::latest()->get();
        return view('admin.seo.index')->with([
            'pages' => $pages
        ]);
    }

    public function create()
    {
        $pages = Page::all();
        try{
            return response()->json([
                "success" => true,
                "html" => view('admin.seo.ajax.create')->with([
                    'pages' => $pages

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
        $requestData = $request->all();
        $request->replace($requestData);
        
        $validator = Validator::make($requestData, [
            'page_slug' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);
        if ($validator->passes()) {
            try {

                $seo = SeoMeta::create([
                    'page_slug' => $request->page_slug,
                    'meta_title' => $request->meta_title,
                    'meta_keyword'=>$request->meta_keyword,
                    'meta_description' => $request->meta_description,
                    'scripts_text' => $request->scripts_text  ?? NULL,
                ]);
                
                return response()->json([
                    'success' => true,
                    'msgText' => 'Created',
                ]);
            } catch(\Exception $ex) {
                return response()->json([
                    'success' => false,
                    'code' => 400,
                    'msgText' => $ex->getMessage(),
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'code' => 422,
                'errors' => $validator->errors(),
            ]);
        }
    }

    public function edit($id)
    {
        try {
            $pages = Page::all();
            $seo = SeoMeta::findOrFail($id);
            return response()->json([
                "success" => true,
                "html" => view('admin.seo.ajax.edit')->with([
                    'seo' => $seo,
                    'pages' => $pages
                ])->render(),
            ]);
        } catch(\Exception $ex) {
            return response()->json([
                "success" => false,
                'msgText' =>$ex->getMessage(),
            ]);
        }
    }

    public function update(Request $request , $id)
    {
        $requestData = $request->all();
        $request->replace($requestData);
        $validator = Validator::make($requestData, [
            'page_slug' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
        ]);
        if ($validator->passes()) {
            try{
                $seo = SeoMeta::findOrFail($id);
                $data = array(
                    'page_slug' => $request->page_slug,
                    'meta_title' => $request->meta_title,
                    'meta_keyword' => $request->meta_keyword,
                    'meta_description' => $request->meta_description,
                    'scripts_text' => $request->scripts_text  ?? NULL,
                );
            
                $seo->update($data);
                return response()->json([
                    'success' => true,
                    'msgText' => 'Updated',
                ]);
            } catch(\Exception $ex) {
                return response()->json([
                    'success' => false,
                    'code' => 400,
                    'msgText' => $ex->getMessage(),
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'code' => 422,
                'errors' => $validator->errors(),
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $seo = SeoMeta::findOrFail($id);
            $seo->delete();
            return response()->json([
                'success' => true,
            ]);
        } catch(\Exception $ex){
            DB::rollback();
            return response()->json([
                'success' => false,
                'msgText' => $ex->getMessage(),
            ]);     
        }
    }
}
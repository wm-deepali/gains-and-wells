<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index')->with([
            'testimonials' => $testimonials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            return response()->json([
                "success" => true,
                "html" => view('admin.testimonials.ajax.create')->render(),
            ]);
        }
        catch(\Exception $ex){
            return response()->json([
                "success" => false,
                'msgText' =>$ex->getMessage(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $requestData = $request->all();
        $requestData['url'] = Str::slug($request->url, '-');
        $request->replace($requestData);
        $validator = Validator::make($requestData, [
            'name' => 'required|max:60',
            'project' => 'required',
            'designation' => 'required',
            'contents' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
        ]);
        if ($validator->passes()) {
            try {

                 //For image
                $file = $request->file('image');
                $path = public_path(). '/storage/testimonials/';
                $filename = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move($path, $filename);   


                Testimonial::create([
                    'name' => $request->name,
                    'designation' => $request->designation,
                    'project' => $request->project,
                    'contents' => $request->contents,
                    'image' => $filename,
                    'status' => $request->status,
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
            $testimonial = Testimonial::findOrFail($id);
            return response()->json([
                "success" => true,
                "html" => view('admin.testimonials.ajax.edit')->with([
                    'testimonial' => $testimonial
                ])->render(),
            ]);
        } catch(\Exception $ex){
            return response()->json([
                "success" => false,
                'msgText' =>$ex->getMessage(),
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $requestData = $request->all();
        $requestData['url'] = Str::slug($request->url, '-');
        $request->replace($requestData);
        $validator = Validator::make($requestData, [
            'name' => 'required|max:60',
            'contents' => 'required',
            'project' => 'required',
            'designation' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
           
        ]);
        if ($validator->passes()) {
            try {
                $testimonial = Testimonial::findOrFail($id);
                $data = array(
                    'name' => $request->name,
                    'designation' => $request->designation,
                    'project' => $request->project,
                    'contents' => $request->contents,
                    'status' => $request->status,
                );

                //For Image
                if($request->hasFile('image')){
                    //For image
                    $file = $request->file('image');
                    $path = public_path(). '/storage/testimonials/';
                    $file_img='storage/testimonials/'.$testimonial->image;
                    
                    if(isset($testimonial->image) && File::exists($file_img))
                    {File::delete($file_img);}

                    $filename = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                    $file->move($path, $filename);   
                    $data['image'] = $filename;
                }


                $testimonial->update($data);
                return response()->json([
                    'success' => true,
                    'msgText' => 'Blog Updated',
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            
            $file_img='storage/testimonials/'.$testimonial->image;
            if(isset($testimonial->image) && File::exists($file_img))
            {File::delete($file_img);}


            $testimonial->delete();
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

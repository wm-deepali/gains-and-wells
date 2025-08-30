<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactPage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class ProfileSettingController extends Controller
{
    public function index()
    {
        $contacts = ContactPage::first();
        return view('admin.profile-setting.index')->with([
            'contacts' => $contacts
        ]);
    }
     public function store(Request $request)
    {
        $requestData = $request->all(); 
        $requestData['url'] = Str::slug($request->url, '-');
        $request->replace($requestData);
        $validator = Validator::make($requestData, [
           // 'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_alt' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'whatsapp_number' => 'required',
            'address' => 'required',
            'cin' => 'required',
            'map' => 'required',
            'url' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            
        ]);
        if ($validator->passes()) {
            try {
                $data = array(
                    'banner_alt'            => $request->banner_alt,
                    'email'                 => $request->email,
                    'banner_title'          => $request->banner_title,
                    'banner_button_name'    => $request->banner_button_name,
                    'banner_button_link'    => $request->banner_button_link,
                    'heading'    => $request->heading,
                    'mobile_number'         => $request->mobile_number,
                    'whatsapp_number'   => $request->whatsapp_number,
                    'address'           => $request->address,
                    'map'               => $request->map,
                    'url'               => $request->url,
                    'meta_title'        => $request->meta_title,
                    'meta_keyword'      => $request->meta_keyword,
                    'meta_description'  => $request->meta_description,
                    'cin'               => $request->cin,
                    
                );
                
            ContactPage::updateOrCreate(['id' => 1],$data);

            $brand = ContactPage::findOrFail(1);
            if($request->hasFile('banner'))
            {
                //For image
                $file = $request->file('banner');
                $path = public_path(). '/storage/contactus/';
                if($brand->banner!=null)
                {
                    $file_img='storage/contactus/'.$brand->banner;
                    File::delete($file_img);
                }
                $filename = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move($path, $filename);   
                $brand->banner = $filename;
                $brand->save();
            }
            
            return response()->json([
                    'success' => true,
                    'msgText' => 'Updated successfully ! ',
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
}

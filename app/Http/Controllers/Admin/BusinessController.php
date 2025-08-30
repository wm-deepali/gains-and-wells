<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;


class  BusinessController extends Controller
{
    public function index()
    {
        $business = Business::latest()->get();
        return view('admin.business.index')->with([
            'business' => $business
        ]);
    }

    public function create()
    {
        try{
         
            return response()->json([
                "success" => true,
                "html" =>view('admin.business.ajax.create')->render(),
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
        try{
            Business::create([
                'Business_name' => $request->Business_name,
                'status' => $request->status,
              
            ]);
            return redirect(route('admin.manage-business.index'))->with('success','Add Successfull');
        } catch(\Exception $ex) {
            return redirect(route('admin.manage-business.index'))->with('error','Error Encountered '.$ex->getMessage());
        }
    }

    public function edit($id)
    {

         
        try {
            $state = Business::findOrFail($id);
           
            return response()->json([
                "success" => true,
                "html" =>view('admin.business.ajax.edit')->with([
                    'state' => $state
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
        $state = Business::findOrFail($id);
        try {
            
            $state->update([
                 'Business_name' => $request->Business_name,
                'status' => $request->status,
            ]);
            return redirect(route('admin.manage-business.index'))->with('success','Update Successfull');
        } catch(\Exception $ex) {
            return redirect(route('admin.manage-business.index'))->with('error','Error Encountered '.$ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $state = Business::findOrFail($id);
            $state->delete();
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

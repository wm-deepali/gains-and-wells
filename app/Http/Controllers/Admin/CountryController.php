<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::latest()->get();
        return view('admin.countries.index')->with([
            'countries' => $countries
        ]);
    }

    public function create()
    {
        try{
            return response()->json([
                "success" => true,
                "html" => view('admin.countries.ajax.create')->render(),
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
            Country::create([
                'code' => $request->code,
                'name' => $request->name,
                'phonecode' => $request->phonecode,
            ]);
            return redirect(route('admin.manage-country.index'))->with('success','Add Successfull');
        } catch(\Exception $ex) {
            return redirect(route('admin.manage-country.index'))->with('error','Error Encountered '.$ex->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $country = Country::findOrFail($id);
            return response()->json([
                "success" => true,
                "html" => view('admin.countries.ajax.edit')->with([
                    'country' => $country
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
        $country = Country::findOrFail($id);
        try {
            
            $country->update([
                'code' => $request->code,
                'name' => $request->name,
                'phonecode' => $request->phonecode,
            ]);
            return redirect(route('admin.manage-country.index'))->with('success','Update Successfull');
        } catch(\Exception $ex) {
            return redirect(route('admin.manage-country.index'))->with('error','Error Encountered '.$ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $country = Country::findOrFail($id);
            $country->delete();
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

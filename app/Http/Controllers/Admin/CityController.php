<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::with('state')->latest()->get();
        return view('admin.cities.index')->with([
            'cities' => $cities
        ]);
    }

    public function create()
    {
        $states = State::all();
        try{
            return response()->json([
                "success" => true,
                "html" => view('admin.cities.ajax.create')->with([
                    "states" => $states
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
        try{
            State::create([
                'state_id' => $request->state_id,
                'name' => $request->name,
            ]);
            return redirect(route('admin.manage-city.index'))->with('success','Add Successfull');
        } catch(\Exception $ex) {
            return redirect(route('admin.manage-city.index'))->with('error','Error Encountered '.$ex->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $city = City::findOrFail($id);
            $states = State::all();
            return response()->json([
                "success" => true,
                "html" => view('admin.cities.ajax.edit')->with([
                    'city' => $city,
                    'states' => $states
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
        $city = City::findOrFail($id);
        try {
            
            $city->update([
                'state_id' => $request->state_id,
                'name' => $request->name,
            ]);
            return redirect(route('admin.manage-city.index'))->with('success','Update Successfull');
        } catch(\Exception $ex) {
            return redirect(route('admin.manage-city.index'))->with('error','Error Encountered '.$ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $city = City::findOrFail($id);
            $city->delete();
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

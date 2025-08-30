<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;

class StateController extends Controller
{
    public function index()
    {
        $states = State::with('country')->latest()->get();
        return view('admin.states.index')->with([
            'states' => $states
        ]);
    }

    public function create()
    {
        try{
            $countries = Country::all();
            return response()->json([
                "success" => true,
                "html" => view('admin.states.ajax.create')->with([
                    "countries" => $countries
                ])->render()
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
                'code' => $request->code,
                'name' => $request->name,
                'phonecode' => $request->phonecode,
            ]);
            return redirect(route('admin.manage-state.index'))->with('success','Add Successfull');
        } catch(\Exception $ex) {
            return redirect(route('admin.manage-state.index'))->with('error','Error Encountered '.$ex->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $state = State::findOrFail($id);
            $countries = Country::all();
            return response()->json([
                "success" => true,
                "html" => view('admin.states.ajax.edit')->with([
                    'state' => $state,
                    'countries' => $countries
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
        $state = State::findOrFail($id);
        try {
            
            $state->update([
                'code' => $request->code,
                'name' => $request->name,
                'phonecode' => $request->phonecode,
            ]);
            return redirect(route('admin.manage-state.index'))->with('success','Update Successfull');
        } catch(\Exception $ex) {
            return redirect(route('admin.manage-state.index'))->with('error','Error Encountered '.$ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $state = State::findOrFail($id);
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

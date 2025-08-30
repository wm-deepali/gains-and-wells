<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\GeneralSetting;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Hash;
use App\Models\User;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $general_setting = GeneralSetting::first();
        $states = State::where('country_id',101)->get();
        $cities = City::where('state_id',$general_setting->state_id ?? Null)->get();
        return view('admin.general-setting.index')->with([
            'general_setting' => $general_setting,
            'states' => $states,
            'cities' => $cities,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'mobile_number' => 'required',
            'address' => 'required',
            'map' => 'required',
            'url'=> 'required',
            'meta_title'=> 'required',
            'meta_keyword'=> 'required',
            'meta_description'=> 'required',
            
        ]);
        try {
            $data = array(
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
                'address' => $request->address,
                'map' => $request->map,
                'url'=> $request->url,
                'meta_title'=> $request->meta_title,
                'meta_keyword'=> $request->meta_keyword,
                'meta_description'=> $request->meta_description,
                
            );
            
            GeneralSetting::updateOrCreate(['id' => 1],$data);
             return redirect()->back()->with('success', 'Data details Updated successfully!');
        } catch (\Exception $ex) {
            return redirect(route('admin.profile-setting.index'))->with('error',$ex->getMessage());
        }
    }

    
    //Change Password

    public function resetPassword(Request $request)
     {
       $request->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success', 'Your password has been changed successfully!');
     }
}
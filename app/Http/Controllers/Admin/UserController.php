<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientProfile;
use App\Models\ClientBankDetails;
use App\Models\ClientEnterPriceCompany;
use App\Models\ClientRole;
use App\Models\Country;
use App\Models\PartnerRegistrationFrom;
use App\Models\StartupListingRegistration;
use App\Models\StratupSellRegistrationFrom;
use Illuminate\Support\Facades\Hash;
use App\Models\State;
use App\Models\City;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    public function index()
    {
        $user =  ClientProfile::with('client_role', 'countary')->get();
        //dd($user);
        return view('admin.user-manage.index', compact('user'));
    }

    public function user_status_update($id)
    {
        $user =  ClientProfile::where('id', $id)->first();
        if ($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->update();
        return redirect()->back();
    }

    public function user_password_update(Request $request)
    {
        $user =  ClientProfile::where('id', $request->id)->first();
        $user->password = Hash::make($request->new_password);
        $user->update();
        return redirect()->back();
    }

    public function user_view(Request $request, $id)
    {
        $user =  ClientProfile::with('client_role', 'countary', 'state', 'city', 'bankdetails')->where('id', $id)->first();

        return view('admin.user-manage.user-view', compact('user'));
    }
    public function partner_registration_list()
    {
        $partner =  PartnerRegistrationFrom::with('countary')->get();

        return view('admin.user-manage.partner-registration-list', compact('partner'));
    }
    public function starup_listing_registration()
    {
        $startup_list =  StartupListingRegistration::with('startupcategory')->get();

        return view('admin.user-manage.starup-listing-registration', compact('startup_list'));
    }
    public function startup_sell_registration_list()
    {
        $startup_list_sell =  StratupSellRegistrationFrom::with('startupcategory')->get();

        return view('admin.user-manage.startup-sell-registration-list', compact('startup_list_sell'));
    }

    public function investor_view(Request $request, $id)
    {
        $invester = ClientRole::with('client', 'bankdetails')->where('invester', 1)->where('id', $id)->first();
        return view('admin.user-manage.dashboard.invester-view', compact('invester'));
    }

    public function startups_view(Request $request, $id)
    {
        $startup = ClientRole::with('client', 'bankdetails')->where('startup', 1)->where('id', $id)->first();

        return view('admin.user-manage.dashboard.startups-view', compact('startup'));
    }
    public function seller_view(Request $request, $id)
    {
        $seller = ClientRole::with('client', 'bankdetails')->where('seller', 1)->where('id', $id)->first();

        return view('admin.user-manage.dashboard.seller-view', compact('seller'));
    }
    public function buyer_view(Request $request, $id)
    {
        $buyer = ClientRole::with('client', 'bankdetails')->where('buyer', 1)->where('id', $id)->first();

        return view('admin.user-manage.dashboard.buyer-view', compact('buyer'));
    }

    public function partner_registration_view(Request $request, $id)
    {
        $partner =  PartnerRegistrationFrom::with('countary', 'states', 'citys')->where('id', $id)->first();
        //   dd($partner);
        return view('admin.user-manage.partner-view.partner-view', compact('partner'));
    }

    public function starup_listing_registration_view(Request $request, $id)
    {
        $startup_list =  StartupListingRegistration::with('startupcategory', 'client', 'comapanytype')->where('id', $id)->first();

        return view('admin.user-manage.startup-view.startup-view', compact('startup_list'));
    }

    public function startup_sell_registration_list_view(Request $request, $id)
    {
        $startup_list_sell =  StratupSellRegistrationFrom::with('startupcategory', 'client', 'comapanytype')->where('id', $id)->first();

        return view('admin.user-manage.startup-sell-view.startup-sell-view', compact('startup_list_sell'));
    }

    // user edit

    public function user_edit(Request $request, $id)
    {
        $user =  ClientProfile::with('client_role', 'countary', 'state', 'city', 'bankdetails')->where('id', $id)->first();
        $countries = Country::get();
        $state = State::where('country_id', $user->country)->get();
        $city = City::where('state_id', $user->state)->get();

        return view('admin.user-manage.user-edit', compact('user', 'countries', 'state', 'city'));
    }

    public function user_update(Request $request, $id)
    {
        $user =  ClientProfile::where('id', $id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->pincode = $request->pincode;
        $user->aadhar_name = $request->aadhar_no;
        $user->pancard_name = $request->pancard_no;

        if ($request->hasFile('profile_pic')) {
            //For image
            $file1234 = $request->file('profile_pic');
            $path1234 = public_path() . '/storage/client/profile-pic/';
            if ($user->profile_pic != null) {
                $file_img1234 = 'storage/client/profile-pic/' . $user->profile_pic;
                File::delete($file_img1234);
            }
            $filename1234 = md5($file1234->getClientOriginalName() . time()) . "." . $file1234->getClientOriginalExtension();
            $file1234->move($path1234, $filename1234);
            $user->profile_pic = $filename1234;
        }

        if ($request->hasFile('aadhar_doc')) {
            //For image
            $file1234 = $request->file('aadhar_doc');
            $path1234 = public_path() . '/storage/client/aadharcard/';
            if ($user->aadhar_path != null) {
                $file_img1234 = 'storage/client/aadharcard/' . $user->aadhar_path;
                File::delete($file_img1234);
            }
            $filename1234 = md5($file1234->getClientOriginalName() . time()) . "." . $file1234->getClientOriginalExtension();
            $file1234->move($path1234, $filename1234);
            $user->aadhar_path = $filename1234;
        }

        if ($request->hasFile('pancard_doc')) {
            //For image
            $file1234 = $request->file('pancard_doc');
            $path1234 = public_path() . '/storage/client/pancard/';
            if ($user->pancard_path != null) {
                $file_img1234 = 'storage/client/pancard/' . $user->pancard_path;
                File::delete($file_img1234);
            }
            $filename1234 = md5($file1234->getClientOriginalName() . time()) . "." . $file1234->getClientOriginalExtension();
            $file1234->move($path1234, $filename1234);
            $user->pancard_path = $filename1234;
        }

        $user->update();
        return redirect()->route('admin.user.index');
    }

    public function user_state(Request $request)
    {
        $subcategories = State::where('country_id', $request->category)->get();
        return response()->json([
            'status' => 'success',
            'subcategories' => $subcategories,
        ]);
    }
    public function user_city(Request $request)
    {
        $subcategories = City::where('state_id', $request->category)->get();

        return response()->json([
            'status' => 'success',
            'subcategories' => $subcategories,
        ]);
    }

    // public function bank_details_view(Request $request, $id)
    // {
    //     $startup_list_sell =  StratupSellRegistrationFrom::with('startupcategory', 'client', 'comapanytype')->where('id', $id)->first();

    //     return view('admin.user-manage.startup-sell-view.startup-sell-view', compact('startup_list_sell'));
    // }
}

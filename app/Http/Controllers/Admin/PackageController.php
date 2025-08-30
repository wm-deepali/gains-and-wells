<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Page;
use App\Models\PackageEnquiry;



class  PackageController extends Controller
{
    public function index()
    {
       $offer = Package::with('page')->latest()->get();;
       
        return view('admin.packages.index')->with([
            'offer' => $offer
        ]);
    }

    public function create()
{
    try {
        $pages = Page::all();

        return response()->json([
            "success" => true,
            "html" => view('admin.packages.ajax.create', compact('pages'))->render(),
        ]);
    } catch (\Exception $ex) {
        return response()->json([
            "success" => false,
            'msgText' => $ex->getMessage(),
        ]);
    }
}



public function store(Request $request)
{
    // Base validation rules
    $rules = [
        'name'           => 'required|string|max:255',
        'page_id'        => 'nullable|integer|exists:pages,id',
        'price_required' => 'required|in:yes,no',
        'show_on_home'   => 'nullable|in:0,1',
        'services'       => 'nullable|array',
        'services.*'     => 'nullable|string|max:255',
        'watsup_no'      => 'nullable|string|max:20',
        'call_no'        => 'nullable|string|max:20',
    ];

    // If price is required, force validation for MRP/Discount/Offered Price
    if ($request->price_required === 'yes') {
        $rules['mrp']           = 'required|numeric|min:0';
        $rules['discount']      = 'required|numeric|min:0|max:100';
        $rules['offered_price'] = 'required|numeric|min:0';
    } else {
        // If not required, they can be nullable
        $rules['mrp']           = 'nullable|numeric|min:0';
        $rules['discount']      = 'nullable|numeric|min:0|max:100';
        $rules['offered_price'] = 'nullable|numeric|min:0';
    }

    $request->validate($rules);

    try {
        Package::create([
            'name'           => $request->name,
            'page_id'        => $request->page_id,
            'price_required' => $request->price_required,
            'mrp'            => $request->mrp,
            'discount'       => $request->discount,
            'offered_price'  => $request->offered_price,
            'show_on_home'   => $request->show_on_home ?? 0,
            'watsup_no'      => $request->watsup_no,
            'call_no'        => $request->call_no,
            'services'       => json_encode($request->services),
        ]);

        return redirect()
            ->route('admin.manage-packages.index')
            ->with('success', 'Package created successfully!');
    } catch (\Exception $ex) {
        return redirect()
            ->route('admin.manage-packages.index')
            ->with('error', 'Error: ' . $ex->getMessage());
    }
}





public function edit($id)
{
    try {
        $package = Package::findOrFail($id);  
        $pages = Page::all();

        return response()->json([
            "success" => true,
            "html" => view('admin.packages.ajax.edit')->with([
                'package' => $package,  
                'pages' => $pages
            ])->render(),
        ]);
    } catch (\Exception $ex) {
        return response()->json([
            "success" => false,
            'msgText' => $ex->getMessage(),
        ]);
    }
}


    
   
public function update(Request $request, $id)
{
    $package = Package::findOrFail($id);

    // Build validation rules dynamically
    $rules = [
        'name'          => 'required|string|max:255',
        'page_id'       => 'required|exists:pages,id',
        'price_required'=> 'required|in:yes,no',
        'show_on_home'  => 'nullable|in:0,1',
        'services'      => 'nullable|array',
        'services.*'    => 'nullable|string|max:255',
        'watsup_no'     => 'nullable|string|max:20',
        'call_no'       => 'nullable|string|max:20'
    ];

    // If price_required = yes, then require MRP/Discount/Offered Price
    if ($request->price_required === 'yes') {
        $rules['mrp']           = 'required|numeric|min:0';
        $rules['discount']      = 'required|numeric|min:0|max:100';
        $rules['offered_price'] = 'required|numeric|min:0';
    } else {
        // Optional when price_required = no
        $rules['mrp']           = 'nullable|numeric|min:0';
        $rules['discount']      = 'nullable|numeric|min:0|max:100';
        $rules['offered_price'] = 'nullable|numeric|min:0';
    }

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        $updateData = [
            'name'           => $request->name,
            'page_id'        => $request->page_id,
            'price_required' => $request->price_required,
            'mrp'            => $request->mrp,
            'discount'       => $request->discount,
            'offered_price'  => $request->offered_price,
            'show_on_home'   => $request->show_on_home ?? 0,
            'watsup_no'      => $request->watsup_no,
            'call_no'        => $request->call_no,
            'services'       => json_encode($request->services),
        ];

        $package->update($updateData);

        return redirect()->route('admin.manage-packages.index')
                         ->with('success', 'Package updated successfully.');
    } catch (\Exception $ex) {
        return redirect()->route('admin.manage-packages.index')
                         ->with('error', 'Error: ' . $ex->getMessage());
    }
}



    public function destroy($id)
    {
        try {
            $state = Package::findOrFail($id);
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

    public function packagedeatils()
    {
       $offerdeatils = PackageEnquiry::with('package')->with('page')->latest()->get();
       
     // dd($offerdeatils);
        return view('admin.packagedeatils.index')->with([
            'offerdeatils' => $offerdeatils
        ]);
    }
    public function packagedeatilsdelete($id)
    {
        try {
            $state = PackageEnquiry::findOrFail($id);
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

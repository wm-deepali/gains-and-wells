<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceEnquiry;
use App\Models\Page;




class  ServiceController extends Controller
{
    public function index()
    {
      $offer = ServiceEnquiry::with(['service', 'page'])->latest()->get();

       
        return view('admin.servicers.index')->with([
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
    $request->validate([
        'name' => 'required|string|max:255',
        'page_id' => 'nullable|integer',
        'mrp' => 'required|numeric',
        'discount' => 'required|numeric',
        'offered_price' => 'required|numeric',
        'show_on_home' => 'nullable|in:0,1',
    ]);

   

    Package::create([
        'name' => $request->name,
        'page_id' => $request->page_id,
        'mrp' => $request->mrp,
        'discount' => $request->discount,
        'offered_price' => $request->offered_price,
        'show_on_home' => $request->show_on_home,
        'services' => json_encode($request->services), 
    ]);

    return redirect()->route('admin.manage-packages.index')->with('success', 'Package created successfully!');
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

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'page_id' => 'required|exists:pages,id',
        'mrp' => 'required|numeric|min:0',
        'discount' => 'required|numeric|min:0|max:100',
        'offered_price' => 'required|numeric|min:0',
        'show_on_home' => 'nullable|in:0,1',
        'services' => 'nullable|array',
        'services.*' => 'nullable|string|max:255',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        $updateData = [
            'name' => $request->name,
            'page_id' => $request->page_id,
            'mrp' => $request->mrp,
            'discount' => $request->discount,
            'offered_price' => $request->offered_price,
            'show_on_home' => $request->show_on_home ?? 0,
            'services' => json_encode($request->services),
        ];

        $package->update($updateData);

        return redirect()->route('admin.manage-packages.index')->with('success', 'Package updated successfully.');
    } catch (\Exception $ex) {
        return redirect()->route('admin.manage-packages.index')->with('error', 'Error: ' . $ex->getMessage());
    }
}




    public function destroy($id)
    {
        try {
            $state = ServiceEnquiry::findOrFail($id);
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
       $offerdeatils = PackageEnquiry::with('package.page')->latest()->get();
        return view('admin.packagedeatils.index')->with([
            'offerdeatils' => $offerdeatils
        ]);
    }
    

}

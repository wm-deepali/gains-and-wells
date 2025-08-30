<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\PackageEnquiry;
use App\Models\ContactUs;

class  ContactController extends Controller
{
    public function index()
    {
      $contacts = ContactUs::latest()->get();
        return view('admin.contact.index')->with([
            'offerdeatils' => $contacts
        ]);
    }

    public function create()
    {
        try{
         
            return response()->json([
                "success" => true,
                "html" =>view('admin.offers.ajax.create')->render(),
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
    $validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'required|in:0,1', 
    ]);

    if ($validator->fails()) {
        dd($validator->errors()); 
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    try {
        $image = $request->file('image');
        $filename = md5($image->getClientOriginalName() . time()) . '.' . $image->getClientOriginalExtension();

        $path = public_path('storage/blogs/');
        if (!file_exists($path)) {
            mkdir($path, 0775, true);
        }

        $image->move($path, $filename);

        Offer::create([
            'name' =>$request->name,
            'image' => $filename,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.manage-offers.index')
            ->with('success', 'Offer added successfully!');
    } catch (\Exception $ex) {
        dd($ex->getMessage()); 
    }
}




    
    public function edit($id)
    {

         
        try {
            $state = Offer::findOrFail($id);
           
            return response()->json([
                "success" => true,
                "html" =>view('admin.offers.ajax.edit')->with([
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



    
  public function update(Request $request, $id)
{
    $offer = Offer::findOrFail($id);

    $validator = Validator::make($request->all(), [
        
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'required|in:0,1',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        $updateData = [
            'name' => $request->name,
            'status' => $request->status,
        ];

       
        if ($request->hasFile('image')) {
            // Delete old image (optional)
            $oldImagePath =public_path('storage/blogs/' . $offer->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Upload new image
            $file = $request->file('image');
            $filename = md5($file->getClientOriginalName() . time()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/blogs/'), $filename);

            $updateData['image'] = $filename;
        }

        $offer->update($updateData);

        return redirect()->route('admin.manage-offers.index')->with('success', 'Update Successful');
    } catch (\Exception $ex) {
        return redirect()->route('admin.manage-offers.index')
            ->with('error', 'Error: ' . $ex->getMessage());
    }
}


    public function destroy($id)
    {
        try {
            $state = Offer::findOrFail($id);
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

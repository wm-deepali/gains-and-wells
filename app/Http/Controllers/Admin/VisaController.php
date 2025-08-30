<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visa;
use App\Models\Business;

class  VisaController extends Controller
{
   public function index()
{
    $visas = Visa::with('business')->latest()->get();

    return view('admin.visa.index', [
        'visa' => $visas
    ]);
}

   public function create()
{
    try {
        $businesses = Business::all();

        return response()->json([
            "success" => true,
            "html" => view('admin.visa.ajax.create', compact('businesses'))->render(),
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
   //dd($request->visa_costs);
    try {
        $request->validate([
            'visa_costs' => 'required|array',
            'visa_costs.*.business_id' => 'required|integer|exists:businesses,id',
            //'visa_costs.*.visa_count' => 'required|integer|min:1',
        ]);

        foreach ($request->visa_costs as $item) {
            if(isset($item))
            {
                Visa::create([
                    'business_id'     => $item['business_id'],
                    'quantity'        => $item['visa_count'],
                    'number_owner'    => $item['number_owner'],
                    'dubai_mainland'  => $item['costs']['dubai_mainland'],
                    'uae_offshore'    => $item['costs']['uae_offshore'],
                    'uae_freezone'    => $item['costs']['uae_freezone'],
                ]);
            }
        }

        return redirect()->route('admin.manage-visa.index')->with('success', 'Visa Cost(s) Added Successfully');
    } catch (\Exception $ex) {
       // dd($ex->getMessage());
        return redirect()->route('admin.manage-visa.index')->with('error', 'Error: ' . $ex->getMessage());
    }
}

  public function edit($id)
{
    try {
        $visaCosts = Visa::where('id', $id)->get();
        $businesses = Business::all();

        return response()->json([
            "success" => true,
            "html" => view('admin.visa.ajax.edit')->with([
                'visaCosts' => $visaCosts,
                'groupId' => $id,
                'businesses' => $businesses,
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
    //dd($request->visa_costs);
    try {
        foreach ($request->visa_costs as $item) {
            if (!empty($item['id'])) {
                $visa = Visa::find($item['id']);
                if ($visa) {
                    $visa->update([
                        'business_id'     => $item['business_id'],
                        'quantity'        => $item['quantity'],
                         'number_owner'    => $item['number_owner'],
                        'dubai_mainland'  => $item['dubai_mainland'],
                        'uae_offshore'    => $item['uae_offshore'],
                        'uae_freezone'    => $item['uae_freezone'],
                    ]);
                }
            }
        }

        return redirect()->route('admin.manage-visa.index')->with('success', 'Visa costs updated successfully.');
    } catch (\Exception $ex) {
        return redirect()->route('admin.manage-visa.index')->with('error', 'Error: ' . $ex->getMessage());
    }
}




    public function destroy($id)
    {
        try {
            $state = Visa::findOrFail($id);
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

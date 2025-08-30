<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visa;
use App\Models\Business;
use App\Models\Quotation;

class  QuotationController extends Controller
{
  public function index()
{
    $quotations = Quotation::with(['business', 'visa'])->latest()->get();

    return view('admin.quotation.index', [
        'quotations' => $quotations
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
    try {
        $request->validate([
            'visa_costs' => 'required|array',
            'visa_costs.*.business_id' => 'required|integer|exists:businesses,id',
            'visa_costs.*.quantity' => 'required|integer|min:1',
            'visa_costs.*.cost' => 'required|numeric|min:0',
        ]);

        foreach ($request->visa_costs as $item) {
            Visa::create([
                'business_id' => $item['business_id'],
                'quantity' => $item['quantity'],
                'cost' => $item['cost'],
            ]);
        }

        return redirect()->route('admin.manage-visa.index')
                         ->with('success', 'Visa Cost(s) Added Successfully');
    } catch (\Exception $ex) {
        return redirect()->route('admin.manage-visa.index')
                         ->with('error', 'Error Encountered: ' . $ex->getMessage());
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
    try {
        foreach ($request->visa_costs as $item) {
            if (!empty($item['id'])) {
                $visa = Visa::find($item['id']);
                if ($visa) {
                    $visa->update([
                        'business_id' => $item['business_id'],
                        'quantity' => $item['quantity'],
                        'cost' => $item['cost'],
                    ]);
                }
            }
        }

        return redirect(route('admin.manage-visa.index'))->with('success', 'Update Successful');
    } catch (\Exception $ex) {
        return redirect(route('admin.manage-visa.index'))->with('error', 'Error Encountered: ' . $ex->getMessage());
    }
}



    public function destroy($id)
    {
        try {
            $state = Quotation::findOrFail($id);
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

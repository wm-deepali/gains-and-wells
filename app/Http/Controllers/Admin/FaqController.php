<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Page; 
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\File;

class FaqController extends Controller 
{
   
    
    public function index()
{
    $faqs = Faq::with('page')->latest()->get();
    return view('admin.faqs.index', compact('faqs'));
}

    
    public function create()
    {
        try {
            $pages = Page::all();
            
            
            return response()->json([
                "success" => true,
                "html" => view('admin.faqs.ajax.create')->with([
                    'pages' => $pages

                ])->render(),
            ]);
        } catch(\Exception $ex) {
            return response()->json([
                "success" => false,
                'msgText' =>$ex->getMessage(),
            ]);
        }
    }


 public function store(Request $request)
{
    $request->validate([
        'is_default' => 'required|in:yes,no',
        'page_id'    => 'required_if:is_default,no|nullable',
        'question'   => 'required|string',
        'answer'     => 'required|string',
        'status'     => 'required|in:active,inactive', // optional but safer
    ]);

    try {
        Faq::create([
            'page_id'   => $request->is_default === 'no' ? $request->page_id : null,
            'question'  => $request->question,
            'answer'    => $request->answer,
            'status'    => $request->status,
            'is_default'=> $request->is_default,
        ]);
        return redirect(route('admin.manage-faq.index'))
            ->with('success', 'FAQ added successfully.');
    } catch(\Exception $ex) {
        return redirect(route('admin.manage-faq.index'))
            ->with('error','Error: '.$ex->getMessage());
    }
}
    

    public function edit($id)
    {
        try {
            $pages = Page::all();
            $faq = Faq::findOrFail($id);

            return response()->json([
                "success" => true,
                "html" => view('admin.faqs.ajax.edit')->with([
                    'faq' => $faq,
                    'pages'=>$pages
                    
                ])->render(),
            ]);
        } catch(\Exception $ex) {
            return response()->json([
                "success" => false,
                'msgText' => $ex->getMessage(),
            ]);
        }
    }

   
public function update(Request $request, $id)
{
    $request->validate([
        'is_default' => 'required|in:yes,no',
        'page_id'    => 'required_if:is_default,no|nullable',
        'question'   => 'required|string',
        'answer'     => 'required|string',
        'status'     => 'required|in:active,inactive',
    ]);

    try {
        $faq = Faq::findOrFail($id);
        $faq->update([
            'page_id'   => $request->is_default === 'no' ? $request->page_id : null,
            'question'  => $request->question,
            'answer'    => $request->answer,
            'status'    => $request->status,
            'is_default'=> $request->is_default,
        ]);

        return redirect(route('admin.manage-faq.index'))
            ->with('success', 'FAQ updated successfully.');
    } catch (\Exception $ex) {
        return redirect(route('admin.manage-faq.index'))
            ->with('error', 'Error: '.$ex->getMessage());
    }
}


    public function destroy($id)
    {
        try {
            $faq = Faq::findOrFail($id);
            $faq->delete();
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
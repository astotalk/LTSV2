<?php

namespace App\Http\Controllers\ProductManagament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Subcategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subcategory(Request $request)
    {


        $List = Category::all();
        $search = $request['search'] ?? "";
        if($search != ""){

            $subcategory = Subcategory::where('name', 'LIKE', "%$search%")->orWhere('category', 'LIKE', "%$search%")->get();
        }else{

            $subcategory = Subcategory::all();
        }
            
        $data =compact('subcategory','search','List');

        return view('LTS.ProductMangament.subcategory')->with($data);

       
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aadsubcategory(Request $request)
    {
        
        // $request->validate([
        //     'name' => 'required',
        //     'category' => 'category',
        
        // ]);
        $subcategory  = new Subcategory;
                  
        $subcategory->name = $request['name'];
        $subcategory->category = $request['category'];
        $subcategory->save();

        return redirect()->back()->with('status','Subcategory Has Been Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $sub_id)
       
    {
        $subcategory = Subcategory::find($sub_id);   

        return response()->json([
            'status'=>200,
            'subcategory' => $subcategory,
        ]);

        return view('LTS.ProductMangament.subcategory.edit', compact('subcategory'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // echo "<pre>"; print_r($request->all()); 
        //     die('');
    
        $sub_id = $request->input('sub_id');

        $subcategory = Subcategory::find($sub_id); 
        $subcategory->name = $request->input('name');
        $subcategory->category = $request->input('category');


        $subcategory->update(); 
        return redirect()->back()->with('status','Category Has Been updated successfully');
        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
                  // die('');
                  $subcategory = Subcategory::find($request->id)->delete();
     
                  return redirect()->back()->with('status','Subcategory Has Been delete successfully');
     
    }
}

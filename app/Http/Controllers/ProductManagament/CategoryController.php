<?php

namespace App\Http\Controllers\ProductManagament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request)
    {



        $search = $request['search'] ?? "";
        if($search != ""){

            $category = Category::where('category', 'LIKE', "%$search%")->get();
        }else{

            $category = Category::paginate(4);
          
        }
            
        $data =compact('category','search');

        return view('LTS.ProductMangament.category')->with($data);
      
       
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
    public function addcategory(Request $request)
    {
        $request->validate([
            'category' => 'required',
        
        ]);

        $category  = new Category;
                  
        $category->category_name = $request['category_name'];
        $category->save();

        return redirect()->back()->with('status','Category Has Been Create successfully');
       
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
    public function edit(Request $request, $cate_id)
       
    {
        $category = Category::find($cate_id);   

        return response()->json([
            'status'=>200,
            'category' => $category,
        ]);

        return view('LTS.ProductMangament.category.edit', compact('category'));
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
    
        $cate_id = $request->input('cate_id');

        $category = Category::find($cate_id); 
        $category->category_name = $request->input('category_name');

        $category->update(); 
        return redirect()->back();
        
        
    
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
                 $category = Category::find($request->id)->delete();
     
                 return redirect()->back()->with('status','Category Has Been delete successfully');
    
    }
}

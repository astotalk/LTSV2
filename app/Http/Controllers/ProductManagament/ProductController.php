<?php

namespace App\Http\Controllers\ProductManagament;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Product;
use App\Models\AddModelNumber;
use App\Models\Addbrand;

use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function product(Request $request){ 
           

            $addbrand = Addbrand::all();
           
        
            $categorylist['data'] = Category::orderby("id","asc")->select('id','category_name')->get();
         
            $search = $request['search'] ?? "";
            if($search != ""){
               
                $product = Product::where('product_model_name', 'LIKE', "%$search%")->get();
            }else{
               
             
                $product = Product::paginate(4);
     
            }
                
            $data =compact('product','search','categorylist','addbrand');
    
            return view('LTS.ProductMangament.product')->with($data);
    }

    public function categorychangedata(Request $request, $category_nameid=0)

    {
        $addbrand['data'] = Addbrand::orderby("id","asc")->select('id','brand_name')->where('id','category_name',$category_nameid)->get();
        return response()->json($addbrand); 

        dd($addbrand);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }
        

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function productstore(Request $request)
    {
        
        // echo "<pre>"; print_r($request->all()); 
        // die('cvn'); 

        $product  = new Product;
        $product->product_model_name = $request['product_model_name'];
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->brand_name = $request['brand_name'];
        $product->gst = $request['gst'];
        $product->inventory = $request['inventory'];
        $product->hsn = $request['hsn'];
        $product->product_type = $request['product_type'];
        $product->status = $request['status'];
        $product->description = $request['description'];
        $product->upload_image = $request['upload_image'];
        if($request->hasFile('upload_image')){
        $file = $request->file('upload_image');
        $extention = $file->getClientOriginalExtension();
        $file = time().'.'.$extention;
        $file->move('uploads/lts_assets/',$filename);
        $lts->profile_image = $filename;
        }
        $product->save(); 
        return redirect()->back()->with('status','Product Has Been Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function status_update(Request $request,$id)

    {
      $product = DB::table('product')->select('status')->where('id', '=' ,$id)->first();

        if($product->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }

       $values =  array('status' => $status );
    //    DB::table('product')->where('id',$id)->update($values)->get();
       $product = Product::where('id', $id)->update($values);
       session()->flash('status','Product Has Been updated successfully');
      
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $pro_id)
    {
    
    $product = Product::find($pro_id);   
    return response()->json([
        'status'=>200,
        'product' => $product,
        
    ]);

    return view('LTS.ProductMangament.product.edit', compact('product'));
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
//  echo "<pre>"; print_r($request->all()); 
//         die('cvn'); 
 
    $pro_id = $request->input('pro_id');
    $products = Product::find($pro_id); 
    $products->brand_name = $request->input('brand_name');
    $products->name = $request->input('name');
    $products->product_model_name = $request->input('product_model_name');
    $products->price = $request->input('price');
    $products->inventory = $request->input('inventory');
    $products->hsn = $request->input('hsn');
    $products->gst = $request->input('gst');
    $products->status = $request->input('status');

    $products->description = $request->input('description');
    $products->update(); 

    return redirect()->back()->with('status','Product Has Been updated successfully');
            
       
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
                  $products = Product::find($request->id)->delete();
     
                  return redirect()->back()->with('status','Product Has Been delete successfully');
}
}

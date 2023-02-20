<?php

namespace App\Http\Controllers\ClientMangament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addproduct;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AddproducttypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Addproducttype(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
           
            $addproduct = Addproduct::where('product_type', 'LIKE', "%$search%")->get();
        }else{

            $addproduct = Addproduct::paginate(3);
      
           
        }
            
        $data =compact('addproduct','search');

        return view('LTS.Clientmanagament.Addproducttype')->with($data);
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
    public function productadd(Request $request)
    {
        $product  = new Addproduct;
        $product->product_type = $request['product_type'];
        $product->status = $request->input('status');
        $product->save();
        return redirect()->back()->with('status','Client Has Been Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Request $request, $id)
    {
        $addproduct = Addproduct::find($id);
        
        return response()->json($addproduct);
       
    }
        

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $pro_id)
    {
        
        $addproduct = Addproduct::find($pro_id);
        return response()->json([
            'status'=>200,
            'addproduct' => $addproduct,
        ]);

        return view('LTS.Clientmanagament.Addproducttype.edit',compact('addproduct'));
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
            // die('');

        $pro_id  = $request->input('pro_id');
        $addproduct = Addproduct::find($pro_id);
        $addproduct->product_type = $request->input('product_type');
        $addproduct->status = $request->input('status');
        
        $addproduct->save();
        return redirect()->back()->with('status',' Has Been Update Product successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

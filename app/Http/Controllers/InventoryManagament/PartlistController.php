<?php

namespace App\Http\Controllers\InventoryManagament;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addpart;
use App\Models\ClientManagement;

use App\Models\Product;
class PartlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Partslist()
    {
        $clientmanagement = ClientManagement::all();
        $product = Product::all();
    

        $addpart_link = Addpart::all();

        return view('LTS.InventoryMangament.Partslist' ,compact('clientmanagement','product','addpart_link'));
      
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
    
            $addpart_link = Addpart::find($id);   
                 return response()->json([
            'status'=>200,
            'addpart_link' => $addpart_link,
    ]);

    return view('LTS.InventoryMangament.Partslist.edit', compact('addpart_link'));
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
    //         die(''); 
    
    $id = $request->input('id');
    $addpart_link = Addpart::find($id); 

    $addpart_link->client_name = $request->input('client_name');
    $addpart_link->product_type = $request->input('product_type');
    $addpart_link->part_name = $request->input('part_name');
    $addpart_link->part_cost = $request->input('part_cost');
    $addpart_link->part_code = $request->input('part_code');
    $addpart_link->update(); 

    return redirect()->back()->with('status','Add parts Update Has Been updated successfully');
            
       
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

<?php

namespace App\Http\Controllers\InventoryManagament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientManagement;

use App\Models\Addbrand;
use App\Models\Product;
use App\Models\Addpart;
use App\Models\Stockentry;

class StorEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stockentry()
    {

        $clientmanagement = ClientManagement::all();
        $product = Product::all();
        $addpart_link = Addpart::all();

       return view('LTS.InventoryMangament.stockentry' ,compact('clientmanagement','product','addpart_link'));
 
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
    public function stockentryaddstore(Request $request)
    {

        
    // echo "<pre>"; print_r($request->all()); 
    //         die(''); 
        $stockentry  = new Stockentry;
                  
        $stockentry->client_name = $request['client_name'];
        $stockentry->part_name = $request['part_name'];
        $stockentry->ReceivedDate = $request['ReceivedDate'];
        $stockentry->ReceivedBy = $request['ReceivedBy'];
        $stockentry->quantity = $request['quantity'];
        $stockentry->stock = $request['stock'];
        $stockentry->model_no = $request['model_no'];
        
        $stockentry->save();

        return redirect()->back()->with('status','Stockentry   Has Been Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

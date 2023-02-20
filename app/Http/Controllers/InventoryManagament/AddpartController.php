<?php

namespace App\Http\Controllers\InventoryManagament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientManagement;
use App\Models\Addbrand;
use App\Models\Product;
use App\Models\Addpart;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AddpartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Addpart(Request $request)
    {
        $clientmanagement = ClientManagement::all();
        $product = Product::all();
        $Addpart = Addpart::all();

       return view('LTS.InventoryMangament.Addpart' ,compact('clientmanagement','product','Addpart'));
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
    public function addpartstore(Request $request)
    {
        $Addpart  = new Addpart;
                  
        $Addpart->client_name = $request['client_name'];
        $Addpart->product_type = $request['product_type'];
        $Addpart->part_name = $request['part_name'];
        $Addpart->part_cost = $request['part_cost'];
        $Addpart->part_code = $request['part_code'];
        $Addpart->status = $request['status'];
        $Addpart->save();

        return redirect()->back()->with('status','Add part  Has Been Create successfully');
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

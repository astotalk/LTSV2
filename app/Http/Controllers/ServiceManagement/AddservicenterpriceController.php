<?php

namespace App\Http\Controllers\ServiceManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\AddServicenter;
use App\Models\AddServiceprice;


class AddservicenterpriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Addservicecenterpricelist(Request $request){ 

        $product = Product::all();
        $addservice = AddServicenter::all();
          $AddServiceprice = AddServiceprice::all(); 
           
        $data =compact('addservice','product','AddServiceprice');

        return view('LTS.Servisecentermanagement.Addservicecenterpricelist')->with($data);
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
    public function addpricestore(Request $request)
    {
      
        //    echo "<pre>"; print_r($request->all()); 
        //     die('');
        $AddServiceprice  = new AddServiceprice;
        $AddServiceprice->service_center_name = $request->input('service_center_name');
        $AddServiceprice->product_type = $request->input('product_type');
        $AddServiceprice->CallCharge = $request->input('CallCharge');
        $AddServiceprice->FreeKM = $request->input('FreeKM');
        $AddServiceprice->AmountAfterFreeKM = $request->input('AmountAfterFreeKM');
        $AddServiceprice->save();
        return redirect()->back()->with('status','AddServicenter Has Been Create successfully');
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

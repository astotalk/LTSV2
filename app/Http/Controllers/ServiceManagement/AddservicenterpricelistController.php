<?php

namespace App\Http\Controllers\ServiceManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\AddServicenter;
use App\Models\AddServiceprice;

class AddservicenterpricelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Servicecenterpricelist(Request $request)
    {
        
        $AddServiceprice = AddServiceprice::all();
        $search = $request['search'] ?? "";
        if($search != ""){
           
            $AddServiceprice = AddServiceprice::where('service_center_name', 'LIKE', "%$search%")->get();
        }else{
           
            $AddServicenter = AddServicenter::all();
        }
            
        $data =compact('AddServicenter','search','AddServiceprice');
      
        return view('LTS.Servisecentermanagement.Servicecenterpricelist')->with($data);
      
  
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

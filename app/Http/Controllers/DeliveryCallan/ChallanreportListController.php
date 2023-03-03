<?php

namespace App\Http\Controllers\DeliveryCallan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddServicenter;
use App\Models\AddCallan;
use App\Models\Addpart;

use App\Models\Expense;
use DB;

class ChallanreportListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function Challanreport(Request $request)
     {
      
      
        $deliverycallan = null;
        
        //   dd($deliverycallan);
                 
          
     
             return  view('LTS.DeliveryCallan.Challanreport',compact('deliverycallan'));
     
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getdatasearch(Request $request)
    {
           $addservicenter  = Addservicenter::all();
               $deliverycallan = DB::table('deliverycallan')->whereBetween('callan_date',[$request->todate,$request->fromdate])->get();
             
                return view('LTS.DeliveryCallan.Challanreport', ['deliverycallan'=> $deliverycallan, 'addservicenter'=>$addservicenter]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request, $id)
    {
        $deliverycallan = AddCallan::find($id);
        
        return response()->json($deliverycallan);
       
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

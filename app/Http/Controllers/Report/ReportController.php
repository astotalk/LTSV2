<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
use App\Models\AddComplaint;
use App\Models\Addservicenter;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Sfbillreport()
    {
        $addservicenter  = Addservicenter::all();
        $addcomplaits = null;  
        return view('LTS.BillManagemnt.Sfbillreport', compact('addcomplaits','addservicenter'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getdatareport(Request $request)

    { 
        // $addcomplaits = DB::table('addservicenter')
        // ->select('addservicenter.*','addservicenter.complaint_id')
        // ->Join('addcomplaits','addcomplaits.id','addservicenter.complaint_id')
        // ->get();

        // $addcomplaits = DB::table('addcomplaits')
        // ->select('addcomplaits.*','addcomplaits.id')
        // ->Join('addservicenter','addservicenter.id','addservicenter.id')
        // ->get();
        // dd($addcomplaits);
          //echo "<pre>"; print_r($data); 
    
        $addservicenter  = Addservicenter::all();
        $addcomplaits = DB::table('addcomplaits')->whereBetween('created_at',[$request->dateForm,$request->dateTo])->get();
         return view('LTS.BillManagemnt.Sfbillreport', ['addcomplaits'=> $addcomplaits, 'addservicenter'=>$addservicenter]);
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

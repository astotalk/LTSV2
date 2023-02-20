<?php

namespace App\Http\Controllers\Billmanagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\AddComplaint;
use App\Models\Addservicenter;

class SFBillController extends Controller
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

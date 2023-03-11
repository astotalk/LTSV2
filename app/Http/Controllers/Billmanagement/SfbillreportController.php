<?php

namespace App\Http\Controllers\Billmanagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\AddComplaint;
use App\Models\Addservicenter;
use App\Models\Company;
use App\Models\Expense;

class SfbillreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Sfbill()
    {

       
        $expense = Expense::select('*')->take(1)->get();
        $company  = Company::all();
        $addcomplaits  = AddComplaint::all();   
        return view('LTS.BillManagemnt.Sfbill',compact('addcomplaits','company','expense'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function showinvoice(Request $request, $id)
    {
        
        $addcomplaits  = AddComplaint::find($id);

         return response()->json($addcomplaits);
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

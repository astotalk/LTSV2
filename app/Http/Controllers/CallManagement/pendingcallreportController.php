<?php

namespace App\Http\Controllers\CallManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddComplaint;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use Carbon\Carbon;

class pendingcallreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pendingcallreport(Request  $request)
    {
        $Company = Company::all();

        $dates =   new Carbon($request['dates']);
        $date =   new Carbon($request['date']);
        $attenda =  $dates->diff($date)->format('%D:%M:%Y');
        
        $search = $request['search'] ?? "";
       
        if($search != ""){
           
          
            $addcomplaits = AddComplaint::where('custom_name', 'LIKE', "%$search%")->get();
           
        }else{
           
            $addcomplaits = AddComplaint::paginate(5);
        }
            
        $data =compact('addcomplaits','search','Company','attenda');
         //echo "<pre>"; print_r($data); 
        return view('LTS.complaintmanagement.pendingcallreport')->with($data);  
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ccccc(Request  $request)
    {
    echo "yogesh";
    return view('LTS.pendingcallreport.index');
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

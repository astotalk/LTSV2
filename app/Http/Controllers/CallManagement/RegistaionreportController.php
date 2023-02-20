<?php

namespace App\Http\Controllers\CallManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddComplaint;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use Carbon\Carbon;
class RegistaionreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrationreport(Request  $request)
    {

        $search = $request['search'] ?? "";
       
        if($search != ""){
           
          
            $addcomplaits = AddComplaint::where('date', 'LIKE', "%$search%")->get();
           
        }else{
            $addcomplaits = AddComplaint::all();
           
        }
            
        $data =compact('addcomplaits','search');
         //echo "<pre>"; print_r($data); 
        return view('LTS.complaintmanagement.registrationreport')->with($data); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
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
    public function show(Request $request, $cmp_id)
    {
        $addcomplaits = AddComplaint::find($cmp_id);
        $cmp_id= $request->input('cmp_id');
       
        return response()->json([
            'status'=>200,
            'addcomplaits' => $addcomplaits,
        ]);
        return view('LTS.registrationreport.show',compact('addcomplaits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {  
        
        $addcomplaits = AddComplaint::find($id);
         $id = $request->input('id');
        return response()->json([
            'status'=>200,
            'addcomplaits' => $addcomplaits,
        ]);
        return view('LTS.registrationreport.edit',compact('addcomplaits'));
      
     
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

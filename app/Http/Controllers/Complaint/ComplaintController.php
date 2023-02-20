<?php

namespace App\Http\Controllers\Complaint;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddComplaint;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function complaintsearch(Request $request)
    {
      
        
        $search = $request['search'] ?? "";
       
        if($search != ""){
           
            $addcomplaits = AddComplaint::where('custom_name', 'LIKE', "%$search%")->get();
           
        }else{

            $addcomplaits = null;    
        }
            
        $data =compact('addcomplaits','search');
          // echo "<pre>"; print_r($data); 
          return view('LTS.CallCenterManagement.complaintsearch')->with($data);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchdata(Request $request){

        $data = AddComplaint::all();
        //echo "<pre>"; print_r($data); 
        return response()->json(['data'=>$data]);
        
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

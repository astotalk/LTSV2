<?php

namespace App\Http\Controllers\ServiceManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddServicenter;

class AddservicelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Servicenterlist(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
           
            $AddServicenter = AddServicenter::where('eng_name', 'LIKE', "%$search%")->get();
        }else{
           
            $AddServicenter = AddServicenter::all();
        }
            
        $data =compact('AddServicenter','search');
      
        return view('LTS.Servisecentermanagement.Servicenterlist')->with($data);
      
  
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function show(Request $request, $id)
    {
        
        $AddServicenter = AddServicenter::find($id);
       
    
        return response()->json($AddServicenter);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pincodesearch(Request $request)
    {
        $pin = $request['pin'];
        $data = file_get_contents('http://www.postalpincode.in/api/pincode/'.$pin);
        $data = json_decode($data);
        
        if(isset($data->PostOffice['0'])){
            $arr['block'] = $data->PostOffice['0']->Taluk;
            $arr['district'] = $data->PostOffice['0']->District;
            $arr['state'] = $data->PostOffice['0']->State;

            echo $ar =json_encode($arr);
       
        }
        else{
            echo 'NA';
        }

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
    
            $AddServicenter = AddServicenter::find($id);   
                 return response()->json([
            'status'=>200,
            'AddServicenter' => $AddServicenter,
    ]);

    return view('LTS.Servisecentermanagement.Servicenterlist.edit', compact('AddServicenter'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    // echo "<pre>"; print_r($request->all()); 
    //         die('cvn'); 
    
        $id = $request->input('id');

    $AddServicenter = AddServicenter::find($id); 

    $AddServicenter->service_center_name = $request->input('service_center_name');
    $AddServicenter->eng_name = $request->input('eng_name');
    $AddServicenter->phone = $request->input('phone');
    $AddServicenter->other_number = $request->input('other_number');
    $AddServicenter->address = $request->input('address');
    $AddServicenter->district = $request->input('district');
    $AddServicenter->state = $request->input('state');
    $AddServicenter->pin_code = $request->input('pin_code');
    $AddServicenter->gst = $request->input('gst');
    $AddServicenter->sf_approved_by = $request->input('sf_approved_by');
    $AddServicenter->user_name = $request->input('user_name');
    $AddServicenter->password = $request->input('password');
    $AddServicenter->remark = $request->input('remark');
    $AddServicenter->update(); 

    return redirect()->back()->with('status','AddServicenter Has Been updated successfully');
            
       
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

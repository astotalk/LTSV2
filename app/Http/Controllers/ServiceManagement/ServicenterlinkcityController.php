<?php

namespace App\Http\Controllers\ServiceManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddServicenter;
use App\Models\Servicelinkcity;

class ServicenterlinkcityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function Servicecenterlinkcity(Request $request){ 

        $search = $request['search'] ?? "";
        if($search != ""){
           
            $AddServicenter = AddServicenter::where('service_center_name', 'LIKE', "%$search%")->get();
        }else{
           
      
            $AddServicenter = AddServicenter::simplePaginate(2);
 
        }
            
        $data =compact('AddServicenter','search');

        return view('LTS.Servisecentermanagement.Servicecenterlinkcity')->with($data);
}

    /**
     * Show the form for creating a new resource.
     *
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addlinkstore(Request $request)
    {
      
        //    echo "<pre>"; print_r($request->all()); 
        //     die('');
        $servicelinkcity  = new Servicelinkcity;
        $servicelinkcity->service_center_name = $request->input('service_center_name');
        $servicelinkcity->pin_code = $request->input('pin_code');
        $servicelinkcity->block = $request->input('block');
        $servicelinkcity->district = $request->input('district');
        $servicelinkcity->state = $request->input('state');
        $servicelinkcity->save();
        return redirect()->back()->with('status','AddServicenter Has Been Create successfully');
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

    return view('LTS.Servisecentermanagement.Servicecenterlinkcity.edit', compact('AddServicenter'));
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
    $AddServicenter->phone = $request->input('phone');
    $AddServicenter->district = $request->input('district1');
    $AddServicenter->state = $request->input('state1');
    $AddServicenter->district = $request->input('district');
    $AddServicenter->state = $request->input('state');
   
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

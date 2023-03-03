<?php

namespace App\Http\Controllers\ServiceManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddServicenter;

class AddservicenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Addservicecenter()
    {
     
        return view('LTS.Servisecentermanagement.Addservicecenter');
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
    public function servicestore(Request $request)
    {
        //  echo "<pre>"; print_r($request->all()); 
        //     die('');
      
            $addservice  = new AddServicenter;
            $addservice->service_center_name = $request->input('service_center_name');
            $addservice->eng_name = $request->input('eng_name');
            $addservice->phone = $request->input('phone');
            $addservice->other_number = $request->input('other_number');
            $addservice->address = $request->input('address');
            $addservice->pin_code = $request->input('pin_code');
            $addservice->block = $request->input('block');
            $addservice->district = $request->input('district');
            $addservice->state = $request->input('state');
            $addservice->gst = $request->input('gst');
            $addservice->sf_approved_by = $request->input('sf_approved_by');
            $addservice->user_name = $request->input('user_name');
            $addservice->password = $request->input('password');
            $addservice->remark = $request->input('remark');
            $addservice->save();
            return redirect()->back()->with('status','AddServicenter Has Been Create successfully');
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
    public function pincodesearchid(Request $request)
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

<?php

namespace App\Http\Controllers\DeliveryCallan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddServicenter;
use App\Models\AddCallan;
use App\Models\Addpart;
use App\Helpers\Helpers;

class DeliveryCallanController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Addcallan()

    {

        $addpart_link  = Addpart::all();
        $addservicenter = AddServicenter::all();

       return view('LTS.DeliveryCallan.Addcallan',compact('addservicenter','addpart_link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addcallanstore(Request $request)
    {
    //   echo "<pre>"; print_r($request->all()); 
    //     die('');
            $input = $request->all();
            $challan_id =  Helpers::IDGenerators(new Addcallan, 'challan_id', 6, 'CHA');

           $input->$challan_id = $challan_id;
            
         
            $remark  = $input['remark'];
            $input['remark'] = implode(',',$remark);
            $unitrate  = $input['unitrate'];
            $input['unitrate'] = implode(',',$unitrate);
            $part_name  = $input['part_name'];
            $input['part_name'] = implode(',',$part_name);
            $quantity  = $input['quantity'];
            $input['quantity'] = implode(',',$quantity);
            $gst  = $input['gst'];
            $input['gst'] = implode(',',$gst);
            $value  = $input['value'];
            $input['value'] = implode(',',$value);

            AddCallan::create($input);
            return redirect()->back()->with('status','AddCallan  Has Been Create successfully');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function GetSfDetail(Request $request ,$val)

    {
        $addservicenter = AddServicenter::find($val); 
        return response()->json($addservicenter);
         
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

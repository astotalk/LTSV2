<?php

namespace App\Http\Controllers\Complaint;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddComplaint;
use App\Models\Addservicenter;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\Addbrand;
use App\Models\AddModelNumber;
use Carbon\Carbon;
use App\Helpers\Helper;


class AddcomplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addnewcomplaint(Request $request)
    {
        $company = Company::all();
      
        
        $addbrandlist['data'] = Addbrand::orderby("id","asc")->select('id','brand_name')->get();
        $search = $request['search'] ?? "";
        if($search != ""){
           
            $addcomp = AddComplaint::where('date', 'LIKE', "%$search%")->get();
        }else{
           
            $addcomp  = new AddComplaint;
        }
            
        $data =compact('addcomp','search','company','addbrandlist');

        return view('LTS.CallCenterManagement.addcomplaint')->with($data);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addchangebrand(Request $request, $brand_nameid=0)

    {
       $addmodelno['data'] = AddModelNumber::orderby("id","asc")->select('id','model_no')->where('brand_name',$brand_nameid)->get();
        return response()->json($addmodelno); 
    }


    public function pincodesearchcompalaint(Request $request)
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
            echo 'Pin Noth Fount';
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addstore(Request $request)
    {
        //  echo "<pre>"; print_r($request->all()); 
        //     die('');
      
            $addcomp  = new AddComplaint;
            $complaint_id =  Helper::IDGenerator(new AddComplaint, 'complaint_id', 5, 'LTS');
            $dates =   new Carbon($request['dates']);
            $date =   new Carbon($request['date']);
            $interval = date_diff($dates, $date)->format('%a');
            
        
          
            $model_id=explode("_",$request['brand_name']);
    
            $addcomp->brand_name = $model_id[0];

            $addcomp->brand_name = $request->input('brand_name');
            $addcomp->model_no = $request->input('model_no');

     
            $addcomp->complaint_id = $complaint_id;

            $addcomp->custom_name = $request->input('custom_name');
            $addcomp->custom_mobile = $request->input('custom_mobile');
            $addcomp->other_mobile = $request->input('other_mobile');
            $addcomp->custom_address = $request->input('custom_address');
            $addcomp->pin_code = $request->input('pin_code');
            $addcomp->block = $request->input('block');
            $addcomp->district = $request->input('district');
            $addcomp->state = $request->input('state');
            $addcomp->type_complaint = $request->input('type_complaint');
            $addcomp->dates = $request->input('dates');
            $addcomp->date = $request->input('date');
            $addcomp->tat = $interval;
            $addcomp->warrenty_number = $request->input('warrenty_number');
            $addcomp->product_type = $request->input('product_type');
            $addcomp->visit_type = $request->input('visit_type');
            $addcomp->company_detail = $request->input('company_detail');
            $addcomp->remark = $request->input('remark');
            $addcomp->status = $request->input('status');
            $addcomp->save();


            return redirect()->back()->with('status','AddComlaints  Has Been Create successfully');
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

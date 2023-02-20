<?php

namespace App\Http\Controllers\CallManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddComplaint;
use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class PendingcallsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pendingcalls(Request  $request)
    {
        $company = Company::all();
        $search = $request['search'] ?? "";
       
        if($search != ""){
           
            $addcomplaits = AddComplaint::where('custom_mobile', 'LIKE', "%$search%")->get();
           
        }else{
           
            $addcomplaits = AddComplaint::all();
        }
            
        $data =compact('addcomplaits','search','company');
      //echo "<pre>"; print_r($data); 
        return view('LTS.complaintmanagement.pendingcalls')->with($data);
   
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show(Request $request, $id)
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
    public function veiw(Request $request)
    {  
    
      
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
        
        $addcomplaits = AddComplaint::find($id);
         $id = $request->input('id');
        return response()->json([
            'status'=>200,
            'addcomplaits' => $addcomplaits,
        ]);
        return view('LTS.pendingcalls.edit',compact('addcomplaits'));
      
     
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

    //   echo "<pre>"; print_r($request->all()); 
    //         die('');

        $id = $request->input('id');
        $addcomplaits = AddComplaint::find($id); 
        $addcomplaits->complaint_id = $request->input('complaint_id');
        $addcomplaits->custom_name = $request->input('custom_name');
        $addcomplaits->other_mobile = $request->input('other_mobile');
        $addcomplaits->custom_address = $request->input('custom_address');
        $addcomplaits->pin_code = $request->input('pin_code');
        $addcomplaits->block = $request->input('block');
        $addcomplaits->district = $request->input('district');
        $addcomplaits->state = $request->input('state');
        $addcomplaits->type_complaint = $request->input('type_complaint');
        $addcomplaits->date = $request->input('date');
        $addcomplaits->type_brand = $request->input('type_brand');
        $addcomplaits->type_model = $request->input('type_model');
        $addcomplaits->warrenty_number = $request->input('warrenty_number');
        $addcomplaits->product_type = $request->input('product_type');
        $addcomplaits->visit_type = $request->input('visit_type');
        $addcomplaits->company_detail = $request->input('company_detail');
        $addcomplaits->type_complaint = $request->input('type_complaint');
        $addcomplaits->remark = $request->input('remark');
        $addcomplaits->status = $request->input('status');
        $addcomplaits->update();
        return redirect()->back()->with('status','complaint Has Been Update successfully');     
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

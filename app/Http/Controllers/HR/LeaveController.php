<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Empolyee;
use App\Models\Department;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leavelts(Request $request)
    {
        
        $empolyeeList = Empolyee::all();
        $DeparmenttmList['data'] = Department::orderby("id","asc")->select('id','department')->get();
        $search = $request['search'] ?? "";
        if($search != ""){
           
            $leaves = Leave::where('name', 'LIKE', "%$search%")->get();
        }else{
          
            $leaves = Leave::all();

        }
            
        $data =compact('leaves','search','empolyeeList','DeparmenttmList');

        return view('LTS.hr.leave')->with($data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function departmenchangeEmp(Request $request, $departmentid=0)

    {
       $EmployeeList['data'] = Empolyee::orderby("id","asc")->select('id','name')->where('department',$departmentid)->get();
        return response()->json($EmployeeList); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function leavestore(Request $request)
    {
           //    echo "<pre>"; print_r($request->all()); 
            // die('');
            $leaves  = new Leave;

            $name=explode("_",$request['department']);
    
            $leaves->department = $name[0];

            $leaves->department = $request->input('department');
            $leaves->name = $request->input('name');
            $leaves->select_type = $request['select_type'];
            $leaves->fromdate = $request['fromdate'];
            $leaves->todate = $request['todate'];
            $leaves->reason = $request['reason'];
            $leaves->leave_status = $request['leave_status'];
            $leaves->save();
    
            return redirect()->back()->with('status','Leave Has Been Added successfully');
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
    public function edit(Request $request, $leave_id)
    {   
        $leaves = Leave::find($leave_id);
        return response()->json([
            'status'=>200,
            'leaves' => $leaves,
        ]);

        return view('LTS.hr.leave.edit',compact('leaves'));
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

        $leave_id = $request->input('leave_id');
        $leaves = Leave::find($leave_id); 
        $leaves->select_type = $request->input('select_type');
        $leaves->fromdate = $request->input('fromdate');
        $leaves->todate = $request->input('todate');
        $leaves->reason = $request->input('reason');
        $leaves->leave_status = $request->input('leave_status');
        $leaves->update();
        
        return redirect()->back()->with('status','Leave Has Been Update successfully');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $leaves = Leave::find($request->id)->delete();
     
        return redirect()->back()->with('status','Holiday Has Been delete successfully');
    }
}

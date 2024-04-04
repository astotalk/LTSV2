<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empolyee;
use App\Models\Department;
use App\Models\Designation;
use App\Helpers\Helpers;


class EmpolyeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employee(Request $request) {
       
        $DeparmenttmList = Department::all();
        $DesignationList = Designation::all();
        $search = $request['search'] ?? "";
        if($search != ""){
           
            $employee = Empolyee::where('name', 'LIKE', "%$search%")->get();
        }else{
           
      
           $employee = Empolyee::all();
        }
            
        $data =compact('employee','search','DeparmenttmList','DesignationList');

        return view('LTS.hr.employee')->with($data);

    }
    

        public function edit(Request $request, $id )
        {
            
            $employee = Empolyee::find($id );
            return response()->json([
                'status'=>200,
                'empolyees' => $employee,
            ]);

            return view('LTS.hr.employee.edit',compact('empolyees'));
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
    public function empstore(Request $request)
    {
  
            //  echo "<pre>"; print_r($request->all()); 
            // die('');
      

            $emp_code =  Helpers::IDGenerators(new Empolyee, 'emp_code', 5, 'LTS-EMP');
          
            $empolyees  = new Empolyee;
            $empolyees->emp_code = $emp_code;
            $empolyees->name = $request->input('name');
            $empolyees->email = $request->input('email');
            $empolyees->phone = $request->input('phone');
            $empolyees->alernate_number = $request->input('alernate_number');
            $empolyees->father_name = $request->input('father_name');
            $empolyees->father_mobile = $request->input('father_mobile');
            $empolyees->father_occupation = $request->input('father_occupation');
            $empolyees->desigantion = $request->input('desigantion');
            $empolyees->gender = $request->input('gender');
            $empolyees->joining_date = $request->input('joining_date');
            $empolyees->department = $request->input('department');
            $empolyees->current_address = $request->input('current_address');
            $empolyees->country = $request->input('country');
            $empolyees->region = $request->input('region');
            $empolyees->city = $request->input('city');
            $empolyees->permanent_address = $request->input('permanent_address');
            $empolyees->country_id = $request->input('country_id');
            $empolyees->region_id = $request->input('region_id');
            $empolyees->city_id = $request->input('city_id');
            $empolyees->status = $request->input('status');
            $empolyees->pin_code = $request->input('pin_code');
            $empolyees->bank_name = $request->input('bank_name');
            $empolyees->account_number = $request->input('account_number');
            $empolyees->beneficiary_name = $request->input('beneficiary_name');
            $empolyees->branch_name = $request->input('branch_name');
            $empolyees->ifsc_code = $request->input('ifsc_code');
            $empolyees->save();
            dd($empolyees);
           
            return redirect()->back()->with('status','Employee Has Been Create successfully');

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
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

       
        

            //    echo "<pre>"; print_r($request->all()); 
            // die('');
      
            $id  = $request->input('id');
            $employees = Empolyee::find($id);  
            $employees->name = $request->input('name');
            $employees->email = $request->input('email');
            $employees->phone = $request->input('phone');
            $employees->alernate_number = $request->input('alernate_number');
            $employees->father_name = $request->input('father_name');
            $employees->father_mobile = $request->input('father_mobile');
            $employees->father_occupation = $request->input('father_occupation');
            $employees->joining_date = $request->input('joining_date');
            $employees->gender = $request->input('gender');
            $employees->pin_code = $request->input('pin_code');
            $employees->permanent_address = $request->input('permanent_address');
            $employees->country_id = $request->input('country_id');
            $employees->region_id = $request->input('region_id');
            $employees->city_id = $request->input('city_id');
            $employees->current_address = $request->input('current_address');
            $employees->desigantion = $request->input('desigantion');
            $employees->department = $request->input('department');
            $employees->status = $request->input('status');
            $employees->bank_name = $request->input('bank_name');
            $employees->beneficiary_name = $request->input('beneficiary_name');
            $employees->account_number = $request->input('account_number');
            $employees->branch_name = $request->input('branch_name');
            $employees->ifsc_code = $request->input('ifsc_code');
            $employees->update(); 

              return redirect()->back()->with('status','Employee Has Been Update successfully');

            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

                     
    public function destroy(Request $request)
    {
            //  echo "<pre>"; print_r($request->all()); 
            // die('');
        $employees = Employee::find($request->id)->delete();
     
        return redirect()->back()->with('status','Employee Has Been delete successfully');
    }
        }

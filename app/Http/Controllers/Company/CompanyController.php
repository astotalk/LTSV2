<?php

namespace App\Http\Controllers\Company;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Company;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function company(Request $request)
    {

        $company = Company::all();
        $companyname = Company::first();
        $List = Designation::all();
       return view('LTS.company.company', compact('company','List','companyname'));
        
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
    public function companystore(Request $request)
    {

        
            //   echo "<pre>"; print_r($request->all()); 
            //  die('');
        $com_name  = new Company;
          
        $com_name->company_name = $request['company_name'];
        $com_name->phone = $request['phone'];
        $com_name->email =$request['email'];
        $com_name->incorporation_num = $request['incorporation_num'];
        $com_name->gst = $request['gst'];
        $com_name->pan_card =$request['pan_card'];
        $com_name->dates = $request['dates'];
        $com_name->pin_code = $request['pin_code'];
        $com_name->register_address = $request['register_address'];
        $com_name->country = $request['country'];
        $com_name->region =$request['region'];
        $com_name->city = $request['city'];
        $com_name->file_upload = $request['file_upload'];
        $com_name->website =$request['website'];
        $com_name->desigantion =$request['desigantion'];
        $com_name->name = $request['name'];
        $com_name->name = $request['name'];
        $com_name->email_id = $request['email_id'];
        $com_name->phone_number = $request['phone_number'];
        $com_name->bank_name = $request['bank_name'];
        $com_name->beneficiary_name = $request['beneficiary_name'];
        $com_name->account_number = $request['account_number'];
        $com_name->branch_name = $request['branch_name'];
        $com_name->ifsc_code = $request['ifsc_code'];
    
    
        $com_name->save();
        return redirect()->back()->with('status','Company Has Been Create successfully');
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
    public function edit(Request $request, $cmp_id)
    {
            $master_company = Company::find($cmp_id);   
    
            return response()->json([
                'status'=>200,
                'company' => $master_company,
    ]);
    
    return view('LTS.company.edit', compact('company'));
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
        $request->validate([
            "company_name" => ['required']
        ]);
    $cmp_id = $request->input('cmp_id');
    $name_company = Company::find($cmp_id); 
    $name_company->company_name = $request->input('company_name');
    $name_company->phone = $request->input('phone');
    $name_company->email = $request->input('email');
    $name_company->incorporation_num = $request['incorporation_num'];
    $name_company->pan_card = $request->input('pan_card');
    $name_company->dates = $request->input('dates');
    $name_company->gst = $request->input('gst');
    $name_company->register_address = $request->input('register_address');
    $name_company->country = $request->input('country');
    $name_company->region = $request->input('region');
    $name_company->city = $request->input('city');
    $name_company->website = $request->input('website');
    $name_company->desigantion = $request->input('desigantion');
    $name_company->name = $request->input('name');
    $name_company->email_id = $request->input('email_id');
    $name_company->phone_number = $request->input('phone_number');
    $name_company->bank_name = $request->input('bank_name');
    $name_company->beneficiary_name = $request->input('beneficiary_name');
    $name_company->account_number = $request->input('account_number');
    $name_company->branch_name = $request->input('branch_name');
    $name_company->ifsc_code = $request->input('ifsc_code');
    $name_company->update(); 
    return redirect()->back()->with('status','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
                $res=Company::where('id',$id)->delete();

                return redirect()->back()->with('status','Department Has Been Delete successfully');
    }
}


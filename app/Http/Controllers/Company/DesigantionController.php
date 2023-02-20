<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;

class DesigantionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function designation(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){

            $designations = Designation::where('desigantion', 'LIKE', "%$search%")->get();
        }else{

            $designations = Designation::all();
        }
            
        $data =compact('designations','search');
        return  view('LTS.company.designation')->with($data);
        }


        
    public function edit(Request $request, $dig_id)
  
        {
            $designations = Designation::find($dig_id);

            return response()->json([
                'status'=>200,
                'designation' => $designations,
            ]);
    
            return view('LTS.company.designation.edit',compact('designations'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function addstore(Request $request)
    {
        $request  ->validate([
            'desigantion' => 'required',
        ]);

        $designations = new  Designation;

        $designations->desigantion = $request['desigantion'];
        $designations->save();
        return redirect()->back()->with('status','Designation Has Been Added successfully');

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

    
    public function update(Request $request)
    {
            $dig_id = $request->input('dig_id');
            $designations = Designation::find($dig_id); 
            $designations->desigantion = $request->input('desigantion');
            $designations->update();
        return redirect()->back()->with('status','Designation Has Been updated successfully');
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
                        
    {
        $designations = Designation::find($request->desigantion)->delete();
     
        return redirect()->back()->with('status','Designation Has Been delete successfully');

        
  }
}

<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function holiday(Request $request)
    { 
        $search = $request['search'] ?? "";
    if($search != ""){

        $holidays = Holiday::where('occasion', 'LIKE', "%$search%")->get();
    }else{

        $holidays = Holiday::all();
       
    }
        
    $data =compact('holidays','search');
    return  view('LTS.hr.holiday')->with($data);
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
    public function holystore(Request $request)
    {
        $request  ->validate([
            'date' => 'required',
            'occasion' => 'required',
        ]);

        $holiday_data = new  Holiday;

        $holiday_data->occasion = $request['occasion'];
        $holiday_data->date = $request['date'];
        $holiday_data->save();
        return redirect()->back()->with('status','Holiday Has Been Add successfully');   
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
    public function edit(Request $request, $id)
    {
        $holidays = Holiday::find($id);
        return response()->json([
            'status'=>200,
            'holidays' => $holidays,
        ]);
        return view('LTS.holiday.edit',compact('holidays'));
      
     
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

         $id = $request->input('id');
         $holidays = Holiday::find($id); 

         $holidays->date = $request->input('date');
         $holidays->occasion = $request->input('occasion');
         $holidays->update();
         return redirect()->back()->with('status','Holiday Has Been Update successfully');      
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
                        
    {
      
        
    $holidays = Holiday::find($request->occasion)->delete();
     
    return redirect()->back()->with('status','Holiday Has Been delete successfully');
    }
}

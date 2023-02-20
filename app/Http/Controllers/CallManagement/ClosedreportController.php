<?php

namespace App\Http\Controllers\CallManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\AddComplaint;
use App\Models\Addservicenter;
use App\Models\Visitstore;
use App\Models\Stockentry;


class ClosedreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function closedreport()
    {
        
        $addservicenter  = Addservicenter::all();
        $addcomplaits = null;  
      
        return view('LTS.complaintmanagement.closedreport', compact('addcomplaits','addservicenter'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getdata(Request $request)

    {
        

     
        $visitstore = Visitstore::all();
          $addservicenter = Addservicenter::select('*')->take(1)->get();
          $stockentry = Stockentry::select('*')->take(1)->get();
          $addcomplaits = DB::table('addcomplaits')->whereBetween('created_at',[$request->dateForm,$request->dateTo])->get();
         return view('LTS.complaintmanagement.closedreport',
              [
                    'addcomplaits'=> $addcomplaits, 
                    'addservicenter'=>$addservicenter,
                    'visitstore'=>$visitstore, 
                    'stockentry'=>$stockentry,
            ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function jobcard(Request $request,$id)
    {
           $addcomplaits  = AddComplaint::find($id);
          return response()->json($addcomplaits);

       
    }
    function visitdonestore(Request $request)
    {


        //  echo "<pre>"; print_r($request->all()); 
        //     die('');
         $visitstore  = new Visitstore;
         $visitstore->EngineerName = $request->input('EngineerName');
         $visitstore->OneSideKM = $request->input('OneSideKM');
         $visitstore->Remark = $request->input('Remark');
         $visitstore->CustomerConformation = $request->input('CustomerConformation');
         $visitstore->save();
         return redirect('LTS.complaintmanagement.getdata');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function FetchJobStatus(Request $request)
    {
        // $addcomplaits  = AddComplaint::find($ComplaintID);
        // return response()->json($addcomplaits);

        return view('LTS.complaintmanagement.FetchJobStatus');
  
    }
 
   
    public function view(Request $request, $id)
    {
        $addcomplaits  = AddComplaint::find($id);
        
        return response()->json($addcomplaits);
       
    }

    public function edit(Request $request, $id)
    {  
        
        $addcomplaits = AddComplaint::find($id);
         $id = $request->input('id');
          return response()->json([
            'status'=>200,
            'addcomplaits' => $addcomplaits,
        ]);
        return view('LTS.closedreport.edit',compact('addcomplaits'));
      
     
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
            $id = $request->input('id');
            $update = AddComplaint::find($id); 
            $update->date = $request->input('date');
            $update->remark = $request->input('remark');
            $update->update(); 
            return redirect()->back();
        
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

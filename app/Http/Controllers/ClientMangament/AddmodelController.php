<?php

namespace App\Http\Controllers\ClientMangament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientManagement;
use App\Models\Product;
use App\Models\Addbrand;
use App\Models\AddModelNumber;


class AddmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Addmodal(Request $request)
    {
          $addbroad = Addbrand::all();
          $clientman['data'] = ClientManagement::orderby("id","asc")->select('id','client_name')->get();
          $product = Product::all();

         $data =compact('clientman','addbroad','product');
        return view('LTS.Clientmanagament.Addmodal')->with($data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientchangebrand(Request $request, $client_nameid=0)

    {
       $Addbroad['data'] = Addbrand::orderby("id","asc")->select('id','brand_name')->where('client_name',$client_nameid)->get();
        return response()->json($Addbroad); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addmodelstore(Request $request)
    {
        $addmodel  = new AddModelNumber;
        $client_id=explode("_",$request['brand_name']);

        $addmodel->brand_name = $client_id[0];
        $addmodel->client_name = $request->input('client_name');
        $addmodel->brand_name = $request->input('brand_name');
        $addmodel->product_type = $request->input('product_type');
        $addmodel->model_no = $request->input('model_no');
        $addmodel->save();
        return redirect()->back()->with('status','Add Model Has Been Update successfully');
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

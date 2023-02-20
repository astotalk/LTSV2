<?php

namespace App\Http\Controllers\ClientMangament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addbrand;
use App\Models\ClientManagement;
use App\Models\Product;

use App\Models\AddModelNumber;

class ModellistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Modallist(Request $request)
    {
        $product = Product::all();
    
        $search = $request['search'] ?? "";
        if($search != ""){
           
            $addmodelno = AddModelNumber::where('brand_name', 'LIKE', "%$search%")->get();
        }else{
           
            $addmodelno = AddModelNumber::paginate(5);
        }
            
        $data =compact('addmodelno','product','search');

        return view('LTS.Clientmanagament.Modallist')->with($data);
       
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
    public function store(Request $request)
    {
        //
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

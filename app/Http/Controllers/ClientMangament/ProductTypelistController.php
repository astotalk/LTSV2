<?php

namespace App\Http\Controllers\ClientMangament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addproduct;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ProductTypelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Producttypelist(Request $request)
    {

        $search = $request['search'] ?? "";
        if($search != ""){
           
            $addproduct = Addproduct::where('product_type', 'LIKE', "%$search%")->get();
        }else{

            $addproduct = Addproduct::all();
      
           
        }
            
        $data =compact('addproduct','search');

        return view('LTS.Clientmanagament.Producttypelist')->with($data);
      
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

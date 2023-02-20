<?php

namespace App\Http\Controllers\InventoryManagament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addpart;
use DB;
use App\Models\AddModelNumber;
use App\Models\Addbrand;
use App\Models\Stockentry;
class PartsMappingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function partsmappinglist(Request $request)
    {

        $stockentry = DB::table('stockentry')->leftjoin('addmodelno','addmodelno.id','stockentry.id')->get();
        return view('LTS.InventoryMangament.partsmappinglist' ,compact('stockentry'));
       
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

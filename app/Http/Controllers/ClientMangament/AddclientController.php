<?php

namespace App\Http\Controllers\ClientMangament;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientManagement;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AddclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addclient()
    {
        return view('LTS.Clientmanagament.addclient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addclinetstore(Request $request)
    {
        
        //    echo "<pre>"; print_r($request->all()); 
        //     die('');
      
            $clinetname  = new ClientManagement;
            $clinetname->client_name = $request->input('client_name');
            $clinetname->client_phone = $request->input('client_phone');
            $clinetname->client_address = $request->input('client_address');
            $clinetname->pin_code = $request->input('pin_code');
            $clinetname->pan_card = $request->input('pan_card');
            $clinetname->country = $request->input('country');
            $clinetname->region = $request->input('region');
            $clinetname->city = $request->input('city');
            $clinetname->gst = $request->input('gst');
            $clinetname->concerned_name = $request->input('concerned_name');
            $clinetname->concerned_person_phone = $request->input('concerned_person_phone');
            $clinetname->sms = $request->input('sms');
            $clinetname->othercrmid = $request->input('othercrmid');
            $clinetname->save();
            return redirect()->back()->with('status','Client Has Been Create successfully');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function newclient(Request $request)
    {
       
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
    public function edit(Request $request, $id )
        {
            
            $clientmanagement = ClientManagement::find($id);
            return response()->json([
                'status'=>200,
                'clientmanagement' => $clientmanagement,
            ]);

            return view('LTS.Clientmanagament.addclient.edit',compact('clientmanagement'));
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
      
        $id  = $request->input('id');
        $clinetname = ClientManagement::find($id);  
        $clinetname->client_name = $request->input('client_name');
        $clinetname->client_phone = $request->input('client_phone');
        $clinetname->client_address = $request->input('client_address');
        $clinetname->pin_code = $request->input('pin_code');
        $clinetname->country = $request->input('country');
        $clinetname->region = $request->input('region');
        $clinetname->city = $request->input('city');
        $clinetname->gst = $request->input('gst');
        $clinetname->concerned_name = $request->input('concerned_name');
        $clinetname->concerned_person_phone = $request->input('concerned_person_phone');
        $clinetname->sms = $request->input('sms');
        $clinetname->othercrmid = $request->input('othercrmid');
        $clinetname->save();
          return redirect()->back()->with('status','ClientManagement Has Been Update successfully');
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

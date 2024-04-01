<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registeruser;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $search = $request['search'] ?? "";
        if($search != ""){

            $registerssusers = Registeruser::where('firstname', 'LIKE', "%$search%")->get();
        }else{

            $registerssusers = Registeruser::all();
        }
            
        $data =compact('registerssusers','search');
       return view('LTS.RegisterUser.register')->with($data);
      
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
    public function registerstore(Request $request)
    {
        $request  ->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);

  
        $registerssusers = new  Registeruser;
        // $registerssusers->id = $id;
        $registerssusers->firstname = $request['firstname'];
        $registerssusers->lastname = $request['lastname'];
        $registerssusers->email = $request['email'];
        $registerssusers->password = $request['password'];
        $registerssusers->phone = $request['phone'];
        $registerssusers->address = $request['address'];
        $registerssusers->save();
        // dd($registerssusers);
        return redirect()->back()->with('status','Register Has Been Added successfully');

       
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
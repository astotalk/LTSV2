<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registeruser;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        // $search = $request['search'] ?? "";
        // if($search != ""){

        //     $registerssusers = Registeruser::where('firstname', 'LIKE', "%$search%")->get();
        // }else{

            $registerssusers = Registeruser::all();
             $data =compact('registerssusers');
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
    public function up()
    {
        Schema::table('registerssusers', function (Blueprint $table) {
            $table->string('original_password')->nullable();
        });
    }

    public function down()
    {
        Schema::table('registerssusers', function (Blueprint $table) {
            $table->dropColumn('original_password');
        });
    }

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
        $registerssusers->password = Hash::make($request->password);
        $registerssusers->original_password = $request['password'];
        $registerssusers->phone = $request['phone'];
        $registerssusers->address = $request['address'];
        $registerssusers->save();
        // dd($registerssusers);
        return redirect()->back()->with('status','Register Has Been Added successfully');

        // return redirect('LTS/login')->with('success', 'Registration successful! Please log in.');
        
        

       
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
        $registers = Registeruser::find($id);
        return response()->json([
            'status'=>200,
            'registerssusers' => $registers,
        ]);
        return view('LTS.register.edit',compact('registerssusers'));
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
        $registerssusers = Registeruser::find($id); 
        $registerssusers->firstname = $request->input('firstname');
        $registerssusers->lastname = $request->input('lastname');
        $registerssusers->email = $request->input('email');
        $registerssusers->password = Hash::make($request->password);
        $registerssusers->original_password = $request['password'];
        $registerssusers->phone = $request['phone'];
        $registerssusers->address = $request['address'];
        $registerssusers->update();
         //dd($registerssusers);
        
        return redirect()->back()->with('status','Register Has Been Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // echo "<pre>"; print_r($request->all()); 
        //        die('Hello');
      $registerssusers = Registeruser::find($request->id)->delete();
       return redirect()->back()->with('status','Register Has Been Delete successfully');
    }
}

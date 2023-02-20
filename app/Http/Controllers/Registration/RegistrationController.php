<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registration()
    {
       return view('LTS.Registration.registration');
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
    public function registrationstore(Request $request)
    {
            //  echo "<pre>"; print_r($request->all()); 
            // die('');
        {  
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'password_confirmation' => 'required|min:6',
            ]);
           
                
            $user  = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->password_confirmation = $request->input('password_confirmation');
            $user->save();
            $request->session()->put('user',$request->input('name'));
            return redirect()->route('getlogin')->with('success','You have signed-in');
           
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postlogin(Request $request)

    {
       $user = User::Where("email",$request->input('email'))->get();
       if(Crypt::decrypt($user[0]->passwprd)==$request->input('password'));
       return redirect()->route('dashboard')->with('success','You have signed-in');
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

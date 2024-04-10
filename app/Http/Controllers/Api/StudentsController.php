<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\validator;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentlist(Request $request)
    {
     

        $students = Students::select('id','name','course','email','phone')->get();
        return response()->json([
            'status' => 200,
            'message' => $students,
        ]);
    }
    public function studentstore(Request $request)
    {
        $validator = validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'email' => 'required|email|unique:students|max:255',
            'phone' => 'required|string|max:20',
        ]);
        
        if($validator->fails())
        {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ],422);
        }else{

            $students = new Students;
            $students->name =$request->name;
            $students->course =$request->course;
            $students->email =$request->email;
            $students->phone =$request->phone;
            $students->save();

            return response()->json([
                'status' => 200,
                'message' => 'Student Created Successfully'
            ],200);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function student_list(Request $request)
    {   
        $search = $request['search'] ?? "";
        if($search != ""){

            $students = Students::where('name', 'LIKE', "%$search%")->get();
        }else{

            $students = Students::all();
        }
            
        $data =compact('students','search');

      
        return  view('LTS.Students.students')->with($data);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)

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
        $students = Students::find($id);
        if($students)
        {
            return response()->json([
                'status' => 200,
                'message' => $students,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'students' => 'Id Not Found',
            ],404);
        }
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

        $validator = validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'email' => 'required|email|unique:students|max:255',
            'phone' => 'required|min:10|max:10',
        ]);
        
        if($validator->fails())
        {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ],422);
        }else{

        $students = Students::find($id);
        if($students){

            $students->name =$request->name;
            $students->course =$request->course;
            $students->email =$request->email;
            $students->phone =$request->phone;
            $students->update();
              return response()->json([
                'status' => 200,
                'students' => 'Student updated Successfully',
            ],200);
        }
        else{
            return response()->json([
                'status' => 404,
                'students' => 'Id Not Found',
            ],404);
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Students::find($id);
        if($students){
            $students ->delete();
            return response()->json([
                'status' => 200,
                'students' => 'Student Delete Successfully',
            ],200);


           }else{
            return response()->json([
                'status' => 404,
                'students' => 'Student Id Not Found',
            ],404);
          }

        } 
}

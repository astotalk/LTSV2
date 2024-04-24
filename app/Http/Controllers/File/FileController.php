<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function file_upload()
    {
       
        return  view('LTS.File.fileupload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function upload(Request $request)


    {

        $validatedData = $request->validate([
            'file' => 'required|file|mimes:pdf|max:2048', // Adjust validation rules as needed
        ]);

        $file = $request->file('file_name');

        // Generate a unique filename with extension
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();

        // Store the file in the public disk
        $path = Storage::disk('public')->put('uploads', $file, $fileName);

        // Create a new File model instance with details
        $newFile = File::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'mime_type' => $file->getClientMimeType(),
            'size' => $file->getSize(),
        ]);

        return response()->json([
            'message' => 'File uploaded successfully!',
            'data' => $newFile,
        ]);
    
        // echo "<pre>";
        // print_r($request->all());

        // echo $request->file('file_name')->store('uploads');
        // Validate the uploaded file
        // $request->validate([
        //     'file_name' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        // ]);
    
        // $fileName = time() . '_' . $request->file('file_name')->getClientOriginalName();
        // $request->file('file_name')->storeAs('uploads',$fileName );

        // dd($filePath);

        return redirect()->back()->with('success','File uploaded successfully');
        // $filePath = $file->storeAs('uploads', $fileName);
    
        // Save file details to the database
        // $savedFile = File::create([
        //     'file_name' => $files->getClientOriginalName(),
        //     'file_path' => $file_path,
        //     // Add more columns if needed
        // ]);
    
        // dd($filePath);
        // return back()->with('success', 'File uploaded successfully.');
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

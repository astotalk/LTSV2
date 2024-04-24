@extends('LTS.layouts.main')
@section('content-header')

<!-- Start dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
       <div class="row column_title">
          <div class="col-md-12">
             <div class="page_title">
                <h2>File Upload</h2>
             </div>
          </div>
       </div>
       <!-- row -->
       <div class="row column1">
          <div class="col-md-12">
             <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                   <div class="heading1 margin_0">
                      <h2>File Upload</h2>
                   </div>
                </div>
                <div class="container py-5">
                    <div class="row">
                    <div class="col-md-12">
                     @if(session('status'))
                 <div  style="margin-top: 17px;" class="alert alert-success">{{session('status')}}</div>
                 @endif
                 <div id="success_message"></div>
             <div class="card mt-3">
           <div class="card-header">
             <!-- SEARCH BY TASK START -->
             <nav class="navbar navbar-light bg-light">
                <form method="get"  class="form-inline">
                <a class="btn btn-danger text-white" href="{{route('dashboard')}}" role="button">Back</a> &nbsp;&nbsp;
                {{-- <input  type="search"  name="search" id="" class="form-control" placeholder="Search Department"  value= "{{$search}}">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                </form>
                     
           </div>
           <div class="card-body">
                        <div class="row">
                           <div class="col">
                           <h1>Upload PDF</h1>
                           <form method="POST" action="{{ url('/File/upload') }}" enctype="multipart/form-data">
                               @csrf
                               <input type="file" name="file_name" accept=".pdf">
                               <button type="submit">Upload</button>
                           </form>
                            
                                {{-- <form action="{{ url('/File/upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file_name" required>
                                    <button type="submit">Upload</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>

              </div>
            </div>
         </div>
       </div>
     </div>
    </div>
</div>

@endsection
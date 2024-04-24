@extends('LTS.layouts.main')
@section('content-header')

<!-- Start dashboard inner -->
<div class="midde_cont">
  <div class="container-fluid">
     <div class="row column_title">
        <div class="col-md-12">
           <div class="page_title">
              <h2>Student</h2>
           </div>
        </div>
     </div>
     <!-- row -->
     <div class="row column1">
        <div class="col-md-12">
           <div class="white_shd full margin_bottom_30">
              <div class="full graph_head">
                 <div class="heading1 margin_0">
                    <h2>New Student</h2>
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
       <!--table start-->
       <div class="card-body">
         <table id="student_data" class="table table-bordered">
               <thead class="thead-dark">
                  <tr>
                     <th><b>S.No.</b></th>
                     <th><b>Name</b></th> 
                     <th><b>Course</b></th> 
                     <th><b>Email</b></th> 
                     <th><b>Phone</b></th> 
                     <th style="text-align: center;"> <b>Action</b></th>
                  </tr>
                  </thead>
                 <tbody>
                    @php
                    $cnt = 1;
                    @endphp
                 @if(!empty($students))
                   @foreach($students as $course)
                     <tr> 
                       <td>{{ $cnt++ }}</td>
                       <th>{{ucfirst($course->name)}}</th>
                       <th>{{($course->course)}}</th>
                       <th>{{($course->email)}}</th>
                       <th>{{($course->phone)}}</th>
                   
                      <td>
                     <button type="button"  value="{{$course->id}}" style="margin-top:8px;margin-left:5px;width:52px;height:37px;" class="btn btn-primary editbtn btn-sm">Edit</button>
                     <button type="button"  value="{{$course->id}}" style="margin-top:-61px;margin-left:69px;" class="btn btn-danger deletedepartmentBtn">Delete</button>  
                     </td>
                     </tr>
                       @endforeach
                       @endif
               </tbody>
             </table>
           </div>
         </div>
        </div>
          <!--------Card close-->
       </div>
       </div>
       </div>
       <!--------Container close-->
       </div>
      
     @endsection

     @section('scripts')
      <script>  
      $(document).ready(function(){

         $('#student_data').DataTable();    
      });
      </script>
@endsection

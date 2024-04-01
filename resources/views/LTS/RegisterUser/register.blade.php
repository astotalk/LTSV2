@extends('LTS.layouts.main')
@section('content-header')
<section class="content">
<div class="container-fluid">
    <div class="row column_title">
       <div class="col-md-12">
          <div class="page_title">
             <h2>Register User Management</h2>
          </div>
       </div>
    </div>

         <!-- row -->
         <div class="row column1">
            <div class="col-md-12">
               <div class="white_shd full margin_bottom_30">
                  <div class="full graph_head">
                     <div class="heading1 margin_0">
                        <h2>Add Management</h2>
                     </div>
                  </div>
    
    <div class="container py-5">
    <div class="row">
    <div class="col-md-12">
    @if(session('status'))
                    <div class="alert alert-success">{{session('status')}}</div>
                    @endif
    <div id="success_message"></div>
    <div class="card mt-3">
    <div class="card-header">
      <!-- SEARCH BY TASK START -->
      <nav class="navbar navbar-light bg-light">
         <form method="get"  class="form-inline">
         <a class="btn btn-danger text-white" href="{{route('register')}}" role="button">Back</a> &nbsp;&nbsp;
         <input  type="search"  name="search" id="" class="form-control" placeholder="Search Register"  value= "{{$search}}">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"> + Add New Register</button>
    </div>
<!--table start-->
<div class="card-body">
   <table class="table table-bordered">
         <thead class="thead-dark">
            <tr>
               <th><b>S.No.</b></th>
               <th><b>FirstName</b></th> 
               <th><b>LastName</b></th> 
               <th><b>Email</b></th> 
               <th><b>Phone</b></th> 
               <th><b>Address</b></th> 
               
               <th style="text-align: center;"> <b>Action</b></th>
            </tr>
         </thead>
         <tbody>
         @if(!empty($registerssusers))
             @foreach($registerssusers as $registerssusers)
             <tr> 
             <th>{{$registerssusers->id}}</th>
            <th>{{ucfirst($registerssusers->firstname)}}</th>
            <th>{{ucfirst($registerssusers->lastname)}}</th>
            <th>{{ucfirst($registerssusers->email)}}</th>
            <th>{{ucfirst($registerssusers->phone)}}</th>
            <th>{{ucfirst($registerssusers->address)}}</th>
               
             
               <td>
                
               <button type="button"  value="{{$registerssusers->id}}" class="btn btn-primary editbtn btn-sm">Edit</button>
               <button type="button"  value="{{$registerssusers->id}}" class="btn btn-danger deletedepartmentBtn">Delete</button>
                  
               </td>
               </tr>
                 
                 @endforeach
                 @endif
         </tbody>
      </table>
   </div>
   </div></div>
<!-- Modal -->
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <Form  action="{{route('registerstore')}}" method="POST" >
     @csrf
    <ul id="savefrom_errList"></ul>
      <div class="modal-header">Register User Management</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group">
             <div class="row g-3">             
                  <div class="col-12">                            
                    <label for="text" class="form-label">FirstName <span style="color: red">*</span></label></br>
                    <input type="text"  class="firstname form-control" name="firstname" id="firstname" required> 
                  </div>
                
                  <span class="text-danger">
                    @error('firstname')
                    {{$message}}
                     @enderror

                <div class="row g-3">
                  <div class="col-12">                            
                    <label for="text" class="form-label">LastName <span style="color: red">*</span></label></br>
                    <input type="text"  class="lastname form-control" name="lastname" id="lastname" required> 
                  </div>
                </div><br>
                
                  <span class="text-danger">
                    @error('lastname')
                    {{$message}}
                    @enderror

                <div class="row g-3">
                   <div class="col-12">                            
                    <label for="text" class="form-label">Email <span style="color: red">*</span></label></br>
                    <input type="text"  class="email form-control" name="email" id="email" required> 
                  </div>
              
                  <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                    <div class="row g-3">
                     <div class="col-12">                            
                      <label for="text" class="form-label">Password <span style="color: red">*</span></label></br>
                      <input type="password"  class="password form-control" name="password" id="password" required> 
                    </div>
                
                    <span class="text-danger">
                      @error('password')
                      {{$message}}
                      @enderror
                <div class="row g-3">
                  <div class="col-12">                            
                    <label for="text" class="form-label">Mobile <span style="color: red">*</span></label></br>
                    <input type="text"  class="phone form-control" name="phone" id="phone" required> 
                  </div>
               
                  <span class="text-danger">
                    @error('phone')
                    {{$message}}
                    @enderror
                    <div class="row g-3">
                    <div class="col-12">                            
                    <label for="text" class="form-label">Address <span style="color: red">*</span></label></br>
                    <input type="text"  class="address form-control" name="address" id="address" required> 
                    </div>
                   </div>
                  <span class="text-danger">
                   @error('password')
                   {{$message}}
                   @enderror
                  </span>
               </div>   
            </div>  
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" id="submit"   class="btn btn-primary add_empolyee">Submit</button>
            </div>
         </form>
      </div>    
    </div> 
</div> 
</div> 
</div> 
</div> 
</div> 
@endsection

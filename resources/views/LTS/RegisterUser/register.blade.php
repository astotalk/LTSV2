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
                        <h2>Add Register</h2>
                     </div>
                  </div>
    
    <div class="container py-5">
    <div class="row">
    <div class="col-md-12">
    @if(session('status'))
      <div  style="margin-top: 17px;" class="alert alert-success"> {{session('status')}} </div>
      @endif
    <div id="success_message"></div>
    <div class="card mt-3">
    <div class="card-header">
      <!-- SEARCH BY TASK START -->
      <nav class="navbar navbar-light bg-light">
         <form method="get"  class="form-inline">
           <a class="btn btn-danger text-white" href="{{route('register')}}" role="button">Back</a> &nbsp;&nbsp;
            {{-- <input  type="search"  name="search" id="" class="form-control" placeholder="Search Register"  value= "{{$search}}">
            <button class="btn btn-outline-success my-2 my-sm-0" style="margin-left:9px;" type="submit">Search</button> --}}
          </form>
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal"> + Add New Register</button>
    </div>
<!--table start-->
<div class="card-body">
    <table id="listregister" class="table">
         <thead class="thead-dark">
            <tr>
               <th><b>S.No</b></th>
               <th><b>FirstName</b></th> 
               <th><b>LastName</b></th> 
               <th><b>Email</b></th> 
               <th><b>Phone</b></th> 
               <th><b>Address</b></th>
               <th><b>Image</b></th> 
               <th><b>Department Name</b></th>
               
               <th style="text-align: center;"> <b>Action</b></th>
            </tr>
         </thead>
         <tbody>
            @php
            $cnt = 1;
            @endphp
            @if(!empty($data))
             @foreach($data  as $registerssusers)
             <tr> 
             {{-- <th>{{$registerssusers->id}}</th> --}}
               <td>{{ $cnt++ }}</td>
               <th>{{ucfirst($registerssusers->firstname)}}</th>
               <th>{{ucfirst($registerssusers->lastname)}}</th>
               <th>{{($registerssusers->email)}}</th>
               <th>{{($registerssusers->phone)}}</th>
               <th>{{($registerssusers->address)}}</th>
               <th>
                <img src="{{ asset('lts_assets/images/layout_img/' . $registerssusers->image) }}" alt="User Image" style="width:100px;height:89px;">
                </th>
               <th>{{ $registerssusers->department }}</th>
               <th>
                  <button type="button"  value="{{$registerssusers->id}}" style="margin-top:8px;margin-left:5px;width:52px;height:37px;" class="btn btn-primary editbtn btn-sm">Edit</button>
                  <button type="button"  value="{{$registerssusers->id}}" style="margin-top: -61px;margin-left: 69px;" class="btn btn-danger deletedepartmentBtn">Delete</button> 
               </th>
               </tr>
                 @endforeach
                 @endif
         </tbody>
      </table>
     </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <Form id="myForm"  action="{{route('registerstore')}}" method="POST"  enctype="multipart/form-data">
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
                    <label for="email" class="form-label">Email <span style="color: red">*</span></label></br>
                    <input type="text"  class="email form-control" name="email" id="email" required> 
                  </div>
              
                  <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                    <div class="row g-3">
                     <div class="col-12">                            
                      <label for="password" class="form-label">Password <span style="color: red">*</span></label></br>
                      <input type="password"  class="password form-control" name="password" id="password" required> 
                    </div>
                
                    <span class="text-danger">
                      @error('password')
                      {{$message}}
                      @enderror
                <div class="row g-3">
                  <div class="col-12">                            
                    <label for="text" class="form-label">Mobile <span style="color: red">*</span></label></br>
                    <input type="number"  class="phone form-control" name="phone" id="phone" placeholder="Mobile no *" maxlength="10" required> 
                  </div>
               
                  <span class="text-danger">
                    @error('phone')
                    {{$phone}}
                    @enderror
                    <div class="row g-3">
                    <div class="col-12">                            
                    <label for="text" class="form-label">Address <span style="color: red">*</span></label></br>
                    <input type="text"  class="address form-control" name="address" id="address"  required> 
                    </div>
                   </div>
                  <span class="text-danger">
                   @error('address')
                   {{$message}}
                   @enderror
                  </span>
                  <div class="row g-3">
                    <div class="col-12">                            
                    <label for="text" class="form-label">Upload Image <span style="color: red">*</span></label></br>
                    <input type="file" name="image"  class="image form-control" id="images" required>
                  </div>
                    </div>
                   </div>
                  <span class="text-danger">
                   @error('address')
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

<!-- Edit modal Modal -->
<div class="modal fade" id="EditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
   <div class="modal-dialog">
   <div class="modal-content">
   <Form  action="{{url('/register/update/')}}" method="POST" >
      @method('PUT')  
      @csrf  
      
     <div class="modal-header"  id="EditModal">Register User Management</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <input type="hidden" id="id" name="id">
     <div class="modal-body">
     <div class="form-group">
            <div class="row g-3">             
                 <div class="col-12">                            
                   <label for="text" class="form-label">FirstName <span style="color: red">*</span></label></br>
                   <input type="text"  class="firstname form-control" name="firstname" id="firstnameuser" required> 
                 </div>
               
                 <span class="text-danger">
                   @error('firstname')
                   {{$message}}
                    @enderror

               <div class="row g-3">
                 <div class="col-12">                            
                   <label for="text" class="form-label">LastName <span style="color: red">*</span></label></br>
                   <input type="text"  class="lastname form-control" name="lastname" id="lastnameuser" required> 
                 </div>
               </div><br>
               
                 <span class="text-danger">
                   @error('lastname')
                   {{$message}}
                   @enderror

               <div class="row g-3">
                  <div class="col-12">                            
                   <label for="text" class="form-label">Email <span style="color: red">*</span></label></br>
                   <input type="text"  class="email form-control" name="email" id="emailuser" required> 
                 </div>
             
                 <span class="text-danger">
                   @error('email')
                   {{$message}}
                   @enderror
                   <div class="row g-3">
                    <div class="col-12">                            
                     <label for="text" class="form-label">Password <span style="color: red">*</span></label></br>
                     <input type="password"  class="password form-control" name="password" id="original_passworduser" required> 
                   </div>
               
                   <span class="text-danger">
                     @error('password')
                     {{$message}}
                     @enderror
               <div class="row g-3">
                 <div class="col-12">                            
                   <label for="text" class="form-label">Mobile <span style="color: red">*</span></label></br>
                   <input type="text"  class="phone form-control" name="phone" id="phoneuser" placeholder="Mobile no *" maxlength="10" required> 
                 </div>
              
                 <span class="text-danger">
                   @error('phone')
                   {{$message}}
                   @enderror
                   <div class="row g-3">
                   <div class="col-12">                            
                   <label for="text" class="form-label">Address <span style="color: red">*</span></label></br>
                   <input type="text"  class="address form-control" name="address" id="addressuser"  required> 
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
            <button type="submit" id="submit"   class="btn btn-primary upadte_register">Update</button>
          </div>
         </form>
       </div>    
      </div> 
     </div> 
    </div>
   </div> 
  </div> 
 </div> 
<!-- Delete Modal HTML -->


<div id="deleteModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
      <form  action="{{ url('/register/destroy/')}}"  method="POST">
           @csrf
            <div class="modal-header">						
               <h4 class="modal-title"  id="deleteModalLabel">Delete Register</h4>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
                <div class="modal-body">
               <div class="form-group">					
                  <p>Are you sure you want to delete these Records?</p>
                  <input type="hidden" name="id" id="id">
                <p class="text-warning"><small>This action cannot be undone.</small></p>
            </div>
         </div>
            <div class="modal-footer">
               <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
               <input type="submit" class="btn btn-danger" value="Delete">
            </div>
         </form>
      </div>
   </div>
</div>
<!-- The Modal --> 
@endsection


@section('scripts')
<script type="text/javascript">
  $(document).ready(function (){
    $('.deletedepartmentBtn').click(function (e) {e.preventDefault();
       var id = $(this).val();
      $('#id').val(id);
      $('#deleteModal').modal('show');

         });
         // Register list data pagination 
       $('#listregister').DataTable();
     });

     $(document).on('click', '.editbtn', function(){
      var regi_id = $(this).val();
       $('#EditModal').modal('show');  
              $.ajaxSetup({
               headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                 });
                  $.ajax({
                  type: "GET",
                  url: "/register/edit/"+regi_id,
                     success: function (response){
                    // console.log("Hello world!");
                     $('#id').val(response.registerssusers.id);
                     $('#firstnameuser').val(response.registerssusers.firstname);
                     $('#lastnameuser').val(response.registerssusers.lastname);
                     $('#emailuser').val(response.registerssusers.email);
                     $('#original_passworduser').val(response.registerssusers.original_password);
                     $('#phoneuser').val(response.registerssusers.phone);
                     $('#addressuser').val(response.registerssusers.address);
              }
           });
           
        });
         // Listen for the modal close event
          $('#myModal').on('hidden.bs.modal', function () {
               // Clear the form fields
          $('#myForm')[0].reset();
      });
</script>
@endsection
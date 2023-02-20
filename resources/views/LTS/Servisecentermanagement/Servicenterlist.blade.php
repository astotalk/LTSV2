@extends('LTS.layouts.main')
@section('content-header')
         
         <!-- Start dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                       <div class="row column_title">
                          <div class="col-md-12">
                             <div class="page_title">
                                <h2>Service Center Management</h2>
                             </div>
                          </div>
                       </div>
                       <!-- row -->
                       <div class="row column1">
                          <div class="col-md-12">
                             <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head ">
                                   <div class="heading1 margin_0">
                                      <h2>Service Center List</h2>
                                  </div>
                                  
     
                              </div>
  <div class="container py-5">
   <div class="row">
    <div class="col-12">
      @if(session('status'))
      <div class="alert alert-success">{{session('status')}}</div>
      @endif
     <div id="success_message"></div>
      <div class="card mt-3">
        <div class="card-header">
              <!-- SEARCH BY TASK START -->
              <nav class="navbar navbar-light bg-light">
             
               <form   action="" class="form-inline col-md-9">
                  <a class="btn btn-danger text-white" href="{{ route('dashboard') }}" role="button">Back</a> &nbsp;&nbsp;
                 <input  type="search"  name="search" id="" class="form-control" placeholder="Search name"  value= "{{$search}}">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
  
           <div class="d-grid gap-2 d-md-flex">
               <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>Copy</span></a>
               <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>CSV</span></a>
               <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>Excel</span></a>
               <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>PDF</span></a>
               <a class="btn btn-outline-success" tabindex="0" aria-controls="empTable" href="#"><span>Print</span></a>
            </div>
  
        </div>
{{-- ////////////////////////Update data service/////////////////////////////////// --}}

<div class="modal fade" id="editEmployeeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editEmployeeModal" aria-hidden="true">
   <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <Form action="{{url('/Servicenterlist/update/')}}" method="POST"  id="editForm">
     @method('PUT')  
        @csrf 
        <input type="hidden" name="id" id="id">
       <div class="modal-header">
       <h5 class="modal-title" id="editEmployeeModal">Edit Service</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
         <div class="form-group">
            <div class="form-group">
            <label for="text" class="form-label">Service Center Name <span style="color: red">*</span></label>
            <input type="text" class="service_center_name form-control" name="service_center_name"  id="service_center_name1" placeholder="Service Center Name" required>
         </div>
         <div class="form-group">
            <label for="text" class="form-label">Engineer Name <span style="color: red">*</span></label>
            <input type="text" class="eng_name form-control" name="eng_name"  id="eng_name1"  placeholder="Engineer Name" required>
         </div>
         <div class="form-group">
            <label for="text" class="form-label">Phone no. <span style="color: red">*</span></label>
            <input type="text" class="phone form-control" name="phone"  id="phone1"  maxlength="10"  placeholder="Phone no." required>
         </div>
         <div class="form-group">
            <label for="text" class="form-label">Other Phone no. </label>
            <input type="text" class="other_number form-control" name="other_number" id="other_number1" maxlength="10"  placeholder="Other Phone no." required>
         </div>
         <div class="form-group"">
            <label for="text" class="form-label">Address<span style="color: red">*</span></label>
            <input type="text" class="address form-control" placeholder="Address" name="address"  id="address1" required>
         </div><br>                    
         <div class="col-12">
            <label for="formGroupExampleInput2">Pin-Code<span style="color: red">*</span></label>
               <table width="100%">
                  <tbody>
                     <tr>&nbsp;
                        <td align="center">
                       <input type="text" class="pin_code form-control" name="pin_code" id="pin_code" required>
                        </td>
                        <td>Block:*</td>
                        <td align="center">
                        <input type="text" class="block form-control"  name="block"  id="block">
                        </td><br>
                        <td>District:*</td>
                        <td align="center">
                        <input type="text" class="district form-control" name="district"    id="district">
                        </td><br>
                        <td>State:*</td>
                        <td align="center">
                        <input type="text" class="state form-control" name="state"  id="state">
                        </td>
                        <td align="center">
                        <button type="button" class="btn btn-primary" onclick="Pincode()" >Search</button>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div><br>

                  <div class="form-group">
                     <label for="text" class="form-label">Remark<span style="color: red">*</span></label>
                     <input type="text" class="remark form-control"  placeholder="Remark" name="remark" id="remark1"  required>
                  </div>

                  <div class="form-group">
                     <label for="text" class="form-label">GST No.</label>
                     <input type="text" class="form-control"   placeholder="GST"  name="gst" id="gst1" required>
                  </div>
               
                  <div class="form-group"> 
                     <label for="text" class="form-label">SF Approved BY<span style="color: red">*</span></label></br>
                     <select class="sf_approved_by form-select" name="sf_approved_by" id="sf_approved_by1" aria-label="Default select example">
                        <option value="Vijay Sharma">Vijay Sharma</option>
                        <option value="Himanshi">Himanshi</option>
                        <option value="Geetika Sachdeva">Geetika Sachdeva</option>
                        <option value="Mr. Khan">Mr. Khan</option>
                        <option value="Mr. Suresh Kumar">Mr. Suresh Kumar</option>
                     </select>
                  </div>

                  <div class="form-group"> 
                     <label for="text" class="form-label">User Name</label></br>
                     <input type="text" class="form-control"   placeholder="User Name" name="user_name" id="user_name1" required>
                  </div>

                  <div class="form-group"> 
                     <label for="password" class="form-label">Password</label></br>
                     <input type="password" class="form-control"   placeholder="Password"  name="password" id="password1"  required>
                  </div>
               </div>
   
       <div class="modal-footer">
       <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
       <input type="submit" class="btn btn-info" value="Update">
       </div>
    </form>
    </div>
   </div>
   </div>
</div>


{{-- ////////////////////////Update data service/////////////////////////////////// --}}

{{-- ////////////////////////Show data service/////////////////////////////////// --}}

<div class="modal fade" id="userShowModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userShowModal" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title" id="userShowModal">Show Service</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="card-body">
         <p><strong>SF:</strong> <span id="service_center_name"></span></p>
         <p><strong>Engg Name:</strong> <span id="eng_name"></span></p>
         <p><strong>Phone No:</strong> <span id="phone"></span></p>
         <p><strong>Other Number:</strong> <span id="other_number"></span></p>
         <p><strong>Address</strong> <span id="address"></span></p>
         <p><strong>Pin Code:</strong> <span id="pin_code"></span></p>
         <p><strong>City:</strong> <span id="district"></span></p>
         <p><strong>State:</strong> <span id="state"></span></p>
         <p><strong>Approved By:</strong> <span id="sf_approved_by"></span></p>
         <p><strong>User Name:</strong> <span id="user_name"></span></p>
         <p><strong>GST:</strong> <span id="gst"></span></p>
         <p><strong>Remarks:</strong> <span id="remark"></span></p>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      </div>
   </div>
</div>   



{{-- ////////////////////////Show data service/////////////////////////////////// --}}

           <!--table start-->
        <div class="card-body">
       
            <table class="table table-condensed table-bordered ">
                 <thead class="thead-dark ">
                       <tr>
                          
                          <th>S.No.</th>
                          <th>SF/Engg Name</th> 
                          <th>Phone No.</th>
                          <th>City</th> 
                          <th>State</th>
                          <th>Pin Code</th> 
                          <th>Approved By</th>
                          <th>Login_ID</th> 
                          <th>Password</th>
                          <th>Status</th> 
                          <th style="text-align: center;"> Action</th>
                       </tr>
                 </thead>
                 <tbody>
                  @if(!empty($AddServicenter))
                     @foreach($AddServicenter as $addservice)
                     <tr>
                        <td>{{$addservice->id}}</td>
                        <th>{{$addservice->service_center_name}},{{$addservice->eng_name}}</th>
                        <th>{{$addservice->phone}}</th>
                        <th>{{$addservice->district}}</th>
                        <th>{{$addservice->state}}</th>
                        <th>{{$addservice->pin_code}}</th>
                        <th>{{$addservice->sf_approved_by}}</th>
                        <th>{{$addservice->user_name}}</th>
                        <th>{{$addservice->password}}</th>
                        <th>
                           <?php if($addservice->status == '1'){ ?>
                              <label for=""  class="btn btn-success">Active</label>
                               <?php }else { ?>
                                 <label for=""  class="btn btn-warning">De-active</label>
                                 <?php  } ?>
                          </th>
                        <td>
                        <div class="dropdown">
                           <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                              <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <button type="button"  value="{{$addservice->id}}" class="btn btn-primary editbtn btn-sm">Update</button>&nbsp;
                                  <button type="button"   data-url="{{ url('/Servicenterlist/show', $addservice->id) }}" id="show-user"  class="btn btn-success showbtn btn-sm">View</button>                 
                                
                               </ul>
                             </div>
                           </td>
                        </tr>
                        @endforeach
                        @endif
                     </tbody>
                     {{ csrf_field() }}
                      </table>
        </div>
     </div>

     
              <div class="hint-text ms-2">Showing <b>5</b> out of <b>25</b> entries</div>
                 <ul class="pagination">
                    <li class="page-item "><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                 </ul>
              </div>
          <!--------Card close-->
          </div>
        </div>
     </div>
   <!--------Container close-->
   </div>
   </div>
   <!--row close-->
     </div>
     </div>
     
@endsection
@section('scripts')
<script>
   function Pincode(){
   var pin = document.getElementById('pin_code').value;
   if(pin != '') { 

  $.ajax({
   
           url:"/Servicenterlist/pincodesearch/"+pin,
           type: "GET",
           datatype: {pin},
           success:function(response){ 
            if(response != 'no'){
           
                 var getData = $.parseJSON(response);

                 document.getElementById('block').value = getData.block;
                 document.getElementById('district').value = getData.district;    
                 document.getElementById('state').value = getData.state;
                }else{
                  alert('wrong Pin code');
                }
            }
            });
         }else{       
         alert('Please Enter pin code');   
       }
      }
 $(document).ready(function(){ 
/* When click show user */
$('body').on('click', '#show-user', function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#userShowModal').modal('show');
              $('#id').text(data.id);
              $('#service_center_name').text(data.service_center_name);
              $('#eng_name').text(data.eng_name);
              $('#phone').text(data.phone);
              $('#other_number').text(data.other_number);
              $('#address').text(data.address);
              $('#pin_code').text(data.pin_code);
              $('#district').text(data.district);
              $('#state').text(data.state);
              $('#gst').text(data.gst);
              $('#sf_approved_by').text(data.sf_approved_by);
              $('#user_name').text(data.user_name);
              $('#remark').text(data.remark);    
          })
       });


$(document).on('click', '.editbtn', function(){
         var id = $(this).val();
          $('#editEmployeeModal').modal('show');
              
      $.ajaxSetup({
               headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
            });

            $.ajax({
            type: "GET",
            url: "/Servicenterlist/edit/"+id,
               success: function (response){
               //console.log("Hello world!");
               $('#id').val(response.AddServicenter.id);
               $('#service_center_name1').val(response.AddServicenter.service_center_name)   
               $('#eng_name1').val(response.AddServicenter.eng_name)    
               $('#phone1').val(response.AddServicenter.phone);
               $('#other_number1').val(response.AddServicenter.other_number);
               $('#address1').val(response.AddServicenter.address);
               $('#block1').val(response.AddServicenter.block)
               $('#district1').val(response.AddServicenter.district)   
               $('#state1').val(response.AddServicenter.state)   
               $('#pin_code1').val(response.AddServicenter.pin_code)
               $('#remark1').val(response.AddServicenter.remark)    
               $('#gst1').val(response.AddServicenter.gst);
               $('#sf_approved_by1').val(response.AddServicenter.sf_approved_by)
               $('#user_name1').val(response.AddServicenter.user_name) 
               $('#password1').val(response.AddServicenter.password)   
              
               }
            });
                  
         });     
      });
 </script>
  @endsection
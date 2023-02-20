@extends('LTS.layouts.main')
@section('content-header')

     <!-- Start dashboard inner -->
     <div class="midde_cont">
        <div class="container-fluid">
           <!-- row -->
           <div class="row column1">
              <div class="col-md-12">
                 <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head ">
                       <div class="heading1 margin_0">
                          <h2>Pending Complaint List</h2>
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
     <form method="get"  class="form-inline">
        <a class="btn btn-danger text-white" href="dashboard.php" role="button">Back</a> &nbsp;&nbsp;
         <input  type="search"  name="search" id="" maxlength="10" class="form-control" placeholder="Search "  value= "{{$search}}">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   </form> <br> 
   <!--Show PendingList -->
</div>
   <div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Show Pending List</h5>
            </div>
             <div class="card-body">
             <p><strong>Complaint Id:</strong> <span id="complaint_id"></span></p>
             <p><strong>Custom Name:</strong> <span id="custom_name"></span></p>
             <p><strong>Mobile no:</strong> <span id="custom_mobile"></span></p>
             <p><strong>Block:</strong> <span id="block"></span></p>
             <p><strong>District:</strong> <span id="district"></span></p>
             <p><strong>State:</strong> <span id="state"></span></p>
             <p><strong>Custom Address:</strong> <span id="custom_address"></span></p>
             <p><strong>Pin Code:</strong> <span id="pin_code"></span></p>
             <p><strong>Date:</strong> <span id="date"></span></p>
             <p><strong>Brand:</strong> <span id="type_brand"></span></p>
             <p><strong>Warrenty number:</strong> <span id="warrenty_number"></span></p>
             <p><strong>Product:</strong> <span id="product_type"></span></p>
             <p><strong>Visit:</strong> <span id="visit_type"></span></p>
             <p><strong>Company:</strong> <span id="company_detail"></span></p>
             <p><strong>Remark:</strong> <span id="remark"></span></p>
             <p><strong>Status:</strong> <span id="status"></span></p>
             </div>
            <hr>
             <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> <br>
   <!--Edit Pending call -->
   <div id="EditModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
         <Form    action="{{url('/pendingcalls/update/')}}" method="POST"  id="editForm">
            @method('PUT')  
                  @csrf      
            <input type="hidden" id="id" name="id"/>
      
               <div class="modal-header">						
                  <h4 class="modal-title"  id="EditModal">Complaint update</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
                              @csrf
                              <div class="col-12">
                              <label for="text" class="form-label">Complaint Id <span style="color: red">*</span></label>
                                 <input type="text" class="complaint_id form-control" name="complaint_id"  id="complaint_id1" required>
                           </div>
                           <div class="col-12">
                              <label for="text" class="form-label">Customer Name <span style="color: red">*</span></label>
                                 <input type="text" class="custom_name form-control" name="custom_name"  id="custom_name1" required>
                           </div>
                           <div class="col-12">
                              <label for="text" class="form-label">Customer Phone no. <span style="color: red">*</span></label>
                                 <input type="text" class="custom_mobile form-control"  maxlength="10" name="custom_mobile" id="custom_mobile1"   required>
                           </div>

                           <div class="col-12">
                              <label for="text" class="form-label">Other Phone no. <span style="color: red">*</span></label>
                                 <input type="text" class="other_mobile form-control"  maxlength="10"name="other_mobile" id="other_mobile1"  required>
                           </div>

                           <div class="col-12">
                              <label for="text" class="form-label">Customer Address<span style="color: red">*</span></label>
                                 <input type="text" class="custom_address form-control" name="custom_address" id="custom_address1" required>
                           </div>

                           <div class="col-12">
                           <label for="formGroupExampleInput2">Pin-Code<span style="color: red">*</span></label>
                              <table width="100%">
                                 <tbody>
                                    <tr>  &nbsp;
                                       <td align="center">
                                       <input type="text" class="pin_code form-control" name="pin_code" id="pin_code1" required>
                                       </td>
                                       <td>Block:*</td>
                                       <td align="center">
                                       <input type="text" class="block form-control"  name="block"  id="block1">
                                       </td><br>
                                       <td>District:*</td>
                                       <td align="center">
                                       <input type="text" class="district form-control" name="district"    id="district1">
                                       </td><br>
                                       <td>State:*</td>
                                       <td align="center">
                                       <input type="text" class="state form-control" name="state"  id="state1">
                                       </td>
                                    
                                       <td align="center">
                                       <button type="button" class="btn btn-primary" onclick="Pincode()" >Search</button> 
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div><br>
                           <div class="col-12"> 
                              <label for="country" class="form-label">Type of Complaint<span style="color: red">*</span></label></br>
                              <select name="type_complaint" class="type_complaint  form-control select_type" id="type_complaint1" >
                                          <option value="MaCustomer Complaintle">Customer Complaint</option>
                                          <option value="Stock Comlaint">Stock Comlaint</option>
                                          </select>
                           </div>

                           <div class="col-12">
                                 <label for="text" class="form-label">Date of Purchase<span style="color: red">*</span></label>
                                 <input type="date" class="date form-control" name="date" id="date1" placeholder="" required>
                           </div>

                           <div class="col-12"> 
                              <label for="country" class="form-label">Brand<span style="color: red">*</span></label></br>
                              <select name="type_brand" class="type_brand  form-control type_brand" id="type_brand1" >
                                 
                                 <option value="samsung">samsung</option>
                                 <option value="Tata Group">Tata Group</option>
                                 <option value="Colgate">Colgate</option>
                                 <option value="Lux">Lux</option>
                                 <option value="Amul">Amul</option>
                                 <option value="Life Boy">Life Boy</option>
                                 <option value="Horlics">Horlics</option>
                                 <option value="Pesodent">Pesodent</option>
                                 <option value="Britannia">Britannia</option>
                                 <option value="Close up">Close up</option>
                              </select>
                           </div>
                           <div class="col-12"> 
                              <label for="country" class="form-label">Modal No.<span style="color: red">*</span></label></br>
                              <input type="text" class="type_model form-control"  name="type_model" id="type_model1" required>
                           </div>

                           <div class="col-12"> 
                              <label for="country" class="form-label">Warrenty Status<span style="color: red">*</span></label></br>
                              <select name="warrenty_number" class="warrenty_number  form-control warrenty_number" id="warrenty_number1" >
                                 <option selected>select</option>
                                 <option value="Prduct In Warrenty">Prduct In Warrenty</option>
                                 <option value="Product Out of Warrenty">Product Out of Warrenty</option>
                              </select>
                           </div>


                           <div class="col-12"> 
                              <label for="country" class="form-label">Product Location<span style="color: red">*</span></label></br>
                              <select name="product_type" class="product_type  form-control product_type" id="product_type1" >
                                 <option selected>select</option>
                                 <option value="Customer End">Customer End</option>
                                 <option value="Store End">Store End</option>
                              </select>
                           </div>

                           <div class="col-12"> 
                              <label for="country" class="form-label">Visit Type<span style="color: red">*</span></label></br>
                              <select name="visit_type" class="visit_type  form-control visit_type" id="visit_type1" >
                                 <option selected>select</option>
                                 <option value="Service">Service</option>
                                 <option value="Installation">Installation</option>
                              </select>
                           </div>    
                           <div class="col-12">
                              <label for="text" class="form-label">Company Detail<span style="color: red">*</span></label>
                                 <input type="text" class="company_detail form-control"  name="company_detail" id="company_detail1"  required>
                           </div>
                           <div class="col-12">
                              <label for="text" class="form-label">Remark<span style="color: red">*</span></label>
                                 <input type="text" class="remark form-control"   name="remark" id="remark1"  required>
                           </div><br>
                        <div class="col-12">
                           <label for="">Status *</label>
                            <select name="status" class="status  form-control select_type" id="status1">
                              <option value="CLOSED">CLOSED</option>
                              <option value="ALLOTTED">ALLOTTED</option>
                            </select>
                           </div><br>
                           
                       <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" id="submit"   class="btn btn-primary add_empolyee">Update</button>
               </div>
            </form>
           </div> 
         </div>
      </div>
       

<!--table start-->
            <div class="card-body">
               <div style="overflow-x:auto;">
                   <table id="example" class="table table-condensed table-bordered ">
                        <thead class="thead-dark ">
                        <tr> 
                           <th><b>S.No.</b></th>
                           <th><b>Complaint Id</b></th> 
                           <th><b>Reg-Date</b></th>
                           <th><b>Escalation</b></th> 
                           <th><b>TAT</b></th>
                           <th><b>Status</b></th>
                           <th><b>Customer</b></th> 
                           <th><b>Phone No.</b></th>
                           <th><b>Block</b></th> 
                           <th><b>City</b></th>
                           <th><b>State</b></th>
                           <th><b>Product Type</b></th>
                           <th><b>Brand</b></th>
                           <th><b>Model</b></th>
                           <th style="text-align: center;"> <b>Action</b></th>
                        </tr>
                     </thead>
                     <tbody>
                     @if(!empty($addcomplaits))
                     @foreach($addcomplaits as $addcomp)
                     <tr>
                        <td>{{$addcomp->id}}</td>
                        <th>{{$addcomp->complaint_id}}</th>
                        <th>{{$addcomp->date}}</th>
                        <th>{{$addcomp->escalation}}</th>
                        <th>{{$addcomp->tat}}</th>
                        <th>{{$addcomp->status}}</th>
                        <th>{{$addcomp->custom_name}}</th>
                        <th>{{$addcomp->custom_mobile}}</th>
                        <th>{{$addcomp->block}}</th>
                        <th>{{$addcomp->district}}</th>
                        <th>{{$addcomp->state}}</th>
                        <th>{{$addcomp->product_type}}</th>
                        <th>{{$addcomp->type_brand}}</th>
                        <th>{{$addcomp->type_model}}</th>

                        <td>
                           
                        <div class="dropdown">
                           <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                              <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <button type="button"  value="{{$addcomp->id}}" class="btn btn-primary editbtn btn-sm">Edit</button>&nbsp;
                                  <button type="button"   data-url="{{ url('/pendingcalls/show', $addcomp->id) }}" id="show-user"   class="btn btn-danger  showbtn btn-sm">View</button>&nbsp;<br>                                                      
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
<script type="text/javascript">
    $('#example').DataTable ({
    dom:'Bfrtip',
    buttons: [
        'copy','pdf','print','excel'
    ]
    });
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })        
function Pincode(){
      var pin = document.getElementById('pin_code1').value;
      if(pin != '') { 
         $.ajax({
               url:"/pendingcalls/pincodesearch/"+pin,
                  type: "GET",
                   datatype: {pin},
                  success:function(response){ 
                     if(response != 'no'){
                           var getData = $.parseJSON(response);
                           document.getElementById('block1').value = getData.block;
                           document.getElementById('district1').value = getData.district;    
                           document.getElementById('state1').value = getData.state;
                           }else{
                              alert('wrong Pin code');
                           }
                        }
                     });
                     }else{       
                     alert('Please Enter pin code');   
                  }
                  }   
   
        $(document).on('click', '.editbtn', function(){
              
              var id = $(this).val();
           
               $('#EditModal').modal('show');
           
                        var id = $(this).val();
          
                        $('#EditModal').modal('show');
        $.ajax({
                type: "GET",
                 url: "/pendingcalls/edit/"+id,
                    success: function (response){
                //connsole.log(response);
                    $('#id').val(response.addcomplaits.id);
                    $('#complaint_id1').val(response.addcomplaits.complaint_id);
                    $('#custom_name1').val(response.addcomplaits.custom_name);
                    $('#custom_mobile1').val(response.addcomplaits.custom_mobile);
                    $('#other_mobile1').val(response.addcomplaits.other_mobile);
                    $('#custom_address1').val(response.addcomplaits.custom_address);
                    $('#pin_code1').val(response.addcomplaits.pin_code);
                    $('#block1').val(response.addcomplaits.block);
                    $('#district1').val(response.addcomplaits.district);
                    $('#state1').val(response.addcomplaits.state);  
                    $('#type_complaint1').val(response.addcomplaits.type_complaint);  
                    $('#date1').val(response.addcomplaits.date);    
                    $('#type_brand1').val(response.addcomplaits.type_brand);
                    $('#type_model1').val(response.addcomplaits.type_model);
                    $('#warrenty_number1').val(response.addcomplaits.warrenty_number);
                    $('#product_type1').val(response.addcomplaits.product_type);
                    $('#visit_type1').val(response.addcomplaits.visit_type);
                    $('#company_detail1').val(response.addcomplaits.company_detail);  
                    $('#type_complaint1').val(response.addcomplaits.type_complaint);  
                    $('#remark1').val(response.addcomplaits.remark);    
                    $('#status1').val(response.addcomplaits.status);           
                  }
               });


            $(document).ready(function () {
            
            /* When click show user */
            $('body').on('click', '#show-user', function () {
               var userURL = $(this).data('url');
               $.get(userURL, function (data) {
                  $('#userShowModal').modal('show');
                  $('#id').text(data.id);
                  $('#complaint_id').text(data.complaint_id);
                  $('#custom_name').text(data.custom_name);
                  $('#custom_mobile').text(data.custom_mobile);
                  $('#other_mobile').text(data.other_mobile);
                  $('#custom_address').text(data.custom_address);
                  $('#pin_code').text(data.pin_code);
                  $('#block').text(data.block);
                  $('#district').text(data.district);
                  $('#state').text(data.state);
                  $('#type_complaint').text(data.type_complaint);
                  $('#date').text(data.date);
                  $('#type_brand').text(data.type_brand);
                  $('#type_model').text(data.type_model);
                  $('#warrenty_number').text(data.warrenty_number);
                  $('#product_type').text(data.product_type);
                  $('#visit_type').text(data.visit_type);
                  $('#company_detail').text(data.company_detail);
                  $('#type_complaint').text(data.type_complaint);
                  $('#remark').text(data.remark);
                  $('#status').text(data.status);
               })
            }); 
         });
      });  
  </script>
@endsection